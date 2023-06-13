<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('catalogo.proveedor.index', compact('proveedores'));
    }

    public function create()
    {
        return view('catalogo.proveedor.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string', 'max:150'],
            'numi' => ['numeric', 'nullable'],
            'nume' => ['numeric', 'nullable'],
            'municipio' => ['string', 'nullable'],
            'estado' => ['regex:/^[a-zA-Z]+$/u', 'nullable'],
            'pais' => ['nullable', 'regex:/^[a-zA-Z]+$/u'],
            'cp' => ['numeric', 'digits:5', 'nullable'],
            'telefono' => ['numeric', 'digits:10', 'nullable'],
            'email' => ['email', 'nullable', 'unique:proveedores,email'],
        ]);

        Proveedor::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'numi' => $request->numi,
            'nume' => $request->nume,
            'municipio' => $request->municipio,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cp' => $request->cp,
            'telefono' => $request->telefono,
            'email' => $request->email,


        ]);

        return redirect()->route('proveedor.index');
    }

    public function edit(Proveedor $proveedor)
    {
        return view('catalogo.proveedor.edit', compact('proveedor'));
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $this->validate($request, [
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string', 'max:150'],
            'numi' => ['numeric', 'nullable'],
            'nume' => ['numeric', 'nullable'],
            'municipio' => ['string', 'nullable'],
            'estado' => ['string', 'nullable'],
            'pais' => ['string', 'nullable'],
            'cp' => ['string', 'nullable'],
            'email' => ['email', 'nullable', 'unique:proveedores,email,' . $request->id],
        ]);

        $proveedor = Proveedor::find($request->id);
        $proveedor->nombre = $request->nombre;
        $proveedor->direccion = $request->direccion;
        $proveedor->numi = $request->numi;
        $proveedor->nume = $request->nume;
        $proveedor->municipio = $request->municipio;
        $proveedor->estado = $request->estado;
        $proveedor->pais = $request->pais;
        $proveedor->cp = $request->cp;
        $proveedor->telefono = $request->telefono;
        $proveedor->email = $request->email;

        $proveedor->save();

        return redirect()->route('proveedor.index');
    }

    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();
        return redirect()->route('proveedor.index')->with('delete', 'ok');
    }
}
