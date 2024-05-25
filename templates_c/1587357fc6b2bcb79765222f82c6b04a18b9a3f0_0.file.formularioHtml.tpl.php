<?php
/* Smarty version 4.3.2, created on 2024-05-24 22:28:52
  from 'C:\xampp\htdocs\TPE_WEB2\templates\formularioHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6650f884966693_94631650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1587357fc6b2bcb79765222f82c6b04a18b9a3f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB2\\templates\\formularioHtml.tpl',
      1 => 1716582518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6650f884966693_94631650 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Lista de autos/motos</h1>
    <form class="col-3 m-auto" action="addVehicle" method="POST">
    
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
