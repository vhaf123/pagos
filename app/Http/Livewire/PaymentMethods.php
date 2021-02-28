<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethods extends Component
{
    public $prueba;

    protected $listeners = ['payment'];

    public function render()
    {
        return view('livewire.payment-methods');
    }

    public function payment(){
        $this->prueba = "hola mundo";
    }
}
