<?php
/* Smarty version 4.3.2, created on 2024-05-27 00:42:35
  from 'D:\XAMPP\htdocs\tpweb\TPE_WEB2\templates\inicioHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6653badb580956_12090219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5461825c69720a28bf59db7e7114dafb305c64c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\tpweb\\TPE_WEB2\\templates\\inicioHtml.tpl',
      1 => 1716759336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6653badb580956_12090219 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a class="nav-link active" aria-current="page" href="#">Agregar </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Nosotros</a>
              </li>
            </ul>
          </div>
    </div>
  </nav>
</body>
</html>
<?php }
}