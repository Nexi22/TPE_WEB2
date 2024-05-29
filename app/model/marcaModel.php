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

    function insertar($nombre, $pais_de_origen, $año_de_fundacion, $descripcion){
        $db = $this->createConexion();
        $consulta = $db->prepare("INSERT INTO marca (nombre, pais_de_origen, ano_de_fundacion, descripcion) VALUES (?, ?, ?, ?)");
        $consulta->execute([$nombre, $pais_de_origen, $ano_de_fundacion, $descripcion]);
    }


}


