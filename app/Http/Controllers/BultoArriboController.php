<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bultoArribo;
use App\Models\Arribo;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Transportista;


class bultoArriboController extends Controller
{
    public function store(Request $request,bultoArribo $bultoArribo){

        $bultoArribo->id_arribo = $request->idarribo;
        $bultoArribo->marca = $request->marca;
        $bultoArribo->numero = $request->numero;
        $bultoArribo->cantidad = $request->cantidad;
        $bultoArribo->clase = $request->clase;
        $bultoArribo->save();

        return redirect()->route('arribo.edit',$bultoArribo->id_arribo);


    }

   public function update(Request $request){
    $this->validate($request, [
        'marca' => ['required'],
        'clase' => ['required'],
        'cantidad' => ['required'],
        'numero' => ['required'],
    ]);

    $bulto = bultoArribo::find($request->id);
    $bulto->marca = $request->marca;
    $bulto->numero = $request->numero;
    $bulto->cantidad = $request->cantidad;
    $bulto->clase = $request->clase;
    $bulto->save();

   return back();



   }
}
