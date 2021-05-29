<?php
    require_once("./functions.php");

    $user = $_POST["User"];

    $params = "1?User=". $user;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) >= 1){
        echo 1;
    }else{
        echo 0;
    }
?>