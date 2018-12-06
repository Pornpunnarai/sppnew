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

                <fieldset>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-11 text-box" style="text-align: left">
                                Please tell us why you choose  a Public Policy Program ?
                            </div>
                            <div class="col-lg-11">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="text-align: left">
                        <div class="col-lg-11">
                            <p style="font-family: lato-bold; font-size: 24px;color: white;">Curriculum vitae<br>
                                <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">+Add file</button>
                                <small style="font-style: italic; font-size: 11px; font-family: lato-light;">Please insert file format PDF, MS Word Doc, JPEG, PNG. Limits file size : 20 MB</small>
                            </p>
                        </div>
                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -25vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            MOTIVATION LETTER</p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                    <p style="font-style: italic; font-size: 14px; font-family: lato-light; color: white;">
                            It should be around 500 - 1,000 words in length, covering your skills,
                            experiences relevant to field of public policy, your ambitions,
                            motivations and interest in the public policy program
                    </p>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Institution / School / College
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                City / Country
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="middlename" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container" style="    margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Select Qualification
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-3">
                                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                        Bachelor’s
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Subject
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Thesis Title ( if applicable )
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container" style="    margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Thesis abstract file
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-3">
                                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                        +Add file
                                    </button>
                                </div>
                                <div class="col-lg-8">
                                    <small style="font-style: italic; color: white">Please insert file format PDF, MS Word Doc, JPEG, PNG</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="input-container" style="    margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Academic certificates
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-3">
                                    <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                        +Add file
                                    </button>
                                </div>

                                <div class="col-lg-8">
                                    <small style="font-style: italic; color: white">Please insert file format PDF, MS Word Doc, JPEG, PNG</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Start Date
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-4">
                                    <input class="text" type="text" name="conutryofbirth" required="">
                                </div>
                                <div class="col-lg-4 text-box">
                                    End Date<small style="font-style: italic">(Expected) </small>
                                </div>
                                <div class="col-lg-4">
                                    <input class="text" type="text" name="conutryofbirth" required="">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Graduation Date<small style="font-style: italic">(Expected) </small>
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-4">
                                    <input class="text" type="text" name="conutryofbirth" required="">
                                </div>
                                <div class="col-lg-4 text-box">
                                    Official Duration
                                </div>
                                <div class="col-lg-4">
                                    <input class="text" type="text" name="conutryofbirth" placeholder="Year" required="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 100%; margin-top: -30vh;">
                        <p style="font-family: lato-bold; font-size: 24px;color: white;">
                            <button class="btn btn-primary" style="background-color: #121212bd; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                Qualifications 1
                            </button>

                            <button class="btn btn-primary" style="background-color: #121212bd; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                Qualifications 2
                            </button>


                            <button class="btn btn-primary" style="background-color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                Qualifications 3
                            </button>

                            <button class="btn btn-primary" style="background-color: #F15C2B; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                + Qualifications
                            </button>
                        </p>
                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 100%; margin-top: -40vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">ACADEMIC QUALIFICATION</p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                    <p style="font-style: italic; font-size: 14px; font-family: lato-light; color: white;">
                        Please provide details and attach the degree certificate/diploma
                        as well as transcript of the relevant previous degree(s) you obtained, starting with the most recent one.
                    </p>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <div class="input-container" style="margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Is English your first language?
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>YES</b></a>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>NO</b></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="input-container" style="margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-5 text-box">
                                Have you earned a Bachelors or Masters degree taught exclusively in English?
                            </div>
                            <div class="col-lg-6">
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>YES</b></a>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>NO</b></a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="input-container" style="margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Do you hold an English language qualification?
                            </div>
                            <div class="col-lg-8">
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>YES</b></a>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-2" id="title">
                                    <a href="#" style="color: white;"><b>NO</b></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="input-container" style="margin-top: 10px;margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-2 text-box">
                                English Qualification
                            </div>
                            <div class="col-lg-10">
                                <div class="col-lg-6">
                                    <label class="">TOEFL (internet-based)
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">TOEFL (paper-based)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">TEGS
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">TOEFL (computer-based)
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">IELTS
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="">Other ( please provide details )
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6 text-box">
                                        Score
                                </div>
                                    <div class="col-lg-6">
                                        <input class="text" type="text" name="conutryofbirth" placeholder="Year" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-6 text-box">
                                        Date completed
                                    </div>
                                    <div class="col-lg-6">
                                        <input class="text" type="text" name="conutryofbirth" placeholder="Year" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12" style="margin-bottom: 10px;margin-top: 10px;">
                                    <div class="col-lg-4 text-box">
                                        Certified proficiency
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                            +Add file
                                        </button>
                                    </div>
                                    <div class="col-lg-5">
                                        <small style="font-style: italic; color: white">Please insert file format PDF, MS Word Doc, JPEG, PNG<br>Limits file size : 20 MB</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="input-container" style="margin-top: 10px;margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-4 text-box">
                                GMAT Details (if applicable)
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                    +Add
                                </button>
                            </div>
                            <div class="col-lg-4 text-box">
                                GRE Details (if applicable)
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                    +Add
                                </button>
                            </div>
                        </div>
                    </div>


                    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 60%; margin-top: -30vh;">
                        <p style="font-family: lato-bold; font-size: 14px;color: white; font-style: italic">
                            awarded within the last 2 years: choices are between TOEFL (500 points for paper based; 173 computer based; 61 iBT),  IELTS (score 5.5), or TEGS (at least 65).
                            This is not necessary for native English speakers or students who have had English as language of instruction at the university they previously studied at (certified by the university).

                        </p>
                    </div>


                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 100%; margin-top: -40vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">ACADEMIC QUALIFICATION</p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Date Completed
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Verbal
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Total score
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Analytical Wrtiting
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Integrated Reasoning
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 100%; margin-top: -25vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            GMAT DETAILS
                        </p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Date Completed
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Verbal
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Analytical Writing
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Quantitative
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -25vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            GRE DETAILS
                        </p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <p>Experience: 1 </p>
                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Employer/ Organization Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Location of work is based in
                            </div>
                            <div class="col-lg-3">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                            <div class="col-lg-2 text-box">
                                Job Title:
                            </div>
                            <div class="col-lg-3">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Job Description
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Start Date
                            </div>
                            <div class="col-lg-3">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                            <div class="col-lg-2 text-box">
                                End Date<br><small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">(if applicable)</small>
                            </div>
                            <div class="col-lg-3">
                                <input class="text" type="text" name="familyname" required="">
                            </div>
                            <div class="col-lg-3 col-md-offset-3">
                                <button class="btn btn-primary" style="background-color: #121212bd;
                                font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;margin-bottom: 10px;">
                                    experience 1
                                </button>

                                <button class="btn btn-primary" style="color: #04B1DC;
                                font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">
                                    + Add experience 2
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -20vh;">
                        <small style="font-style: italic; font-size: 14px; font-family: lato-light; color: white">
                            In this section you may list current and/or previous employments, internships, volunteer positions relevant to your application.</small>

                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            PROFESSIONAL EXPERIENCE</p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>

                    <p style="font-style: italic; font-size: 14px; font-family: lato-light; color: white;">
                        Please attach a copy of your CV/resume (including publication list if applicable)
                    </p>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-11">
                                <p style="text-align: center">Referee 1 </p>
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Title
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                First / Given Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Last / Family Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Position
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Institution / Company
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Email Address
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Country
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Telephone number
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -20vh;">
                        <small style="font-style: italic; font-size: 14px; font-family: lato-light; color: white">
                            Please provide details of your reference(s). Two letters of recommendations have to be sent to us at
                            to chirada.na@cmu.ac.th and cc: spp@cmu.ac.th
                            separately by your referees.
                        </small>
                    </div>

                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            REFEREES
                        </p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>

                </fieldset>

                <fieldset>
                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Source of funding
                            </div>
                            <div class="col-lg-8" style="color: white">
                                <div class="col-lg-4">
                                    Individual Funding Resources
                                </div>
                                <div class="col-lg-2">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                                <div class="col-lg-1">
                                    %
                                </div>

                            </div>

                            <div class="col-lg-1 text-box">
                            </div>
                            <div class="col-lg-11">
                                <div class="col-lg-8" style="color: white;">
                                    Do you consider to apply for funding other than CMU Financial Aid
                                </div>
                                <div class="col-lg-3">
                                    <div class="col-lg-4" id="title">
                                        <a href="#" style="color: white;"><b>YES</b></a>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-4" id="title">
                                        <a href="#" style="color: white;"><b>NO</b></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                First / Given Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                Please provide details:
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                How did you hear about CMU School of Public Policy?
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-3 text-box">
                                What do you find most attractive about CMU?
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" required="">
                            </div>
                        </div>

                    </div>


                    <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                        <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                            SUBMISSION
                        </p>
                    </div>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="submit" name="submit" class="submit action-button" value="Submit"/>

                </fieldset>

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

