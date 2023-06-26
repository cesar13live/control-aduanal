<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Transportista;
use App\Models\Trafico;
use Illuminate\Support\Facades\DB;



class TraficoController extends Controller
{
    public function index(){

        $traficos = DB::table('traficos')
            ->join('clientes', 'clientes.id', '=', 'traficos.cliente')
            ->join('proveedores', 'proveedores.id', '=', 'traficos.proveedor')
            ->select('traficos.*', 'clientes.nombre as cliente', 'proveedores.nombre as proveedor')
            ->get();

        return view('usa.trafico.index',compact('traficos'));
    }

    public function create(){

        $clientes = Cliente::all();
        $proveedores = Proveedor::all();
        $transportistas = Transportista::all();


        return view('usa.trafico.create',compact('clientes', 'proveedores', 'transportistas'));
    }

    public function store(Request $request){

        

        $this->validate($request, [
            'operacion' => ['required', 'string'],
            'linea' => ['required', 'string', 'max:150'],
            'fentrada' => ['required'],
            'fsalida' => ['required'],
            'guia' => ['required'],
            'cliente' => ['required'],
            'proveedor' => ['required'],
            'almacen' => ['required'],
            'ubicacion' => ['required'],
            'ckOpciones' => ['required'],
            'pesolb' => ['required'],
            'pesokg' => ['required'],
            'flete' => ['required'],
            'valor' => ['required'],
            'transporte' => ['required'],
            'descripcion' => ['required'],
            'comentarios' => ['required'],
            
        ]);

        Trafico::create([
            'operacion' => $request->operacion,
            'linea' => $request->linea,
            'fentrada' => $request->fentrada,
            'fsalida' => $request->fsalida,
            'guia' => $request->guia,
            'cliente' => $request->cliente,
            'proveedor' => $request->proveedor,
            'almacen' => $request->almacen,
            'ubicacion' => $request->ubicacion,
            'ckOpciones' => implode(',', $request->ckOpciones),
            'ckOpciones2' => implode(',', $request->ckOpciones2),
            'pesolb' => $request->pesolb,
            'pesokg' => $request->pesokg,
            'flete' => $request->flete,
            'valor' => $request->valor,
            'transporte' => $request->transporte,
            'descripcion' => $request->descripcion,
            'comentarios' => $request->comentarios,
            'usuario' => $request->usuario,
            'imagen' => $request->imagen,
        ]);

        return redirect()->route('trafico.index');
        
    }


    public function edit(Trafico $trafico){
        dd($trafico->id);
    }

    public function createfactura(Trafico $trafico){
        dd($trafico->id);
    }
}
