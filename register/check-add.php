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

    $sql = "INSERT INTO `student_contact_details`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_emergency_contact`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_motivation_letter`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_academic_qualification`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_english_qualification`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_gmat_details`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_gre_details`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

    $sql = "INSERT INTO `student_professional_experience`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);


    $sql = "INSERT INTO `student_refree`(`student_account_id`) VALUES ('".$last_id."')";
    $objQuery = mysqli_query($objCon, $sql);

}

if(isset($obj->student_personal_details[0])){

    $sql = "UPDATE `student_personal_details` SET `title`='".$obj->student_personal_details[0]->title."',`first_name`= '".$obj->student_personal_details[0]->firstname."',
`middle_name`= '".$obj->student_personal_details[0]->middlename."',`last_name`= '".$obj->student_personal_details[0]->lastname."',
`citizenship`='".$obj->student_personal_details[0]->citizenship."',`date_of_birth`='".$obj->student_personal_details[0]->dob."',
`country_of_birth`='".$obj->student_personal_details[0]->conutryofbirth."',`city_of_birth`='".$obj->student_personal_details[0]->cityofbirth."',
`citizenship`='".$obj->student_personal_details[0]->citizenship."',`county_of_permanent_residence`='".$obj->student_personal_details[0]->county_permanent."'
 WHERE `student_account_id`= '".$obj->student_personal_details[0]->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_contact_details[0])){

    $sql = "UPDATE `student_contact_details` SET `address_line_1`= '".$obj->student_contact_details[0]->address_line_1."',
    `address_line_2`= '".$obj->student_contact_details[0]->address_line_2."',`province`= '".$obj->student_contact_details[0]->province."',
    `postcode`='".$obj->student_contact_details[0]->postcode."',`country`='".$obj->student_contact_details[0]->country."',
    `phone_1`='".$obj->student_contact_details[0]->phone_1."',`phone_2`='".$obj->student_contact_details[0]->phone_2."',
    `correspondence_address_status`='".$obj->student_contact_details[0]->correspondence_address_status."',
    `correspondence_address_detail`='".$obj->student_contact_details[0]->correspondence_address_detail."' WHERE `student_account_id` = '".$obj->student_contact_details[0]->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_emergency_contact[0])){

    $sql = "UPDATE `student_emergency_contact` SET `first_name`= '".$obj->student_emergency_contact[0]->first_name."',
    `last_name`= '".$obj->student_emergency_contact[0]->last_name."',`phone`= '".$obj->student_emergency_contact[0]->phone."',
    `email`='".$obj->student_emergency_contact[0]->email."' WHERE `student_account_id` = '".$obj->student_emergency_contact[0]->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_motivation_letter[0])){

    $sql = "UPDATE `student_motivation_letter` SET `detail`= '".$obj->student_motivation_letter[0]->detail."' 
    WHERE `student_account_id` = '".$obj->student_motivation_letter[0]->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

//$sql = "SELECT * FROM `admin` WHERE `username` = '".$username. "'";
//$objQuery = mysqli_query($objCon, $sql);
//$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
