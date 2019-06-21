@extends('Jefe.menu')
@section('conten')
    <br>
    <h3 class="text-center alert alert-primary"><b>Asignar tutorados</b></h3>
    <br>

    <form action="">
        <div class="form-group row">
            <div class="form-group col-5">
                <h4 class="text-center"><b>Alumnos</b></h4>
            </div>
            <div class="form-group col-5 text-center">
                <h4><b>Tutores</b></h4>
            </div>
        </div>
        <div class="form-group row col-6">
            <label class="col-form-label" for="g">Generación</label>
            <div class="col-4">
                <select name="" id="g"  class="custom-select">
                    <option value="">Selecciona</option>
                    <option value="">2016</option>
                    <option value="">2017</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-5">
                <table id="tab" class="table table-wrapper-scroll-y my-custom-scrollbar">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Elegir</th>
                        <th scope="col">No. de cuenta</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168596</th>
                        <td>Camila</td>
                        <td>Suarez</td>
                        <td>Jímenez</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168597</th>
                        <td>Juan</td>
                        <td>Estrada</td>
                        <td>Camacho</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox"></td>
                        <th scope="row">20168598</th>
                        <td>Ana</td>
                        <td>Rebollar</td>
                        <td>Frutis</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168599</th>
                        <td>Eliza</td>
                        <td>Perez</td>
                        <td>Cardoso</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168582</th>
                        <td>Fátima</td>
                        <td>Castillo</td>
                        <td>Sánchez</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168583</th>
                        <td>Perla</td>
                        <td>Manjares</td>
                        <td>Ruíz</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            </div>
                        </td>
                        <th scope="row">20168581</th>
                        <td>Fernando</td>
                        <td>Santana</td>
                        <td>Santana</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-5">
                <table id="tab" class="table table-wrapper-scroll-y my-custom-scrollbar">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Elegir</th>
                        <th scope="col">Cuenta</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <th scope="row">859632548</th>
                        <td>Silvia</td>
                        <td>Perez</td>
                        <td>Martínez</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <th scope="row">896574896</th>
                        <td>Pedro</td>
                        <td>Camacho</td>
                        <td>López</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <th scope="row">896523657</th>
                        <td>María</td>
                        <td>Vega</td>
                        <td>Frutis</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <th scope="row">895478963</th>
                        <td>Martin</td>
                        <td>Lozano</td>
                        <td>Benitez</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            </div>
                        </td>
                        <th scope="row">895412365</th>
                        <td>Juarez</td>
                        <td>Santana</td>
                        <td>Sánchez</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-2">
                <button class="btn btn-outline-primary" id="btnasigna"> Asignar</button>
            </div>
        </div>
        <br>
        <h5 class="text-center alert alert-info"><b>Generaciones asignadas</b></h5>
        <br>
        <div class="form-group row">
            <div class="col-2"></div>
            <div class="col-8">
                <table class="table-responsive table">
                    <thead class="thead-light">
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">APellido Materno</th>
                    <th scope="col">Generación</th>
                    <th scope="col">Eliminar</th>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">859632548</th>
                        <td>Silvia</td>
                        <td>Perez</td>
                        <td>Martínez</td>
                        <td>2018</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">896574896</th>
                        <td>Pedro</td>
                        <td>Camacho</td>
                        <td>López</td>
                        <td>2016</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </form>

@endsection