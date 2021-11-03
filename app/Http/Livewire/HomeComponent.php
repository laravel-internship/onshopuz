<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    // protected $service;

    // public function boot()
    // {
    //     $this->service = new HomeService;

    // }
    // public function addToCart($id)
    // {
    //     $product = Product::find($id);
    //     $this->service->cart($product, 1);
    // }
    public function render()
    {


            $product1=Product::with('category')->inRandomOrder()->paginate(3);
            $product2=Product::with('category')->inRandomOrder()->paginate(3);
            $product3=Product::with('category')->inRandomOrder()->paginate(3);
            $category=Category::with('product')->get();
            return view('livewire.home-component', ['product1' => $product1,'product2' => $product2,'product3' => $product3,'category'=>$category])->layout('layouts.base');

    }

    //katta ishlarimiz
    // 1. Order yani buyurtmalarni qilish
    // 2. Reting va review
    // 3. Adminka
}



