<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Carrera;
use App\Materia;	

class InicioController extends Controller
{
    public function index()
    {
		$students = Student::all();	
    	return view('index')->with(['students' =>$students]);
    }
    public function servicios()
    {
		$students = Student::all();
    	return view('servicios')->with(['students' =>$students]);
    }
    public function tutorias()
    {
        $carreras = Carrera::all();
		$users = User::all();
    	return view('tutoriasITA')->with(['users' =>$users])
                                  ->with(['carreras' =>$carreras]);
    }
    public function contacto()
    {
		$students = Student::all();
    	return view('contacto')->with(['students' =>$students]);
    }
    public function tutoriales()
    {
        $students = Student::all(); 
        return view('tutoriales')->with(['students' =>$students]);
    }
}
