<!DOCTYPE html>
<html>
<head>
    <title>Spp - Master's Program </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        /*custom font*/
        @import url(https://fonts.googleapis.com/css?family=Montserrat);

        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
        }

        html {
            background-image: url(../img/Desktop-Background/Register.png);
            background-size: cover;
            background-attachment: fixed;
            overflow: hidden;
        }

        body {

            font-family: lato-regular, lato-light;
            background: transparent;
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 30px;
        }

        #msform fieldset {
            background: #ffffff00;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
            padding: 20px 30px;
            box-sizing: border-box;
            width: 80%;
            margin: 0 10%;

            /*stacking fieldsets above each other*/
            position: absolute;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        /*inputs*/
        #msform input, #msform textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-size: 0.9em;
            font-weight: 100;
            padding: 0.3em;
            border: solid 1px rgba(255, 255, 255, 0.37);
            -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background-position: -800px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            color: #fff;
            font-family: lato-light;
            background-color: #121212bd;
            margin-right: 10px;
            padding: 0.8em;
        }

        #msform input:focus, #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #04B1DC;
            outline-width: 0;
            transition: All 0.5s ease-in;
            -webkit-transition: All  0.5s ease-in;
            -moz-transition: All 0.5s ease-in;
            -o-transition: All 0.5s ease-in;
        }

        /*buttons*/
        #msform .action-button {
            width: 100px;
            background: #3EB060;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 10px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover, #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #04B1DC;
        }

        #msform .action-button-previous {
            width: 100px;
            background: #C5C5F1;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover, #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
        }

        /*headings*/
        .fs-title {
            font-size: 18px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/
            counter-reset: step;
        }

        #progressbar li {
            list-style-type: none;
            color: white;
            text-transform: uppercase;
            font-size: 9px;
            width: 9%;
            float: left;
            position: relative;
            letter-spacing: 1px;
        }

        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 24px;
            height: 24px;
            line-height: 26px;
            display: block;
            font-size: 12px;
            color: #333;
            background: white;
            border-radius: 25px;
            margin: 0 auto 10px auto;
        }

        /*progressbar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: white;
            position: absolute;
            left: -50%;
            top: 9px;
            z-index: -1; /*put it behind the numbers*/
        }

        #progressbar li:first-child:after {
            /*connector not needed before the first step*/
            content: none;
        }

        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/
        #progressbar li.active:before, #progressbar li.active:after {
            background: #04B1DC;
            color: white;
        }

        .dme_link a {
            background: #FFF;
            font-weight: bold;
            color: #04B1DC;
            border: 0 none;
            border-radius: 25px;
            cursor: pointer;
            padding: 5px 25px;
            font-size: 12px;
        }

        .dme_link a:hover, .dme_link a:focus {
            background: #C5C5F1;
            text-decoration: none;
        }


        #title,#Miss,#Mrs,#Mr,#Ms{
            font-size: 0.9em;
            color: #fff;
            font-weight: 100;
            padding: 0.4em;
            border: solid 1px rgba(255, 255, 255, 0.37);
            -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
            background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background-position: -800px 0;
            background-size: 100%;
            background-repeat: no-repeat;
            color: #fff;
            font-family: lato-light;
            background-color: #121212bd;
            border-radius: 25px;
        }


        .text-box{
            text-align: right;
            color: white;
            margin-top: 10px;
        }

        #msform .action-button {
            margin: 10px 65px;
            float: right;
        }

    </style>
