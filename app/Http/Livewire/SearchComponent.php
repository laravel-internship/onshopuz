<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{
    public $search;

    public function mount()
    {
        $this->search = null;
    }

    public function search()
    {
        if($this->search)
        {
            return redirect()->route('shop', ['search' => $this->search]);
        }
    }
    public function render()
    {
        return view('livewire.search-component');
    }
}
