<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $products=Product::with('category')->inRandomOrder()->paginate(4);

        return view('livewire.footer-component',['products'=>$products]);
    }
}