</head>
<body>
<!-- main -->
<!-- MultiStep Form -->
<div class="main wrapper" style="background: rgba(0, 0, 0, 0.6); height: 100vh;">
    <div class="row">

        <div class="col-lg-6 col-md-6 col-md-offset-3">
            <div class="row">
                <p style="text-align: center; padding-top: 5rem;"><img src="../img/logo.png" width="20%"></p><br>
                <p style="font-family: lato-bold; font-size: 24px; color: white;text-align: center;">Application form for Master of Arts in Public Policy degree program</p>
            </div>
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Personal Details</li>
                    <li>Contact Details</li>
                    <li>Emergency Contact</li>
                    <li>MOTIVATION LETTER</li>
                    <li>ACADEMIC QUALIFICATION</li>
                    <li>ACADEMIC QUALIFICATION (Cont.)</li>
                    <li>GMAT Details</li>
                    <li>GRE Details</li>
                    <li>PROFESSIONAL EXPERIENCE</li>
                    <li>REFEREES</li>
                    <li>SUBMISSION</li>

                </ul>
                <!-- fieldsets -->
                <?php include 'student_personal_details.php'?>
                <?php include 'student_contact_details.php'?>
                <?php include 'student_emergency_contact.php'?>
                <?php include 'student_motivation_letter.php'?>
                <?php include 'student_academic_qualification.php'?>
                <?php include 'student_english_qualification.php'?>
                <?php include 'student_gmat_details.php'?>
                <?php include 'student_gre_details.php'?>
                <?php include 'student_professional_experience.php'?>
                <?php include 'student_refree.php'?>
                <?php include 'student_submission.php'?>











            </form>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_personal_details` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);
                // console.log(obj);

                if(obj.title!=null){
                var radios = $('input:radio[name=title_name]');
                if(radios.is(':checked') === false) {
                    var title = "\""+obj.title+"\"";
                    radios.filter("[value="+title+"]").prop('checked', true);
                }
                }
                document.getElementById("firstname").value = obj.first_name;
                document.getElementById("middlename").value = obj.middle_name;
                document.getElementById("familyname").value = obj.last_name;
                document.getElementById("citizenship").value = obj.citizenship
                document.getElementById("dob").value = obj.date_of_birth;
                document.getElementById("conutryofbirth").value = obj.country_of_birth;
                document.getElementById("cityofbirth").value = obj.city_of_birth;
                document.getElementById("citizenship").value = obj.citizenship;
                document.getElementById("county_permanent").value = obj.county_of_permanent_residence;

                // document.getElementById("gender").value = obj.first_name;


                document.getElementById("student_personal_details").onchange = function() {student_personal_details()};
                function student_personal_details() {

                        var title =document.querySelector("input[name=title_name]:checked").value;
                        var firstname = document.getElementById("firstname").value;
                        var middlename = document.getElementById("middlename").value;
                        var lastname = document.getElementById("familyname").value;
                        var dob = document.getElementById("dob").value;
                        var conutryofbirth = document.getElementById("conutryofbirth").value;
                        var cityofbirth = document.getElementById("cityofbirth").value;
                        var citizenship = document.getElementById("citizenship").value;
                        var county_permanent = document.getElementById("county_permanent").value;


                        var student_personal_details = { "student_personal_details": [
                                {
                                    "student_account_id": obj.student_account_id,
                                    "title": title,
                                    "firstname": firstname,
                                    "middlename": middlename,
                                    "lastname": lastname,
                                    "dob": dob,
                                    "conutryofbirth": conutryofbirth,
                                    "cityofbirth": cityofbirth,
                                    "citizenship": citizenship,
                                    "county_permanent": county_permanent}
                            ]};
                        console.log(JSON.stringify(student_personal_details));


                        $.ajax({
                            type: 'POST',
                            url: 'check-add.php',
                            data: JSON.stringify(student_personal_details),
                            contentType: 'application/json',
                            success: function(msg){
                                console.log(msg);
                            }

                        });

                }
                function student_personal_details_check() {
                    console.log("sssssss")
                }
            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_contact_details` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);
                // console.log(obj);

                if(obj.correspondence_address_status!=null){
                    var radios = $('input:radio[name=correspondence_address_status]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.correspondence_address_status+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }

                document.getElementById("address_line_1").value = obj.address_line_1;
                document.getElementById("address_line_2").value = obj.address_line_2;
                document.getElementById("province").value = obj.province;
                document.getElementById("postcode").value = obj.postcode
                document.getElementById("country").value = obj.country;
                document.getElementById("phone_1").value = obj.phone_1;
                document.getElementById("phone_2").value = obj.phone_2;
                document.getElementById("correspondence_address_detail").value = obj.correspondence_address_detail;


                // document.getElementById("gender").value = obj.first_name;


                document.getElementById("student_contact_details").onchange = function() {student_contact_details()};
                function student_contact_details() {

                    var address_line_1 = document.getElementById("address_line_1").value;
                    var address_line_2 = document.getElementById("address_line_2").value;
                    var province = document.getElementById("province").value;
                    var postcode = document.getElementById("postcode").value;
                    var country = document.getElementById("country").value;
                    var phone_1 = document.getElementById("phone_1").value;
                    var phone_2 = document.getElementById("phone_2").value;
                    var correspondence_address_status = document.querySelector("input[name=correspondence_address_status]:checked").value;
                    var correspondence_address_detail = document.getElementById("correspondence_address_detail").value;




                    var student_contact_details = { "student_contact_details": [
                            {
                                "student_account_id": obj.student_account_id,
                                "address_line_1": address_line_1,
                                "address_line_2": address_line_2,
                                "province": province,
                                "postcode": postcode,
                                "country": country,
                                "phone_1": phone_1,
                                "phone_2": phone_2,
                                "correspondence_address_status": correspondence_address_status,
                                "correspondence_address_detail": correspondence_address_detail}
                        ]};
                    console.log(JSON.stringify(student_contact_details));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_contact_details),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_emergency_contact` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("first_name").value = obj.first_name;
                document.getElementById("last_name").value = obj.last_name;
                document.getElementById("phone").value = obj.phone;
                document.getElementById("email").value = obj.email






                document.getElementById("student_emergency_contact").onchange = function() {student_emergency_contact()};
                function student_emergency_contact() {

                    var first_name = document.getElementById("first_name").value;
                    var last_name = document.getElementById("last_name").value;
                    var phone = document.getElementById("phone").value;
                    var email = document.getElementById("email").value;




                    var student_emergency_contact = { "student_emergency_contact": [
                            {
                                "student_account_id": obj.student_account_id,
                                "first_name": first_name,
                                "last_name": last_name,
                                "phone": phone,
                                "email": email
                            }
                        ]};
                    console.log(JSON.stringify(student_emergency_contact));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_emergency_contact),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_motivation_letter` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("detail").value = obj.detail;







                document.getElementById("student_motivation_letter").onchange = function() {student_emergency_contact()};
                function student_emergency_contact() {

                    var detail = document.getElementById("detail").value;




                    var student_motivation_letter = { "student_motivation_letter": [
                            {
                                "student_account_id": obj.student_account_id,
                                "detail": detail
                            }
                        ]};
                    console.log(JSON.stringify(student_motivation_letter));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_motivation_letter),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_academic_qualification` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                if(obj.qualification!=null){
                    var radios = $('input:radio[name=qualification]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.qualification+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }
                document.getElementById("institution").value = obj.institution;
                document.getElementById("city").value = obj.city;

                document.getElementById("subject").value = obj.subject;
                document.getElementById("thesis_title").value = obj.thesis_title;
                document.getElementById("start_date").value = obj.start_date;
                document.getElementById("end_date").value = obj.end_date;
                document.getElementById("graduation_date").value = obj.graduation_date;
                document.getElementById("official_duration").value = obj.official_duration;






                document.getElementById("student_academic_qualification").onchange = function() {student_academic_qualification()};
                function student_academic_qualification() {
                    var qualification =document.querySelector("input[name=qualification]:checked").value;
                    var institution = document.getElementById("institution").value;
                    var city = document.getElementById("city").value;
                    var subject = document.getElementById("subject").value;
                    var thesis_title = document.getElementById("thesis_title").value;
                    var start_date = document.getElementById("start_date").value;
                    var end_date = document.getElementById("end_date").value;
                    var graduation_date = document.getElementById("graduation_date").value;
                    var official_duration = document.getElementById("official_duration").value;




                    var student_academic_qualification = { "student_academic_qualification": [
                            {
                                "student_account_id": obj.student_account_id,
                                "qualification": qualification,
                                "institution": institution,
                                "city": city,
                                "subject": subject,
                                "thesis_title": thesis_title,
                                "start_date": start_date,
                                "end_date": end_date,
                                "graduation_date": graduation_date,
                                "official_duration": official_duration

                            }
                        ]};
                    console.log(JSON.stringify(student_academic_qualification));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_academic_qualification),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_english_qualification` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                if(obj.question_1!=null){
                    var radios = $('input:radio[name=question_1]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.question_1+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }

                if(obj.question_2!=null){
                    var radios = $('input:radio[name=question_2]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.question_2+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }

                if(obj.question_3!=null){
                    var radios = $('input:radio[name=question_3]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.question_3+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }


                var english_qualification = obj.english_qualification.split(",");

                var check_box = $('input:checkbox[name=english_qualification]');
                for(var i=0;i<=english_qualification.length-1;i++){
                    var title = "\""+english_qualification[i]+"\"";
                    check_box.filter("[value="+title+"]").prop('checked', true);
                }


                document.getElementById("score").value = obj.score;
                document.getElementById("date_completed").value = obj.date_completed;







                document.getElementById("student_english_qualification").onchange = function() {student_english_qualification()};
                function student_english_qualification() {

                    var english_qualification = new Array();
                    $("input:checkbox[name=english_qualification]:checked").each(function(){
                        english_qualification.push($(this).val());
                    });

                    english_qualification = english_qualification.join();
                    var question_1 =document.querySelector("input[name=question_1]:checked").value;
                    var question_2 =document.querySelector("input[name=question_2]:checked").value;
                    var question_3 =document.querySelector("input[name=question_3]:checked").value;
                    var score = document.getElementById("score").value;
                    var date_completed = document.getElementById("date_completed").value;


                    var student_english_qualification = { "student_english_qualification": [
                            {
                                "student_account_id": obj.student_account_id,
                                "question_1": question_1,
                                "question_2": question_2,
                                "question_3": question_3,
                                "english_qualification": english_qualification,
                                "score": score,
                                "date_completed": date_completed

                            }
                        ]};
                    console.log(JSON.stringify(student_english_qualification));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_english_qualification),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_gmat_details` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("date_completed_gmat").value = obj.date_completed;
                document.getElementById("verbal_gmat").value = obj.verbal;
                document.getElementById("total_score").value = obj.total_score;
                document.getElementById("analytical_writing_gmat").value = obj.analytical_writing;
                document.getElementById("integrated_reasoning").value = obj.integrated_reasoning;






                document.getElementById("student_gmat_details").onchange = function() {student_gmat_details()};
                function student_gmat_details() {

                    var date_completed = document.getElementById("date_completed_gmat").value;
                    var verbal = document.getElementById("verbal_gmat").value;
                    var total_score = document.getElementById("total_score").value;
                    var analytical_writing = document.getElementById("analytical_writing_gmat").value;
                    var integrated_reasoning = document.getElementById("integrated_reasoning").value;

                    var student_gmat_details = { "student_gmat_details": [
                            {
                                "student_account_id": obj.student_account_id,
                                "date_completed": date_completed,
                                "verbal": verbal,
                                "total_score": total_score,
                                "analytical_writing": analytical_writing,
                                "integrated_reasoning": integrated_reasoning
                            }
                        ]};
                    console.log(JSON.stringify(student_gmat_details));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_gmat_details),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_gre_details` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("date_completed_gre").value = obj.date_completed;
                document.getElementById("verbal_gre").value = obj.verbal;
                document.getElementById("analytical_writing_gre").value = obj.analytical_writing;
                document.getElementById("quantitative").value = obj.quantitative;






                document.getElementById("student_gre_details").onchange = function() {student_gre_details()};
                function student_gre_details() {

                    var date_completed = document.getElementById("date_completed_gre").value;
                    var verbal = document.getElementById("verbal_gre").value;
                    var analytical_writing = document.getElementById("analytical_writing_gre").value;
                    var quantitative = document.getElementById("quantitative").value;

                    var student_gre_details = { "student_gre_details": [
                            {
                                "student_account_id": obj.student_account_id,
                                "date_completed": date_completed,
                                "verbal": verbal,
                                "analytical_writing": analytical_writing,
                                "quantitative": quantitative
                            }
                        ]};
                    console.log(JSON.stringify(student_gre_details));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_gre_details),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_professional_experience` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("organization_name").value = obj.organization_name;
                document.getElementById("location").value = obj.location;
                document.getElementById("job_title").value = obj.job_title;
                document.getElementById("job_description").value = obj.job_description;
                document.getElementById("start_date_ex").value = obj.start_date;
                document.getElementById("end_date_ex").value = obj.end_date;






                document.getElementById("student_professional_experience").onchange = function() {student_professional_experience()};
                function student_professional_experience() {

                    var organization_name = document.getElementById("organization_name").value;
                    var location = document.getElementById("location").value;
                    var job_title = document.getElementById("job_title").value;
                    var job_description = document.getElementById("job_description").value;
                    var start_date = document.getElementById("start_date_ex").value;
                    var end_date = document.getElementById("end_date_ex").value;

                    var student_professional_experience = { "student_professional_experience": [
                            {
                                "student_account_id": obj.student_account_id,
                                "organization_name": organization_name,
                                "location": location,
                                "job_title": job_title,
                                "job_description": job_description,
                                "start_date": start_date,
                                "end_date": end_date
                            }
                        ]};
                    console.log(JSON.stringify(student_professional_experience));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_professional_experience),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_refree` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);

                document.getElementById("referee_title").value = obj.title;
                document.getElementById("referee_firstname").value = obj.first_name;
                document.getElementById("referee_lastname").value = obj.last_name;
                document.getElementById("referee_position").value = obj.position;
                document.getElementById("referee_institution").value = obj.institution;
                document.getElementById("referee_email").value = obj.email;
                document.getElementById("referee_country").value = obj.country;
                document.getElementById("referee_tel").value = obj.telephone_number;






                document.getElementById("student_refree").onchange = function() {student_refree()};
                function student_refree() {

                    var title = document.getElementById("referee_title").value;
                    var first_name = document.getElementById("referee_firstname").value;
                    var last_name = document.getElementById("referee_lastname").value;
                    var position = document.getElementById("referee_position").value;
                    var institution = document.getElementById("referee_institution").value;
                    var email = document.getElementById("referee_email").value;
                    var country = document.getElementById("referee_country").value;
                    var telephone_number = document.getElementById("referee_tel").value;

                    var student_refree = { "student_refree": [
                            {
                                "student_account_id": obj.student_account_id,
                                "title": title,
                                "first_name": first_name,
                                "last_name": last_name,
                                "position": position,
                                "institution": institution,
                                "email": email,
                                "country": country,
                                "telephone_number": telephone_number
                            }
                        ]};
                    console.log(JSON.stringify(student_refree));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_refree),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
            <script>
                <?php
                include '../connect-mysql.php';
                $sql = "SELECT * FROM `student_submission` WHERE `student_account_id` = '1'";
                $objQuery = mysqli_query($objCon, $sql);
                $result = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
                $json = json_encode($result);
                ?>

                var json = '<?=$json?>';
                var obj = JSON.parse(json);
                if(obj.question!=null){
                    var radios = $('input:radio[name=question_sub]');
                    if(radios.is(':checked') === false) {
                        var title = "\""+obj.question+"\"";
                        radios.filter("[value="+title+"]").prop('checked', true);
                    }
                }


                document.getElementById("individual_funding_resources").value = obj.individual_funding_resources;
                document.getElementById("detail_1").value = obj.detail_1;
                document.getElementById("detail_2").value = obj.detail_2;
                document.getElementById("detail_3").value = obj.detail_3;







                document.getElementById("student_submission").onchange = function() {student_submission()};
                function student_submission() {

                    var individual_funding_resources = document.getElementById("individual_funding_resources").value;
                    var question =document.querySelector("input[name=question_sub]:checked").value;
                    var detail_1 = document.getElementById("detail_1").value;
                    var detail_2 = document.getElementById("detail_2").value;
                    var detail_3 = document.getElementById("detail_3").value;

                    var student_submission = { "student_submission": [
                            {
                                "student_account_id": obj.student_account_id,
                                "individual_funding_resources": individual_funding_resources,
                                "question": question,
                                "detail_1": detail_1,
                                "detail_2": detail_2,
                                "detail_3": detail_3
                            }
                        ]};
                    console.log(JSON.stringify(student_submission));


                    $.ajax({
                        type: 'POST',
                        url: 'check-add.php',
                        data: JSON.stringify(student_submission),
                        contentType: 'application/json',
                        success: function(msg){
                            console.log(msg);
                        }

                    });

                }

            </script>
        </div>

    </div>
</div>
<!-- /.MultiStep Form -->

<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script>


    //jQuery time
    (function($) {
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
                easing: 'easeInOutBack'
            });
        });

    })(jQuery);


</script>


<!-- //main -->
</body>
</html>

