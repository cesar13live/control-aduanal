<?php

namespace App\Http\Livewire;

use App\Models\Arribo;
use App\Models\bultoArribo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Transportista;



class ShowBultosArribos extends Component
{

    public function edit(Arribo $arribo)
    {

        $opciones = explode(',', $arribo->ckOpciones);

        $clientes = Cliente::all();
        $proveedores = Proveedor::all();
        $transportistas = Transportista::all();
        $bultos = bultoArribo::all();
        
        $idarribo = $arribo->id;
        $getBulto = DB::table('bultos_arribos')->where('id_arribo',$idarribo)->get();

        return view('usa.arribo.edit', compact('arribo', 'clientes', 'proveedores', 'transportistas', 'opciones','getBulto','bultos','idarribo'));
    }

    public function render()

    {
        return view('livewire.show-bultos-arribos');
    }
}
