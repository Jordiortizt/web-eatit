<?php
    require_once("./functions.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $total = $_POST["total"];
    $descompte = $_POST["descompte"];
    $comentari = $_POST["comentari"];

    $params = "?Restaurante=".intval($restaurant->ID);
    $descomptes = peticionGet('descuentos',$params)->descuentos;

    $arrayParams["IDUsuario"] = intval($usuari->id);
    $arrayParams["IDRestaurante"] = intval($restaurant->ID);
    $arrayParams["TotalPedido"] = intval($total);
    $arrayParams["Comentario"] = $comentari;

    foreach($descomptes as $key => $value){
        if(strval($value->TotalDescuento) == strval($descompte)){
            $arrayParams["IDDescuento"] = intval($value->ID);
        }
    }
    
    $peticio = peticionPost("pedidos",$arrayParams);
    $ok = json_encode($peticio);

//    session_start();
//    $_SESSION["pedido"] = (object)$arrayParams;







    echo 1;
?>