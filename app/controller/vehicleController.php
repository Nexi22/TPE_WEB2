<?php
require_once "app/model/VehicleModel.php";
require_once "app/view/VehicleView.php";

class vehicleController{

    private $model;

    private $view;

    private $err;
}

public function __construct() {
    $this->model = new vehicleModel();
    $this->view = new vehicleViiew();
    $this->err = new vehicleErr();

}

function newVehicle(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(!empty($_POST['modelo'])&& !empty($_POST['']))
    }
}