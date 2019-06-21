@extends ('Alumnos.menu')
@section('conten')
    <br>
    <div class="container">
        <ul class="nav nav-tabs" role="tablist" id="myTab">

            <li class="nav-item" >
                <a class="nav-link @yield("active_DG")" id="home-tab" role="tab" data-toogle="tab" href="/Alumno/DatosGenerales">Datos Generales</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link @yield("active_AA")"  role="tab" data-toogle="tab" href="/Alumno/AntecedentesA" >Antecedentes académicos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_DF")" role="tab" data-toogle="tab" href="/Alumno/DatosFamiliares" >Datos familiares</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_HE")" role="tab" data-toogle="tab" href="/Alumno/HabitosE" >Hábitos de estudio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_FI")" role="tab" data-toogle="tab" href="/Alumno/FormacionIntegral" >Formación integral salud</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_P")" role="tab" data-toogle="tab" href="/Alumno/Psicoanalisis" >Psicoanálisis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield("active_E")" role="tab" data-toogle="tab" href="/Alumno/Expediente" >Expediente</a>
            </li>
        </ul>
    </div>
    <section class="container">
        @yield('content-exp')
    </section>
@endsection