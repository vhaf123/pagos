<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class MethodPayment extends Component
{
    public $product;

    public $name;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {

        $this->emitSelf('postAdded', "5");

        return view('livewire.method-payment');
    }
}
