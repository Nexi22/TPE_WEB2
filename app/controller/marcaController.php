<?php   
require_once "app/model/marcaModel.php";
require_once "app/view/marcaview.php";

class marcaController{
    private $model;
    private $view;
    //private $err;


    public function __construct(){
        $this->model = new marcaModel();
        $this->view = new marcaView();
    }

    function mostrarFormMarca(){ //agarra las marcas usando el método getAllMarcas y pasa los datos a la vista.
        $marcas = $this->model->getALLMarcas();
        $this->view->mostrarFormMarca($marcas);
    }
   
    function agregarMarca(){ //FUNCION QUE AÑADE UN VEHICULO A LA DB
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre'])&& !empty($_POST['pais_de_origen']) && !empty($_POST['ano_de_fundacion']) 
                && !empty($_POST['descripcion'])){

                $nombre = $_POST['nombre'];
                $pais_de_origen = $_POST['pais_de_origen'];
                $ano_de_fundacion = $_POST['ano_de_fundacion'];
                $descripcion = $_POST['descripcion'];
                    
                $this->model->insertarMarca($nombre, $pais_de_origen, $ano_de_fundacion, $descripcion);
                header("Location:" .BASE_URL. "mostrarMarcas");
            }
        }    
    }

    //FUNCIONES DE LOS BOTONES DE LA TABLA MARCA

    function borrarMarca($id){
        $this->model->borrarMarca($id);
        header("Location:".BASE_URL."mostrarMarcas");
    }


    public function verMarca($id) {
        $marca = $this->model->getMarcaByID($id);  
        $this->view->detalleMarca($marca);
    }

    function editarVehiculo($id){ //LLEVA AL FORM PARA EDITAR LA MARCA
        $marca=$this->model->getMarcaByID($id);
        $this->view->editarMarca($marca);
    }
    //FIN DE LAS FUNCIONES DE LOS BOTONES

    function verificarEdicion(){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST['nombre'])&& !empty($_POST['pais_de_origen']) && !empty($_POST['ano_de_fundacion']) 
                && !empty($_POST['descripcion'])){

                $nombre = $_POST['nombre'];
                $pais_de_origen = $_POST['pais_de_origen'];
                $ano_de_fundacion = $_POST['ano_de_fundacion'];
                $descripcion = $_POST['descripcion'];
                $id_marca = $_POST['id_marca'];
                    
                $this->model->editarMarca($nombre, $pais_de_origen, $ano_de_fundacion, $descripcion, $id_marca);
                header("Location:" .BASE_URL. "mostrarMarcas");        
            }            
        }
    }

    function editarMarca($id){ //LLEVA AL FORM PARA EDITAR LA MARCA
        $auto=$this->model->getMarcaByID($id);
        $this->view->editarMarca($auto);
    }


    function mostrarMarcas(){
        $marcas = $this->model->getALLMarcas();
        $this->view->mostrarMarcas($marcas);
    }

}




