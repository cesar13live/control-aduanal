<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arribo extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'proveedor',
        'fentrada',
        'fsalida',
        'linea',
        'flete',
        'valor',
        'guia',
        'almacen',
        'ubicacion',
        'pesolb',
        'pesokg',
        'ckOpciones',
        'descripcion',
        'comentarios',
        'imagen'
    ];
}
