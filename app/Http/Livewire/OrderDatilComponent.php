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
        $ordet = OrderDetail::with('product')->where('order_id', $this->order_id)->get();
//         dd($ordet);
        return view('livewire.order-datil-component', ['order_det' => $ordet])->layout('layouts.base');
    }
}
