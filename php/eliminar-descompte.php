<?php
    require_once("./functions.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $tel = $_POST["id"];
    $params = intval($tel);
    $peticion = peticionDelete('descuentos',$params)->descuentos;

    if(count($peticion) == 1){
        header("Location: ../productes-propietari.php");
    }else{
        header("Location: ../productes-propietari.php");
    }
?>