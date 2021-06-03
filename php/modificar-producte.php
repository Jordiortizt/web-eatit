<?php

    require_once("./functions.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $idProducto = intval($_POST["id"]);

    header("Location: ../modificar-producte.php?trokolo=".$idProducto."");
?>