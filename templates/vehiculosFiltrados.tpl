{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
        <tr>
            <th scope="col">Modelo</th>
            <th scope="col">Año</th>
            <th scope="col">Precio</th>
            <th scope="col">Color</th>
            <th scope="col">Marca</th>
        </tr>
    </thead>

    <tbody>
        {if $autos|@count == 0}
            <tr>
                <td colspan=4>No hay vehículos para mostrar.</td>
            </tr> 
        {/if}

        {foreach $autos as $auto}
            <tr>
                <td>{$auto->modelo}</td>
                <td>{$auto->anio}</td>
                <td>{$auto->precio}</td>
                <td>{$auto->color}</td>
                <td>{$marca->nombre}</td>
            </tr>
        {/foreach}
    </tbody>
</table>

<a href="filtrarMarca"><button type="submit" class="btn btn-primary col-12 text-center mt-4 col-3 m-auto"> Volver</button></a> 



