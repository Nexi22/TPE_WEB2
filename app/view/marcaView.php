<?php
require_once 'app/view/view.php'; 

class marcaView extends View{
  
  function mostrarMarcas($marca){ //ESTO MUESTRA LA TABLA DE LAS MARCAS 
    $this->smarty->assign("cantidad", count($marca));
    $this->smarty->assign("marcas", $marca);
    $this->smarty->display('tablaMarca.tpl');
  }

  function detalleMarca($marca){
    $this->smarty->assign("marca", $marca);
    $this->smarty->display('verMarcas.tpl');
  }

  function editarMarca($marca){
    $this->smarty->assign('marca', $marca);
    $this->smarty->display('editarMarcas.tpl');
  }

  function mostrarformMarca($marcas){ //ESTO MUESTRA EL FORMULARIO PARA AÑADIR MARCAS
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display('agregarMarca.tpl');
  }

  function yaFiltrados($autos){
    $this->smarty->assign("autos", $autos);
    $this->smarty->display('vehiculosFiltrados.tpl');
  }

  function verFiltrados($marcas){
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display('filtradoPorMarca.tpl');
  }
}