<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaPaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_paquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reserva_id');//Relacion con reservas
            $table->foreign('reserva_id')->references('id')->on('reservas');//clave foranea
            $table->unsignedInteger('cuotas');
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
        Schema::dropIfExists('venta_paquetes');
    }
}
