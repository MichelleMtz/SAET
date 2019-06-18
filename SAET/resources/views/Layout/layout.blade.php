<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset("css/style.css")}}" type="text/css">
    <link rel="stylesheet" href={{asset("css/app.css")}} type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body class="bg-white">

<header id="header">

    <div>
        <img class="ima2" src="{{asset("imagenes/g1.PNG")}}" align="" width="105em" height="58em">
        <h3 id="htec"> <b>S        A        E        T</b></h3>
        <h4 id="saet" ><b> (Sistema de Análisis del Expediente del tutorado)</b></h4>

    </div>
</header>

<section class="container">
    @yield('content')

</section>


<footer id="footer">

    <div class="text-black-50 text-center ">
        <h6 id="textfo">
            <div class="form-row">

                <div class="form-group col-3">
                    <p class="text-white"><b>SAET</b></p>
                </div>

                <div class="form-group col-3">
                    <p class="text-white"><b>PRIVACIDAD</b></p>
                </div>


                <div class="form-group col-3">
                    <p class="text-white"><b>AYUDA</b></p>
                </div>

                <div class="form-group col-3">
                    <p class="text-white"><b>© 2019</b></p>
                </div>

            </div>

        </h6>

    </div>


</footer>
<script src="{{asset('js/app.js')}}" ></script>
<script src="{{asset('components/bootstrap.js')}}" ></script>
</body>
</html>