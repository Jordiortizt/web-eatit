<?php
    require_once("./functions.php");

    $restaurant = checkRestaurant();

    $tel = $_POST["codi"];
    $params = "?Codigo=" . $tel."&Restaurante".intval($restaurant->ID);
    $peticion = peticionGet('descuentos',$params)->descuentos;

    $total = count($peticion);

    if($total > 0){
        header("Location: ../modificar-descompte.php?error=1&trokolo=".intval($_POST["id"]));
        return 1;
    }

    $arrayParams["Codigo"] = $_POST["codi"];
    $arrayParams["TotalDescuento"] = floatval($_POST["descompte"]);

    $peticio = peticionPut("descuentos/".intval($_POST["id"]),$arrayParams);
    
    header("Location: ../productes-propietari.php");
?>