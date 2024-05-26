<?php
require 'libs/Smarty.class.php';

class VehicleView{


    function showForm(){
        $smarty = new Smarty();
        $smarty->assign('base',BASE_URL);
        $smarty->display('agregarVehiculo.tpl');

    }


}