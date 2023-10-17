@extends('layout/template')

@section('title', 'Listado de Pacientes | Clínica Juan Remedo')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de Pacientes</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Género</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha A</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->id }}</td>
                            <td>{{ $paciente->nombre }}</td>
                            <td>{{ $paciente->apellido }}</td>
                            <td>{{ $paciente->direccion }}</td>
                            <td>{{ $paciente->genero_id }}</td>
                            <td>{{ $paciente->telefono }}</td>
                            <td>{{ $paciente->edad }}</td>
                            <td>{{ $paciente->fecha_nacimiento }}</td>
                            <td>{{ $paciente->fecha_a }}</td>
                            <td>
                                <a href="{{ url('pacientes/' . $paciente->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('pacientes/' . $paciente->id) }}" method="post">
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
