<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug')->nullable();
            $table->text('resumen');
            $table->timestamps();
        });

        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug')->nullable();
            $table->text('resumen');
            $table->date('fecha_inicio')->nullable();
            $table->integer('plazo')->default(1);
            $table->date('fecha_fin')->nullable();
            $table->string('responsable');
            $table->enum('estado',['propuesta','ejecucion','entregado','cancelado']);
            $table->double('presupuesto');
            $table->string('url')->nullable();
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        }); 

        Schema::create('categoria_trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->integer('trabajo_id')->unsigned();
            $table->foreign('trabajo_id')->references('id')->on('trabajos')->onDelete('cascade');
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
        Schema::dropIfExists('categoria_trabajo');
        Schema::dropIfExists('trabajos');
        Schema::dropIfExists('categorias');
    }
}
