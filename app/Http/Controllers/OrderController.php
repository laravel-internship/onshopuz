<?php

namespace App\Http\Controllers;

use App\Http\Requests\Order\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::orderby('id','desc')->get();

        return view('admin.order', ['order' => $order]);
    }
    public function create()
    {
        return view('admin.orform');
    }
    public function store(OrderRequest $request)
    {
        // dd($request);
        $params = $request->validated();
        // dd($params);
         $params=Order::create($params);

        return redirect()->route('order');

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
