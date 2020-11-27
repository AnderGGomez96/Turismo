<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaBusePaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_buse_paquete', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');//Relacion con paquetes
            $table->foreign('paquete_id')->references('id')->on('paquetes');//clave foranea
            $table->unsignedBigInteger('alternativa_buse_id');//relacion con alternativa de buses
            $table->foreign('alternativa_buse_id')->references('id')->on('alternativa_buses');//clave foranea
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
        Schema::dropIfExists('alternativa_buse_paquete');
    }
}
