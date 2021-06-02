<?php
    require_once("./functions.php");

    $usuari = checkUsuari();

    $nom = $_POST["nom"];
    $desc = $_POST["desc"];
    $tipus = $_POST["tipus"];
    $minim = $_POST["minim"];
    $municipi = $_POST["municipi"];
    $direccio = $_POST["direccio"];
    $domicili = intval($_POST["domicili"]);

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
    $arrayParams["URLFoto"] = "https://www.antiguarestaurante.com/es/media/ee367c51f9/ee367c51f659c9963f83cba87c831516.cms.jpg";
    $arrayParams["IDPropietario"] = intval($usuari->id);
    $arrayParams["DocumentoValido"] = "Invent";
    $arrayParams["Aceptado"] = 0;
    $arrayParams["ServicioDomicilio"] = $domicili;

    $peticio = peticionPost("restaurantes",$arrayParams);
    $ok = json_encode($peticio);

    echo 1;




























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