<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvidenciaTraficoController extends Controller
{
    public function index(){
        return view('evidence.trafico.index');
    }

    public function show(){
        dd('images');
    }
}
