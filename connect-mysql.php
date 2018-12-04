<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "newspp";


$objCon = mysqli_connect($serverName,$username,$password,$dbName);

if(!$objCon){
    $serverName = "localhost";
    $username = "finedaecom_finedae";
    $password = "finedae";
    $dbName = "finedaecom_finedae";
    $objCon = mysqli_connect($serverName,$username,$password,$dbName);
}


mysqli_set_charset($objCon,"utf8");


?>