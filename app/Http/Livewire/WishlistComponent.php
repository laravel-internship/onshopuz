<?php

namespace App\Http\Livewire;

use App\Models\Wishlists;
use Livewire\Component;

class WishlistComponent extends Component
{
    public function wishdel($id)
    {
       $wish=Wishlists::find($id);
       $wish->delete();
    }
    public function render()
    {
        $wishlist=Wishlists::with('product','product.category')->where('user_id',auth()->user()->id)->get();
        return view('livewire.wishlist-component',['wishlist'=>$wishlist])->layout('layouts.base');
    }
}
