<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public $category_id;

    public function render()
    {
        // dd( (int) $this->category_id);
        $products = Product::with('category');
        if($this->category_id){
            $products = $products->where('category_id', (int) $this->category_id);
        }
        $products = $products->paginate(10);
        $categories = Category::get();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
