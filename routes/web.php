<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::resource( '/pacientes', PacienteController::class );
Route::resource( '/medicos', MedicosController::class );
Route::resource( '/horarios', HorariosController::class );
Route::resource( '/clinicas', ClinicasController::class );
Route::resource( '/citas', CitasController::class );
