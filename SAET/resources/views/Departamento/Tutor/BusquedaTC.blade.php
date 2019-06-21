@extends ('Departamento.menuD')
@section('conten')

    <style>
        #perdiodo{
            width: 15em;
        }

        #carrera{
            width: 15em;
        }
    </style>
    <br>
    <h3 class="text-center alert alert-primary"><b>Búsqueda de tutores/coordinadores</b></h3>
    <br>
    <form>
        <div class="form-row">
            <div class=" form-group col-1">
                <label for="exampleInputPassword1">Periodo</label>
            </div>
            <div class=" form-group col-11">
                <select id="perdiodo" type="text" class="custom-select">
                    <option>Selecciona</option>
                    <option>MAR-AGT-2019</option>
                    <option>SEP-FEB-2019</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <div class=" form-group col-1">
                <label for="exampleInputPassword1">Carrera</label>
            </div>
            <div class=" form-group col-11">
                <select id="carrera" type="text" class="custom-select">
                    <option>Selecciona</option>
                    <option>Forestal</option>
                    <option>Sistemas</option>
                </select>
            </div>
        </div>

        <br>
        <div>
            <table id="tab" class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido paterno</th>
                    <th scope="col">Apellido materno</th>
                    <th scope="col">Grupo de tutorias</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Cargo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1562487</th>
                    <td>Allisson</td>
                    <td>Castillo</td>
                    <td>Herrera</td>
                    <td>601</td>
                    <td>Sexto</td>
                    <td>Tutor</td>
                </tr>
                <tr>
                    <th scope="row">1628745</th>
                    <td>Jacob</td>
                    <td>Andrade</td>
                    <td>Pineth</td>
                    <td>402</td>
                    <td>Cuarto</td>
                    <td>Coordinador</td>
                </tr>
                <tr>
                    <th scope="row">1628001</th>
                    <td>Smith</td>
                    <td>Lora</td>
                    <td>Ferrer</td>
                    <td>101</td>
                    <td>Primero</td>
                    <td>Coordinador</td>
                </tr>
                </tbody>
            </table>
        </div>

    </form>

@endsection
