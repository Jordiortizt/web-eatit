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

    $params = "";
    $pedidos = peticionGet('pedidos',$params)->pedidos;
    foreach($pedidos as $key => $value){
        $id=$value->ID;
    }
//    session_start();
//    $_SESSION["pedido"] = (object)$arrayParams;

    

    foreach($_SESSION["carro"] as $key => $value){
        $arrayParams["IDPedido"] = intval($id);
        $arrayParams["IDPlato"] = intval($value["id"]);
        $peticio2 = peticionPost("platospedido",$arrayParams);
    }

    echo 1;
?>