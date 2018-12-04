<!DOCTYPE html>
<html>
<head>
    <title>Spp - Master's Program </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

    <link href="../css/register.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        .input-container input{
            background-color: #121212bd;
            border-radius: 5px;
        }

        .input-container{
            position: relative;
            margin-bottom: 10px;

        }

        .col-lg-4{
            text-align: right;
            color: white;
            margin-top: 10px;
        }
        .col-lg-3{
            font-size: 0.9em;
            color: #fff;
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
            font-family: 'Roboto', sans-serif;
            background-color: #121212bd;
            border-radius: 25px;
            margin-right: 10px;
        }

        #rainbow{
            background-color: red; /* For browsers that do not support gradients */
            background: linear-gradient(red, darkorange, #ffc82c, #698004, dodgerblue, #a355dc); /* Standard syntax*/
            border: solid 1px initial;

        }
        #rainbow_selected{
        background-color: #04B1DC;
        }
        /*#female{*/
            /*background-color: #04B1DC;*/
        /*}*/

    </style>
</head>
<body>
<!-- main -->

<div class="main wrapper" style="background: rgba(0, 0, 0, 0.6); height: 100vh;">

    <div class="main-agileinfo" style="width: 30%">

        <div class="agileits-top">
            <div class="row">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-8">
                    <p style="text-align: center; padding: 3rem;"><img src="../img/logo.png" width="100%"></p>
                </div>
            </div>


            <form >

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Name
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="text" id="firstname" placeholder="First name" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="text" id="lastname" placeholder="Last name" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Gender
                        </div>
                        <div class="col-lg-8">
                                <button class="col-lg-3" id="male" onclick="gender_answer('Male')">
                                    <p style="color: white;"><b>Male</b></p>
                                </button>
                            <button class="col-lg-3" id="female" onclick="gender_answer('Female')">
                                <p style="color: white;"><b>Female</b></p>
                            </button>
                            <button class="col-lg-3" id="rainbow" onclick="gender_answer('LGBT')">
                                <p style="color: white;"><b>LGBT</b></p>
                            </button>
<!--                            <button class="col-lg-3" id="rainbow_selected" style="visibility:hidden" onclick="gender('LGBT')">-->
<!--                                <p style="color: white;"><b>LGBT</b></p>-->
<!--                            </button>-->
                        </div>

                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Email
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="email" id="email" placeholder="Your Email Address" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Password
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="password" id="password" placeholder="Use 8 or more characters with a mix of letters, numbers & symbols" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Confirm Password
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="password" id="confirmpassword" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Nationality
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="text" id="nationality" required="">
                        </div>
                    </div>

                </div>

                <div class="input-container">
                    <div class="row">
                        <div class="col-lg-4">
                            Date of birth
                        </div>
                        <div class="col-lg-8">
                            <input class="text" type="date" id="dob" placeholder="DD/MM/YYYY" required="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <button  onclick="send_data()">
                            SIGN UP
                        </button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-8">
                        <p><a href="index.php" style="color: white;"><b>Alerady have Account?</b></a></p>
                    </div>
                </div>

            </form>




        </div>
    </div>

</div>
<!-- //main -->

<!--<!-- Bootstrap core JavaScript-->-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script>

</script>

<script>
    var gender = null;
    function gender_answer(answer) {
        gender = answer;
        if(answer=="Male"){
    document.getElementById("male").style = "background-color: #04B1DC;";
            document.getElementById("female").style = "";
            if(document.getElementById("rainbow_selected")!=null){
                document.getElementById("rainbow_selected").id = "rainbow";
            }

        }
        if(answer=="Female"){
            document.getElementById("female").style = "background-color: #04B1DC;";
            document.getElementById("male").style = "";
            if(document.getElementById("rainbow_selected")!=null){
                document.getElementById("rainbow_selected").id = "rainbow";
            }
        }
        if(answer=="LGBT"){
            document.getElementById("rainbow").id = "rainbow_selected";
            document.getElementById("female").style = "";
            document.getElementById("male").style = "";
        }
    }




    function send_data(){

        var firstname = document.getElementById("firstname").value;
        var lastname = document.getElementById("lastname").value;

        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var nationality = document.getElementById("nationality").value;
        var dob = document.getElementById("dob").value;

        var student_account = { "student_account": [
                { "firstname": firstname,
                 "lastname": lastname,
                 "gender": gender,
                 "email": email,
                 "password": password,
                 "nationality": nationality,
                 "dob": dob}
            ]};
// console.log(JSON.stringify(student_account));

    $.ajax({
        type: 'POST',
        url: 'check-add.php',
        data: JSON.stringify(student_account),
        contentType: 'application/json',
        success: function(msg){
           console.log(msg);
        }

    });
    }



    //
    // var timeoutId;
    // $('form input, form textarea').on('input propertychange change', function() {
    //     console.log('Textarea Change');
    //
    //
    //
    //     clearTimeout(timeoutId);
    //     timeoutId = setTimeout(function() {
    //         // Runs 1 second (1000 ms) after the last change
    //         // saveToDB();
    //     }, 1000);
    // });
</script>
</body>
</html>

<?php
