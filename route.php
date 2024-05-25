<?php

require_once "app/controller/vehicleController.php";
require_once "app/controller/AutenticacionController.php";
// require_once "app/controller/ErrController.php";

// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    //  ACA VAN TODAS LAS FUNCIONES QUE TIENE LA PAGINA, Y PASAN POR EL ROUTER.
    switch ($parametro[0]) {
        // case 'tasks':
        //     break;

        // case 'about':
        //     break;

        case 'showForm':
            $controller = new vehicleController();
            $controller->showForm();
            break;

        case 'login':
            $controller = new AutenticacionController();
            $controller->MostrarLogin();
            break;

        case 'verificarLog':
            $controller = new AutenticacionController();
            $controller->verificar();
            break;

        // case 'delete':
        //     $controller = new vehicleController();
        //     $controller->deleteVehicle($parametro[1]);
        //     break;

    
        //  case 'finalize':
        //     $controller = new vehicleController();
        //     $controller->finalizeVehicle($parametro[1]);
        //     break;

        // case 'show':
        //     $controller = new vehicleController();
        //     $controller->showVehicle($parametro[1]);
        //     break;

        // default:
        //    $err = new ErrController();
        //    $err->showErr("404 not found");
    }