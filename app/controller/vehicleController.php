<?php
require_once "app/model/VehicleModel.php";
require_once "app/view/VehicleView.php";

class vehicleController{

    private $model;
    private $view;
    private $err;

    public function __construct() {
        $this->model = new vehicleModel();
        $this->view = new VehicleView();
        // $this->err = new vehicleErr();
    }

    function mostrarVehiculos(){
        $vehicles = $this->model->getAllVehicles();
        $this->view->mostrarVehiculos($vehicles);  

    }

    function agregarVehiculo(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['modelo'])&& !empty($_POST['anio']) && !empty($_POST['precio']) 
                && !empty($_POST['color']) && !empty($_POST['id_marca'])){

                    $modelo = $_POST['modelo'];
                    $anio = $_POST['anio'];
                    $precio = $_POST['precio'];
                    $color = $_POST['color'];
                    $id_marca = $_POST['id_marca'];
                    $this->model->insertar($modelo, $anio, $precio, $color, $id_marca);
                    header("Location:" .BASE_URL. "mostrarVehiculos");
                    
                }
        }    
    }

    function vehiculoVendido($id){
            $this->model->vehiculoVendido($id);
            header("Location:".BASE_URL."mostrarVehiculo");
        }

    function borrarVehiculo($id){
            $this->model->borrarVehiculo($id);
            header("Location:".BASE_URL."mostrarVehiculo");
        }

    function datelleVehiculo($id){
            $this->model->detalleVehiculo($id);
            header("Location:".BASE_URL."mostrarVehiculo");
        }

     function mostrarFormVehiculo(){
            $this->view->mostrarFormVehiculo();
     }
}


    
