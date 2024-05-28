<?php
require_once "app/model/model.php";

class VehicleModel extends model{

    function getAllVehicles(){
        //CREO LA CONEXION Y ENVIO LA CONSULTA A LA DB
        $db = $this->createConexion();

        $consulta = $db->prepare("SELECT * FROM auto");
        $consulta->execute();
        $vehicles = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $vehicles;
    }

    function insertar($modelo, $anio, $precio, $color, $marca){
        $db = $this->createConexion();
        $consulta = $db->prepare("INSERT INTO auto (modelo, anio, precio, color,id_marca) VALUES (?, ?, ?, ?, ?)");
        $consulta->execute([$modelo, $anio, $precio, $color, $marca]);
    }
     
    function vehiculoVendido($id){ //preguntarle al profe, no cambia a vendido
        $db = $this->createConexion();
        $resultado= $db->prepare("UPDATE auto SET vendido = ? WHERE id = ?");
        $resultado->execute([1,$id]); // ejecuta
    }

    function borrarVehiculo($id){
        $db = $this->createConexion();
        $resultado= $db->prepare("DELETE FROM auto WHERE id = ?");
        $resultado->execute([$id]); // ejecuta
    }
    
    function get($id){
        //abrimos la conexion;
        $db = $this->createConexion();
        //Enviar la consulta
        $sentencia = $db->prepare("SELECT * FROM auto WHERE id = ?");
        $sentencia->execute([$id]);
        $vehicle = $sentencia->fetch(PDO::FETCH_OBJ);
        return $vehicle;
    }


    

    function mostrarFormVehiculo(){
        $db = $this->createConexion();
        
    }    
}
