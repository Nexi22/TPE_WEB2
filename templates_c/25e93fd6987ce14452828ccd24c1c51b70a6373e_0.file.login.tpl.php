<?php
/* Smarty version 4.3.2, created on 2024-05-25 00:34:38
  from 'C:\xampp\htdocs\TPE_WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665115febfbaa4_48846758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e93fd6987ce14452828ccd24c1c51b70a6373e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\login.tpl',
      1 => 1716589849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicioHtml.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_665115febfbaa4_48846758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicioHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
        <?php if ($_smarty_tpl->tpl_vars['msj']->value) {?>
          <div class='alert alert-warning'>
            <?php echo $_smarty_tpl->tpl_vars['msj']->value;?>

          </div>
        <?php }?>
        <button type="submit" class="btn btn-primary col-12">Submit</button>
    </form>
<?php $_smarty_tpl->_subTemplateRender('file:finHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
