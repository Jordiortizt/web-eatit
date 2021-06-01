<?php

    require_once("./functions.php");

    $usuari = checkUsuari();

    // $tipo = $_POST["tipo"];


    $params = "?Propietario=".intval($usuari->id);

    $restaurants = peticionGet('restaurantes',$params)->restaurantes;
    foreach($restaurants as $key => $value){
        echo    '<div class="restaurant" style="background-image: url(\''.$value->URLFoto.'\');">
                    <div class="" id="'.$value->ID.'" onclick="escollirRestaurantPropietari('.$value->ID.')">
                        <h2 class="">'.$value->Nombre.'</h2>
                        <p class="">'.$value->Descripcion.'</p>
                    </div>
                </div>';
        }
        


?>