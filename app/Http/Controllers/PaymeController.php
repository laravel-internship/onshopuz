<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\PaymeHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymeController extends Controller
{
    protected $payme;
    protected $amount;
    protected $order_id;
    public function __construct()
    {
        $this->payme = config('services.payme');
    }

    public function index($order_id)
    {
        session(['order_id' => $order_id]);
        return view('payme.payme');
    }

    public function reset()
    {
        $order = Order::find(session('order_id'));
        $order->update([
            'status' => 3
        ]);
        session()->flash('message', 'order cancellation');
        return redirect()->route('home');
    }
    public function cardsCreate(Request $request)
    {
        $params = $request->validate([
            'number' => 'required',
            'expire' => 'required',
        ]);
        $number = str_replace(' ', '', $params['number']);
        $number = str_replace('-', '', $number);
        $expire = str_replace('-', '', $params['expire']);
        $expire = str_replace('/', '', $expire);
        $expire = str_replace('.', '', $expire);

        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "cards.create",
            "params" => [
                "card" => ["number" => $number, "expire" => $expire],
                "save" => true
            ]

        ]);


        $result = json_decode($response->getBody(), true);

        if ($result['result']) {
            PaymeHistory::create([
                'token' => $result['result']['card']['token'],
                'number' => base64_encode($params['number']),
                'expire' => $params['expire']
            ]);
            session(['number' => $params['number']]);
            if ($res = $this->getVerifyCode($result['result']['card']['token'])) {

                return $this->verifyCodeView($result['result']['card']['token'], $res['phone']);
            }
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }

    public function getVerifyCode($token)
    {
        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "cards.get_verify_code",
            "params" => [
                "token" => $token
            ]
        ]);
        $result = json_decode($response->getBody(), true);

        if ($result['result']) {
            return $result['result'];
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }

    public function verifyCodeView($token, $phone)
    {
        session(['token' => $token]);

        return view('payme.code', ['phone' => $phone]);
    }

    public function cardsVerify(Request $request)
    {

        $params = $request->validate([
            'code' => 'required'
        ]);
        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "cards.verify",
            "params" => [
                "token" => session('token'),
                'code' => $params['code']
            ]
        ]);
        $result = json_decode($response->getBody(), true);
        if ($result['result']) {
            if ($result['result']['card']['verify']) {
                return redirect()->route('home', ['chek' => $this->reciptsCreate()]);
            } else {
                session()->flash('error', $result['error']['message']);
                return redirect()->route('payme');
            }
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }


    public function reciptsCreate()
    {
        $order = Order::find(session('order_id'));

        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'] . ':' . $this->payme['key'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "receipts.create",
            "params" => [
                "amount" => $order->all_price * 10000,
                'account' => [
                    "order_id" => $order->id
                ]
            ]
        ]);

        $result = json_decode($response->getBody(), true);
        if ($result['result']) {
            if (session('number')) {

                $history = PaymeHistory::where('number', base64_encode(session('number')))->orderBy('id', 'desc')->first();

                    $history->update([
                        'payment_id' => $result['result']['receipt']['_id'],
                        'status' => $result['result']['receipt']['state'],
                        'order_id'=>$order->id
                    ]);
                return $this->receiptsPay($result['result']['receipt']['_id'], $history->token);
            }
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }


    public function receiptsPay($payment_id, $token)
    {
        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'] . ':' . $this->payme['key'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "receipts.pay",
            "params" => [
                "token" => $token,
                "id" => $payment_id
            ]
        ]);
        $result = json_decode($response->getBody(), true);

        if ($result['result']) {
            if ($result['result']['receipt']['pay_time'] != 0) {
                if ($this->receiptsCheck($payment_id) == 4) {
                    $history = PaymeHistory::where('number', base64_encode(session('number')))->orderBy('id', 'desc')->first();

                    $history->update([
                        'status' => $result['result']['receipt']['state']
                    ]);

                    return $this->receiptsGet($payment_id);
                } else   if ($this->receiptsCheck($payment_id) >= 1 && $this->receiptsCheck($payment_id) <= 3) {
                    return session()->flash('message', 'wainting');
                } else {
                    return session()->flash('message', 'canceling');
                }
            }
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }




    public function receiptsCheck($payment_id)
    {
        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'] . ':' . $this->payme['key'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "receipts.check",
            "params" => [
                "id" => $payment_id
            ]
        ]);
        $result = json_decode($response->getBody(), true);

        if ($result['result']) {

            return $result['result']['state'];
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }

    public function receiptsGet($payment_id)
    {

        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'] . ':' . $this->payme['key'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "receipts.get",
            "params" => [
                "id" => $payment_id
            ]
        ]);
        $result = json_decode($response->getBody(), true);

        if ($result['result']) {
            // dd($result['result']);
            $history = PaymeHistory::where('number', base64_encode(session('number')))->orderBy('id', 'desc')->first();

            $history->update([
                'name_shop' => $result['result']['receipt']['merchant']['name'],
                'organization' => $result['result']['receipt']['merchant']['organization'],
                'pay_time' => \Carbon\Carbon::createFromTimestamp($result['result']['receipt']['pay_time'])->toDateTimeString(),
                'merchanId' => $result['result']['receipt']['merchant']['epos']['merchantId'],
                'terminalId' => $result['result']['receipt']['merchant']['epos']['terminalId'],
                'checkId' => $result['result']['receipt']['account'][0]['value'],
                'all_price' => $result['result']['receipt']['amount']

            ]);
            session()->flash('message', 'Successfuly payed');
            return $result['result'];
        } else {
            session()->flash('error', $result['error']['message']);
            return redirect()->route('payme');
        }
    }
}
