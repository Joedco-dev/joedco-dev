<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('materia')->unique();
            $table->string('semestre');
            $table->integer('cupo');
            $table->string('hora');
            $table->integer('carrera');
            $table->string('dias');
            $table->string('aula');
            $table->string('tutor');
            $table->string('clave')->unique();
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
        Schema::dropIfExists('materias');
    }
}
