<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\User;
use App\Carrera;
use App\AlumMat;
use Illuminate\Support\Facades\Auth;
use DB;

class MateriasController extends Controller
{

    public function index()
	{
		$materia = Materia::all();
        //$materia = DB::table('materias')->join('AlumMat', 'AlumMat.idMateria', '=', 'materias.clave')->select('materias.id', 'materias.materia', 'materias.semestre', 'materias.cupo', 'materias.carrera', 'materias.tutor', 'materias.aula', 'materias.hora', 'materias.clave')->where('AlumMat.idAlumno', '!=', Auth::user()->noControl )->where('AlumMat.idMateria', '=', 'materias.clave')->get();
        return view('tutoriasITA')->with(['materias' =>$materia]);
	}
    public function request($materia)
    {
        $materia = DB::table('materias')->where('id',$materia)->get();
        return view('materias.request')->with(['materias' =>$materia]);
        //return redirect()->route('tutorias');
    }
    public function materia_request(Request $request)
    {
        $materia = Materia::all();
        $alummat = new AlumMat;
        $alummat->idAlumno = $request->noControl;
        $alummat->idMateria = $request->claveMat;
        $alummat->save();
        //return redirect ('tutorias');
        return view('tutoriasITA')->with(['materias' =>$materia]);
    }
	public function create()
    {
        $users = User::all();
    	$carreras = Carrera::all();
    	return view('materias.create')->with(['carreras' =>$carreras])
                                      ->with(['users' =>$users]);
    }

    public function add(Request $request)
    {
    	//dd($request);
    	$materia = new Materia;
    	$materia->materia = $request->get('idNombre');
    	$materia->carrera = $request->get('idCarrera');
    	$materia->semestre = $request->get('idSemestre')
	;	$materia->cupo = $request->get('idCupo');
		$materia->hora = $request->get('idHora');
    	$materia->tutor = $request->get('idTutor');
    	$materia->aula = $request->get('idAula');
    	$materia->dias = $request->get('idDias');
        $materia->clave = "{$request->get('idCarrera')}{$request->get('idHora')}{$request->get('idAula')}";
    	$materia->save();
    	return redirect()->route('tutorias');
    }

    public function delete(Materia $materia)
    {
    	$materia->delete();
    	return redirect()->route('tutorias');
    }
}
