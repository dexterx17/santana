<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruta');
            $table->string('nombre')->nullable();
            $table->string('autor')->nullable();
            $table->string('creditos')->nullable();
            $table->boolean('destacada')->default(false);
            $table->boolean('tresd')->default(false);
            $table->string('tabla_referencia');
            $table->integer('id_referencia');
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
        Schema::dropIfExists('imagenes');
    }
}
