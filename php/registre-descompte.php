<?php
    require_once("./functions.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $tel = $_POST["codi"];
    $params = "?Codigo=" . $tel."&Restaurante".intval($restaurant->ID);
    $peticion = peticionGet('descuentos',$params)->descuentos;

    $total = count($peticion);

    if($total > 0){
        header("Location: ../registre-descompte.php?error=1");
        return 1;
    }

    $codi = $_POST["codi"];
    $descompte = floatval($_POST["descompte"]);


    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

    $arrayParams["Codigo"] = $codi;
    $arrayParams["TotalDescuento"] = $descompte;
    $arrayParams["IDRestaurante"] = intval($restaurant->ID);

    $peticio = peticionPost("descuentos",$arrayParams);
    $ok = json_encode($peticio);

    header("Location: ../productes-propietari.php");




























    //if(strpos($ok,"ok") == 2){
       //echo 0;
        //header('Location: ../../register.php?error=1&type=' . $tipus);
    //}else{
        //session_start();
        //$_SESSION["userEatit"] = (object)$arrayParams;
        // header('Location: ./index-client.php');
        //echo 1;
    //}

?>