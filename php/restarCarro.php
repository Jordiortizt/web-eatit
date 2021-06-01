<?php
    require_once("./functions.php");

    $usuari = checkUsuari();
    
    $id = $_POST["id"];
    // $_SESSION["carro"]=array();

    // $_SESSION["carro"][] -= $id;
    $key = array_search($id,$_SESSION["carro"]);
    
    unset($_SESSION["carro"][$key]);

    print_r($_SESSION["carro"]);
?>