{include 'inicioHtml.tpl'}

    <h2>Detalles del Vehículo</h2>
    <table class="table table-bordered">
        <tr>
            <th>Modelo</th>
            <td>{$vehicle->modelo}</td>
        </tr>
        <tr>
            <th>Año</th>
            <td>{$vehicle->anio}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{$vehicle->precio}</td>
        </tr>
        <tr>
            <th>Color</th>
            <td>{$vehicle->color}</td>
        </tr>
        
    </table>

    <a href="mostrarVehiculos" class="btn btn-primary">Volver al listado</a>

{include 'finHtml.tpl'}


