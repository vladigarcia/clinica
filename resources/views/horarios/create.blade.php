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

            <form action="{{ url('horarios') }}" method="post">

                @csrf
                <div class="mb-3 row">
                    <label for="medico_id" class="col-sm-2 col-form-label">Medico:</label>
                    <div class="col-sm-5">
                        <select name="medico_id" id="horarios" class="form-select">
                            <option value="">Seleccionar Médico</option>
                            @foreach ($medicos as $medico)
                                <option value="{{ $medico->id }}">{{ $medico->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="dia_trabajo" class="col-sm-2 col-form-label">Día de Trabajo:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="dia_trabajo" id="dia_trabajo" value="{{ old('dia_trabajo') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="hora_e" class="col-sm-2 col-form-label">Hora de Entrada:</label>
                    <div class="col-sm-5">
                        <input type="time" class="form-control" name="hora_e" id="hora_e" value="{{ old('hora_e') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="hora_s" class="col-sm-2 col-form-label">Hora de Salida:</label>
                    <div class="col-sm-5">
                        <input type="time" class="form-control" name="hora_s" id="hora_s" value="{{ old('hora_s') }}" required>
                    </div>
                </div>

                <a href="{{ url('horarios') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>

            </form>
        </div>
    </main>
@endsection
