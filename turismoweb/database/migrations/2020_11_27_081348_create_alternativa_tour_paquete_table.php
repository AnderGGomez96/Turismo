<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaTourPaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_tour_paquete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');//relacion con paquetes
            $table->foreign('paquete_id')->references('id')->on('paquetes');//clave foranea
            $table->unsignedBigInteger('alternativa_tour_id');//Relacion con alternativa de tours
            $table->foreign('alternativa_tour_id')->references('id')->on('alternativa_tours');//clave foranea
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
        Schema::dropIfExists('alternativa_tour_paquete');
    }
}
