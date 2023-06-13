<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'direccion',
        'numi',
        'nume',
        'municipio',
        'estado',
        'pais',
        'telefono',
        'cp',
        'rfc',
        'curp',

    ];
}
