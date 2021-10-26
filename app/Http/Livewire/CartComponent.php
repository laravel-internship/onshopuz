<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class CartComponent extends Component
{
    public function render()
    {
        $slug = request('slug');
        $product = Product::with('category')->where('slug', $slug)->first();
        return view('livewire.cart-component',['product'=>$product] )->layout('layouts.base');
    }
}
