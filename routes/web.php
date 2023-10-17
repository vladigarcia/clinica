<?php

use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\CitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('inicio');

Route::resource( '/pacientes', PacienteController::class );
Route::resource( '/medicos', MedicosController::class );
Route::resource( '/horarios', HorariosController::class );
Route::resource( '/clinicas', ClinicasController::class );
Route::resource( '/citas', CitasController::class );
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
