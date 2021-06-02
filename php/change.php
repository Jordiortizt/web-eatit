<?php
    require_once("./functions.php");

    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $tel = intval($_POST["tel"]);
    $email = $_POST["email"];
    $dni = $_POST["dni"];
    $usuari = $_POST["usuari"];
    if(!isset($_POST["password"])){
        $pass = null;
    }else{
        $pass = $_POST["password"];
    }
    $direccio = $_POST["direccio"];
    $ciutat = $_POST["ciutat"];

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;

    $arrayParams["Nombre"] = $nom;
    $arrayParams["Apellidos"] = $cognom;
    $arrayParams["Usuario"] = $usuari;
    if($pass != null){
        $arrayParams["Password"] = hash('sha512',$pass);
    }
    $arrayParams["Email"] = $email;
    $arrayParams["Telefono"] = $tel;
    $arrayParams["DNICIF"] = $dni;
    $arrayParams["Direccion"] = $direccio;
    $arrayParams["Ciudad"] = $ciutat;

    $peticio = peticionPut("usuarios",$arrayParams);
    $ok = json_encode($peticio);

    session_start();
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
