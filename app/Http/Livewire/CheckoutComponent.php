<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;

class CheckoutComponent extends Component
{
    public $order;
    public $first_name;
    public $last_name;
    public $phone;
    public $address;
    public $payment_type;
    public function mount($order_id)
    {
        $this->order = Order::find($order_id);
    }
    //status ->  1 => waiting, 2 => shipping, 3 => closed, 4 => canceled
    public function update()
    {
        $this->order->update([
            'first_name' => $this->first_name,
            'phone' => $this->phone,
            'last_name' => $this->last_name,
            'address' => $this->address,
            'payment_type' => $this->payment_type,
            'status' => 1
        ]);
        if($this->payment_type=='naqd'){

            return redirect()->route('thankyou', ['order_id' => str_pad($this->order->id, 5, 0, STR_PAD_LEFT)]);
        }else{
            return redirect()->route('payme');
        }
    }
    public function cancel()
    {
        session()->flash('message', 'order cancellation');
        return redirect()->route('home');
    }
    public function render()
    {
        $order = Order::find(auth()->user()->id);
        // dd($order->all_price);
        return view('livewire.checkout-component',['order'=>$order])->layout('layouts.base');
    }
}
