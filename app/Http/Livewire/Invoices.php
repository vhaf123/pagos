<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Invoices extends Component
{

    public $prueba="Hola mundo";

    public function render()
    {
        $invoices = auth()->user()->invoices();
        return view('livewire.invoices', compact('invoices'));
    }

    public function downloadInvoice($invoiceId){
        
        auth()->user()->downloadInvoice($invoiceId, [
            'vendor' => 'Coders Free',
            'product' => 'Suscripción',
        ]);
    }
}
