<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trafico;

class FacturaController extends Controller
{
    public function createfactura(Trafico $trafico){
        dd($trafico->id);
        // return view('usa.trafico.factura.create');
    }
}
