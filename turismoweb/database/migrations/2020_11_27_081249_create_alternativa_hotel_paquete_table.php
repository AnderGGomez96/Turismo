<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaHotelPaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_hotel_paquete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');//Relacion con paquetes
            $table->foreign('paquete_id')->references('id')->on('paquetes');//clave foranea
            $table->unsignedBigInteger('alternativa_hotel_id');//Relacion con alternativa de hoteles
            $table->foreign('alternativa_hotel_id')->references('id')->on('alternativa_hotels');//clave foranea
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
        Schema::dropIfExists('alternativa_hotel_paquete');
    }
}
