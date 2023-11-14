@extends('layouts/template')

@section('title', 'Registrando Citas | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Agendando Cita</h2>
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
                    <label for="paciente_id" class="col-sm-2 col-form-label">Paciente:</label>
                    <div class="col-sm-5">
                        <select name="paciente_id" id="horarios" class="form-select">
                            <option value="">Seleccionar Paciente</option>
                            @foreach ($pacientes as $paciente)
                                <option value="{{ $paciente->id }}">{{ $paciente->nombre }}</option>
                            @endforeach
                        </select>
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