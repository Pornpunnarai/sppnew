<?php
include '../connect-mysql.php';

$sql = "SELECT * FROM `admin` WHERE `username` = '".$username. "'";
$objQuery = mysqli_query($objCon, $sql);
//$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
