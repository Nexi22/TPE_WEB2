<?php

require_once "app/controller/vehicleController.php";
require_once "app/controller/AutenticacionController.php";
// require_once "app/controller/ErrController.php";
require_once "app/controller/marcaController.php";

// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    //  ACA VAN TODAS LAS FUNCIONES QUE TIENE LA PAGINA, Y PASAN POR EL ROUTER.
    switch ($parametro[0]) {
       
        case 'login':
            $controller = new AutenticacionController();
            $controller->MostrarLogin();
            break;
        
        case 'verificarLog':
            $controller = new AutenticacionController();
            $controller->verificar();
            break;

        case 'AgregarAutoNavBTN':
            $controller = new vehicleController();
            $controller->mostrarFormVehiculo();
            break;    
        
        case 'mostrarVehiculos':
            $controller = new vehicleController();
            $controller->mostrarVehiculos();
            break;

        case 'agregarAutoDb':
            $controller = new vehicleController();
            $controller->agregarVehiculo();
            break;

        // case'verVehiculo':
        //     $controller = new vehicleController();
        //     $controller-> detalleVehiculo($parametro[1]);
        //     break;
            
        case 'vendido':
            $controller = new vehicleController();
            $controller->vehiculoVendido($parametro[1]);
            break;
            
        case 'borrar':
            $controller = new vehicleController();
            $controller->borrarVehiculo($parametro[1]);
            break;     

        //ROOT DE LA TABLA MARCA
          //  
            //
            //
            //
         case 'AgregarMarcaSubmitBTN': //ESTE INSERTA LA MARCA EN LA DB
            $controller = new marcaController();
            $controller->agregarMarca();
            break; 

        case 'AgregarMarcaNavBTN': //ESTO MUESTRA EL FORMULARIO
            $controller = new marcaController();
            $controller->mostrarFormMarca();
            break;
        
        case 'mostrarMarcas':
            $controller = new marcaController();
            $controller->mostrarMarcas();

        // default:
        //     $err = new ErrController();
        //     $err->showErr("404 not found");
    }