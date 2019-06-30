<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
        <link rel="stylesheet" href={{asset("css/app.css")}} type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <title>@yield('title')</title>
    </head>

    <body id="fondito">
    <div class="form-group row">
        <button id="B_LOGIN" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">LOGIN</button>
    </div>
    <div id="divT">
        <h1 id="SAETT">S A E T</h1>
        <h1 id="DESC">Sistema de Análisis del Expediente del Tutorado</h1>
        <br>
        <h5 ID="EDU"><b>Educación</b></h5>
        <p id="p">Nuevo sistema para el manejo y control del expedinte del tutorado,
            <br>permite generar reportes y estadistícas generales
            de acuerdo a la información del alumno,
            <br>para uso especial de: Tutores, Coordinadores, Alumnos y Departamento de desarrollo académico </p>
    </div>
    <div class="form-group row">
        <button id="B_CONOCE" type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false">CONOCER MÁS</button>
    </div>
    </body>
</html>
