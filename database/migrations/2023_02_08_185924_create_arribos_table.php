<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arribos', function (Blueprint $table) {
            $table->id();
            $table->integer('cliente');
            $table->integer('proveedor');
            $table->date('fentrada');
            $table->date('fsalida');
            $table->integer('linea');
            $table->integer('flete');
            $table->float('valor');
            $table->string('guia');
            $table->string('almacen');
            $table->string('ubicacion');
            $table->integer('pesolb')->nullable();
            $table->integer('pesokg')->nullable();
            $table->string('ckOpciones')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('comentarios')->nullable();
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
        Schema::dropIfExists('arribos');
    }
};
