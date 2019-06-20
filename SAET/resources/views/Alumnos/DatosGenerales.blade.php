@extends('Alumnos.menuexpediente')
@section('active_DG','active')
@section('content-exp')
    <br>
    <h3 class="text-center alert alert-primary"><b>Datos generales</b></h3>
    <br>
    <form>

        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Carrera</label>
            </div>
                <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
                </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Periodo</label>
            </div>
                <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
                </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Grupo</label>
            </div>
                <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
                </div>
        </div>




        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Fecha de nacimiento</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Lugar de nacimiento</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Estado civil</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>




        <div class="form-row">

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Número de hijos</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Dirección</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="Dirección" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Nivel económico</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-1">
                <label for="exampleInputPassword1">Correo</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="Correo" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Horario</label>
            </div>
            <div class="form-group col-3">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Teléfono de casa</label>
            </div>
            <div class="form-group col-3">
                <input type="text" class="form-control" name="" placeholder="">
            </div>

        </div>



        <div class="form-row">


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Celular</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Trabaja</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Ocupación</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Turno</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>




        <div class="form-row">


            <div class="form-group col-1">
                <label for="exampleInputPassword1">No.cuenta</label>
            </div>
            <div class="form-group col-2">
                <input type="text" class="form-control" name="" placeholder="">
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Estado</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>


            <div class="form-group col-1">
                <label for="exampleInputPassword1">Cuenta con beca</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>

            <div class="form-group col-1">
                <label for="exampleInputPassword1">Tipo de beca</label>
            </div>
            <div class="form-group col-2">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
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