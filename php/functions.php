<?php 

function peticionGet($table,$params){
    if($_SERVER["HTTP_HOST"] == "localhost")
        $url = "localhost:8000/api/";
    else
        $url = 'https://api-eatit.herokuapp.com/api/';
    $ch = curl_init();
    if($params == null){
        curl_setopt($ch, CURLOPT_URL, $url . $table . '/'); 
    }else{
        curl_setopt($ch, CURLOPT_URL, $url . $table . '/' . $params); 
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $data = curl_exec($ch); 
    curl_close($ch); 
    $data = json_decode($data);
    return $data;
}
function peticionPost($table,$data){
    if($_SERVER["HTTP_HOST"] == "localhost")
        $url = "localhost:8000/api/";
    else
        $url = 'https://api-eatit.herokuapp.com/api/';
    $fields_string = $data;
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_URL, $url . $table . '/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields_string));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-type: application/json"]);
    $data = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($data);
    return $data;
}

function peticionPut($table,$data){
    if($_SERVER["HTTP_HOST"] == "localhost")
        $url = "localhost:8000/api/";
    else
        $url = 'https://api-eatit.herokuapp.com/api/';
    $fields_string = $data;
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_URL, $url . $table . '/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields_string));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-type: application/json"]);
    $data = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($data);
    return $data;
}

function peticionDelete($table,$params){
    if($_SERVER["HTTP_HOST"] == "localhost")
        $url = "localhost:8000/api/";
    else
        $url = 'https://api-eatit.herokuapp.com/api/';
    $ch = curl_init();
    if($params == null){
        curl_setopt($ch, CURLOPT_URL, $url . $table . '/'); 
    }else{
        curl_setopt($ch, CURLOPT_URL, $url . $table . '/' . $params); 
    }
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $data = curl_exec($ch); 
    curl_close($ch); 
    $data = json_decode($data);
    return $data;
}


function checkUsuari(){
    session_start();
    if(isset($_SESSION["usuariEatit"])){
        $usuari = $_SESSION["usuariEatit"];
        return $usuari;
    }
    else{
        // header('Location: ./index.php');
    }
        
}

function checkRestaurant(){
    session_start();
    if(isset($_SESSION["restaurant"])){
        $restaurant = $_SESSION["restaurant"][0];
        return $restaurant;
    }
    else{
        // header('Location: ./index.php');
    }
        
}

?>