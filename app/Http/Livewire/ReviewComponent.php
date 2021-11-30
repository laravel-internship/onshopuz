<?php

namespace App\Http\Livewire;

use App\Models\OrderDetail;
use App\Models\Review;
use Livewire\Component;

class ReviewComponent extends Component
{
    public $order_detail_id;
    public $rating;
    public $comment;
    public function mount($order_detail_id)
    {
        $this->order_detail_id = $order_detail_id;
        $this->rating = 5;
    }

    public function store()
    {
        $yes=Review::where('user_id',auth()->user()->id)->first();

        if(!$yes){
          $review=  Review::create([
                'user_id' => auth()->user()->id,
                'rating' => $this->rating,
                'comment' => $this->comment,
                'order_detail_id' => $this->order_detail_id
            ]);
        }
        $order_detail= OrderDetail::find($this->order_detail_id);

        if($order_detail->r_status!=1){

            $order_detail->update([
                'r_status' => 1
            ]);
            return redirect()->route('home');
        }
        else{
            session()->flash('message', 'the second comment cannot be left');
            return redirect()->route('home');
        }
    }
    public function render()
    {
        $order_detail = OrderDetail::with('product')->find($this->order_detail_id);
        return view('livewire.review-component', ['order_detail' => $order_detail])->layout('layouts.base');
    }
}
