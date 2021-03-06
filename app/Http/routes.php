<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('/', 'EscuelaController');//Ruta principal hacia modelo Escuela.

Route::resource('/escuela', 'EscuelaController');//Ruta General para modelo Escuela.

Route::resource('/tarifa', 'TarifaController');//Ruta General para modelo Tarifa

Route::resource('/alumno', 'AlumnoController');//Ruta General para modelo Alumno



