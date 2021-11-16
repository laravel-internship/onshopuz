<?php

namespace App\Http\Livewire;

use App\Models\Wishlists;
use Livewire\Component;

class WishlistCountComponent extends Component
{
    protected $listeners = ['count' => '$refresh'];
    public function render()
    {
        $count=Wishlists::where('user_id',auth()->user()->id)->get()->count();
        return view('livewire.wishlist-count-component',['count'=>$count])->layout('layouts.base');
    }
}
