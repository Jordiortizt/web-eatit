<?php
    require_once("./functions.php");
    
    $params = intval($_POST["id"]);
    $pedidos = peticionGet('pedidos',$params)->pedidos;
    
    $arrayParams["ID"] = intval($pedidos[0]->ID);
    $arrayParams["IDUsuario"] = intval($pedidos[0]->IDUsuario);
    $arrayParams["IDRestaurante"] = intval($pedidos[0]->IDRestaurante);
    $arrayParams["TotalPedido"] = $pedidos[0]->TotalPedido;
    $arrayParams["Estado"] = intval($_POST["estat"]);
    $arrayParams["IDDescuento"] = intval($pedidos[0]->ID);
    $arrayParams["Comentario"] = $pedidos[0]->Comentario;

    $peticio = peticionPut("pedidos",$arrayParams);
    
    echo 1;

?>