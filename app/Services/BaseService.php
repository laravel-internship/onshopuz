<?php

namespace App\Services;

use App\Models\Wishlists;
use App\Repositories\BaseRepository;

class BaseService
{

    protected $repo;

    public function list($id)
    { // home ,detail , cart ,
        if (auth()->check()) {
            $product = Wishlists::where('product_id', $id)->first();
            // dd($product);
            if ($product == null or !$product) {

                Wishlists::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $id
                ]);
                session()->flash('message', 'Added wishlist');
            } else {

                session()->flash('message', 'Duplicate information !!!');
            }
        } else {
            return redirect()->route('login');
        }

    }
    public function addcart($product, $quantity = 1)
    {
        if (auth()->check() && $product) {
            $cart = $this->repo->cartlist()->where('user_id', auth()->user()->id)->where('product_id', $product->id)->where('status', true)->first();
            if ($cart) {
                $cart =     $cart->update([
                    'quantity' => $cart->quantity + $quantity,
                    'price' => $product->price * ($cart->quantity + $quantity)
                ]);
            } else {
                $cart =  $this->repo->cartlist()->create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price * $quantity
                ]);
            }
            session()->flash('message', 'Added successfully');
            return $cart;
        } else {
            return redirect()->route('login');
        }
    }
}
