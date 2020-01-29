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
            $table->string('ruta_265x265')->nullable(); // section clientes
            $table->string('ruta_360x240')->nullable(); // preview gallery admin
            $table->string('ruta_530x530')->nullable(); // section clientes
            $table->string('ruta_650x1070')->nullable(); // section trabajos
            $table->string('ruta_1024x640')->nullable(); // slide gallery admin
            $table->string('ruta_1300x2140')->nullable(); //section trabajos
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
