<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::with('category')->get();
        return view('admin.product',['products'=>$products]);
    }
}
