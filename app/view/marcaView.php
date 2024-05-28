<?php
require_once 'app/view/view.php';

class marcaView extends View{

    
    function mostrarMarcas($marcas){

      $this->smarty->assing("marcas", $marcas);
      //$this->smarty->display('tablaMarca.tpl');
      $this->smarty->display('inicioHtml.tpl');
  }

}