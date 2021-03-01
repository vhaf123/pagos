<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

use App\Services\StripeService;
use Exception;

class Coupons extends Component
{

    public $product, $cupon, $descuento, $error;

    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.coupons');
    }

    public function apply(){

        $stripeService = new StripeService;

        try {
            
            $reponse = $stripeService->code($this->cupon);

            $this->descuento = $reponse->coupon->percent_off;

            $this->emit('cupon', $this->cupon);

        } catch (Exception $e) {
            $this->error = true;
        }
    }
}
