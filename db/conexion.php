<?php
    class Conexion{
        public static function conectar(){
            define('servidor','localhost' );
            define('nombre_db', 'prueba_db');
            define('usuario', 'root');
            define('password', '');

            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

            try{
                $conexion = new PDO("mysql:host".servidor.";dbname".nombre_db,
                usuario, password, $opciones);
                return $conexion;

            }catch (Exception $e){
                die("El erro con la conexión es: ".$e->getMessage());
            }
        }
    }
?>