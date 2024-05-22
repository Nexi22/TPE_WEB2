<?php
/* Smarty version 4.3.2, created on 2024-05-20 22:48:19
  from 'D:\XAMPP\htdocs\Tp1Web\templates\formularioHtml.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_664bb713516fd7_32308904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac27f87552de21ae160ae55b4d49211fd1e7fc0c' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\Tp1Web\\templates\\formularioHtml.tpl',
      1 => 1716238098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664bb713516fd7_32308904 (Smarty_Internal_Template $_smarty_tpl) {
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
