<?php

namespace App\Repositories;

use App\Models\Cart;
use App\Models\Product;

class DetailRepository
{
    public function cartlist()
    {
        return  Cart::with('product');
    }
    public function prolist()
    {
        return  Product::with('category');
    }
}
