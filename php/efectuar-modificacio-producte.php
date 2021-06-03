<?php
    require_once("./functions.php");

    $restaurant = checkRestaurant();

    $tel = $_POST["nom"];
    $params = "?Nombre=" . $tel."&id".intval($restaurant->ID);
    $peticion = peticionGet('platos',$params)->platos;

    $total = count($peticion);

    if($total > 0){
        header("Location: ../modificar-producte.php?error=1&trokolo=".intval($_POST["id"]));
        return 1;
    }

    $arrayParams["Plato"] = $_POST["nom"];
    $arrayParams["Precio"] = floatval($_POST["preu"]);
    $arrayParams["Descripcion"] = $_POST["desc"];
//    $arrayParams["URLFoto"] = $s3_route;

    $peticio = peticionPut("platos/".intval($_POST["id"]),$arrayParams);
    
    header("Location: ../productes-propietari.php");
?>