{include 'inicioHtml.tpl'}

{include 'agregarVehiculo.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
    <th scope="col">Modelo</th>
    <th scope="col">Año</th>
    <th scope="col">Precio</th>
    <th scope="col">Color</th>
    <th scope="col">Marca</th>
    <th scope="col">Finalizada</th>
    <th scope="col">Acciones</th>
    </tr>
</thead>

<tbody>

{if $cantidad == 0}
    <tr>
        <td colspan=7>No hay tareas para mostrar</td>
    </tr> 
{/if}

{foreach $vehicles as $vehicle}
    {$class = ($vehicle->finalizada) ? "finalizada": ""}
    <tr class={$class}>
        <td>{$vehicle->modelo}</td>
        <td>{$vehicle->año}</td>
        <td>{$vehicle->precio}</td>
        <td>{$vehicle->color}</td>
        <td>{$vehicle->marca}</td>
        {$estado = ($vehicle->finalizada) ? "Tarea finalizada": "Sin finalizar"}
        <td>{$estado}</td>
        {if !$vehicle->finalizada}
            <td>
                <a href='show/{$vehicle->id}' class='btn btn-primary'>Ver</a>
                <a href='finalize/{$vehicle->id}' class='btn btn-success'>Finalizar</a>
            </td>
        {else}    
            <td>            
              <a href='delete/{$vehicle->id}' class='btn btn-danger'>Eliminar</a>
            </td>
        {/if}
    </tr>
{/foreach}

{include 'finHtml.tpl'}
