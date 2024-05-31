<?php

require_once "app/controller/vehicleController.php";
require_once "app/controller/AutenticacionController.php";
// require_once "app/controller/ErrController.php";
require_once "app/controller/marcaController.php";
require_once "app/controller/paginaController.php";

// definimos la base url de forma dinamica
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    
    if (empty($_GET['action'])) {       
        $_GET['action'] = 'login';
    }

    $action = $_GET['action'];
    $parametro = explode('/', $action);
   
    //  ACA VAN TODAS LAS FUNCIONES QUE TIENE LA PAGINA, Y PASAN POR EL ROUTER.
    switch ($parametro[0]) {
        // login y verificar si esta logueado
        case 'login':
            $controller = new AutenticacionController();
            $controller->MostrarLogin();
            break;
        
        case 'verificarLog':
            $controller = new AutenticacionController();
            $controller->verificar();
            break;

        case 'logout':
            $controller = new AutenticacionController();
            $controller->logout();
            break;
        
        case 'about':
            $pass = "12345";
            echo password_hash($pass, PASSWORD_DEFAULT);
            break;

        // router parte de "nosotros"
         case 'nosotros':
            $controller = new paginaController();
            $controller->mostrarNosotros();
            break;


        // router parte de la tabla autos
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

        case'getVehicleByID':
            $controller = new vehicleController();
            $controller-> detalleVehiculo($parametro[1]);
            break;
            
        case 'verVehiculo':
            $controller = new vehicleController();
            $controller-> verVehiculo($parametro[1]);
            break;
            
        case 'vendido':
            $controller = new vehicleController();
            $controller->vehiculoVendido($parametro[1]);
            break;
            
        case 'borrar':
            $controller = new vehicleController();
            $controller->borrarVehiculo($parametro[1]);
            break;     
        
        case 'editar':
            $controller = new vehicleController();
            $controller->editarVehiculo($parametro[1]);
            break;    
        
        case 'verificar_edicion':
            $controller = new vehicleController();
            $controller->verificarEdicion();
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
            break;

        // case 'eliminarMarca':
        //     $controller = new marcaController();
        //     $controller->borrarMarca();
        //     break;

        // case 'detalleMarca':
        //     $controller = new marcaController();
        //     $controller->detalleMarca($parametro[1]);
        //     break;    

        case 'verMarca':
            $controller = new marcaController();
            $controller-> verMarca($parametro[1]);
            break;    

        // default:
        //     $err = new ErrController();
        //     $err->showErr("404 not found");
    }