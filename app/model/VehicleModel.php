<?php
require_once "app/model/model.php";

class VehicleModel extends model{

    function getAllVehicles(){
        //CREO LA CONEXION Y ENVIO LA CONSULTA A LA DB
        $db = $this->createConexion();

        $consulta = $db->prepare("SELECT * FROM auto");
        $consulta->execute();
        $vehiculos = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $vehiculos;
    }

    function insertar($modelo, $año, $precio, $color, $marca){
        $db = $this->createConexion();
        $consulta = $db->prepare("INSERT INTO auto (modelo, año, precio, color, id_marca) VALUES (?, ?, ?, ?, ?)");
        $consulta->execute([$modelo, $año, $precio, $color, $marca]);
    }
     
    
}
