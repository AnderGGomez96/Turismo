<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id');//Relacion con clientes
            $table->foreign('cliente_id')->references('id')->on('clientes');//clave foranea
            $table->string('nombre_usuario');
            $table->string('passwd', 256);
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
        Schema::dropIfExists('login_clientes');
    }
}
