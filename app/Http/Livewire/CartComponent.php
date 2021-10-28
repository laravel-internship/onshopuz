<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{

    public function decrease($cart)
    {
        if($cart->quantity > 1){
            $cart->update([
                'quantity' => $cart->quantity - 1,
                'price' => $cart->product->price * ($cart->quantity - 1)
            ]);
        }
    }
    public function plus($cart)
    {
        if($cart->quantity > 1){
            $cart->update([
                'quantity' => $cart->quantity + 1,
                'price' => $cart->product->price * ($cart->quantity + 1)
            ]);
        }
    }

    public function render()
    {
        if(auth()->check()){
            $cart = Cart::where('user_id', auth()->user()->id)->where('status', true)->get();
            return view('livewire.cart-component',['cart'=>$cart] )->layout('layouts.base');
        } else{
            return redirect()->route('login');
        }
    }
}
