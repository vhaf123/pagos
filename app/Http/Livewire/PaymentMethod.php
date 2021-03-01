<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentMethod extends Component
{

    public $paymentMethodId;

    public function mount($paymentMethodId){
        $this->paymentMethodId = $paymentMethodId;
    }   

    public function render()
    {
        $paymentMethod = auth()->user()->findPaymentMethod($this->paymentMethodId);
        return view('livewire.payment-method', compact('paymentMethod'));
    }
}
