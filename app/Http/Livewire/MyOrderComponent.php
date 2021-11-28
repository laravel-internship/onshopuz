<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class MyOrderComponent extends Component
{
    public function render()
    {
        if(auth()->user()->hasRole('user')){

            $order = Order::with('orderdetail')->where('user_id', auth()->user()->id)->orderBy('id','desc')->get();
        }
        else{
            $order = Order::with('orderdetail')->whereDate('created_at', \Carbon\Carbon::today())->orderBy('id','desc')->get();
        }
        $status = [0=>['Start'],1 => ['Process'],  2 => ['Finish']];
        // dd($status[1]);
        return view('livewire.my-order-component', ['order' => $order, 'status' => $status])->layout('layouts.base');
    }
}
