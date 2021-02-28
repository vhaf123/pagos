<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethod extends Component
{
    public $prueba;
    /* protected $listeners = ['createPaymentMethod']; */
    protected $listeners = ['payment'];

    public function render()
    {
        /* $this->emit('postAdded'); */
        /* $this->emit('postAdded'); */
        $this->emit('paymentMethods2');

        return view('livewire.payment-method', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function createPaymentMethod($paymentMethod){

        if (auth()->user()->hasPaymentMethod()) {
            auth()->user()->addPaymentMethod($paymentMethod);
        }else{
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }

    }

    public function payment(){
        $this->prueba = "Hola mundo";
    }
}
