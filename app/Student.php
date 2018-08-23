<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'nombre', 'carrera', 'semestre', 'tipo', 'no_materias', 'noControl', 'password', 'materias'];
}
