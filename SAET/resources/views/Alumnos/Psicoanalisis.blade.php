@extends('Alumnos.menuexpediente')
@section('active_P','active')
@section('content-exp')

    <br>
    <h3 class="text-center alert alert-primary"><b>Psicoanálisis</b></h3>
    <br>
    <form>
        <div class="form-group row">
            <label class="col-form-label col-2" for="re">Rendimiento escolar</label>
            <div class="col-2">
                <select name="" id="re" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="do">Dominio del propio idioma</label>
            <div class="col-2">
                <select name="" id="do" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="cc">Conocimiento en cómputo</label>
            <div class="col-2">
                <select name="" id="cc" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="ae">Aptitudes especiales</label>
            <div class="col-2">
                <select name="" id="ae" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="crc">Comprensión y retención en clase</label>
            <div class="col-2">
                <select name="" id="crc" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="ppe">Preparación y presentación de examenes</label>
            <div class="col-2">
                <select name="" id="ppe" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="aee">Aplicación de estrategias de aprendizaje y estudio</label>
            <div class="col-2">
                <select name="" id="aee" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-2" for="te">Trabajo en equipo</label>
            <div class="col-2">
                <select name="" id="te" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="oa">Organización de actividades de estudio</label>
            <div class="col-2">
                <select name="" id="oa" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-3" for="ce">Concentración en el estudio</label>
            <div class="col-2">
                <select name="" id="ce" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
            <label class="col-form-label" for="sm">Solución de problemas y aprendizaje de las matemáticas</label>
            <div class="col-2">
                <select name="" id="sm" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="ce">Condiciones ambientales durante el estudio</label>
            <div class="col-2">
                <select name="" id="ce" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-form-label col-4" for="ce">Búsqueda bibliográficas e integración de información</label>
            <div class="col-2">
                <select name="" id="ce" class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">Mal</option>
                    <option value="">Regular</option>
                    <option value="">Muy bien</option>
                    <option value="">Excelente</option>
                </select>
            </div>
        </div>


        <div class="form-group row">
            <button id="guardar" type="submit" class="btn small btn-outline-primary boton-alumno">Guardar</button>
        </div>
    </form>

@endsection