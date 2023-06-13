<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bultoArribo extends Model
{
    use HasFactory;


    protected $table = "bultos_arribos";
    protected $fillable =[
        'id_arribo',
        'marca',
        'numero',
        'cantidad',
        'clase',
    ];
}
