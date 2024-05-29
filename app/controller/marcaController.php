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
   
    function agregarMarca(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_POST['nombre'])&& !empty($_POST['pais_de_origen']) && !empty($_POST['ano_de_fundacion']) 
                && !empty($_POST['descripcion'])){

                    $modelo = $_POST['nombre'];
                    $anio = $_POST['pais_de_origen'];
                    $precio = $_POST['ano_de_fundacion'];
                    $color = $_POST['descripcion'];
                    $this->model->insertar($nombre, $pais_de_origen, $ano_de_fundacion, $descripcion);
                    header("Location:" .BASE_URL. "mostrarMarcas");
                    
                }

        }    
    }
    

 }




