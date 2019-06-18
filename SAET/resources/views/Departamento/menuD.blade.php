@extends('Layout.layout')
@section('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="subm">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Departamento/Tutor">Tutores/Coordinadores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Departamento/Alumno">Alumnos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Departamento/Reporte">Reportes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        @yield('conten')
    </section>
@endsection
