@extends ('CoordinadorG.menuCG')
@section('conten')
    <style>
        #apartado{
            width: 20em;
        }
    </style>
    <br>
    <h3 class="text-center alert alert-primary"><b>Formato de tutorías</b></h3>
    <br>
    <form>
        <div class="form-row">
            <div class=" form-group col-1">
                <label for="exampleInputPassword1">Apartado</label>
            </div>
            <div class=" form-group col-8">
                <select id="apartado" type="text" class="custom-select">
                    <option>Selecciona</option>
                    <option>Datos Generales</option>
                    <option>Antecedentes académicos</option>
                    <option>Habitos de estudio</option>
                    <option>Formación Integral/Salud</option>
                </select>
            </div>
            <div class=" form-group col-3">
                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalAgregar" style="margin-left: 14em;">
                    <img src="{{url('imagenes/add.png')}}" width="15px" height="15px">

                </button>
            </div>
        </div>


        <div>
            <table class="table">
                <thead class="thead-light">
                <th>Pregunta</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>

                    <tr>
                        <td>Perteneces alguna lengua indígena</td>
                        <td>
                            <a href="" class="btn btn-outline-warning" name="actualizar"><i  class="fas fa-pen"></i></a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>


                    <tr>
                        <td>Usas lentes</td>
                        <td>
                            <a href="" class="btn btn-outline-warning" name="actualizar"><i  class="fas fa-pen"></i></a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>


                    <tr>
                        <td>Practicas algún deporte</td>
                        <td>
                            <a href="" class="btn btn-outline-warning" name="actualizar"><i  class="fas fa-pen"></i></a>
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-danger" name="eliminar"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>



                </tbody>
            </table>
        </div>



    </form>

@endsection
