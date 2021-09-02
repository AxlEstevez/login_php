<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

print_r($conexion);

// Realizar recepción de los datos envidos mediante
// el método post desde Ajax.
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$pass = md5($password); // encripta la clave del usuario.
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND " + 
"password = '$pass'";
$result = $conexion->prepare($query);
$result->execute();

if($result->rowCount() >= 1){
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;

}else{
    $_SESSION["s_usuario"] = null;
    $data = null;
}

print json_decode($data);
$conexion = null;
?>