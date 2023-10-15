@extends('layout/template')

@section('title', 'Página Principal | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="text-center">Bienvenido a Clínica Juan Remedos</h1>
                            <hr>
                            <h2 class="text-center">A cuál de nuestras plataformas desea ingresar</h2>
                            <hr>
                            <h3>Formulario Pacientes</h3>
                            <a href="{{ url('/pacientes')}}" class="btn btn-primary btn-sm">Ingresar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Lista de espera</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Encabezado 1</th>
                                        <th>Encabezado 2</th>
                                        <th>Encabezado 3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dato 1</td>
                                        <td>Dato 2</td>
                                        <td>Dato 3</td>
                                    </tr>
                                    <!-- Agrega más filas según tus necesidades -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
        }
        .card-body {
            text-align: center;
        }
    </style>
@endsection
