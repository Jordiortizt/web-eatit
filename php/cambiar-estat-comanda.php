<?php
    require_once("./functions.php");
    
    $arrayParams["Estado"] = intval($_POST["estat"]);

    $peticio = peticionPut("pedidos/".intval($_POST["id"]),$arrayParams);
    
    echo 1;

?>