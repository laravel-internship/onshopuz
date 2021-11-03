<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;

class ShopRepository
{
    public function queries()
    {
        return  Product::with('category');
    }
    public function catequery()
    {
        return Category::get();
    }
}
