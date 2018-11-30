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
            position: relative;
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
            -webkit-transition: All 0.5s ease-in;
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
            width: 14%;
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


        #title{
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


        .col-lg-4{
            text-align: right;
            color: white;
            margin-top: 10px;
        }

        #female{
            background-color: #04B1DC;
        }
    </style>
</head>
<body>
<!-- main -->
<!-- MultiStep Form -->
<div class="main wrapper" style="background: rgba(0, 0, 0, 0.6); height: 100vh;">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-md-offset-3">
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active">Personal Details</li>
                    <li>Social Profiles</li>
                    <li>Social Profiles</li>
                    <li>Social Profiles</li>
                    <li>Social Profiles</li>
                    <li>Social Profiles</li>
                    <li>Account Setup</li>
                </ul>
                <!-- fieldsets -->
                <fieldset>

                    <div class="input-container" style="    margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-lg-4">
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
                            <div class="col-lg-4">
                                First / Given Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="firstname" placeholder="First name" required="">
                            </div>
                        </div>

                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                Middle Name ( if any )
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="email" name="email" placeholder="Your Email Address" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                Last / Family Name
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="password" name="password" placeholder="Use 8 or more characters with a mix of letters, numbers & symbols" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                Date of birth
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="date" name="dob" placeholder="DD/MM/YYYY" required="">
                            </div>
                        </div>
                    </div>


                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                Country of Birth
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="password" name="confirmpassword" required="">
                            </div>
                        </div>
                    </div>

                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                City of Birth
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="nationality" required="">
                            </div>
                        </div>
                    </div>


                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                Citizenship
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="nationality" required="">
                            </div>
                        </div>
                    </div>


                    <div class="input-container">
                        <div class="row">
                            <div class="col-lg-4">
                                County of Permanent Residence
                            </div>
                            <div class="col-lg-8">
                                <input class="text" type="text" name="nationality" required="">
                            </div>
                        </div>
                    </div>

                    <input type="button"  style="float: right;" name="next" class="next action-button" value="Next"/>
                </fieldset>


                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter"/>
                    <input type="text" name="facebook" placeholder="Facebook"/>
                    <input type="text" name="gplus" placeholder="Google Plus"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter"/>
                    <input type="text" name="facebook" placeholder="Facebook"/>
                    <input type="text" name="gplus" placeholder="Google Plus"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter"/>
                    <input type="text" name="facebook" placeholder="Facebook"/>
                    <input type="text" name="gplus" placeholder="Google Plus"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter"/>
                    <input type="text" name="facebook" placeholder="Facebook"/>
                    <input type="text" name="gplus" placeholder="Google Plus"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Social Profiles</h2>
                    <h3 class="fs-subtitle">Your presence on the social network</h3>
                    <input type="text" name="twitter" placeholder="Twitter"/>
                    <input type="text" name="facebook" placeholder="Facebook"/>
                    <input type="text" name="gplus" placeholder="Google Plus"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">Fill in your credentials</h3>
                    <input type="text" name="email" placeholder="Email"/>
                    <input type="password" name="pass" placeholder="Password"/>
                    <input type="password" name="cpass" placeholder="Confirm Password"/>
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                </fieldset>

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
    var current_fs, next_fs, previous_fs; //fieldsets
    var left, opacity, scale; //fieldset properties which we will animate
    var animating; //flag to prevent quick multi-click glitches

    $(".next").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        //activate next step on progressbar using the index of next_fs
        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

        //show the next fieldset
        next_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale current_fs down to 80%
                scale = 1 - (1 - now) * 0.2;
                //2. bring next_fs from the right(50%)
                left = (now * 50)+"%";
                //3. increase opacity of next_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({
                    'transform': 'scale('+scale+')',
                    'position': 'absolute'
                });
                next_fs.css({'left': left, 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".previous").click(function(){
        if(animating) return false;
        animating = true;

        current_fs = $(this).parent();
        previous_fs = $(this).parent().prev();

        //de-activate current step on progressbar
        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

        //show the previous fieldset
        previous_fs.show();
        //hide the current fieldset with style
        current_fs.animate({opacity: 0}, {
            step: function(now, mx) {
                //as the opacity of current_fs reduces to 0 - stored in "now"
                //1. scale previous_fs from 80% to 100%
                scale = 0.8 + (1 - now) * 0.2;
                //2. take current_fs to the right(50%) - from 0%
                left = ((1-now) * 50)+"%";
                //3. increase opacity of previous_fs to 1 as it moves in
                opacity = 1 - now;
                current_fs.css({'left': left});
                previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
            },
            duration: 800,
            complete: function(){
                current_fs.hide();
                animating = false;
            },
            //this comes from the custom easing plugin
            easing: 'easeInOutBack'
        });
    });

    $(".submit").click(function(){
        return false;
    })
</script>
<!-- //main -->
</body>
</html>