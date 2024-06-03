<?php
require_once 'app/view/view.php';

class VehicleView extends View{

    function mostrarVehiculos($vehicles){
        
      // assign para asignar varibles a smarty clave -> valor sin esto no anda el mostrar el vehiclecontrollerS
        $this->smarty->assign("cantidad", count($vehicles));
        $this->smarty->assign("vehicles", $vehicles);
        $this->smarty->display('tablaVehicles.tpl');

    }

    function detalleVehiculo($vehiculo){
      $this->smarty->assign("vehicle", $vehiculo);
      $this->smarty->display('verVehiculos.tpl');
    }

    function editarVehiculo($auto){
      $this->smarty->assign('auto', $auto);
      $this->smarty->display('editarVehiculos.tpl');
    }



    function mostrarFormVehiculo($marca){
      $this->smarty->assign('marca', $marca);
      $this->smarty->display('agregarVehiculo.tpl');
    }

    

    // function mostrarPorMarca($vehi){ //se utiliza para filtrar por marca en la tabla tablaVehicles
    //   $this->smarty->assign('vehi', $vehi);
    //   $this->smarty->display('vehiculosXMarcas.tpl');
    // }

}