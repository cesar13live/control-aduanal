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
        Schema::create('bultos_arribos', function (Blueprint $table) {
            $table->id();
            $table->integer('id_arribo');
            $table->string('marca');
            $table->string('numero');
            $table->integer('cantidad');
            $table->string('clase');
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
        Schema::dropIfExists('bultos_arribos');
    }
};
