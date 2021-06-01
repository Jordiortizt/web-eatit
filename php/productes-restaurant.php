<?php
    require_once("./functions.php");

    $idRestaurant = $_POST["idRestaurant"];

    $params = $idRestaurant;
    $restaurants = peticionGet('restaurantes',$params)->restaurantes;
    
    session_start();
    $_SESSION["restaurant"] = $restaurants;

    if(isset($_SESSION["restaurant"])){
        echo 1;
    }else{
        echo 0;
    }

?>