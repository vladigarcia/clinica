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

            <form action="{{ url( 'citas' ) }}" method="post">

                @csrf

                <div class="mb-3 row">
                    <label for="id_medico" class="col-sm-2 col-form-label">id_medico:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="id_medico" id="id_medico" value="{{ old('id_medico') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="id_paciente" class="col-sm-2 col-form-label">id_paciente:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="id_paciente" id="id_paciente" value="{{ old('id_paciente') }}" required>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="fecha_a" class="col-sm-2 col-form-label">Fecha de Atención:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_a" id="fecha_a" value="{{ old('fecha_a') }}" required>
                    </div>
                </div>

                <a href="{{ url('citas')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>