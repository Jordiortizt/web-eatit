<?php 

function peticionGet($table,$params){
    $ch = curl_init();
    if($params == null){
        curl_setopt($ch, CURLOPT_URL, 'https://api-eatit.herokuapp.com/api/' . $table . '/'); 
    }else{
        curl_setopt($ch, CURLOPT_URL, 'https://api-eatit.herokuapp.com/api/' . $table . '/' . $params); 
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    $data = curl_exec($ch); 
    curl_close($ch); 
    $data = json_decode($data);
    return $data;
}

function peticionPost($table,$data){
    $fields_string = $data;
    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($ch, CURLOPT_URL, 'https://api-eatit.herokuapp.com/api/' . $table . '/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields_string));
    curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-type: application/json"]);
    $data = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($data);
    return $data;
}

function checkUser(){
    session_start();
    if(isset($_SESSION["usuariEatit"])){
        $user = $_SESSION["usuariEatit"];
        return $user;
    }
    else
        header('Location: ../');
}

?>