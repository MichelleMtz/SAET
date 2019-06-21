@extends('Layout.layout')
@section('content')
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="subm">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/Tutor/Tutorados">Tutorados</a>
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