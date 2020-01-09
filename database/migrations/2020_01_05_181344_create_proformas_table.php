<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('descuento')->default(0);
            $table->double('valor');
            $table->date('fecha');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('proforma_item', function (Blueprint $table) {
            $table->increments('id');
            $table->text('item');
            $table->double('cantidad');
            $table->double('precio');
            $table->double('descuento')->default(0);
            
            $table->integer('proforma_id')->unsigned();
            $table->foreign('proforma_id')->references('id')->on('proformas')->onDelete('cascade');
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
        Schema::dropIfExists('proforma_item');
        Schema::dropIfExists('proformas');
    }
}
