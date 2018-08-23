<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'materia', 'semestre', 'cupo', 'hora', 'carrera', 'dias', 'aula', 'tutor', 'clave'];
}
