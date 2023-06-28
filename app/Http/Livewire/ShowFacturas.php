<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowFacturas extends Component
{
    public $factura = "777";
    public function render()
    {
        return view('livewire.show-facturas');
    }
}
