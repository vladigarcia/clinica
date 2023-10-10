@extends('layout/template')

@section('title', 'Página Principal | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <h1>Bienvenido a Clínica Juan Remedos</h1>
            <br>
            <h2>A cúal de nuestras plataformas desea ingresar</h2>
            <hr>
            <h3>Formulario Pacientes</h3>
            <a href="{{ url('/pacientes')}}" class="btn btn-primary btn-sm">Ingresar</a>
            <hr>
        </div>
    </main>
@endsection