<?php 
//donde se utilice sessiones llamar a : 
session_start();
//Consultar o procesqr informacion para el inicio de session
require_once('database.php');
//validar si lo que viene del login
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $accion = $_POST['accion'];
    if($accion === 'agregar'){
        $titulo = $_POST['titulo'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $habitaciones = $_POST['habitaciones'];
        $estacionamiento = $_POST['estacionamiento'];
        
        $sql = "INSERT INTO departamentos(titulo,precio,descripcion,habitaciones,estacionamiento) values ( '$titulo', $precio , '$descripcion' , $habitaciones , $estacionamiento );";
        $respuesta = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        echo json_encode($respuesta);
    }
}
