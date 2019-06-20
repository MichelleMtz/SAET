@extends('Alumnos.menuexpediente')
@section('active_FI','active')
@section('content-exp')

    <br>
    <h3 class="text-center alert alert-primary"><b>Formación integral/salud</b></h3>
    <br>
    <form>
        <div class="form-group row">
            <label class="col-form-label col-3" for="de">Practicas regularmente algún deporte</label>
            <div class="col-2">
                <select name="" id="de" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="dep">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="dep">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="aa">Practicas alguna actividad artística</label>
            <div class="col-2">
                <select name="" id="aa" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="ar">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="ar">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="pa">Cúal es tu pasatiempo favorito</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="pa">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="as">Participas en actividades sociales o culturales</label>
            <div class="col-2">
                <select name="" id="as" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="ar">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="ar">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="es">Cómo consideras tu estado de salud</label>
            <div class="col-2">
                <select name="" id="es" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Excelente</option>
                    <option value="">Bueno</option>
                    <option value="">Regular</option>
                </select>
            </div>
            <label class="col-form-label col-3" for="ec">Padeces alguna enfermedad crónica</label>
            <div class="col-2">
                <select name="" id="ec" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">No</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="cp">Tus padres padecen alguna enfermedad crónica</label>
            <div class="col-2">
                <select name="" id="cp" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="cpa">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="cpa">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="op">Te han realizado alguna operación médico-quirúgica</label>
            <div class="col-2">
                <select name="" id="op" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="ope">De qué</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="ope">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="ev">Padeces alguna enfermedad visual</label>
            <div class="col-2">
                <select name="" id="ev" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="eev">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="eev">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="mc">Tomas medicamento controlado</label>
            <div class="col-2">
                <select name="" id="mc" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="emc">Especificar</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="emc">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="le">Usas lentes</label>
            <div class="col-2">
                <select name="" id="le" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="es">Estatura</label>
            <div class="col-2">
                <input type="text" class="form-control" name="" value="" id="es">
            </div>
            <label class="col-form-label" for="pe">Peso</label>
            <div class="col-2">
                <input type="text" class="form-control" name="" value="" id="pe">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="c">Has tenido algún accidente grave</label>
            <div class="form-group col-3">
                <select name="" id="c" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">No</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <button id="guardar" type="submit" class="btn small btn-outline-primary boton-alumno">Guardar</button>
        </div>
    </form>

@endsection