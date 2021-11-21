<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageTrait;

class ProductController extends Controller
{
    use ImageTrait;
    public function index()
    {
        // $products = Product::with('category')->orderby('id','desc')->get();
        return view('admin.home');
    }
    public function product()
    {
        $products = Product::with('category')->orderby('id','desc')->get();
        return view('admin.product', ['products' => $products]);
    }
    public function create()
    {
        $category = Category::get();
        return view('admin.form', ['category' => $category]);
    }
    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params=$this->image($params, $request, 'assets/products/');
        $params['slug']=strtolower(str_replace(' ','-',$params['name']));
        $params['data']= implode(',',[
            "model"=>$params['model'],
            "color"=>$params['color'],
        ]);
        // dd($params);
         $params=Product::create($params);

        return redirect()->route('product');

    }
    public function edit($id)
    {
        $product=Product::with('category')->find($id);
        $category = Category::get();
        // dd($product);
        return view('admin.form', ['category' => $category,'product'=>$product]);
    }

    public function update(StoreRequest $request,$id)
    {
        $params = $request->validated();
        $params=$this->image($params, $request, 'assets/products/');
        $params['slug']=strtolower(str_replace(' ','-',$params['name']));
        $params['data']= implode(',',[
            "model"=>$params['model'],
            "color"=>$params['color'],
        ]);

        $product=Product::find($id);
        $product->update($params);
        return redirect()->route('product');
    }
    public function delete($id)
    {
        $params=Product::find($id);
        $params->delete();

        return redirect()->route('product');
    }
}
