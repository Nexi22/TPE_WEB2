{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
    <th scope="col">nombre</th>
    <th scope="col">pais de origen</th>
    <th scope="col">año de fundacion</th>
    <th scope="col">descripcion</th>
    <th scope="col">Acciones</th>
    
    
    </tr>
</thead>

<tbody>
    {if $cantidad == 0}
        <tr>
            <td colspan=4>No hay tareas para mostrar</td>
        </tr> 
    {/if}


{foreach $marcas as $marca}
    
    
    <tr>
    
        <td>{$marca->nombre}</td>
        <td>{$marca->pais_de_origen}</td>
        <td>{$marca->ano_de_fundacion}</td>
        <td>{$marca->descripcion}</td>
        <td>
                <a href='detalleMarca/{$marca->id_marca}' class='btn btn-primary'>Ver</a>
        </td>
        <td>            
              <a href='eliminarMarca/{$marca->id_marca}' class='btn btn-danger'>Eliminar</a>
        </td>
        <td>            
              <a href='editarMarca/{$marca->id_marca}' class='btn btn-danger'>Editar</a>
        </td>

    </tr>
{/foreach}


