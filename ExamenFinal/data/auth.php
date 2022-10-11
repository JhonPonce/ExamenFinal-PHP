<?php 
//donde se utilice sessiones llamar a : 
session_start();
//Consultar o procesqr informacion para el inicio de session
require_once('database.php');
//validar si lo que viene del login
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $accion = $_POST['accion'];
    if($accion === 'login'){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $sql = "SELECT id, nombre, username, estado
                FROM `usuarios`
                WHERE username='$usuario' AND password='$password'";
        $user = $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        //validamos si se usuario existe
        //creamos la session de usuario - La que se valida en el index
        if($user){
            $_SESSION['usuario'] = $user;
            $respuesta = [
                "codigo" => 200,
                "data" => $user
            ];
        }else{
            $respuesta = [
                "codigo" => 404,
                "mensaje" => "usuario y/o password incorrecto"
            ];
        }
        //Se envia como objeto Json (compuesta por clave valor)
        echo json_encode($respuesta);
    }
}
?>