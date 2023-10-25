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
        Schema::create('detalle_factura_traficos', function (Blueprint $table) {
            $table->id();
            $table->string('partida');
            $table->string('noparte');
            $table->string('fabricante');
            $table->integer('cantidad');
            $table->string('umt');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descripcion');
            $table->string('series');
            $table->string('pais');
            $table->integer('precio');
            $table->integer('pesokg');
            $table->integer('pesolb');
            $table->string('fraccion');
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
        Schema::dropIfExists('detalle_factura_traficos');
    }
};
