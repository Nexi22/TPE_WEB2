<?php
require_once "app/model/VehicleModel.php";
require_once "app/view/VehicleView.php";

class vehicleController{

    private $marcaModel;
    private $model; 
    private $view;
    private $err;

    public function __construct() {
        $this->model = new vehicleModel();
        $this->view = new VehicleView();
        $this->marcaModel = new marcaModel();
        // $this->err = new vehicleErr();
    }

    function mostrarVehiculos(){
        if(AuthHelpers::checkLogged()){
            $vehicles = $this->model->getAutoyMarca();
            $this->view->mostrarVehiculos($vehicles);  
        }else{
            header("Location:".BASE_URL."login");

        }
    }

    function agregarVehiculo(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['modelo'])&& !empty($_POST['anio']) && !empty($_POST['precio']) 
                && !empty($_POST['color'])){

                    $modelo = $_POST['modelo'];
                    $anio = $_POST['anio'];
                    $precio = $_POST['precio'];
                    $color = $_POST['color'];
                    $id = $_POST['marca_id'];
                    $this->model->insertar($modelo, $anio, $precio, $color, $id);
                    header("Location:" .BASE_URL. "mostrarVehiculos");
                    
                }
        }    
    }

    function vehiculoVendido($id){
            $this->model->vehiculoVendido($id);
            header("Location:".BASE_URL."mostrarVehiculos");
        }

    function borrarVehiculo($id){
        $this->model->borrarVehiculo($id);
        header("Location:".BASE_URL."mostrarVehiculos");
    }
    function editarVehiculo($id){ //LLEVA AL FORM PARA EDITAR EL VEHICULO
        $auto=$this->model->getVehicleByID($id);
        $this->view->editarVehiculo($auto);
    }

    function verificarEdicion(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['modelo'])&& !empty($_POST['anio']) && !empty($_POST['precio']) 
                && !empty($_POST['color'])){

                    $modelo = $_POST['modelo'];
                    $anio = $_POST['anio'];
                    $precio = $_POST['precio'];
                    $color = $_POST['color'];
                    $id = $_POST['id_auto'];
                    
                    $this->model->editarVehiculo($modelo, $anio, $precio, $color, $id);
                    header("Location:" .BASE_URL. "mostrarVehiculos");
                    
                }            
                }
       // header("Location:".BASE_URL."mostrarVehiculos");
    }


    
    function detalleVehiculo($id){
        $this->model->getVehicleByID($id);
        header("Location:".BASE_URL."verVehiculo");
    }

    function verVehiculo($id){
        $this->view->detalleVehiculo($id);
    }

     function mostrarFormVehiculo(){
        $marca= $this->marcaModel->getNombreMarca();
        $this->view->mostrarFormVehiculo($marca);
     }
}


    
