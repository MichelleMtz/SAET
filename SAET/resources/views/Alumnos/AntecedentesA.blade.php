@extends('Alumnos.menuexpediente')
@section('active_AA','active')
@section('content-exp')

    <br>
    <h3 class="text-center alert alert-primary"><b>Antecedentes académicos</b></h3>
    <br>
    <form>

        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Bachillerato</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Otros estudios</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-2">
                <label for="exampleInputPassword1">Años en que curso el bachillerato</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>




        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Año de terminación</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Escuela de procedencia</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Promedio</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>




        <div class="form-row">

            <div class="form-group col-2">
                <label for="exampleInputPassword1">Materias reprobadas en el bachillerato</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-2">
                <label for="exampleInputPassword1">Te estimula tu familia en tus estudios</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>

            <div class="form-group col-2">
                <label for="exampleInputPassword1">Otra carrera iniciada</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Institución</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="Correo" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Semestres cursados</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="Correo" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Interrupción de estudios</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Razón</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="Correo" placeholder="">
            </div>

        </div>



        <div class="form-row">

            <div class="form-group col-4">
                <label for="exampleInputPassword1">Razón por la cual decidiste estudiar en el TESVB</label>
            </div>
            <div class="form-group col-8">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>



        <div class="form-row">

            <div class="form-group col-5">
                <label for="exampleInputPassword1">Tines información sobre la carrera que elegiste en el TESVB</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-5">
                <label for="exampleInputPassword1">Tuviste otras opciones vocacionales o preferencias por otra carrera</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Cuál</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>
        </div>


        <div class="form-row">

            <div class="form-group col-2">
                <label for="exampleInputPassword1">Te gusta la carrera elegida</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
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
                <label for="exampleInputPassword1">Tuviste suspención de estudios en el bachillerato</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Razón</label>
            </div>
            <div class="form-group col-4">
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