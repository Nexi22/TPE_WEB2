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

    function mostrarFormMarca(){ //agarra las marcas usando el método getAllMarcas y pasa los datos a la vista.
        $marcas = $this->model->getALLMarcas();
        $this->view->mostrarFormMarca($marcas);
    }
   
    function agregarMarca(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre'])&& !empty($_POST['pais_de_origen']) && !empty($_POST['ano_de_fundacion']) 
                && !empty($_POST['descripcion'])){
                    $nombre = $_POST['nombre'];
                    $pais_de_origen = $_POST['pais_de_origen'];
                    $ano_de_fundacion = $_POST['ano_de_fundacion'];
                    $descripcion = $_POST['descripcion'];
                    
                    $this->model->insertarMarca($nombre, $pais_de_origen, $ano_de_fundacion, $descripcion);
                    header("Location:" .BASE_URL. "mostrarVehiculos");
                }

        }    
    }
}




