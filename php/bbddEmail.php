<?php
    require_once("./functions.php");

    $email = $_POST["email"];

    $params = "?Email=". $email;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) == 1){
        return 1;
    }else{
        return 0;
    }
?>