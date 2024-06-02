{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
    <th scope="col">Nombre</th>
    <th scope="col">Pais de origen</th>
    <th scope="col">Año de fundacion</th>
    <th scope="col">Descripcion</th>
    <th scope="col">Acciones</th>
    
    
    </tr>
</thead>

<tbody>
    {if $cantidad == 0}
        <tr>
            <td colspan=5>No hay marcas para mostrar. Por favor, inserte una.</td>
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


