<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;

class ShopRepository extends BaseRepository
{
    public function proget()
    {
        return  Product::with('category');
    }
    public function catget()
    {
        return Category::get();
    }
}
