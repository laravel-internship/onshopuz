<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Wishlists;
use App\Services\DetailService;
use Livewire\Component;
use Livewire\WithPagination;

class DetailComonent extends Component
{
    use WithPagination;

    public $slug;
    public $product;
    public $quantity;
    protected $service;


    public function boot()
    {
        $this->service = new DetailService;
    }
    public function mount($slug)
    {
        $this->slug = $slug;
        $this->product = $this->service->maounte($slug);
        $this->quantity = 1;
    }

    public function decrease()
    {
        if($this->quantity > 1)
            $this->quantity = $this->quantity-1;
    }
    public function plus()
    {
        $this->quantity = $this->quantity+1;
    }

    public function addToCart()
    {

        $this->service->addcart($this->product,$this->quantity);
        $this->emitTo('cart-count-component', 'count');
    }

    public function render()
    {
        $wishlist = null;
        $images = explode(',', $this->product->images);
        $products =$this->service->product($this->product);
        $related_pro = $this->service->related($this->product);
        $order_detail = OrderDetail::with('review', 'review.user')->where('product_id', $this->product->id)->where('r_status', 1)->get();
        if(auth()->check())
            $wishlist =  Wishlists::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
        return view('livewire.detail-comonent', ['product' => $this->product, 'products' => $products, 'images' => $images, 'related' => $related_pro, 'order_detail' => $order_detail, 'wishlist' => $wishlist])->layout('layouts.base');
    }
    public function wishlist($id)
    {
       $this->service->list($id);
       $this->emitTo('wishlist-count-component', 'count');

    }
}
