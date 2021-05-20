<?php
    require_once("./functions.php");

    // $usuari = $_POST["usuari"];
    // $password = $_POST["password"];
    $usuari = "Andreu@gmail.com"
    $password = "P@ssw0rd";
    // $password = hash('sha512',$password);
    $params = "?Email=" . $usuari . "&Password=" . $password;
    $peticio = peticionGet("usuarios", 1);
    if(count($peticio) == 1){
        session_start();
        $_SESSION["usuariEatit"] = $peticio[0];
        echo 1;
    }else{
        echo 0;
    }
?>