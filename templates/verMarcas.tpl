{include 'inicioHtml.tpl'}

<h2>Detalles de la Marca</h2>
<table class="table table-bordered">
    <tr>
        <th>Marca</th>
        <td>{$marca->nombre}</td>
    </tr>
    <tr>
        <th>Pais de origen</th>
        <td>{$marca->pais_de_origen}</td>
    </tr>
    <tr>
        <th>Año de fundacion</th>
        <td>{$marca->ano_de_fundacion}</td>
    </tr>
    <tr>
        <th>Descripcion</th>
        <td>{$marca->descripcion}</td>
    </tr>
    
</table>

<a href="mostrarMarcas" class="btn btn-primary">Volver al listado</a>

{include 'finHtml.tpl'}
