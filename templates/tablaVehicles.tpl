{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
            <th scope="col">Precio</th>
            <th scope="col">Color</th>
            <th scope="col">Vendido</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        {if $vehicles|@count == 0}
            <tr>
                <td colspan=7>No hay vehículos para mostrar. Por favor, inserte uno.</td>
            </tr> 
        {/if}

        {foreach $vehicles as $vehicle}
            {$class = ($vehicle->vendido) ? "vendido" : ""}
            <tr class="{$class}">
                <td>{$vehicle->nombre}</td>
                <td>{$vehicle->modelo}</td>
                <td>{$vehicle->anio}</td>
                <td>{$vehicle->precio}</td>
                <td>{$vehicle->color}</td>
                {$estado = ($vehicle->vendido) ? "vehículo vendido" : "disponible"}
                <td>{$estado}</td>
                {if !$vehicle->vendido}
                    <td>
                        <a href='verVehiculo/{$vehicle->id_auto}' class='btn btn-primary'>Ver</a>
                        {if $role == 'admin'}
                            <a href='vendido/{$vehicle->id_auto}' class='btn btn-success'>Vendido</a>
                            <a href='editar/{$vehicle->id_auto}' class='btn btn-success'>Editar</a>
                        {/if}
                    </td>
                {else}
                    {if $role == 'admin'}
                        <td>
                            <a href='borrar/{$vehicle->id_auto}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    {/if}
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>



