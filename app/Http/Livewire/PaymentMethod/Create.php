<?php

namespace App\Http\Livewire\PaymentMethod;

use Livewire\Component;

class Create extends Component
{
    protected $listeners = ['paymentMethodCreate'];

    public function render()
    {

        $this->emit('restartStripe');
        $this->emit('paymentMethodIndex');

        return view('livewire.payment-method.create', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod){

        if (auth()->user()->hasPaymentMethod()) {
            auth()->user()->addPaymentMethod($paymentMethod);
        }else{
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }

    }
}
