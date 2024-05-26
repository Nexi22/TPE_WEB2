<?php
/* Smarty version 4.3.2, created on 2024-05-25 23:05:19
  from 'D:\XAMPP\htdocs\tpweb\TPE_WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6652528f7cd825_86062044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff71684e2b371bf62e40c401222330ae06718d8c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\tpweb\\TPE_WEB2\\templates\\login.tpl',
      1 => 1716670745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicioHtml.tpl' => 1,
    'file:finHtml.tpl' => 1,
  ),
),false)) {
function content_6652528f7cd825_86062044 (Smarty_Internal_Template $_smarty_tpl) {
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
