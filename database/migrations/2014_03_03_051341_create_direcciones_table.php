<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->string('calle', 100);
            $table->string('num_exterior', 20);
            $table->string('num_interior', 20)->nullable();
            $table->string('entre_calle', 100);
            $table->string('y_calle', 100);
            $table->string('estado', 100);
            $table->string('municipio', 100);
            $table->string('colonia', 100);
            $table->string('cp', 5);
            $table->string('referencia', 100)->nullable();
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
        Schema::dropIfExists('direcciones');
    }
}
