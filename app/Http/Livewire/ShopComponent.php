<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Services\ShopService;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public $category_id;
    public $orderBy;
    public $paginate;
    public $price;
    protected $service;
    public function __construct(ShopService $service)
    {
        $this->service = $service;
    }

    public function mount()
    {
        $this->orderBy  = 'default';
        $this->paginate  = 6;
        $this->price = null;
    }
    public function render()
    {
        // dd( $this->price);
        $products = $this->service->get();
        $products = $this->service->filter($products, $this->category_id,$this->price,$this->orderBy);
        $products = $products->paginate($this->paginate);
        // dd($products->lastPage());
        $categories = $this->service->cateser();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
