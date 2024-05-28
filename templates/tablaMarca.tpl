{include 'inicioHtml.tpl'}

<table class="table table-success table-striped mt-2">
    <thead>
    <tr>
    <th scope="col">nombre</th>
    <th scope="col">pais de origen</th>
    <th scope="col">año de fundacion</th>
    <th scope="col">descripcion</th>
    
    </tr>
</thead>

<tbody>
    {if $cantidad == 0}
        <tr>
            <td colspan=4>No hay tareas para mostrar</td>
        </tr> 
    {/if}


{foreach $marcas as $marca}
    
    
    <tr class={$class}>
    
        <td>{$marca->modelo}</td>
        <td>{$marca->anio}</td>
        <td>{$marca->precio}</td>
        <td>{$marca->color}</td>
        

    </tr>
{/foreach}
