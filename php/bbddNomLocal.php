<?php
    require_once("./functions.php");

    $tel = $_POST["nom"];
    $tel = str_replace(" ","%20%",$tel);
    $params = "?Nombre=" . $tel;
    $peticio = peticionGet('restaurantes',$params)->restaurantes;

    $total = count($peticio);

    if($total > 0){
        echo 1;
    }else{
        echo 0;
    }
?>