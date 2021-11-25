<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $yourname;
    public $youremail;
    public $yourphone;
    public $yourmessage;
    public function text()
    {

       $contact= Contact::create([
            'name'=>$this->yourname,
            'email'=>$this->youremail,
            'phone'=>$this->yourphone,
            'message'=>$this->yourmessage
        ]);
        if($contact){

            session()->flash('message', $this->yourname .' Reported');
            return redirect()->route('home');
        }else{
            session()->flash('message', 'No Reported ');
            return redirect()->route('home');
        }
    }
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}


