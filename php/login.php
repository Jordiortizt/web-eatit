<?php
    require_once("./functions.php");

    $usuari = $_POST["usuari"];
    $password = $_POST["password"];
    $pass = hash('sha512',$password);
    // $params = "?User=". $usuari ."&Email=". $usuari ."&Telefono=". $usuari ."&Password=". $pass;
    $params = "?User=". $usuari ."&Password=". $pass;
    $peticio = peticionGet("usuarios", $params)->usuarios;
    if(count($peticio) == 1){
        session_start();
        $_SESSION["usuariEatit"] = $peticio[0];
        echo 1;
    }else{
        echo 0;
    }
?>