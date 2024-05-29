<?php
require_once 'app/view/view.php';

class VehicleView extends View{

    function mostrarVehiculos($vehicles){
        
      // assign para asignar varibles a smarty clave -> valor sin esto no anda el mostrar el vehiclecontroller
        
        $this->smarty->assign("cantidad", count($vehicles));
        $this->smarty->assign("vehicles", $vehicles);
        $this->smarty->display('tablaVehicles.tpl');

    }

    function detalleVehiculo($vehicle){
      $this->smarty->assign("vehiculo", $vehicle);
      $this->smarty->display('verVehiculos.tpl');
    }

    function mostrarFormVehiculo(){
        $this->smarty->display('agregarVehiculo.tpl');
  }
}