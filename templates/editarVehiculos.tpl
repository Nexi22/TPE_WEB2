{include 'inicioHtml.tpl' }
    <form class="col-3 m-auto" action="verificar_edicion" method="POST">
    
      <legend class="text-center">Editar vehiculo</legend>
      <div class="mb-3">
        <label class="form-label">Modelo del vehiculo</label>
        <input type="text" name="modelo" class="form-control" value="{$auto->modelo}">
      </div>
      <div class="mb-3">
        <label class="form-label">Año del vehiculo</label>
        <input type="number" name="anio" class="form-control" value="{$auto->anio}">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del vehiculo</label>
        <input type="number" name="precio" class="form-control" value="{$auto->precio}">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Color del vehiculo</label>
        <input type="text" name="color" class="form-control" value="{$auto->color}">
      </div>

      <input type="text" name="id_auto" class="form-control" value="{$auto->id_auto}" hidden>
      
     

      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>

{include 'finHtml.tpl' }
