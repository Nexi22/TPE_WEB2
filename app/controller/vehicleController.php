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

    function newVehicle(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_POST['modelo'])&& !empty($_POST['anio']) && !empty($_POST['precio']) 
                && !empty($_POST['color'] && !empty($_POST['marca'])))
            {
                $modelo = $_POST['modelo'];
                $año = $_POST['anio'];
                $precio = $_POST['precio'];
                $color = $_POST['color'];
                $marca = $_POST['marca'];
                $this->model->insertar($modelo, $anio, $precio, $color, $marca);
                header("Location:".BASE_URL."mostrarVehiculos");
            }
            else{
                $this->err->showErr("FALTAN DATOS!");
            }
        }
    }


    function ShowVehicles(){
        $vehicles = $this->model->getAllVehicles();
        $this->view->ShowVehicles($vehicles);
    }

    function vehiculoVendido($id){
            $this->model->vendido($id);
            header("Location:".BASE_URL."mostrarVehiculos");
        }
}
    
