<?php
    require_once("./functions.php");

    $dni = $_POST["dni"];

    $params = "1?DNI=". $dni;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) >= 1){
        echo 1;
    }else{
        echo 0;
    }
?>