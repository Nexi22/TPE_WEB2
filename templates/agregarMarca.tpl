{include 'inicioHtml.tpl' }
<h1>Lista Marcas</h1>
    <form class="col-3 m-auto" action="agregarMarcaDb" method="POST">
    
      <legend class="text-center">Agregar marca</legend>
      <div class="mb-3">
        <label class="form-label">nombre</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">pais de origen</label>
        <input type="number" name="pais_de_origen" class="form-control" placeholder="Ingrese el pais de origen">
      </div>
      <div class="mb-3">
        <label class="form-label">año de fundacion</label>
        <input type="number" name="ano_de_fundacion" class="form-control" placeholder="Ingrese el año de fundacion">
      </div>
      
      <div class="mb-3">
        <label class="form-label">descripcion</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese la descripcion">
      </div>

      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form>