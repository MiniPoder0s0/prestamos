<?php

use App\Http\Controllers\ReporteController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/consultar/alumnos', [AlumnoController::class, 'consultar']);
Route::post('/consultar/alumno', [AlumnoController::class, 'buscar']);
Route::get('/reporte/consultar', [ReporteController::class, 'consultar']);
Route::get('/reporte/eliminar/{id}', [ReporteController::class, 'eliminar']);
Route::get('/reporte/editar/{id}', [ReporteController::class, 'editar']);

//Reporte individual
Route::get('/reporte/individual', [ReporteController::class, 'registrarIndividual']);
Route::post('/reporte/individual', [ReporteController::class, 'individualBuscar']);
Route::post('/reporte/individual/guardar', [ReporteController::class, 'individualGuardar']);
Route::post('/reporte/individual/actualizar/{id}', [ReporteController::class, 'actualizar']);
Route::get('/blank', function () {
    return view('blankpage');
});