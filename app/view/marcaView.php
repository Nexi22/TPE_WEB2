<?php
require_once 'app/view/view.php'; 

class marcaView extends View{
  
    function mostrarMarcas($marcas){ //ESTO MUESTRA LA TABLA DE LAS MARCAS 
      $this->smarty->assign("cantidad", count($marcas));
      $this->smarty->assign("marcas", $marcas);
      $this->smarty->display('tablaMarca.tpl');
    }

    function detalleMarca($marca){
      $this->smarty->assign("marca", $marca);
      $this->smarty->display('verMarcas.tpl');
    }

  function mostrarformMarca($marcas){ //ESTO MUESTRA EL FORMULARIO PARA AÑADIR MARCAS
    $this->smarty->assign("marcas", $marcas);
    $this->smarty->display('agregarMarca.tpl');
  }
}