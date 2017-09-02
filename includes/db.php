<?php

$con=mysqli_connect("localhost","root","","bucket_network");
if(mysqli_connect_errno()){
	echo"Failed to connect to MySQL : ".mysqli_connect_error();
	die("error");
}

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}


?>