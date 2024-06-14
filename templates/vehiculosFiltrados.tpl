{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
            <th scope="col">Precio</th>
            <th scope="col">Color</th>
        </tr>
    </thead>

    <tbody>
        {if $autos|@count == 0}
            <tr>
                <td colspan=4>No hay vehículos para mostrar. Por favor, inserte uno.</td>
            </tr> 
        {/if}

        {foreach $autos as $auto}
            <tr>
                <td>{$auto->modelo}</td>
                <td>{$auto->anio}</td>
                <td>{$auto->precio}</td>
                <td>{$auto->color}</td>
            </tr>
        {/foreach}
    </tbody>
</table>



