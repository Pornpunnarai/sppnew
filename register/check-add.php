<?php
include '../connect-mysql.php';

$input = file_get_contents('php://input');
$obj = json_decode($input);



if(isset($obj->student_account[0])){

    $obj = $obj->student_account[0];

    $sql = "INSERT INTO `student_account`(`email`, `password`) VALUES ('".$obj->email."','".$obj->password."')";
    $objQuery = mysqli_query($objCon, $sql);
    $last_id = $objCon->insert_id;

    $sql = "INSERT INTO `student_personal_details`(`student_account_id`, `first_name`, `last_name`,`gender`, `nationality`, `date_of_birth`) VALUES 
('".$last_id."','".$obj->firstname."','".$obj->lastname."','".$obj->gender."','".$obj->nationality."','".$obj->dob."')";
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
    $obj = $obj->student_personal_details[0];
    $sql = "UPDATE `student_personal_details` SET `title`='".$obj->title."',`first_name`= '".$obj->firstname."',
`middle_name`= '".$obj->middlename."',`last_name`= '".$obj->lastname."',
`citizenship`='".$obj->citizenship."',`date_of_birth`='".$obj->dob."',
`country_of_birth`='".$obj->conutryofbirth."',`city_of_birth`='".$obj->cityofbirth."',
`citizenship`='".$obj->citizenship."',`county_of_permanent_residence`='".$obj->county_permanent."'
 WHERE `student_account_id`= '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_contact_details[0])){
    $obj = $obj->student_contact_details[0];
    $sql = "UPDATE `student_contact_details` SET `address_line_1`= '".$obj->address_line_1."',
    `address_line_2`= '".$obj->address_line_2."',`province`= '".$obj->province."',
    `postcode`='".$obj->postcode."',`country`='".$obj->country."',
    `phone_1`='".$obj->phone_1."',`phone_2`='".$obj->phone_2."',
    `correspondence_address_status`='".$obj->correspondence_address_status."',
    `correspondence_address_detail`='".$obj->correspondence_address_detail."' WHERE `student_account_id` = '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_emergency_contact[0])){
    $obj = $obj->student_emergency_contact[0];
    $sql = "UPDATE `student_emergency_contact` SET `first_name`= '".$obj->first_name."',
    `last_name`= '".$obj->last_name."',`phone`= '".$obj->phone."',
    `email`='".$obj->email."' WHERE `student_account_id` = '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_motivation_letter[0])){
    $obj = $obj->student_motivation_letter[0];
    $sql = "UPDATE `student_motivation_letter` SET `detail`= '".$obj->detail."' 
    WHERE `student_account_id` = '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}


if(isset($obj->student_academic_qualification[0])){
    $obj = $obj->student_academic_qualification[0];

    $sql = "UPDATE `student_academic_qualification` SET `institution`= '".$obj->institution."',`city`= '".$obj->city."',`qualification`= '".$obj->qualification."',
    `subject`= '".$obj->subject."',`thesis_title`= '".$obj->thesis_title."',`start_date`= '".$obj->start_date."',`end_date`='".$obj->end_date."',
    `graduation_date`= '".$obj->graduation_date."',`official_duration`= '".$obj->official_duration."'
    WHERE `student_account_id` = '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}

if(isset($obj->student_english_qualification[0])){
    $obj = $obj->student_english_qualification[0];

    $sql = "UPDATE `student_english_qualification` SET `question_1`= '".$obj->question_1."',`question_2`= '".$obj->question_2."',`question_3`= '".$obj->question_3."',
    `english_qualification`= '".$obj->english_qualification."',`score`= '".$obj->score."',`date_completed`= '".$obj->date_completed."'
    WHERE `student_account_id` = '".$obj->student_account_id."'";
    $objQuery = mysqli_query($objCon, $sql);

    echo $sql;

}



//$sql = "SELECT * FROM `admin` WHERE `username` = '".$username. "'";
//$objQuery = mysqli_query($objCon, $sql);
//$result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
