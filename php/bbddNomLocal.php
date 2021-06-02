<?php
    error_reporting(0);
    require_once("./functions.php");

    $tel = $_POST["nom"];

    $params = "?Nombre=". $tel;
    $peticio = peticionGet('restaurantes',$params)->restaurantes;

    if(count($peticio) > 0){
        echo 1;
    }else{
        echo 0;
    }
?>