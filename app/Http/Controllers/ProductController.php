<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $service;

    public function __construct(HomeService $service)
    {
        $this->service =$service;
    }
    public function HomeComponent(Request $request)
    {
        // $products = $this->service->get($request);
        // return view('HomeComponent', ['Products' = $products]); 

    }
    
}
