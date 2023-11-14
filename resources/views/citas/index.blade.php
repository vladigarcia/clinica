@extends('layouts/template')

@section('title', 'Listado de citas | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de citas</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>  
                        <th>ID MEDICO</th>
                        <th>ID PACIENTE</th>
                        <th>FECHA DE ATENCIÓN</th>
                        <th>FECHA DE INGRESO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                        <tr>
                            <td>{{ $cita->id }}</td>
                            <td>{{ $cita->medico_id }}</td>
                            <td>{{ $cita->paciente_id }}</td>
                            <td>{{ $cita->$fecha_a }}</td>
                            <td>{{ $cita->$created_at }}</td>
                            <td>
                                <a href="{{ url('citas/' . $cita->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('citas/' . $cita->id) }}" method="post">
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
