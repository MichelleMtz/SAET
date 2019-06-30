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

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('Alumno')->group(function () {
    Route::resources([
        '/'=>'AlumnoController',
        'Inicio'=>'InicioController',
        'HabitosE'=>'HabitosController',
        'DatosGenerales'=>'DatosGeneralesController',
        'AntecedentesA'=>'AntecedentesController',
        'DatosFamiliares'=>'DatoFamiliarController',
        'FormacionIntegral'=>'FormacionIntegralController',
        'Psicoanalisis'=>'PsicoanalisisController',
        'Expediente'=>'ExpedienteController',
    ]);

});


Route::prefix('CoordinadorG')->group(function () {
    Route::resources([
        '/'=>'MenuCoordinadorController',
        'Formato'=>'FormatoController',
    ]);
});

Route::prefix('Departamento')->group(function () {
    Route::resources([
        '/'=>'MenuDepartamentoController',
        'Tutor'=>'BuscarTCController',
        'Alumno'=>'AlumnoDController',
        'Reporte'=>'ReporteController',
    ]);
});

Route::prefix('Jefe')->group(function () {
    Route::resources([
        '/'=>'MenuJefeController',
        'Asignar'=>'AsignarTutorController',
        'AsignaTC'=>'AsignaTCrController',
    ]);
});

Route::prefix('Tutor')->group(function () {
    Route::resources([
        '/'=>'TutorMenuController',
        'Tutorados'=>'TutoradosController',
    ]);
});


Route::prefix('Inicio')->group(function () {
    Route::resources([
        '/'=>'PrincipalController',
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
