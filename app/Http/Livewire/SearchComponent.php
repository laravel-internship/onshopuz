<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Request;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;

    public function search()
    {
        return redirect()->route('shop', ['search' => $this->search]);
    }
    public function render()
    {
        return view('livewire.search-component');
    }
}
