<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type");
header('Content-type:text/json');

session_start();

$data = file_get_contents("php://input");
$data = json_decode($data);

$message = array('message'=>'success');

if(($data->userName==123)&&($data->passWord==123)){
    $_SESSION['name'] = $data->userName;
    echo json_encode($message);
}else {
    $message['message'] = 'error';
    echo json_encode($message);
}
?>

