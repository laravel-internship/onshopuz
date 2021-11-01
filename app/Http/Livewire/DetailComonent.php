<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\OrderDetails;
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
        return view('livewire.detail-comonent', ['product' => $this->product, 'products' => $products, 'images' => $images, 'related' => $related_pro])->layout('layouts.base');
    }
}
