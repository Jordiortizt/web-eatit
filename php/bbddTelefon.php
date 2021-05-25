<?php
    require_once("./functions.php");

    $tel = $_POST["tel"];

    $params = "?Telefono=". $tel;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) == 1){
        return 1;
        echo $peticio;
    }else{
        return 0;
    }
?>