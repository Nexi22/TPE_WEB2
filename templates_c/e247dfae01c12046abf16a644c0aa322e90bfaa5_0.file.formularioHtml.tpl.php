<?php
/* Smarty version 4.3.2, created on 2024-05-22 21:18:06
  from 'D:\XAMPP\htdocs\tpweb\TPE_WEB2\templates\formularioHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664e44ee5e48c6_25777149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e247dfae01c12046abf16a644c0aa322e90bfaa5' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\tpweb\\TPE_WEB2\\templates\\formularioHtml.tpl',
      1 => 1716238098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664e44ee5e48c6_25777149 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Lista de autos/motos</h1>
    <form class="col-3 m-auto" action="addTask" method="POST">
    
      <legend class="text-center">Agregar auto/moto</legend>
      <div class="mb-3">
        <label class="form-label">Nombre del vehiculo</label>
        <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Descripción del vehiculo</label>
        <input type="text" name="descripcion" class="form-control" placeholder="Ingrese descripción">
      </div>
      <div class="mb-3">
        <label class="form-label">Prioridad del vehiculo</label>
        <select  name="prioridad" class="form-select">
          <option value="">Seleccione una prioridad</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary col-12">Submit</button>
  </form><?php }
}
