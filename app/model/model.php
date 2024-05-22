<?php
    require_once "config.php";
        //hacemos la conexcion con la base de datos
        class Model {

            protected $conexion;
            
            public function __construct()
            {
                $this->conexion = $this->createConexion();
                $this->deploy();
            }

            function createConexion(){
                try {
                    $db = new PDO("mysql:host=".MYSQL_HOST.";charset=utf8", MYSQL_USER, MYSQL_PASS);
                
                    $this->createOrUseDatabase($db);

                
                } catch(Exception $e){
                    die("Error al conectar a la base de datos: " . $e->getMessage());
                }

                return $db;
            }
        }// aca termina la conexion

            //en este paso vemos si esta la base de datos si no esta crea la base de datos  
        private function createOrUseDatabase($db){
            $query = $db->query("SHOW DATABASES LIKE '".MYSQL_DB."'");
            $databaseExists = $query->rowCount() > 0;
    
            if(!$databaseExists) {
                $db->query("CREATE DATABASE ".MYSQL_DB."");
            }
            
            $db->query("USE ".MYSQL_DB."");
        }
        
                  
    /*FUNCION QUE PERMITE LA CREACION DE TABLAS O ENTIDADES.*/
    private function deploy() {
        $this->createTables();           
    }


    private function createTables() {
        // En la variable sql se coloca el su codigo de creacion de tablas
        $sql = "CREATE TABLE IF NOT EXISTS `vehiculo` (
                `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
                `modelo` varchar(100) NOT NULL,
                `año` int(4) NOT NULL,
                `precio` int(30) NOT NULL,
                `color` varchar(30) NOT NULL,
                `id_marca` int(255) NOT NULL,
                PRIMARY KEY (`id_vehiculo`)
                );

                CREATE TABLE `marca` (
                    `id_marca` int(11) NOT NULL AUTO_INCREMENT,
                    `nombre` varchar(250) NOT NULL,
                    `pais_de_origen` varchar(250) NOT NULL,
                    `ano_de_fundacion` int(250) NOT NULL,
                    `descripcion` varchar(250) NOT NULL,
                     PRIMARY KEY (`id_marca`)
                )
                                
                CREATE TABLE IF NOT EXISTS `usuario` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `email` varchar(250) NOT NULL,
                `password` varchar(250) NOT NULL,
                `rol` varchar(20) NOT NULL,
                PRIMARY KEY (`id`)
                );
                "
        
        $this->conexion->query($sql);
    }