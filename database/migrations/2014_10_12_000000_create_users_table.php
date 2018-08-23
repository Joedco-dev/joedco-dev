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
            $table->increments('id');
            $table->string('nombre');
            $table->integer('noControl')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('carrera')->nullable();
            $table->string('semestre')->nullable();
            $table->string('tipo')->nullable();
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign('carrera')->references('id')->on('carreras');            
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
