<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Access-Control-Allow-Headers:content-type");
header('Content-type:text/html;charset=utf-8');
session_start();
$message=array('message' => 'success');
echo json_encode($message);
session_destroy();
?>
