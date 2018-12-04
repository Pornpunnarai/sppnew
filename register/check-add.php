<?php
include '../connect-mysql.php';

$input = file_get_contents('php://input');
$obj = json_decode($input);



if(isset($obj->student_account[0])){

    $sql = "INSERT INTO `student_account`(`email`, `password`) VALUES ('".$obj->student_account[0]->email."','".$obj->student_account[0]->password."')";
    $objQuery = mysqli_query($objCon, $sql);
    $last_id = $objCon->insert_id;

    $sql = "INSERT INTO `student_personal_details`(`student_account_id`, `first_name`, `last_name`,`gender`, `nationality`, `date_of_birth`) VALUES 
('".$last_id."','".$obj->student_account[0]->firstname."','".$obj->student_account[0]->lastname."','".$obj->student_account[0]->gender."','".$obj->student_account[0]->nationality."'
,'".$obj->student_account[0]->dob."')";
    echo $sql;
    $objQuery = mysqli_query($objCon, $sql);

}
//$sql = "SELECT * FROM `admin` WHERE `username` = '".$username. "'";
//$objQuery = mysqli_query($objCon, $sql);
//$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
