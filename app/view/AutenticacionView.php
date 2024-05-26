<?php
require_once "libs/Smarty.class.php";
require_once "app/view/View.php";

class AutenticacionView{
    private $smarty;

   
    function mostrarLogin ($msj = NULL){

        $this->smarty->assign("msj", $msj);
        $this->smarty->display('login.tpl');
    }
}
