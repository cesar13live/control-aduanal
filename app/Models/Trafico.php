<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trafico extends Model
{
    use HasFactory;

    protected $fillable= [
        'operacion',
        'linea',
        'fentrada',
        'fsalida',
        'guia',
        'cliente',
        'proveedor',
        'almacen',
        'ubicacion',
        'ckOpciones',
        'ckOpciones2',
        'pesolb',
        'pesokg',
        'flete',
        'valor',
        'transporte',
        'descripcion',
        'comentarios',
        'status',
        'usuario',
        'imagen',
    ];
}
