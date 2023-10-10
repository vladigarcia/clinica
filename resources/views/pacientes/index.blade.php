@extends('layout/template')

@section('title', 'Tabla Pacientes | Clinica Juan Remedo')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de Pacientes</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Nivel</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno)
                        <tr>
                            <td>{{ $alumno->id }}</td>
                            <td>{{ $alumno->matricula }}</td>
                            <td>{{ $alumno->nombre }}</td>
                            <td>{{ $alumno->fecha_nacimiento }}</td>
                            <td>{{ $alumno->telefono }}</td>
                            <td>{{ $alumno->email }}</td>
                            <td>{{ $alumno->nivel->nombre }}</td>
                            <td> <a href="{{ url('alumnos/'. $alumno->id .'/edit') }}" class="btn btn-warning btn-sm">Editar</a> </td>
                            <td>
                                <form action="{{ url('alumnos/'. $alumno->id) }}" method="post">
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