{include 'inicioHtml.tpl' }
<h1>Lista Marcas</h1>
    <form class="col-3 m-auto" action="agregarMarcaDb" method="POST">
    
      <legend class="text-center">Agregar marca</legend>
      <div class="mb-3">
        <label class="form-label">nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese el modelo">
      </div>
      <div class="mb-3">
        <label class="form-label">pais de origen</label>
        <input type="number" name="pais_origen" class="form-control" placeholder="Ingrese el año">
      </div>
      <div class="mb-3">
        <label class="form-label">año de fundacion</label>
        <input type="number" name="ano_fundacion" class="form-control" placeholder="Ingrese el precio">
      </div>
      
      <div class="mb-3">
        <label class="form-label">descripcion</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese el color">
      </div>

      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>