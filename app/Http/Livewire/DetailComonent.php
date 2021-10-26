<?php

namespace App\Http\Livewire;

use App\Models\OrderDetails;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DetailComonent extends Component
{
    use WithPagination;
    public function render()
    {

        $slug=request('slug');
        $product=Product::with('category')->where('slug',$slug)->first();
        // dd($product);
        $images=explode(',',$product->images);
        // $orderdet=OrderDetails::create([
        //     'product_id'=>$product->id,
        //    'price'=>$product->price
        // ]);
        // dd($orderdet->id);
        $products=Product::with('category')->where('category_id',$product->category_id)->paginate(9);
        $related_pro = Product::where('category_id', $product->category_id)->limit(9)->paginate(3);
        return view('livewire.detail-comonent',['product'=>$product,'products'=>$products,'images'=>$images, 'related'=> $related_pro ])->layout('layouts.base');
    }
}
