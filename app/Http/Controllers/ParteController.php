<?php

namespace App\Http\Controllers;

use App\Models\Parte;
use Illuminate\Http\Request;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;


class ParteController extends Controller
{
    public function index()
    {

        $partes = DB::table('partes')
            ->join('proveedores', 'proveedores.id', '=', 'partes.proveedor')
            ->select('partes.*', 'proveedores.nombre as proveedor')
            ->get();

        return view('catalogo.parte.index', compact('partes'));
    }

    public function create()
    {
        $proveedores = Proveedor::all();
        return view('catalogo.parte.create', compact('proveedores'));
    }

    public function store(Request $request, Parte $parte){

        $this->validate($request,[
            'numparte' => ['required', 'string'],
            'proveedor' => ['required', 'numeric'],
            'fabricante' => ['required', 'string'],
            'fraccion' => ['required', 'string'],
            'fecha' => ['required', 'date'],
            'descripcion' => ['required', 'string'],
            'observacion' => ['required', 'string'],

        ]);

        $parte->numparte = $request->numparte;
        $parte->proveedor = $request->proveedor;
        $parte->fabricante = $request->fabricante;
        $parte->fraccion = $request->fraccion;
        $parte->fecha = $request->fecha;
        $parte->descripcion = $request->descripcion;
        $parte->observacion = $request->observacion;
        $parte->save();

        return redirect()->route('parte.index');
    }

    public function edit(Parte $parte) {

        $proveedores = Proveedor::all();

         return view('catalogo.parte.edit', compact('parte','proveedores'));
    }

    public function update(Request $request,Parte $parte){

        $this->validate($request,[
            'numparte' => ['required', 'string'],
            'proveedor' => ['required', 'numeric'],
            'fabricante' => ['required', 'string'],
            'fraccion' => ['required', 'string'],
            'fecha' => ['required', 'date'],
            'descripcion' => ['required', 'string'],
            'observacion' => ['required', 'string'],

        ]);

        
        $parte = Parte::find($request->id);
        $parte->numparte = $request->numparte;
        $parte->proveedor = $request->proveedor;
        $parte->fabricante = $request->fabricante;
        $parte->fraccion = $request->fraccion;
        $parte->fecha = $request->fecha;
        $parte->descripcion = $request->descripcion;
        $parte->observacion = $request->observacion;
        $parte->save();

        return redirect()->route('parte.index');

    }

    public function destroy(Parte $parte)
    {
        $parte->delete();
        return redirect()->route('parte.index')->with('delete', 'ok');
    }
}
