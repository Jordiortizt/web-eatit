<?php
    require_once("./functions.php");

    $user = checkUsuari();

    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $tel = intval($_POST["tel"]);
    $email = $_POST["email"];
    $dni = $_POST["dni"];
    $usuari = $_POST["usuari"];
    $direccio = $_POST["direccio"];
    $ciutat = $_POST["ciutat"];

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

//    $arrayParams["ID"] = intval($user->id); 
    $arrayParams["Nombre"] = $nom;
    $arrayParams["Apellidos"] = $cognom;
    $arrayParams["Usuario"] = $usuari;
    $arrayParams["Password"] = $user->Password;
    $arrayParams["Email"] = $email;
    $arrayParams["Telefono"] = $tel;
    $arrayParams["TipoUsuario"] = intval($user->TipoUsuario);
    $arrayParams["DNICIF"] = $dni;

    $peticio = peticionPut("usuarios",$arrayParams);
    $ok = json_encode($peticio);

    $_SESSION["userEatit"] = (object)$arrayParams;

    print_r($arrayParams);




























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
