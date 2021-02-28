<?php

namespace App\Http\Livewire\PaymentMethod;

use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['paymentMethodIndex' => 'render'];

    public function render()
    {
        $paymentMethods = auth()->user()->paymentMethods();
        return view('livewire.payment-method.index', compact('paymentMethods'));
    }
    
}
