@extends('layouts/template')

@section('title', 'Editando Medicos | Clinica Jóse Remedos')

@section('contenido')

    <main>
        <div class="container py-4">

            <h2>Editando Medico</h2>
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

            <form action="{{ url( 'medicos/'. $medico->id ) }}" method="post">
            
                @method("PUT")

                @csrf {{ $medico->id }}

                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}" required>
                    </div>
                </div>
                
                <div class="mb-3 row">
                    <label for="clinica_id" class="col-sm-2 col-form-label">Clinica:</label>
                    <div class="col-sm-5">
                        <select name="clinica_id" id="clinica" class="form-select" required>
                            <option value="">Seleccionar Cinica</option>
                            @foreach ($clinicas as $clinica)
                                <option value="{{ $clinica->id }}" @if ($clinica->id == $medico->clinica_id) {{ 'selected' }} @endif>{{ $clinica->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <a href="{{ url('medicos')}}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>