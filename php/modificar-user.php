<?php
    require_once("./functions.php");

    $user = checkUsuari();

    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $dni = $_POST["dni"];
    $direccio = $_POST["direccio"];
    $ciutat = $_POST["municipi"];

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

    $arrayParams["ID"] = intval($user->id); 
    $arrayParams["Nombre"] = $nom;
    $arrayParams["Apellidos"] = $cognom;
    $arrayParams["Usuario"] = $user->Usuario;
    $arrayParams["Password"] = $user->Password;
    $arrayParams["Email"] = $user->Email;
    $arrayParams["Telefono"] = $user->Telefono;
    $arrayParams["TipoUsuario"] = intval($user->TipoUsuario);
    $arrayParams["DNICIF"] = $dni;
    $arrayParams["Direccion"] = $direccio;
    $arrayParams["Ciudad"] = $ciutat;

    $peticio = peticionPut("usuarios/".$user->id,$arrayParams);
    $ok = json_encode($peticio);

    session_destroy();

    header("Location: ../login.php");




























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
