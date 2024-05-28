<?php
require_once "app/model/model.php";

class marcaModel extends model {
    
    function mostrarFormMarca(){
        $db = $this->createConexion();
        
    }   

    function getALLMarcas(){
        $db = $this->createConexion();
        $consulta = $db->prepare("SELECT * FROM marca");
        $consulta->execute();
        $marcas = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
        
    }


}


