<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\OrderDetail;
use App\Models\Product;
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
    public function addToCart()
    {

        $this->service->addcart($this->product,$this->quantity);
    }

    public function render()
    {
        $images = explode(',', $this->product->images);
        $products =$this->service->product($this->product);
        $related_pro = $this->service->related($this->product);
        $order_detail = OrderDetail::with('review', 'review.user')->where('product_id', $this->product->id)->where('r_status', 1)->get();
//        dd($order_detail);
        return view('livewire.detail-comonent', ['product' => $this->product, 'products' => $products, 'images' => $images, 'related' => $related_pro, 'order_detail' => $order_detail])->layout('layouts.base');
    }
}
