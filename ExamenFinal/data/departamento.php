<?php
    require_once('database.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    }else{
        $accion = $_GET['accion'];
        if($accion === 'listar'){
            $sql = "SELECT * FROM departamentos";
            $departamentos = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            //validamos la cantidad sea mayor de 0
            if(count($departamentos) > 0){
                $respuesta = [
                    "codigo" => 200,
                    "data" => $departamentos
                ];
            }else{
                $respuesta = [
                    "codigo" => 404,
                    "data" => "No hay data disponible"
                ];
            }
            echo json_encode($respuesta);
        }
    }
?>