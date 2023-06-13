<?php

namespace App\Http\Controllers;

use App\Models\Transportista;
use Illuminate\Http\Request;

class TransportistaController extends Controller
{
    public function index(){
        
        $tps = Transportista::all();
        return view('catalogo.transportista.index',compact('tps'));
    }

    public function create(){
        return view ('catalogo.transportista.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string', 'max:150'],
            'numi' => ['numeric', 'nullable'],
            'nume' => ['numeric', 'nullable'],
            'ciudad' => ['required', 'string'],
            'estado' => ['required', 'string'],
            'pais' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'cp' => ['numeric', 'digits:5', 'nullable'],
            'telefono' => ['numeric', 'digits:10', 'nullable'],
            'email' => ['required','email'],


        ]);


        Transportista::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'numi' => $request->numi,
            'nume' => $request->nume,
            'ciudad' => $request->ciudad,
            'estado' => $request->estado,
            'pais' => $request->pais,
            'cp' => $request->cp,
            'telefono' => $request->telefono,
            'email' => $request->email,

        ]);

        return redirect()->route('tps.index');
    }

    public function edit(Transportista $transportista){
        return view('catalogo.transportista.edit', compact('transportista'));
    }

    public function update(Request $request, Transportista $transportista){

        $this->validate($request, [
            'nombre' => ['required', 'string'],
            'direccion' => ['required', 'string', 'max:150'],
            'numi' => ['numeric', 'nullable'],
            'nume' => ['numeric', 'nullable'],
            'ciudad' => ['required', 'string'],
            'estado' => ['required', 'string'],
            'pais' => ['required', 'regex:/^[a-zA-Z]+$/u'],
            'cp' => ['numeric', 'digits:5', 'nullable'],
            'telefono' => ['numeric', 'digits:10', 'nullable'],
            'email' => ['required','email'],
        ]);

        $transportista = Transportista::find($request->id);
        $transportista->nombre = $request->nombre;
        $transportista->direccion = $request->direccion;
        $transportista->numi = $request->numi;
        $transportista->nume = $request->nume;
        $transportista->ciudad = $request->ciudad;
        $transportista->estado = $request->estado;
        $transportista->pais = $request->pais;
        $transportista->cp = $request->cp;
        $transportista->telefono = $request->telefono;
        $transportista->email = $request->email;
        $transportista->save();

        return redirect()->route('tps.index');

    }

    public function destroy(Transportista $transportista)
    {
        $transportista->delete();
        return redirect()->route('tps.index')->with('delete', 'ok');
    }
}
