<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.product-component')->layout('layouts.base-admin');
    }
}
