<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Arribo;
use App\Models\bultoArribo;
use App\Models\Transportista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArriboController extends Controller
{
    public function index()
    {

        $arribos = DB::table('arribos')
            ->join('clientes', 'clientes.id', '=', 'arribos.cliente')
            ->join('proveedores', 'proveedores.id', '=', 'arribos.proveedor')
            ->select('arribos.*', 'clientes.nombre as cliente', 'proveedores.nombre as proveedor')
            ->get();

        return view('usa.arribo.index', compact('arribos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $proveedores = Proveedor::all();
        $transportistas = Transportista::all();

        return view('usa.arribo.create', compact('clientes', 'proveedores', 'transportistas'));
    }

    public function store(Request $request, Arribo $arribo)
    {
        $this->validate($request, [
            'cliente' => ['required', 'string'],
            'proveedor' => ['required', 'string'],
            'fentrada' => ['required', 'before:fsalida', 'date'],
            'fsalida' => ['required', 'after:fentrada', 'date'],
            'linea' => ['required', 'string'],
            'flete' => ['required', 'string'],
            'valor' => ['numeric'],
            'guia' => ['string', 'nullable'],
            'almacen' => ['numeric', 'nullable'],
            'ubicacion' => ['string', 'nullable'],
            'pesolb' => ['numeric', 'nullable'],
            'pesokg' => ['numeric', 'nullable'],
            'ckOpciones' => ['nullable'],
            'descripcion' => ['nullable'],
            'comentarios' => ['nullable'],


        ]);

        Arribo::create([
            'cliente' => $request->cliente,
            'proveedor' => $request->proveedor,
            'fentrada' => $request->fentrada,
            'fsalida' => $request->fsalida,
            'linea' => $request->linea,
            'flete' => $request->flete,
            'valor' => $request->valor,
            'guia' => $request->guia,
            'almacen' => $request->almacen,
            'ubicacion' => $request->ubicacion,
            'pesolb' => $request->pesolb,
            'pesokg' => $request->pesokg,
            'ckOpciones' => implode(',', $request->ckOpciones),
            'descripcion' => $request->descripcion,
            'comentarios' => $request->comentarios,
            'imagen' => $request->imagen,
        ]);

        return redirect()->route('arribo.index');
    }

    

    public function update(Request $request, Arribo $arribo)
    {

        $this->validate($request, [
            'cliente' => ['required', 'string'],
            'proveedor' => ['required', 'string'],
            'fentrada' => ['required', 'before:fsalida', 'date'],
            'fsalida' => ['required', 'after:fentrada', 'date'],
            'linea' => ['required', 'string'],
            'flete' => ['required', 'string'],
            'valor' => ['numeric'],
            'guia' => ['string', 'nullable'],
            'almacen' => ['numeric', 'nullable'],
            'ubicacion' => ['string', 'nullable'],
            'pesolb' => ['numeric', 'nullable'],
            'pesokg' => ['numeric', 'nullable'],
            'ckOpciones' => ['nullable'],
            'descripcion' => ['nullable'],
            'comentarios' => ['nullable'],


        ]);

        $arribo = Arribo::find($request->id);
        $arribo->imagen = $request->imagen;
        $arribo->cliente = $request->cliente;
        $arribo->proveedor = $request->proveedor;
        $arribo->fentrada = $request->fentrada;
        $arribo->fsalida = $request->fsalida;
        $arribo->fsalida = $request->fsalida;
        $arribo->linea = $request->linea;
        $arribo->flete = $request->flete;
        $arribo->valor = $request->valor;
        $arribo->guia = $request->guia;
        $arribo->almacen = $request->almacen;
        $arribo->ubicacion = $request->ubicacion;
        $arribo->pesolb = $request->pesolb;
        $arribo->pesokg = $request->pesokg;

        if (isset($request->ckOpciones)) {
            $arribo->ckOpciones = implode(',', $request->ckOpciones);
        }else{
            $arribo->ckOpciones = '';
        }
        
        $arribo->descripcion = $request->descripcion;
        $arribo->comentarios = $request->comentarios;

        $arribo->save();

        return redirect()->route('arribo.index');

    }

    public function destroy(Arribo $arribo){
        $arribo->delete();
        return redirect()->route('arribo.index')->with('delete', 'ok');
    }
}
