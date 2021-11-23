<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\CstoreRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::orderby('id','desc')->paginate(\request()->get('perPage', 10));;
        return view('admin.category', ['category' => $category]);
    }
    public function create()
    {
        return view('admin.cform',);
    }
    public function store(CstoreRequest $request)
    {
        // dd($request);
        $params = $request->validated();
        $params['slug']=strtolower(str_replace(' ','-',$params['name']));
         $params=Category::create($params);

        return redirect()->route('category');

    }
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($product);
        return view('admin.cform', ['category' => $category]);
    }

    public function update(CstoreRequest $request,$id)
    {
        $params = $request->validated();
        $params['slug']=strtolower(str_replace(' ','-',$params['name']));


        $product=Category::find($id);
        $product->update($params);
        return redirect()->route('category');
    }

    public function delete($id)
    {
        $params=Category::find($id);
        $params->delete();

        return redirect()->route('category');
    }
}
