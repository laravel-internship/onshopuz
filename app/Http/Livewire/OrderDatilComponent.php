<?php

namespace App\Http\Livewire;

use App\Models\OrderDetail;
use Livewire\Component;

class OrderDatilComponent extends Component
{
    protected $order_id;
    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }
    public function render()
    {
        $ordet = OrderDetail::with('product')->find($this->order_id);
        // dd($ordet->product->image);
        return view('livewire.order-datil-component', ['ordet' => $ordet])->layout('layouts.base');
    }
}
