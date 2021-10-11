<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string("apellido");
            $table->string('email')->unique();
            $table->string("documento")->unique();
            $table->string("celular");
            $table->string("genero");
            $table->string("dir");
            $table->string("foto");
            $table->date('fecha_nac')->nullable();
            $table->unsignedBigInteger('fk_id_ciudad');
            $table->foreign('fk_id_ciudad')->references('id')->on('ciudads')->nullable();
            $table->unsignedBigInteger('fk_id_tpDoc');
            $table->foreign('fk_id_tpDoc')->references('id')->on('tipo_documentos')->nullable();
            $table->unsignedBigInteger('fk_id_tpUser');
            $table->foreign('fk_id_tpUser')->references('id')->on('tipo_users')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
