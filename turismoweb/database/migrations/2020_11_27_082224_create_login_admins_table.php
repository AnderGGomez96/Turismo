<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_admins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('admin_id');//Relacion con admins
            $table->foreign('admin_id')->references('id')->on('admins');//clave foranea
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
        Schema::dropIfExists('login_admins');
    }
}
