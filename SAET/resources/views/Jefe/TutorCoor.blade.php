@extends('Jefe.menu')
@section('conten')
    <br>
    <h3 class="text-center alert alert-primary"><b>Asignar tutores y coodinador</b></h3>
    <br>
    <div class="input-group col-6">
        <input type="text" class="form-control" placeholder="Buscar">
        <div class="input-group-append">
            <span class="input-group-text" id="basic-addon2"><img src="/imagenes/search1.png" alt="" width="20px"></span>
        </div>
    </div>
    <br>
    <form action="">
        <div class="form-group row">
            <div class="col-6">
                <table id="tab" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Asignar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Silvia</td>
                        <td>Peréz</td>
                        <td>Martínez</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tutor">
                                <label class="form-check-label" for="exampleRadios1">Tutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Coordinador">
                                <label class="form-check-label" for="exampleRadios1">Coordinador</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-success"><img src="/imagenes/add.png" alt="" width="15px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro</td>
                        <td>Camacho</td>
                        <td>López</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tutor">
                                <label class="form-check-label" for="exampleRadios1">Tutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Coordinador">
                                <label class="form-check-label" for="exampleRadios1">Coordinador</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-success"><img src="/imagenes/add.png" alt="" width="15px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>Vega</td>
                        <td>Frutis</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tutor">
                                <label class="form-check-label" for="exampleRadios1">Tutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Coordinador">
                                <label class="form-check-label" for="exampleRadios1">Coordinador</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-success"><img src="/imagenes/add.png" alt="" width="15px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Martín</td>
                        <td>Lozano</td>
                        <td>Benitez</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tutor">
                                <label class="form-check-label" for="exampleRadios1">Tutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Coordinador">
                                <label class="form-check-label" for="exampleRadios1">Coordinador</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-success"><img src="/imagenes/add.png" alt="" width="15px"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>Juarez</td>
                        <td>Santana</td>
                        <td>Sánchez</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Tutor">
                                <label class="form-check-label" for="exampleRadios1">Tutor</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Coordinador">
                                <label class="form-check-label" for="exampleRadios1">Coordinador</label>
                            </div>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-outline-success"><img src="/imagenes/add.png" alt="" width="15px"></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
                <table id="tab" class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido paterno</th>
                        <th scope="col">Apellido materno</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Silvia</td>
                        <td>Perez</td>
                        <td>Martínez</td>
                        <td>Tutor</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Pedro</td>
                        <td>Camacho</td>
                        <td>López</td>
                        <td>Tutor</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>Vega</td>
                        <td>Frutis</td>
                        <td>Coordinador</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Martin</td>
                        <td>Lozano</td>
                        <td>Benitez</td>
                        <td>Tutor</td>
                        <td>
                            <button class="btn btn-outline-danger">
                                <img src="/imagenes/trash.png" alt="" width="15px">
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>María</td>
                        <td>Vega</td>
                        <td>Frutis</td>
                        <td>Tutor</td>
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