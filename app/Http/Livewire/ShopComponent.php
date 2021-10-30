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
    public $search;

    public function boot()
    {
        $this->service = new ShopService;

    }
    public function mount($search = null)
    {
        $this->orderBy  = 'default';
        $this->paginate  = 6;
        $this->price = null;
        $this->search = request()->get('search', null);
    }
    public function render()
    {
        // dd( $this->search);
        $products = $this->service->getAll($this->category_id,$this->price,$this->orderBy,$this->paginate,$this->search);
        $categories = $this->service->cateser();
        return view('livewire.shop-component', ['products' => $products, 'categories' => $categories])->layout('layouts.base');
    }
}
