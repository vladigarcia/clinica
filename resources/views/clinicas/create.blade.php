<!-- resources/views/clinicas/create.blade.php -->

@extends('layouts.template')

@section('title', 'Registrando Clinicas | Clinica José Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Registrando Clinica</h2>
            <br>

            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ url('clinicas') }}" method="post">

                @csrf

                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                    <div class="col-sm-5">
                        <input type="num" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                    </div>
                </div>

                <!-- Add similar sections for telefono and direccion -->

                <a href="{{ url('clinicas') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>

@endsection
