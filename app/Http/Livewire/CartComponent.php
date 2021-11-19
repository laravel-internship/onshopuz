<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Services\CartService;
use Livewire\Component;

class CartComponent extends Component
{

    protected $service;

    public function boot()
    {
        $this->service = new CartService;

    }

    public function decrease($id)
    {
        $cart = Cart::find($id);
        if ($cart->quantity > 1) {
            $cart->update([
                'quantity' => $cart->quantity - 1,
                'price' => $cart->product->price * ($cart->quantity - 1)
            ]);
        }
    }
    public function plus($id)
    {
        // dd($id);
        $cart = Cart::find($id);
        $cart->update([
            'quantity' => $cart->quantity + 1,
            'price' => $cart->product->price * ($cart->quantity + 1)
        ]);
    }
    public function prodel($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
    }
    public function addToCart($id)
    {
        $product = Product::find($id);
        $this->service->addcart($product, 1);
    }

    public function render()
    {
        if (auth()->check()) {
            $product = Product::with('category')->inRandomOrder()->paginate(4);
            $cart = Cart::with('product')->where('user_id', auth()->user()->id)->where('status', true)->get();
            return view('livewire.cart-component', ['carts' => $cart, 'products' => $product])->layout('layouts.base');
        } else {
            return redirect()->route('login');
        }
    }

    public function storeOrder($carts)
    {
//        dd($carts);
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'all_price' => array_sum(array_column($carts, 'price'))*1.01,
            'delivery_price' => array_sum(array_column($carts, 'price'))*0.01
        ]);

        foreach($carts as $cart)
        {
            $order_detail = OrderDetail::create([
                'user_id' => $cart['user_id'],
                'product_id' => $cart['product_id'],
                'order_id' => $order['id'],
                'quantity' => $cart['quantity'],
                'price' => $cart['price']
            ]);
            Cart::find($cart['id'])->delete();
        }
        return redirect()->route('checkout', ['order_id' => $order->id]);

    }
    public function wishlist($id)
    {
       $this->service->list($id);
    }
}
