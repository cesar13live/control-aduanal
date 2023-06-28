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
        Schema::create('trafico_facturas', function (Blueprint $table) {
            $table->id();
            $table->integer('trafico');
            $table->string('factura');
            $table->string('pedido');
            $table->date('fecha');
            $table->string('valor');
            $table->string('moneda');
            $table->string('cambio');
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
        Schema::dropIfExists('trafico_facturas');
    }
};
