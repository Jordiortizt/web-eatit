<?php

    $idRestaurant = $_POST["idRestaurant"];

    $_SESSION["restaurant"] = $idRestaurant;

    if(isset($_SESSION["restaurant"])){
        echo 1;
    }else{
        echo 0;
    }

?>