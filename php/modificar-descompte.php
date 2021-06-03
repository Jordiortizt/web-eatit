<?php

    require_once("./functions.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $idDescuento = intval($_POST["id"]);

    header("Location: ../modificar-descompte.php?trokolo=".$idDescuento."");
?>