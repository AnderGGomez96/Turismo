<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');//Relacion con paquetes
            $table->foreign('paquete_id')->references('id')->on('paquetes');//clave foranea
            $table->unsignedBigInteger('cliente_id');//Relacion con clientes
            $table->foreign('cliente_id')->references('id')->on('clientes');//clave foranea
            $table->boolean('estado')->default('0');
            $table->boolean('eliminar')->default('0');
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
        Schema::dropIfExists('reservas');
    }
}
