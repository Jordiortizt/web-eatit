<?php
    require_once("./functions.php");

    $email = $_POST["email"];

    $params = "1?Email=". $email;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) >= 1){
        echo 1;
    }else{
        echo 0;
    }
?>