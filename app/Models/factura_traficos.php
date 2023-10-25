<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura_traficos extends Model
{
    use HasFactory;

    protected $fillable =[
       'trafico',
       'factura',
       'noparte',
       'descripcion',
       'descripcion_trafico',
       'cantidad',
       'precio',
       'unidad_medida',
       'fraccion',
       'marca',
       'modelo',
       'serie',
       'pesokg',
       'pesolb',
       'unidad',
    ];
}
