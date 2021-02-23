<?php

error_reporting(0);
$server = "localhost";
$user = "root";
$psw = "";
$db = "yorr";

$con = mysqli_connect($server,$user,$psw,$db);

if(!$con){
    echo"Database Not Connected Successfilly! Please Check init file..";
}


?>