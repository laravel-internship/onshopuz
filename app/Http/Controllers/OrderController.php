<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::orderby('id','desc')->paginate(\request()->get('perPage', 5));;
        $status = [0=>['Start'],1 => ['Process'], 2 => ['Finish'],3 => ['Rejected']];
        return view('admin.order', ['order' => $order,'status'=>$status]);
    }


    public function edit($id)
    {
        $order = Order::find($id);
        // dd($order);
        return view('admin.orform', ['order' => $order]);
    }

    public function update(OrderRequest $request,$id)
    {
        $params = $request->validated();
        $params['date']=date(Carbon::now()->timezone('Asia/Ashgabat'));
//strtotime();
        $product=Order::find($id);
        $product->update($params);
        return redirect()->route('order');
    }

    public function delete($id)
    {
        $params=Order::find($id);
        $params->delete();

        return redirect()->route('order');
    }
}
