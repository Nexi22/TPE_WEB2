<?php
/* Smarty version 4.3.2, created on 2024-05-24 23:27:54
  from 'C:\xampp\htdocs\TPE_WEB2\templates\inicioHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6651065a3242f5_83285016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed4e11795b8d4d6f4068c9b64497c982773467b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\inicioHtml.tpl',
      1 => 1716586061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6651065a3242f5_83285016 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
  <base href=<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <title>Consecionaria</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">AUTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MOTOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">NOSOTROS</a>
              </li>
            </ul>
          </div>
    </div>
  </nav>
</body>
</html>
<?php }
}
