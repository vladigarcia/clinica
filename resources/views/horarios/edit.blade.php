@extends('layouts/template')

@section('title', 'Editando Pacientes | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Editando horario</h2>
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

            <form action="{{ url( 'horario/'. $id_medico->id ) }}" method="post">
            
                @method("PUT")

                @csrf

                <div class="mb-3 row">
                    <label for="id_medico" class="col-sm-2 col-form-label">id_medico:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="id_medico" id="id_medico" value="{{ $horario->id_medico }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_hora" class="col-sm-2 col-form-label">fecha_hora:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="fecha_hora" id="fecha_hora" value="{{ $horarios->fecha_hora }}" required>
                    </div>
                </div>

                <a href="{{ url('pacientes')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>