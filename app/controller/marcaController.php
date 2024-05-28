<?php   
require_once "app/model/marcaModel.php";
require_once "app/view/marcaview.php";

class marcaController{
    private $model;
    private $view;
    //private $err;


    public function __construct(){
        $this->model = new marcaModel();
        $this->view = new marcaView();
    }

    function mostrarMarcas(){
        
       $marcas =$this->model->getALLMarcas();
        $this->view->mostrarMarcas($marcas);
        
    }
   
    
    

 }




