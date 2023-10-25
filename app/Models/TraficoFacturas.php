<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraficoFacturas extends Model
{
    use HasFactory;
    protected $table = "trafico_facturas";

    protected $fillable =[
        
        'trafico',
        'factura',
        'pedido',
        'fecha',
        'valor',
        'moneda',
        'cambio',
    ];
}
