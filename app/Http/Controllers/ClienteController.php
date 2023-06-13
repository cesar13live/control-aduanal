<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();
        return view('catalogo.cliente.index',compact('clientes'));
    }

    public function create()
    {
        return view('catalogo.cliente.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string', 'max:150'],
            'numi' => ['numeric', 'nullable'],
            'nume' => ['numeric', 'nullable'],
            'municipio' => ['required', 'string'],
            'estado' => ['required', 'string'],
            'pais' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'cp' => ['numeric', 'digits:5', 'nullable'],
            'telefono' => ['numeric', 'digits:10', 'nullable'],
            'rfc' => ['required', 'size:13'],
            'curp' => ['size:18', 'nullable'],
        ]);

        Cliente::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'numi' => $request->numi,
            'nume' => $request->nume,
            'municipio' => $request->municipio,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cp' => $request->cp,
            'telefono' => $request->telefono,
            'rfc' => $request->rfc,
            'curp' => $request->curp,

        ]);

        return redirect()->route('cliente.index');
    }

    public function edit(Cliente $cliente){
        return view('catalogo.cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {

        $cliente = Cliente::find($request->id);
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->numi = $request->numi;
        $cliente->nume = $request->nume;
        $cliente->municipio = $request->municipio;
        $cliente->estado = $request->estado;
        $cliente->pais = $request->pais;
        $cliente->telefono = $request->telefono;
        $cliente->cp = $request->cp;
        $cliente->rfc = $request->rfc;
        $cliente->curp = $request->curp;
        $cliente->save();

        return redirect()->route('cliente.index');

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('delete', 'ok');
    }
}
