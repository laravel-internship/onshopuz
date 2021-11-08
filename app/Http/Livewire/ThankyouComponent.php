<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThankyouComponent extends Component
{
    public $number;
    public function mount($order_id)
    {
        $this->number = $order_id;
    }
    public function render()
    {
        return view('livewire.thankyou-component')->layout('layouts.base');
    }
}
