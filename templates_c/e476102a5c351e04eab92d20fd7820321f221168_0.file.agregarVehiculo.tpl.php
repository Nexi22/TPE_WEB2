<?php
/* Smarty version 4.3.2, created on 2024-05-26 17:48:33
  from 'D:\XAMPP\htdocs\tpweb\TPE_WEB2\templates\agregarVehiculo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_665359d19a2501_31667310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e476102a5c351e04eab92d20fd7820321f221168' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\tpweb\\TPE_WEB2\\templates\\agregarVehiculo.tpl',
      1 => 1716670745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inicioHtml.tpl' => 1,
  ),
),false)) {
function content_665359d19a2501_31667310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:inicioHtml.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Lista de autos/motos</h1>
    <form class="col-3 m-auto" action="verify" method="POST">
    
      <legend class="text-center">Agregar auto/moto</legend>
      <div class="mb-3">
        <label class="form-label">Modelo del vehiculo</label>
        <input type="text" name="modelo" class="form-control" placeholder="Ingrese el modelo">
      </div>
      <div class="mb-3">
        <label class="form-label">Año del vehiculo</label>
        <input type="number" name="año" class="form-control" placeholder="Ingrese el año">
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
        <input type="text" name="marca" class="form-control" placeholder="Ingrese la marca">
      </div>
      
      


      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form><?php }
}
