{include 'inicioHtml.tpl' }
    <form class="col-3 m-auto" action="verificar_edicionMarca" method="POST">
    
      <legend class="text-center">Editar marca</legend>
      <div class="mb-3">
        <label class="form-label">Nombre de la marca</label>
        <input type="text" name="nombre" class="form-control" value="{$marca->nombre}">
      </div>
      <div class="mb-3">
        <label class="form-label">Pais de origen</label>
        <input type="text" name="pais_de_origen" class="form-control" value="{$marca->pais_de_origen}">
      </div>
      <div class="mb-3">
        <label class="form-label">Año de fundacion</label>
        <input type="number" name="ano_de_fundacion" class="form-control" value="{$marca->ano_de_fundacion}">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="{$marca->descripcion}">
      </div>

      <input type="text" name="id_marca" class="form-control" value="{$marca->id_marca}" hidden>

      <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>
{include 'finHtml.tpl' }
