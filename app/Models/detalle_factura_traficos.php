<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_factura_traficos extends Model
{
    use HasFactory;

    protected $fillable= [
        'partida',
        'noparte',
        'fabricante',
        'cantidad',
        'umt',
        'marca',
        'modelo',
        'descripcion',
        'series',
        'pais',
        'precio',
        'pesokg',
        'pesolb',
        'fraccion',
        
    ];
}
