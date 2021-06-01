<?php
    require_once("./functions.php");

    $usuari = checkUsuari();
    
    $id = $_POST["id"];
    $foto = $_POST["foto"];
    $titol = $_POST["titol"];
    $preu = $_POST["preu"];

    if(!isset($_SESSION["carro"])){
        $_SESSION["carro"]=array();
    }

    $_SESSION["carro"][] += $id;

    $key = array_key_last($_SESSION["carro"]);

    $_SESSION["carro"][$key] = array('id' => $id, 'foto' => $foto, 'titol' =>$titol,'preu'=>$preu);

    // $_SESSION["carro"][$key]["foto"] = $foto;
    // $_SESSION["carro"][$key]["titol"] = $titol;
    // $_SESSION["carro"][$key]["preu"] = $preu;

    print_r($_SESSION["carro"]);
    
    // echo array_key_last($_SESSION["carro"]);
?>