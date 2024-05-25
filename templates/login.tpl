{include 'inicioHtml.tpl'}

<h1>Lista de tareas</h1>
    <form class="col-3 m-auto" action="verificarLog" method="POST">
      <legend class="text-center">Inicio de Sesion</legend>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name="email" class="form-control" placeholder="Ingrese Email">
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="text" name="password" class="form-control" placeholder="Ingrese contraseña">
        </div>
        {if $msj}
          <div class='alert alert-warning'>
            {$msj}
          </div>
        {/if}
        <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>
{include 'finHtml.tpl'}
