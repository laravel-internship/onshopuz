<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class BaseRepository
{
    public function proget()
    {
        return  Product::with('category');
    }
    public function catget()
    {
        return Category::get();
    }
    public function cartlist()
    {
        return  Cart::with('product');
    }
    public function query()
    {
        return $this->model->query();
    }
}
