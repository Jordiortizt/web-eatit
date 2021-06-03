<?php
    require_once("./functions.php");
    require_once("./bucket.php");

    $usuari = checkUsuari();

    $nom = $_POST["nom"];
    $desc = $_POST["desc"];
    $tipus = $_POST["tipus"];
    $minim = $_POST["minim"];
    $municipi = $_POST["municipi"];
    $direccio = $_POST["direccio"];
    $domicili = intval($_POST["domicili"]);

    $fotoName = $_FILES["foto"]["name"];
    $fotoTmp = $_FILES["foto"]["tmp_name"];

    $fotoName = str_replace(" ","",$fotoName);
    $result = $s3Client->putObject([
        'Bucket' => $bucket,
        'Key' => 'Restaurantes/' . $fotoName,
        'SourceFile' => $fotoTmp,
    ]);
    $s3_route = "https://s3ortizjairo.s3-eu-west-1.amazonaws.com/Restaurantes/" . $fotoName;

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

    $arrayParams["Nombre"] = $nom;
    $arrayParams["Ciudad"] = $municipi;
    $arrayParams["Calle"] = $direccio;
    $arrayParams["TipoDeComida"] = $tipus;
    $arrayParams["Descripcion"] = $desc;
    $arrayParams["Minimo"] = $minim;
    $arrayParams["URLFoto"] = $s3_route;
    $arrayParams["IDPropietario"] = intval($usuari->id);
    $arrayParams["DocumentoValido"] = "Invent";
    $arrayParams["Aceptado"] = 0;
    $arrayParams["ServicioDomicilio"] = $domicili;

    $peticio = peticionPost("restaurantes",$arrayParams);
    $ok = json_encode($peticio);

    header("Location: ../restaurants-propietari.php")




























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