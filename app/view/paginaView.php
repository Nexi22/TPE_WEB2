<?php
require_once 'app/view/view.php'; 


class nosotrosView extends View{
  
  function verNosotros(){ 
    $this->smarty->display('nosotros.tpl');
  }
}