<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->dateTime('fecha_inicio');
            $table->dateTime('fecha_fin');
            $table->unsignedInteger('costo');
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
        Schema::dropIfExists('paquetes');
    }
}
