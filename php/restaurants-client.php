<?php

    require_once("./functions.php");

    // $tipo = $_POST["tipo"];


    $params = "";
    $restaurants = peticionGet('restaurantes',$params)->restaurantes;
    foreach($restaurants as $key => $value){
        $output = "";
        if(strlen($value->Descripcion)>100){
            $output = substr($value->Descripcion, 0, 100).'...';
        }else{
            $output = $value->Descripcion;
        }
        
        echo    '<div class="restaurant" style="background-image: url(\''.$value->URLFoto.'\');">
                    <div class="" id="'.$value->ID.'" onclick="escollirRestaurant('.$value->ID.')">
                        <h2 class="">'.$value->Nombre.'</h2>
                        <p class="">'.$output.'</p>
                    </div>
                </div>';
        }
        


?>