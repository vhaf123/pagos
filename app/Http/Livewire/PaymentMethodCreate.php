<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethodCreate extends Component
{
    protected $listeners = ['paymentMethodCreate'];

    public function render()
    {

        $this->emit('restartStripe');
        

        return view('livewire.payment-method-create', [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }

    public function paymentMethodCreate($paymentMethod){

        if (auth()->user()->hasPaymentMethod()) {
            auth()->user()->addPaymentMethod($paymentMethod);
        }else{
            auth()->user()->updateDefaultPaymentMethod($paymentMethod);
        }

        $this->emit('render');
    }
}
