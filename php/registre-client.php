<?php
    require_once("./functions.php");
    // require_once("../core/bucket.php");
    $name = $_POST["form-first-name"];
    $surname = $_POST["form-last-name"];
    $birth = $_POST["birth"];
    $email = $_POST["form-email"];
    $tel = $_POST["form-tel"];
    $pass1 = $_POST["form-password"];
    $pass2 = $_POST["form-repeat-password"];
    $dni = $_POST["form-dni"];
    $sector = $_POST["form-sector"];
    $poblacion = $_POST["form-poblacion"];
    $fotoName = $_FILES["foto"]["name"];
    $fotoTmp = $_FILES["foto"]["tmp_name"];
    $tipus = $_POST["tipus"];

    $fotoName = str_replace(" ","",$fotoName);
    $result = $s3Client->putObject([
        'Bucket' => $bucket,
        'Key' => 'fotosUsuarios/' . $fotoName,
        'SourceFile' => $fotoTmp,
    ]);
    $s3_route = "https://pfinaljp.s3-eu-west-1.amazonaws.com/fotosUsuarios/" . $fotoName;
    
    $pass1 = hash('sha512',$pass1);
    /*$params = "?Nombre=" . $name . "&Apellidos=" . $surname . "&Fecha_nacimiento=" . $birth . "&Email=" . $email . "&Telefono=" . $tel . "&Password=" . $pass1 . "&DNI=" . $dni . "&Sector_laboral=" . $sector . "&Poblacion=" . $poblacion . "&Foto=assets/uploads/" . $fotoName. "&Tipo=" . $tipo;*/

    $arrayParams["Nombre"] = $name;
    $arrayParams["Apellidos"] = $surname;
    $arrayParams["Fecha_nacimiento"] = $birth;
    $arrayParams["Email"] = $email;
    $arrayParams["Telefono"] = $tel;
    $arrayParams["Password"] = $pass1;
    $arrayParams["DNI"] = $dni;
    $arrayParams["Sector_laboral"] = $sector;
    $arrayParams["Poblacion"] = $poblacion;
    $arrayParams["Foto"] = $s3_route;
    $arrayParams["Tipo"] = $tipus;
   /* echo $params;*/
    $peticio = peticionPost("usuarios",$arrayParams);
    $ok = json_encode($peticio);
    if(strpos($ok,"ok") == 2){
        
        header('Location: ../../register.php?error=1&type=' . $tipus);
       
    }else{

        session_start();
        $_SESSION["userMinder"] = (object)$arrayParams;
        //print_r($_SESSION["userMinder"]);
        header('Location: ../../app/');
    }

?>
