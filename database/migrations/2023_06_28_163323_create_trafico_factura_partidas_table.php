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
        Schema::create('trafico_factura_partidas', function (Blueprint $table) {
            $table->id();
            $table->string('noparte');
            $table->string('fabricante');
            $table->string('cantidad');
            $table->string('umt');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descripcion');
            $table->string('series');
            $table->string('pais');
            $table->string('pesolb');
            $table->string('pesokg');
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
        Schema::dropIfExists('trafico_factura_partidas');
    }
};
