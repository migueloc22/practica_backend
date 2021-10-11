<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre");
            $table->string("lat");
            $table->string("lng");
            $table->string("telefono");
            $table->string("correo");            
            $table->string("estado");
            $table->unsignedBigInteger("fk_idUser");
            $table->foreign('fk_idUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimentos');
    }
}
