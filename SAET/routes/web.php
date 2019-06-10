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
        'DatosFamiliares'=>'DatoFamiliarController',
        'FormacionIntegral'=>'FormacionIntegralController',
        'Psicoanalisis'=>'PsicoanalisisController',
        'Expediente'=>'ExpedienteController',
    ]);

});