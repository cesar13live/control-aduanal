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
        Schema::create('partes', function (Blueprint $table) {
            $table->id();
            $table->string('numparte');
            $table->integer('proveedor');
            $table->string('fabricante');
            $table->string('fraccion');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *nu
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partes');
    }
};
