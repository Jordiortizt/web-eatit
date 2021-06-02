<?php
    require_once("./functions.php");

    $usuari = checkUsuari();

    $email = $_POST["email"];

    $params = "1?Email=". $email;
    $peticio = peticionGet("usuarios", $params)->usuarios;

    if(count($peticio) >= 1){
        if($usuari->id == $peticio[0]->id){
            echo 0;
        }else{
            echo 1;
        }
    }else{
        echo 0;
    }
?>