<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class MethodPayment extends Component
{

    protected $listeners = ['cupon', 'pay'];

    public $product, $cupon, $name;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {

        $this->emitSelf('postAdded', "5");

        return view('livewire.method-payment');
    }

    public function cupon($cupon){
        $this->cupon = $cupon;
    }

    public function pay($paymentMethodId){

        auth()->user()->charge(
            $this->product->price*100, $paymentMethodId
        );

        /* if($this->cupon){

        }else{

        } */
    }
}
