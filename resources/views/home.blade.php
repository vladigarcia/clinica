@extends('layout/template')

@section('title', 'Página Principal | Clínica  paso al infierno')

@section('contenido')
    <main>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center" style="color: #3498db;">Bienvenido a Clínica paso al infierno</h1>
                            <hr>
                            <h2 class="text-center" style="color: #555;">A cuál de nuestras plataformas desea ingresar</h2>
                            <hr>
                            <hr>
                            <h2 class="text-center" style="color: #555;">No se preocupe,en la Clínica Paso al Infierno, el miedo es solo el comienzo</h2>
                            <hr>
                            <h3 style="color: #333;">Formulario Pacientes</h3>
                            <a href="{{ url('/pacientes') }}" class="btn btn-primary btn-sm">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</style>
<style>
    .card {
        border: 1px solid #3498db;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin: 10px;
        background-color: #f9f9f9;
        padding: 20px;
    }

    .card-body {
        text-align: center;
    }

    .btn-primary {
        background-color: #3498db;
        border-color: #3498db;
        color: #fff;
    }
</style>

@endsection
