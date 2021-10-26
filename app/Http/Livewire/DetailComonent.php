<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DetailComonent extends Component
{
    use WithPagination;
    public function render()
    {

        $slug=request('slug');
        // dd($slug);
        $product=Product::with('category')->where('slug',$slug)->first();
        $images=explode(',',$product->images);
        $products=Product::with('category')->where('category_id',$product->category_id)->paginate(9);
        $related_pro = Product::where('category_id', $product->category_id)->limit(9)->paginate(3);
        return view('livewire.detail-comonent',['product'=>$product,'products'=>$products,'images'=>$images, 'related'=> $related_pro ])->layout('layouts.base');
    }
}
