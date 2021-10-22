<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailComonent extends Component
{

    public function render()
    {

        $slug=request('slug');
        // dd($slug);
        $product=Product::with('category')->where('slug',$slug)->first();
        // dd($product);
        return view('livewire.detail-comonent',['product'=>$product])->layout('layouts.base');
    }
}
