<?php

namespace App\Services;

use App\Repositories\BaseRepository;

class BaseService
{



    public function addcart($product, $quantity = 1,$cartlist)
    {
        if (auth()->check() && $product) {
            $cart = $cartlist->cartlist()->where('user_id', auth()->user()->id)->where('product_id', $product->id)->where('status', true)->first();
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