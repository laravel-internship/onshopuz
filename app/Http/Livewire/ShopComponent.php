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
    public $orderBy;
    public $paginate;
    public $price;

    public function mount()
    {
        $this->orderBy  = 'default';
        $this->paginate  = 6;
        $this->price = null;
    }
    public function render()
    {
        // dd( $this->price);
        $products = Product::with('category');
        if($this->category_id){
            $products = $products->where('category_id', (int) $this->category_id);
        }
        if($this->price){
            $products = $products->where('price', $this->price);
        }
        if($this->orderBy == 'asc'){
            $products = $products->orderBy('price', 'asc');
        } else if($this->orderBy == 'desc'){
            $products = $products->orderBy('price', 'desc');
        } else if($this->orderBy == 'newless'){
            $products = $products->orderBy('created_at', 'desc');
        } else if($this->orderBy == 'popularity'){
            // $products = $products->orderBy('price', 'asc');
        }
        $products = $products->paginate($this->paginate);
        // dd($products->lastPage());
        $categories = Category::get();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
