<?php

namespace App\Http\Controllers;

use App\Models\Trafico;
use Illuminate\Http\Request;

class EvidenciaTraficoController extends Controller
{
    public function index(){
        return view('evidence.trafico.index');
    }

    public function show(Trafico $trafico){

        $array = explode(',', $trafico->imagen);

        // dd($array);
        return view('evidence.trafico.index',compact('array'));
    }
}
