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
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
    /* css class for the registration form generated errors */

    .profilepress-reg-status {
        border-radius: 6px;
        font-size: 17px;
        line-height: 1.471;
        padding: 10px 19px;
        background-color: #e74c3c;
        color: #ffffff;
        font-weight: normal;
        display: block;
        text-align: center;
        vertical-align: middle;
        margin: 5px 0;
    }
    /*form styles*/

    #msform {
        width: 400px;
        margin: 50px auto 550px;
        text-align: center;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
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

    #msform input,
    #msform textarea {
        padding: 15px;
        border: 1px solid #ccc;
        border-radius: 3px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 13px;
    }
    /*buttons*/

    #msform .action-button {
        width: 100px;
        background: #27AE60;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
    }
    /*headings*/

    .fs-title {
        font-size: 15px;
        text-transform: uppercase;
        color: #2C3E50;
        margin-bottom: 10px;
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
        color: #616161;
        text-transform: uppercase;
        font-size: 9px;
        width: 33.33%;
        float: left;
        position: relative;
    }

    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 15px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }

    #progressbar li:first-child:after {
        /*connector not needed before the first step*/

        content: none;
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #27AE60;
        color: white;
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

            <form method="post" novalidate>
                <div id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">Personal Details</li>
                        <li>Contact Details</li>
                        <li>Emergency Contact</li>
                        <li>MOTIVATION LETTER</li>
                        <li>ACADEMIC QUALIFICATION</li>
                        <li>ACADEMIC QUALIFICATION (Cont.)</li>
                        <li>PROFESSIONAL EXPERIENCE</li>
                        <li>REFEREES</li>
                        <li>REFEREES</li>
                        <li>REFEREES</li>
                        <li>REFEREES</li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Gender
                                </div>
                                <div class="col-lg-8">
                                    <div class="col-lg-3" id="title">
                                        <a href="#" style="color: white;"><b>Miss</b></a>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" id="title">
                                        <a href="#" style="color: white;"><b>Mrs.</b></a>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" id="title">
                                        <a href="#" style="color: white;"><b>Mr.</b></a>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2" id="title">
                                        <a href="#" style="color: white;"><b>Ms.</b></a>
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
                                    Middle Name ( if any )
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Last / Family Name
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Date of birth
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country of Birth
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="conutryofbirth" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    City of Birth
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Citizenship
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="citizenship" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    County of Permanent Residence
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="nationality" required="">
                                </div>
                            </div>
                        </div>


                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 100%; margin-top: -30vh;">
                            <p style="font-family: lato-bold; font-size: 24px;color: white;">Photocory of<br>Thai National or Passport<br>
                                <button class="btn btn-primary" style="color: #04B1DC; font-size: 13px;font-family: lato-regular;color: white;border-radius: 25px;">+Add file</button>
                                <small style="font-style: italic; font-size: 11px; font-family: lato-light;">Please insert file format PDF, MS Word Doc, JPEG, PNG. Limits file size : 20 MB</small>
                            </p>
                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">PERSONAL DETAILS</p>
                        </div>

                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>

                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>
                    <fieldset>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 1
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="firstname" required="">
                                </div>
                            </div>

                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Address Line 2
                                </div>
                                <div class="col-lg-8">
                                    <input class="text" type="text" name="middlename" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    State/Province
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Postcode
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Country
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                                </div>
                            </div>
                        </div>


                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Phone 1
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                                <div class="col-lg-2 text-box">
                                    Phone 2
                                </div>
                                <div class="col-lg-3">
                                    <input class="text" type="text" name="familyname" required="">
                                </div>
                            </div>
                        </div>

                        <div class="input-container" style="    margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Do you want to add a correspondence address
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

                        <div class="input-container">
                            <div class="row">
                                <div class="col-lg-3 text-box">
                                    Please provide details
                                </div>
                                <div class="col-lg-8" style="text-align: left">
                                    <input class="text" type="text" name="cityofbirth" required="">
                                    <p><a style="color: white;">Emergency Contact -></a></p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="position: absolute;margin-left: 40vw;text-align: left;width: 50%; margin-top: -30vh;">
                            <small style="font-style: italic; font-size: 11px; font-family: lato-light; color: white">
                                Please provide the address of your permanent residence.<br>
                                If your correspondence/ mailing address is different from the <br>
                                permanent address during the period of the admissions process (Jan-July 2018), <br>
                                please provide your correspondence address as well.</small>

                        </div>

                        <div class="row" style="position: absolute;margin-left: -23vw;text-align: left;width: 10%; margin-top: -40vh;">
                            <p style="font-size: 24px; color: white; font-family: lato-bold;writing-mode: vertical-rl;transform: rotate(180deg);">
                                CONTACT DETAILS</p>
                        </div>

                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>

                    </fieldset>

                </div>
            </form>


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