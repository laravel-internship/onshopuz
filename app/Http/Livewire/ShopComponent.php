<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShopComponent extends Component
{
    public $products;
    public function render()
    {
        $this->products=Product::with('category')->get();
        return view('livewire.shop-component')->layout('layouts.base');
    }
}
