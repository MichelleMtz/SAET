@extends('Tutor.menu')
@section('conten')
    <br>
    <h3 class="text-center alert alert-primary"><b>Tutorados</b></h3>
    <br>
    <div class="row">
        <div class="input-group col-7">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><img src="/imagenes/search1.png" alt="" width="20px"></span>
            </div>

        </div>
        <div class="col-2"></div>
        <div class="col-3">
            <button class="btn btn-outline-primary"><img src="/imagenes/descarga.png" alt="" width="20px">    Descargar lista</button>
        </div>
    </div>
    
    <br>
    <div>
    <table id="tab" class="table table-responsive">
        <thead class="thead-light">
        <tr>
            <th scope="col">No. de cuenta</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido paterno</th>
            <th scope="col">Apellido materno</th>
            <th scope="col">Situación académica</th>
            <th scope="col">Correo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Expediente</th>
            <th scope="col">Expediente completo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">20168596</th>
            <td>Camila</td>
            <td>Suarez</td>
            <td>Jímenez</td>
            <td>Regular</td>
            <td>Camila23@gmail.com</td>
            <td>7223569852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15x"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/success.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168597</th>
            <td>Juan</td>
            <td>Estrada</td>
            <td>Camacho</td>
            <td>Regular</td>
            <td>Juan_Es@gmail.com</td>
            <td>7223568563</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/delete.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168598</th>
            <td>Ana</td>
            <td>Rebollar</td>
            <td>Frutis</td>
            <td>Regular</td>
            <td>Frutis_ana23@gmail.com</td>
            <td>7228969852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/success.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168599</th>
            <td>Eliza</td>
            <td>Perez</td>
            <td>Cardoso</td>
            <td>Regular</td>
            <td>Cardoso_eliza@gmail.com</td>
            <td>7288569852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/delete.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168582</th>
            <td>Fátima</td>
            <td>Castillo</td>
            <td>Sánchez</td>
            <td>Regular</td>
            <td>FatcaSA@gmail.com</td>
            <td>7223545852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/success.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168583</th>
            <td>Perla</td>
            <td>Manjares</td>
            <td>Ruíz</td>
            <td>Regular</td>
            <td>Perla@gmail.com</td>
            <td>7227899852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/success.png" alt="" width="28px">
            </td>
        </tr>
        <tr>
            <th scope="row">20168581</th>
            <td>Fernando</td>
            <td>Santana</td>
            <td>Santana</td>
            <td>Regular</td>
            <td>FernandoSS@gmail.com</td>
            <td>7289669852</td>
            <td class="text-center">
                <button class="btn btn-outline-primary"><img src="/imagenes/eye1.png" alt="" width="15px"></button>
            </td>
            <td class="text-center">
                <img src="/imagenes/success.png" alt="" width="28px">
            </td>
        </tr>
        </tbody>
    </table>
    </div>

@endsection