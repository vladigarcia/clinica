@extends('layouts/template')

@section('title', 'Registrando Pacientes | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>{{ $msg }}</h2>

            <a href="{{ url('pacientes') }}" class="btn btn-secondary">Regresar</a>
            <br>
        </div>
    </main>