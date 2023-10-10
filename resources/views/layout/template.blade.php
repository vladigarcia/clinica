<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
        
                            <!-- Inicio -->
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('inicio')}}" aria-current="page"> Inicio <span class="visually-hidden">(current)</span></a>
                            </li>
        
                            <!-- Pacientes -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="{{route('pacientes.index')}}">Ver</a>
                                    <a class="dropdown-item" href="{{route('pacientes.create')}}">Agregar</a>
                                </div>
                            </li>
        
                            <!-- Medicos -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('')}}" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Agregar</a>
                                </div>
                            </li>
        
                            <!-- Horarios -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('')}}" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Agregar</a>
                                </div>
                            </li>
        
                            <!-- Clinicas -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('')}}" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Agregar</a>
                                </div>
                            </li>
        
                            <!-- Citas -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('')}}" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pacientes</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item" href="#">Ver</a>
                                    <a class="dropdown-item" href="#">Agregar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @yield('contenido')
        </main>

        <footer>
            Esta página se editó por última vez el 03 Oct 2023 a las 15:56.<br/>
            El contenido está disponible bajo la licencia de Jairo y Vladimir
        </footer>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>