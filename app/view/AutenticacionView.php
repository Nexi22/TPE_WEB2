<?php
require_once "app/view/view.php";

class AutenticacionView extends view{
    function mostrarLogin ($msj = NULL){

        $this->smarty->assign("msj", $msj);
        $this->smarty->display('login.tpl');
    }
}
