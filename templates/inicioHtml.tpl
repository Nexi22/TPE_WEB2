<!DOCTYPE html>
<html lang="es">
<head>
  <base href="{$base}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <title>Concesionaria</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="nosotros">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          
            <li class="nav-item"><a class="nav-link" href="mostrarVehiculos">Vehiculos</a></li>
            <li class="nav-item"><a class="nav-link" href="mostrarMarcas">Marcas</a></li>
            
            {if $role == 'admin'}  {*en este if se pregunta el rol del usuario es 'admin' para mostrar  *}
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
              data-toggle="dropdown" aria-expanded="false">Agregar</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="AgregarAutoNavBTN">Vehiculo</a></li>
                  <li><a class="dropdown-item" href="AgregarMarcaNavBTN">Marca</a></li>
                </ul>
                </li>
            {/if}
            <li class="nav-item"><a class="nav-link" href="filtrarMarca">Buscar</a></li>
            {if $logeado}      {*en este if se pregunta  si esta logueado si lo esta muestra el logout si no muestra el login *}
                <li class="nav-item"><a class="nav-link" href="logout">logout</a></li>
                <li class="nav-item"><a class="nav-link">Bienvenido! {$usuario}</a></li>
                {else}
                  <li><a class="nav-link" href="login">Login</a></li>
            {/if}
            
            

        </ul>
      </div>
    </div>
  </nav>

  <!-- Incluye jQuery y Popper.js antes del script de Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
