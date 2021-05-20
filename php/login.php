<?php
    require_once("./functions.php");

    // $usuari = $_POST["usuari"];
    // $password = $_POST["password"];
    $usuari = "Andreu@gmail.com"
    $password = "P@ssw0rd";
    // $password = hash('sha512',$password);
    $params = "?Usuario=" . $usuari . "&Email=" . $usuari . "&Password=" . $password;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) == 1){
        session_start();
        $_SESSION["usuariEatit"] = $peticio[0];
        echo 1;
    }else{
        echo 0;
    }
?>