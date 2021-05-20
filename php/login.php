<?php
    require_once("./functions.php");

    $usuari = $_POST["usuari"];
    $password = $_POST["password"];
    // $password = hash('sha512',$password);
    $params = "?usuario=" . $usuari . "&correo=" . $usuari . "&password=" . $password;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) == 1){
        session_start();
        $_SESSION["usuariEatit"] = $peticio[0];
        echo 1;
    }else{
        echo 0;
    }
?>