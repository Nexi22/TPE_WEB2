<?php
require 'app/view/view.php';

class VehicleView extends view{

    function showForm(){
        $this->smarty->assign('base',BASE_URL);
        $this->smarty->display('agregarVehiculo.tpl');

    }


}