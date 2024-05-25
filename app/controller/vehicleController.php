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

    function showForm(){
        $this->view->showForm();   
    }

    function newVehicle(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(!empty($_POST['modelo'])&& !empty($_POST['año']) && !empty($_POST['precio']) 
                && !empty($_POST['color'] && !empty($_POST['marca'])))
            {
                $modelo = $_POST['modelo'];
                $año = $_POST['año'];
                $precio = $_POST['precio'];
                $color = $_POST['color'];
                $marca = $_POST['marca'];
                $this->model->insertar($modelo, $año, $precio, $color, $marca);
                header("Location:".BASE_URL."showForm");
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
}