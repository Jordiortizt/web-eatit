<?php
    try {
        require_once './conn.php';
    
        $usuari = $_POST["usuari"];
        $password = $_POST["password"];
        
        $sql = $conectar->prepare("SELECT * FROM Administrador WHERE usuari LIKE '$usuari' AND contrasenya LIKE '$password'");
        $sql->execute();
        $data = $sql->fetchAll();

        echo count($data);
        

    }catch (PDOException $econexion) {
        print "¡Error al conectar!: " . $econexion->getMessage() . "";
        die();
    }
    $conectar =null;
?>