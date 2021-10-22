<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $product1=Product::with('category')->paginate(3);
        $product2=Product::with('category')->paginate(3);
        $product3=Product::with('category')->paginate(3);
        return view('livewire.home-component', ['product1' => $product1,'product2' => $product2,'product3' => $product3])->layout('layouts.base');
    }
}



