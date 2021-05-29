<?php
    require_once("./functions.php");

    $tel = $_POST["tel"];

    $params = "1?Telefono=". $tel;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) >= 1){
        echo 1;
    }else{
        echo 0;
    }
?>