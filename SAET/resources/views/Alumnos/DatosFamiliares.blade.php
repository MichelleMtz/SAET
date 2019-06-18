@extends('Alumnos.menuexpediente')
@section('active_DF','active')
@section('content-exp')

    <br>
    <h3 class="text-center alert alert-primary"><b>Datos familiares</b></h3>
    <br>
    <form>

        <div class="form-group row">
            <label class="col-form-label col-2" for="nom_p">Nombre  del  padre</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="nom_p">
            </div>
            <label class="col-form-label" for="edad">Edad</label>
            <div class="col-1">
                <input type="text" class="form-control" name="" value="" id="edad">
            </div>
            <label class="col-form-label" for="ocu_p">Ocupación</label>
            <div class="col-3">
                <input type="text" class="form-control" name="" value="" id="ocu_p">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="residen">Lugar de residencia</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="residen">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="nom_m">Nombre de la madre</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="nom_m">
            </div>
            <label class="col-form-label" for="edad-m">Edad</label>
            <div class="col-1">
                <input type="text" class="form-control" name="" value="" id="edad_m">
            </div>
            <label class="col-form-label" for="ocu_m">Ocupación</label>
            <div class="col-3">
                <input type="text" class="form-control" name="" value="" id="ocu_m">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="residen_m">Lugar de residencia</label>
            <div class="col-4">
                <input type="text" class="form-control" name="" value="" id="residen_m">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="no_h">Número de hermanos</label>
            <div class="col-1">
                <input type="text" class="form-control" value="" id="no_h">
            </div>
            <label class="col-form-label" for="lug">Lugar que ocupas entre ellos</label>
            <div class="col-1">
                <input type="text" class="form-control" name="" value="" id="lug">
            </div>
            <label class="col-form-label" for="vive">Actualmente vives</label>
            <div class="col-3">
                <select name="" id="vive"  class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Con los padres</option>
                    <option value="">En casa de asistencia</option>
                    <option value="">Con otros estudiantes</option>
                    <option value="">Con Tíos ú otros familiares</option>
                    <option value="">Solo</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="ed">Perteneces a una etnia indígena</label>
            <div class="col-2">
                <select name="" id="ed" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="c">Cúal</label>
            <div class="form-group col-3">
                <select name="" id="c" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mazahua</option>
                    <option value="">Otomi</option>
                    <option value="">Purepecha</option>
                </select>
            </div>

        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="ed">Hablas alguna lengua indígena</label>
            <div class="col-2">
                <select name="" id="ed" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Sí</option>
                    <option value="">Nó</option>
                </select>
            </div>
            <label class="col-form-label" for="sos">Quién sostiene económicamente tu hogar</label>
            <div class="col-3">
                <select name="" id="sos" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Padre</option>
                    <option value="">Madre</option>
                    <option value="">Hermano(a)</option>
                    <option value="">Tío(a)</option>
                    <option value="">Abuelo(a)</option>
                    <option value="">Otro</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="tut">Nombre del tutor</label>
            <div class="col-3">
                <input type="text" class="form-control" name="" value="" id="tut">
            </div>
            <label  class="col-form-label for="paren">Parentesco</label>
            <div class="col-3">
                <select name="" id="paren" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Padre</option>
                    <option value="">Madre</option>
                    <option value="">Hermano(a)</option>
                    <option value="">Tío(a)</option>
                    <option value="">Abuelo(a)</option>
                    <option value="">Otro</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="tut">Cómo consideras a tu familia</label>
            <div class="col-2">
                <select name="" id="paren" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Unida</option>
                    <option value="">Muy unida</option>
                    <option value="">Disfuncional</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <button id="guardar" type="submit" class="btn small btn-outline-primary boton-alumno">Guardar</button>
        </div>
    </form>

    @endsection