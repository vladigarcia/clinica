@extends('layouts/template')

@section('title', 'Listado de horarios | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de Horarios</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID_MEDICO</th>
                        <th>FECHA HORA DE TRABAJO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horarios as $horario)
                        <tr>
                            <td>{{ $horario->id }}</td>
                            <td>{{ $horario->id_medico }}</td>
                            <td>{{ $horario->fecha_hora }}</td>
                            <td>
                                <a href="{{ url('horarios/' . $horario->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('horarios/' . $horario->id) }}" method="post">
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
