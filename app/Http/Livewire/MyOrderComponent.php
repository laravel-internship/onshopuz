<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class MyOrderComponent extends Component
{
    public function render()
    {
        $order = Order::with('orderdetail')->where('user_id', auth()->user()->id)->get();
        $status = [0=>['start'],1 => ['waiting'], 2 => ['shipping'], 3 => ['canceled'], 4 => ['finish']];
        // dd($status[1]);
        return view('livewire.my-order-component', ['order' => $order, 'status' => $status])->layout('layouts.base');
    }
}
