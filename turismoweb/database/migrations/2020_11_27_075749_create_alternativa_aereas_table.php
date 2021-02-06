<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlternativaAereasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativa_aereas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aerolinea_id');//relacion con compañia aerolineas
            $table->foreign('aerolinea_id')->references('id')->on('compania_aereas');//clave foranea
            $table->char('num_vuelo',6);
            $table->unsignedInteger('num_asientos');
            $table->dateTime('fecha_vuelo');
            $table->char('origen',3);
            $table->char('destino',3);
            $table->char('escala',12);
            $table->string('tipo_pasaje');
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
        Schema::dropIfExists('alternativa_aereas');
    }
}
