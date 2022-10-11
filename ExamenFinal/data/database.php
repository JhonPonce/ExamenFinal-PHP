<?php 
$db = new PDO('mysql:host=localhost; dbname=inmobiliaria','Sise','Sise2021');
if(!$db){
    echo 'Error al conectar la Base de Datos';
    exit;
}
