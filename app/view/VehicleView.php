<?php
require 'app/view/view.php';

class VehicleView{

    function showForm(){
        $smarty = new Smarty();
        $smarty->assign('base',BASE_URL);
        $smarty->display('agregarVehiculo.tpl');

    }


}