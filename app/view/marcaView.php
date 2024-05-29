<?php
require_once 'app/view/view.php'; 

class marcaView extends View{

    
    function mostrarMarcas($marcas){
      $this->smarty->assign("cantidad", count($marcas));
      $this->smarty->assign("marcas", $marcas);
      $this->smarty->display('tablaMarca.tpl');
      
  }

  function mostrarformMarca(){
    $this->smarty->display('agregarMarca.tpl');

  }

}