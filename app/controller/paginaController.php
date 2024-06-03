<?php
require_once "app/view/paginaView.php";

class paginaController{

    private $model;
    private $view;
    private $err;

    public function __construct() {
        
        $this->view = new nosotrosView();
       
    }

    function mostrarNosotros(){
        $this->view->verNosotros();  
    }



}