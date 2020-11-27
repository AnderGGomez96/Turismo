<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaAereaPaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_aerea_paquete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');//Relacion con paquetes
            $table->foreign('paquete_id')->references('id')->on('paquetes');//clave foranea
            $table->unsignedBigInteger('alternativa_aerea_id');//Relacion con alternativas
            $table->foreign('alternativa_aerea_id')->references('id')->on('alternativa_aereas');//clave foranea
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
        Schema::dropIfExists('alternativa_aerea_paquete');
    }
}
