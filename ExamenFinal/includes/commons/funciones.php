<?php

//Funcion para saber si esta logeo o no
function isLogged(): bool
{
    //isset para determinar si una variable está declarada y si tiene un valor diferente a null
    if(!isset($_SESSION['usuario'])){
        return false;
    }
    return true;
}

?>