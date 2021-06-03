<?php
    require_once("./functions.php");
    require_once("./bucket.php");

    $usuari = checkUsuari();
    $restaurant = checkRestaurant();

    $tel = $_POST["nom"];
    $tel = str_replace(" ","%20%",$tel);
    $params = "?Nombre=".$tel."&id=".intval($restaurant->ID);
    $peticion = peticionGet('platos',$params)->platos;

    $total = count($peticion);

    if($total > 0){
        header("Location: ../registre-producte.php?error=1");
        return 1;
    }

    $nom = $_POST["nom"];
    $desc = $_POST["desc"];
    $preu = intval($_POST["preu"]);

    $fotoName = $_FILES["foto"]["name"];
    $fotoTmp = $_FILES["foto"]["tmp_name"];

    $fotoName = str_replace(" ","",$fotoName);
try{
    $result = $s3Client->putObject([
        'Bucket' => $bucket,
        'Key' => 'Platos/' . $fotoName,
        'SourceFile' => $fotoTmp,
    ]);
    $s3_route = "https://s3ortizjairo.s3-eu-west-3.amazonaws.com/Platos/" . $fotoName;
}catch(Exception $error){
    echo $fotoName;
    print_r($error);
}

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

    $arrayParams["IDRestaurante"] = intval($restaurant->ID);
    $arrayParams["Plato"] = $nom;
    $arrayParams["Precio"] = $preu;
    $arrayParams["Descripcion"] = $desc;
    $arrayParams["URLFoto"] = $s3_route;

    $peticio = peticionPost("platos",$arrayParams);
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