<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carreras';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'carrera'];
}
