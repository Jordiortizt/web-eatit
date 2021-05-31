<?php
    require_once("./functions.php");

    $tel = $_POST["nom"];

    $params = "1?Nombre=". $tel;
    $peticio = peticionGet("restaurantes", $params)->restaurantes;
    if(count($peticio) >= 1){
        echo 1;
    }else{
        echo 0;
    }
?>