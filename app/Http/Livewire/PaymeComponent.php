<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PaymeComponent extends Component
{
    public $number;
    public $date;
    protected $payme;

    public function boot()
    {
        $this->payme = config('services.payme');
    }


    public function render()
    {
        return view('livewire.payme-component')->layout('layouts.base');
    }

    public function cardsCreate()
    {
        $number = str_replace(' ', '', $this->number);
        $number = str_replace('-', '', $number);

        $number = substr(16, $number);
        $date = str_replace('-', '', $this->date);
        $date = str_replace('/', '', $date);
        $date = str_replace('.', '', $date);
        $date = substr(4, $date);

        $response = Http::withHeaders([
            'X-Auth' => $this->payme['id'],
            'Host' => 'checkout.test.paycom.uz',
            'Cache-Control' => 'no-cache'
        ])->post($this->payme['endpoint_url'], [
            "id" => 123,
            "method" => "cards.create",
            "params" => [
                "card" => ["number" => $this->number, "expire" => $this->date],
                "save" => true
            ]

        ]);


        $result = json_decode($response->getBody(), true);

        dd($response);
    }
}
