@extends('layouts/template')

@section('title', 'Registrando Pacientes | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Registrando Paciente</h2>
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

            <form action="{{ url( 'pacientes' ) }}" method="post">

                @csrf

                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="apellido" class="col-sm-2 col-form-label">Apellido:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="apellido" id="apellido" value="{{ old('apellido') }}" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+"title="Solo se permiten letras y espacios" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="direccion" class="col-sm-2 col-form-label">Dirección:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                    <div class="col-sm-5">
                        <input type="num" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="edad" class="col-sm-2 col-form-label">Edad:</label>
                    <div class="col-sm-5">
                        <input type="int" class="form-control" name="edad" id="edad" value="{{ old('edad') }}" required>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="genero" class="col-sm-2 col-form-label">Genero:</label>
                    <div class="col-sm-5">
                        <select name="genero" id="genero" class="form-select" required>
                            <option value="">Seleccionar Genero</option>
                            @foreach ($generos as $genero)
                                <option value="{{ $genero->id }}">{{ $genero->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha de Nacimiento:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_a" class="col-sm-2 col-form-label">Fecha de Atención:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_a" id="fecha_a" value="{{ old('fecha_a') }}" required>
                    </div>
                </div>

                <a href="{{ url('pacientes')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>