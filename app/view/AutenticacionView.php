<?php
require_once "libs/Smarty.class.php";

class AutenticacionView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function mostrarLogin ($msj = NULL){
        
        $this->smarty->assign("base", BASE_URL);
        $this->smarty->assign("msj", $msj);
        $this->smarty->display('login.tpl');
    }
}
