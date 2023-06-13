<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;


return new class extends Migration
{

    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traficos', function (Blueprint $table) {
            $table->id();
            $table->string('operacion');
            $table->integer('linea');
            $table->date('fentrada');
            $table->date('fsalida');
            $table->string('guia');
            $table->integer('cliente');
            $table->integer('proveedor');
            $table->string('almacen')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('ckOpciones')->nullable();
            $table->string('ckOpciones2')->nullable();
            $table->string('pesolb')->nullable();
            $table->string('pesokg')->nullable();
            $table->string('flete')->nullable();
            $table->string('valor')->nullable();
            $table->string('transporte')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('status')->default('trafico');
            $table->bigInteger('pedimento')->nullable();
            $table->string('usuario');
            $table->string('usuariomod')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traficos');
    }
};
