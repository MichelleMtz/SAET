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
    <h3 class="text-center alert alert-primary"><b>Búsqueda de alumnos</b></h3>
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


        <div class="form-row">
            <div class=" form-group col-1">
                <label for="exampleInputPassword1">Semestre</label>
            </div>
            <div class=" form-group col-11">
                <select id="carrera" type="text" class="custom-select">
                    <option>Selecciona</option>
                    <option>Primero</option>
                    <option>Sexto</option>
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
                    <th scope="col">Grupo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">201607045</th>
                    <td>Andrea</td>
                    <td>López</td>
                    <td>Herrera</td>
                    <td>601</td>
                </tr>

                <tr>
                    <th scope="row">201405074</th>
                    <td>Camila</td>
                    <td>Flores</td>
                    <td>Millan</td>
                    <td>101</td>
                </tr>
                </tbody>
            </table>
        </div>

    </form>

@endsection
