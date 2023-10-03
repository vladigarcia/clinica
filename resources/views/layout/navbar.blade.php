@extends('inicio')

@section('navbar')
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('inicio')}}" aria-current="page"> Inicio <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Ver</a>
                            <a class="dropdown-item" href="#">Agregar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
@endsection