@extends('layouts/template')

@section('title', 'Registrando Horarios | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Registrando Horarios</h2>
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

            <form action="{{ url( 'horarios' ) }}" method="post">

                @csrf
                <div class="mb-3 row">
                    <label for="medico_id" class="col-sm-2 col-form-label">Id Medico:</label>
                    <div class="col-sm-5">
                    <select name="clinica_id" id="clinica" class="form-select">
                        <option value="">Seleccionar Médico</option>
                        @foreach ($clinicas as $clinica)
                            <option value="{{ $clinica->id }}">{{ $clinica->nombre }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="fecha_hora" class="col-sm-2 col-form-label">Fecha y Hora de Trabajo</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="fecha_hora" id="fecha_hora" value="{{ old('fecha_hora') }}" required>
                    </div>
                </div>

                <a href="{{ url('horarios')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>