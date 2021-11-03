<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{

    public function decrease($id)
    {
        $cart = Cart::find($id);
        if ($cart->quantity > 1) {
            $cart->update([
                'quantity' => $cart->quantity - 1,
                'price' => $cart->product->price * ($cart->quantity - 1)
            ]);
        }
    }
    public function plus($id)
    {
        // dd($id);
        $cart = Cart::find($id);
        $cart->update([
            'quantity' => $cart->quantity + 1,
            'price' => $cart->product->price * ($cart->quantity + 1)
        ]);
    }
    public function prodel($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
    }

    public function render()
    {
        if (auth()->check()) {
            $product = Product::with('category')->inRandomOrder()->paginate(4);
            $cart = Cart::with('product')->where('user_id', auth()->user()->id)->where('status', true)->get();
            return view('livewire.cart-component', ['carts' => $cart, 'products' => $product])->layout('layouts.base');
        } else {
            return redirect()->route('login');
        }
    }
}
