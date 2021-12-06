<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    use ImageTrait;
    public function index()
    {
    $month = [  1=>['January'],	2=>['February'], 3=>['March'], 4=>['April'], 5=>['May'], 6=>['June'], 7=>['July'],
                8=>['August'], 9=>['September'], 10=>['October'], 11=>['November'],12 =>['December']
             ];
        $status = [0=>['Start'],1 => ['  Process'], 2 => ['Finish'],3 => ['Rejected']];
        $product = Product::count('id');
        $user = User::whereHas('roles', function($q){$q->where('name', 'user'); })->count('id');
        $ordercount = Order::count('id');
        $order = Order::sum('all_price');
        $orderMonth = Order::select(
            Order::raw("month(created_at) as Month"),
            Order::raw("count(id) as count"),
            Order::raw("sum(all_price) as sum")
        )
            ->groupBy(Order::raw("month(created_at)"))->get();;
        return view('admin.home', ['product' => $product, 'order' => $order, 'user' => $user, 'ordercount' => $ordercount, 'orderMonth' => $orderMonth,'month'=>$month]);
    }
    public function product()
    {
        $products = Product::with('category')->orderby('id', 'desc')->paginate(\request()->get('perPage', 5));
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
        $params = $this->image($params, $request, 'assets/products/');
        $params['slug'] = strtolower(str_replace(' ', '-', $params['name']));
        $params['data'] = implode(',', [
            "model" => $params['model'],
            "color" => $params['color'],
        ]);
        // dd($params);
        $params = Product::create($params);

        return redirect()->route('product');
    }
    public function edit($id)
    {
        $product = Product::with('category')->find($id);
        $category = Category::get();
        // dd($product);
        return view('admin.form', ['category' => $category, 'product' => $product]);
    }

    public function update(StoreRequest $request, $id)
    {
        $params = $request->validated();
        $params = $this->image($params, $request, 'assets/products/');
        $params['slug'] = strtolower(str_replace(' ', '-', $params['name']));
        $params['data'] = implode(',', [
            "model" => $params['model'],
            "color" => $params['color'],
        ]);

        $product = Product::find($id);
        $product->update($params);
        return redirect()->route('product');
    }
    public function delete($id)
    {
        $params = Product::find($id);
        $params->delete();

        return redirect()->route('product');
    }
}
