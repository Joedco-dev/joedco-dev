<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;
use App\User;
use App\Carrera;
use PDF;
use DB;

class StudentController extends Controller
{
    public function electrica()
    {
        $student = DB::table('users')->where('carrera', '=', '2')->get();
        return view('student.index')->with(['users' =>$student]);
    }
    public function tics()
    {
        $student = DB::table('users')->where('carrera', '=', '1')->get();
        return view('student.index')->with(['users' =>$student]);
    }
    public function ige()
    {
        $student = DB::table('users')->where('carrera', '=', '4')->get();
        return view('student.index')->with(['users' =>$student]);
    }
    public function electronica()
    {
        $student = DB::table('users')->where('carrera', '=', '3')->get();
        return view('student.index')->with(['users' =>$student]);
    }
    public function quimica()
    {
        $student = DB::table('users')->where('carrera', '=', '5')->get();
        return view('student.index')->with(['users' =>$student]);
    }
	public function index()
	{
        $student = DB::table('users')->join('carreras', 'carreras.id', '=' , 'users.carrera')
                                     ->select('users.id', 'users.nombre', 'users.noControl', 'users.email',  'carreras.carrera', 'users.semestre', 'users.tipo')
                                     ->get();
		//$student = User::all();
		return view('student.index')->with(['users' =>$student]);
	}
    public function profile()
    {
        $student = User::all();
        return view('student.profile')->with(['users' => $student]);
    }
    public function profileC($carrera)
    {
        $carreras = DB::table('carreras')->where('id', '=', $carrera)->get();
        //$student = User::all();
        return view('student.profile')->with(['carreras' => $carreras]);
    }
    public function create()
    {
        $carreras = Carrera::all();
    	return view('student.create')->with(['carreras' =>$carreras]);
    }
    public function add(Request $request)
    {
        $student = new User;
        $student->nombre = $request->nombre;
        $student->email = $request->email;
        $student->password = bcrypt($request->password);
        $student->noControl = $request->noControl;
        $student->carrera = $request->carrera;
        $student->semestre = $request->semestre;
        $student->tipo = $request->tipo;
        $student->save();
    	return redirect()->route('student_index');
    }
    public function delete(User $student)
    {
    	$student->delete();
    	return redirect()->route('student_index');
    }
    public function edit()
    {
        $carreras = Carrera::all();
        return view('student.edit')->with(['carreras' =>$carreras]);
    }
    public function update(User $user, Request $request)
    {
    	$user->nombre = $request->nombre;
    	$user->carrera = $request->carrera;
    	$user->semestre = $request->semestre;
  		$user->tipo = $request->tipo;
  		$user->email = $request->email;
  		$user->noControl = $request->noControl;
  		$user->password = bcrypt($request->password);
    	$user->email = $request->email;
    	$user->save();
        return redirect()->route('student_profile');
        //dd($request);
    }
    public function pdf()
    {
        $users = User::all();
        $pdf = PDF::loadView('student.vistaPDF', ['users' => $users]);
        return $pdf->download('studentprint.pdf');
    }
    public function pdfIndividual(User $student)
    {
        $users = User::find($student);
        $pdf = PDF::loadView('student.vistaPDF', ['users' => $users]);
        return $pdf->download('studentprint.pdf');
    }
    public function consulta(Request $request)
    {
        //$student = DB::table('users')->where['nombre', $request->get('nombre')];
        //return view('student.vistaPDF')->with(['student' =>$student']);
    }
}
