<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\OrderDetails;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DetailComonent extends Component
{
    use WithPagination;

    public $slug;
    public $product;
    public $quantity;
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->product = Product::with('category')->where('slug',$this->slug)->first();
        $this->quantity = 1;
    }
    public function addToCart()
    {
        if(auth()->check() && $this->product){
            $cart = Cart::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->where('status', true)->first();
            if($cart){
                $cart->update([
                    'quantity' => $cart->quantity + $this->quantity,
                    'price' => $this->product->price * ($cart->quantity + $this->quantity)
                ]);
            } else{
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $this->product->id,
                    'quantity' => $this->quantity,
                    'price' => $this->product->price * $this->quantity
                ]);
            }

            session()->flash('message', 'Added successfully');
        } else{
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $images=explode(',',$this->product->images);
        $products=Product::with('category')->where('category_id',$this->product->category_id)->paginate(9);
        $related_pro = Product::where('category_id', $this->product->category_id)->limit(9)->paginate(3);
        return view('livewire.detail-comonent',['product'=>$this->product,'products'=>$products,'images'=>$images, 'related'=> $related_pro ])->layout('layouts.base');
    }


}
