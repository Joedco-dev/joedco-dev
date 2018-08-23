<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumMatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AlumMat', function (Blueprint $table) {
            $table->integer('idAlumno');
            $table->string('idMateria');
            $table->foreign('idAlumno')->references('noControl')->on('users');
            $table->foreign('idMateria')->references('clave')->on('materias');
            $table->primary(array('idAlumno', 'idMateria'));
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
        Schema::dropIfExists('AlumMat');
    }
}
