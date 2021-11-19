<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartCountComponent extends Component
{
    public function render()
    {

            $count=Cart::where('user_id',auth()->user()->id)->get()->count();
            // $count=$cart->count();
            return view('livewire.cart-count-component',['count'=>$count])->layout('layouts.base');

    }
}
