@extends('Layout.layout')
@section('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="subm">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <button style="background: #1c617e; color: white;" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tutorías
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/Jefe/AsignaTC">Registrar tutores y coordinador</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/Jefe/Asignar">Asignar tutorados</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="">Reportes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container">
        @yield('conten')
    </section>
@endsection