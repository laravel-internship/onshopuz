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

        $images=explode(',',$product->images);



        $products=Product::with('category')->where('category_id',$product->category_id)->paginate(9);
        // dd($products);
        return view('livewire.detail-comonent',['product'=>$product,'products'=>$products,'images'=>$images])->layout('layouts.base');
    }
}
