<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        $products=Product::with('category')->get();
        return view('livewire.admin.product-component',['products'=>$products])->layout('layouts.base-admin');
    }
}
