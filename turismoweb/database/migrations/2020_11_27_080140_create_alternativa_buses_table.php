<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaBusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bus_id');//Relacion con compañia de buses
            $table->foreign('bus_id')->references('id')->on('compania_buses');//clave foranea
            $table->unsignedInteger('num_asientos');
            $table->dateTime('fecha_hora');
            $table->string('lugar_origen');
            $table->string('lugar_destino');
            $table->unsignedInteger('costo');
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
        Schema::dropIfExists('alternativa_buses');
    }
}
