@extends('layouts/template')

@section('title', 'Listado de Medicos | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de Medicos</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID Medico</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Código de Clinica</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicos as $medico)
                        <tr>
                            <td>{{ $medico->id }}</td>
                            <td>{{ $medico->nombre }}</td>
                            <td>{{ $medico->telefono }}</td>
                            <td>{{ $medico->clinica->id }}</td>
                            <td>
                                <a href="{{ url('medicos/' . $medico->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('medicos/' . $medico->id) }}" method="post">
                                    @method("Delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection
