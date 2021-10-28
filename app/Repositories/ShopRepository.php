<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;

class ShopRepository
{
    public function query()
    {
        return  Product::with('category');
    }
    public function catequery()
    {
        return Category::get();
    }
}
