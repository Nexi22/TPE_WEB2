{include 'inicioHtml.tpl' }
    <form class="col-3 m-auto" action="agregarAutoDb" method="POST">
    
      <legend class="text-center">Agregar vehiculo</legend>
      <div class="mb-3">
        <label class="form-label">Modelo del vehiculo</label>
        <input type="text" name="modelo" class="form-control" placeholder="Ingrese el modelo">
      </div>
      <div class="mb-3">
        <label class="form-label">Año del vehiculo</label>
        <input type="number" name="anio" class="form-control" placeholder="Ingrese el año">
      </div>
      <div class="mb-3">
        <label class="form-label">Precio del vehiculo</label>
        <input type="number" name="precio" class="form-control" placeholder="Ingrese el precio">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Color del vehiculo</label>
        <input type="text" name="color" class="form-control" placeholder="Ingrese el color">
      </div>

      
      <div class="mb-3">
        <label class="form-label">Marca del vehiculo</label>
          <select name="marca_id" class="form-control">
            <option value="">Seleccione una marca</option>
            {foreach from=$marcas item=marca}
              <option value="{$marca->id}">{$marca->nombre}</option>
            {/foreach}
          </select>
      </div>

      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>