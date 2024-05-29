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

    function insertarMarca($nombre, $pais_de_origen, $ano_de_fundacion, $descripcion){
        //CREA LA CONEXION A LA DB
        $db = $this->createConexion();
        //MANDAS LA CONSULTA
        $consulta = $db->prepare("INSERT INTO marca (nombre, pais_de_origen, ano_de_fundacion, descripcion) VALUES (?, ?, ?, ?)");
        //EJECUTAS
        $consulta->execute([$nombre, $pais_de_origen, $ano_de_fundacion, $descripcion]);
    }
}


