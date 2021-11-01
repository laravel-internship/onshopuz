<?php

namespace App\Services;

use App\Repositories\DetailRepository;

class DetailService
{
    protected $repo;
    public function __construct()
    {
        $this->repo = new DetailRepository;
    }

    public function maounte($slug)
    {
        return $this->repo->prolist()->where('slug', $slug)->first();
    }
    public function addcart($product, $quantity)
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

    public function product($product)
    {
        return  $this->repo->prolist()->where('category_id', $product->category_id)->paginate(9);
    }
    public function related($product)
    {
        return $this->repo->prolist()->where('category_id', $product->category_id)->limit(9)->paginate(3);
    }
}
