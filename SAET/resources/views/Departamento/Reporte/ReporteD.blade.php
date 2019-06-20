@extends ('Departamento.menuD')
@section('conten')
    <br>
    <h3 class="text-center alert alert-primary"><b>Reportes</b></h3>
    <br>
    <form action="">
        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Periodo</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Tipo de estadistica</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Carrera</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Semestre</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Grupo</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-2">
                <label for="exampleInputPassword1">Pregunta</label>
            </div>
            <div class="form-group col-4">
                <select type="text" class="custom-select">
                    <option>Selecciona</option>
                </select>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary" style="margin-left: 34em">
                    <img src="{{url('imagenes/descarga.png')}}" width="20px" height="20px">
                </button>
            </div>
        </div>
    </form>
    <embed src="imagenes/R.pdf" type="application/pdf" width="100%" height="600px" />
@endsection