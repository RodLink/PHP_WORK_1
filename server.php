<?php
header("Access-Control-Allow-Origin:http://10.30.29.59:63341");
header("Access-Control-Allow-Credentials:true");
header("Context-Type:text/json");


$userName=$_SESSION['userName'];
$data=array('userName'=>$userName);
echo json_encode($data);
