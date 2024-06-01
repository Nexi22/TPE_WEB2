{include 'inicioHtml.tpl' }
    <form class="col-3 m-auto" action="verificar_edicionMarca" method="POST">
    
      <legend class="text-center">Editar vehiculo</legend>
      <div class="mb-3">
        <label class="form-label">nombre de la marca</label>
        <input type="text" name="nombre" class="form-control" value="{$auto->nombre}">
      </div>
      <div class="mb-3">
        <label class="form-label">pais de origen</label>
        <input type="number" name="pais_de_origen" class="form-control" value="{$auto->anio}">
      </div>
      <div class="mb-3">
        <label class="form-label">año de fundacion</label>
        <input type="number" name="ano_de_fundacion" class="form-control" value="{$auto->precio}">
      </div>
      
      <div class="mb-3">
        <label class="form-label">descripcion</label>
        <input type="text" name="descripcion" class="form-control" value="{$auto->color}">
      </div>

      <input type="text" name="id_marca" class="form-control" value="{$marca->id_marca}" hidden>
      
     

      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>

{include 'finHtml.tpl' }
