<?php
require_once "app/view/paginaView.php";

class paginaController{

    private $model;
    private $view;
    private $err;

    public function __construct() {
        //$this->model = new vehicleModel();
        $this->view = new nosotrosView();
        // $this->err = new vehicleErr();
    }

    function mostrarNosotros(){
        $this->view->verNosotros();  
    }



}