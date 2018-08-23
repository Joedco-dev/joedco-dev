<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['middleware'=>'auth'], function()
{


});
Route::name('student_create')->get('student/create','StudentController@create');

Route::name('student_add')->post('student/add','StudentController@add');

Route::name('student_delete')->delete('student/delete/{user}','StudentController@delete');

Route::name('student_index')->get('student/index','StudentController@index');

Route::name('student_edit')->get('student/edit','StudentController@edit');

Route::name('student_update')->put('student/update/{user}','StudentController@update');

Route::name('tutorias')->get('tutorias-ITA','MateriasController@index');

Route::name('materias_create')->get('materias/create','MateriasController@create');

Route::name('materia_add')->post('materia/add','MateriasController@add');

Route::name('materia_delete')->delete('materia/delete/{materia}','MateriasController@delete');

Route::name('student_index_electrica')->get('student/index/electrica','StudentController@electrica');

Route::name('student_index_electronica')->get('student/index/electronica','StudentController@electronica');

Route::name('student_index_TICs')->get('student/index/TICs','StudentController@tics');

Route::name('student_index_quimica')->get('student/index/quimica','StudentController@quimica');

Route::name('student_index_IGE')->get('student/index/ige','StudentController@ige');

Route::name('student_profile')->get('student/profile','StudentController@profile');

Route::name('request')->post('materia/request/{materia}','MateriasController@request');

Route::name('materia_request')->post('materia/confirm_request','MateriasController@materia_request');

Route::name('student_profileC')->get('student/profile/{carrera}','StudentController@profileC');


Route::name('/')->get('/','InicioController@index');

Route::name('index')->get('inicio','InicioController@index');

Route::name('servicios')->get('servicios','InicioController@servicios');

Route::name('contacto')->get('contacto','InicioController@contacto');

Route::name('tutoriales')->get('tutoriales','InicioController@tutoriales');

Route::get('/home', 'HomeController@index')->name('home');

Route::name('student_pdf')->get('student/pdf','StudentController@pdf');

Route::name('student_pdfIndividual')->get('student/pdfIndividual/{student}','StudentController@pdfIndividual');

Route::name('student_consulta')->get('student/consulta/{student}','StudentController@consulta');
