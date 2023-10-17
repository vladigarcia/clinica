@extends('layouts/template')

@section('title', 'Listado de Clínicas | Clínica Juan Remedos')

@section('contenido')
    <main>
        <div class="container py-4">
            <h2>Listado de Clínicas</h2>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Código de Clinica</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clinicas as $clinica)
                        <tr>
                            <td>{{ $clinica->id }}</td>
                            <td>{{ $clinica->nombre }}</td>
                            <td>{{ $clinica->telefono }}</td>
                            <td>{{ $clinica->direccion }}</td>
                            <td>
                                <a href="{{ url('clinica/' . $clinica->id . '/edit') }}" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ url('clinica/' . $clinica->id) }}" method="post">
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
