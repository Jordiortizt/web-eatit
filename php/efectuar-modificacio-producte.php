<?php
    require_once("./functions.php");

    $restaurant = checkRestaurant();

    $tel = $_POST["nom"];
    $params = "?Nombre=" . $tel."&id".intval($restaurant->ID);
    $peticion = peticionGet('platos',$params)->platos;

    $img = $_POST["img"];

    $total = count($peticion);

    if($total > 0){
        header("Location: ../modificar-producte.php?error=1&trokolo=".intval($_POST["id"]));
        return 1;
    }

//    $fotoName = $_FILES["foto"]["name"];
//    $fotoTmp = $_FILES["foto"]["tmp_name"];
//
//    $fotoName = str_replace(" ","",$fotoName);

    $params = $_POST["id"];
    $peticion = peticionGet('platos',$params)->platos;

    if($peticion[0]->URLFoto == $fotoName){
        $arrayParams["Plato"] = $_POST["nom"];
        $arrayParams["Precio"] = floatval($_POST["preu"]);
        $arrayParams["Descripcion"] = $_POST["desc"];

        $peticio = peticionPut("platos/".intval($_POST["id"]),$arrayParams);
    }else{
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
    $arrayParams["Plato"] = $_POST["nom"];
    $arrayParams["Precio"] = floatval($_POST["preu"]);
    $arrayParams["Descripcion"] = $_POST["desc"];
    $arrayParams["URLFoto"] = $s3_route;

    $peticio = peticionPut("platos/".intval($_POST["id"]),$arrayParams);
    }

//try{
//    $result = $s3Client->putObject([
//        'Bucket' => $bucket,
//        'Key' => 'Platos/' . $fotoName,
//        'SourceFile' => $fotoTmp,
//    ]);
//    $s3_route = "https://s3ortizjairo.s3-eu-west-3.amazonaws.com/Platos/" . $fotoName;
//}catch(Exception $error){
//    echo $fotoName;
//    print_r($error);
//}

//    $arrayParams["Plato"] = $_POST["nom"];
//    $arrayParams["Precio"] = floatval($_POST["preu"]);
//    $arrayParams["Descripcion"] = $_POST["desc"];
////    $arrayParams["URLFoto"] = $s3_route;
//
//    $peticio = peticionPut("platos/".intval($_POST["id"]),$arrayParams);
    
    header("Location: ../productes-propietari.php");
?>