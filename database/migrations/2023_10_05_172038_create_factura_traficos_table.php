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
        Schema::create('factura_traficos', function (Blueprint $table) {
            $table->id();
            $table->int('trafico');
            $table->int('factura');
            $table->int('noparte');
            $table->string('descripcion');
            $table->string('descripcion_trafico');
            $table->int('cantidad');
            $table->int('precio');
            $table->string('unidad_medida');
            $table->string('fraccion');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('pesokg');
            $table->string('pesolb');
            $table->string('unidad');
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
        Schema::dropIfExists('factura_traficos');
    }
};
