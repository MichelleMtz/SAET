@extends('Alumnos.menuexpediente')
@section('active_HE','active')
@section('content-exp')

    <br>
    <h3 class="text-center alert alert-primary"><b>Hábitos de estudio</b></h3>
    <br>
    <form>


        <div class="form-row">

            <div class="form-group col-4">
                <label for="exampleInputPassword1">Tiempo dedicado para estudiar fuera de clase</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>

            <div class="form-group col-3">
                <label for="exampleInputPassword1">Cómo es tu forma intelectual</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-4">
                <label for="exampleInputPassword1">Cuál es tu forma de estudio más utilizada</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="" placeholder="">
            </div>

            <div class="form-group col-3">
                <label for="exampleInputPassword1">Cómo empleas tu tiempo libre</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-2">
                <label for="exampleInputPassword1">Asignaturas preferidas</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Por qué</label>
            </div>
            <div class="form-group col-6">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>

        <div class="form-row">

            <div class="form-group col-2">
                <label for="exampleInputPassword1">Asignaturas difíciles</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Por qué</label>
            </div>
            <div class="form-group col-6">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-4">
                <label for="exampleInputPassword1">Qué opinion tienes de ti mismo como estudiante</label>
            </div>
            <div class="form-group col-8">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>


        <!--BOTONES-->
        <div class="form-group row">
            <button id="guardar" type="submit" class="btn small btn-outline-primary boton-alumno">Guardar</button>
        </div>


    </form>
    </div>
    </div>
@endsection
