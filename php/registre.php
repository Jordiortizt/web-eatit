<?php
    require_once("./functions.php");

    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $dni = $_POST["dni"];
    $usuari = $_POST["usuari"];
    $pass = $_POST["password"];
    $tipus = intval($_POST["tipus"]);

    // $fotoName = str_replace(" ","",$fotoName);
    // $result = $s3Client->putObject([
    //     'Bucket' => $bucket,
    //     'Key' => 'fotosUsuarios/' . $fotoName,
    //     'SourceFile' => $fotoTmp,
    // ]);
    // $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;
    
    $pass = hash('sha512',$pass);

    $arrayParams["Nombre"] = $nom;
    $arrayParams["Apellidos"] = $cognom;
    $arrayParams["Usuario"] = $usuari;
    $arrayParams["Password"] = $pass;
    $arrayParams["Email"] = $email;
    $arrayParams["Telefono"] = $tel;
    $arrayParams["TipoUsuario"] = $tipus;
    $arrayParams["DNICIF"] = $dni;

    $peticio = peticionPost("usuarios",$arrayParams);
    $ok = json_encode($peticio);

    session_start();
    $_SESSION["userEatit"] = (object)$arrayParams;

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
