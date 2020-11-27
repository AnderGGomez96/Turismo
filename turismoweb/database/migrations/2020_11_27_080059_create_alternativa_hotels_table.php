<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_hotels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hotel_id');//Relacion con compañia hoteles
            $table->foreign('hotel_id')->references('id')->on('compania_hotels');//clave foranea
            $table->string('tipo_habitacion');
            $table->dateTime('fecha_llegada');
            $table->dateTime('fecha_salida');
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
        Schema::dropIfExists('alternativa_hotels');
    }
}
