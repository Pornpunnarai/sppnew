<!DOCTYPE html>
<html lang="en">

<head>
    <title>School of Public Policy</title>
    <?php include 'head-part.php'?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <style>

        *{margin:0;}

        body, html {
            height: 100%;
            margin: 0;
        }

        body {
            /* The image used */
            background-image: url(img/Desktop-Background/Service.png);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .container1 {
            background-color: #0000016c;
            height: 100%;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .header-word{
            position: absolute;
            margin-left: 450px;
            color: white;
            z-index: 2;
            width: 50%;
        }

        #content-members {
            position: absolute;
            top: 10vh;
            bottom: 0px;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
            padding: 2rem;
            color: white;
        }

        .our-faculty{
            margin-left: 450px;
            bottom: 2%;
            position: absolute;
            left: 2%;
            font-family: lato-regular;
            font-size: 18px;
            color: white;
        }

    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<a class="header-word" style="color: white; margin-top: 3vh;">
    <b style="font-size: 36px;">&nbsp;Our Service </b>
</a>



<div class="container1">
    <div id="content-members">
        <p style="font-size: 24px; font-family: lato-black;">Consultancy</p>
        <div class="row" style="margin-right: 15px; font-size: 14px; font-family: lato-regular;">
            <div class="col-lg-3">
                <img src="img/our-service/consultancy.png" class="image" alt="Image" style="max-width:100%; border-left: 10px solid #04B1DC; filter: brightness(70%);">
            </div>
            <div class="col-lg-8">
                <p>Today’s constant stream of policy planning, decisions and debate has a prodound impact on
                    the people, businesses and industies.<br>
                    SPP delivers vital support to all stakeolders operation at the intersection of government, NGO,
                    business and society. Our experienced team, many of whom have previously held critical positions
                    in government and industry, has expertise in a variety of multidisciplinary backgrounds.
                    We can help you :</p>
                <a href="contact-us.php"><button class="btn register" style="height: 4vh;" >Contact Now</button></a>


            </div>
        </div>
        <p style="font-size: 24px; font-family: lato-black; margin-top: 2vh;">Executive Education</p>
        <div class="row" style=" margin-right: 15px; font-size: 14px; font-family: lato-regular;">
            <div class="col-lg-3">
                <img src="img/our-service/executive-education.png" class="image" alt="Image" style="max-width:100%;    border-left: 10px solid #04B1DC;filter: brightness(70%);">
            </div>
            <div class="col-lg-8">
                <p>The School provides top-class training related
                    to public policy. This includes policy decision-making,
                    policy design, policy communication,
                    policy evaluation, and policy management.
                    We are keen to work with policy specialists
                    who are working in various communities to be better
                    in all aspects of policy management,
                    deliberative processes, and social engagement.</p>
                <a href="contact-us.php"><button class="btn register" style="height: 4vh;" >Contact Now</button></a>
            </div>
        </div>
    </div>


    <div class="our-faculty">
        <p>Our faculty’s recent clients include :</p>
        <a><img src="img/logo/logo2.png"></a>
        <a><img src="img/logo/NASPAA.png"></a>
        <a><img src="img/logo/apppn.png"></a>
        <a><img src="img/logo/logo2.png"></a>
        <a><img src="img/logo/NASPAA.png"></a>
        <a><img src="img/logo/apppn.png"></a>
    </div>

</div>

<?php include 'script-part.html';?>

<script>
    // Carousel Auto-Cycle
    $('#blogCarousel').carousel({
        interval: 5000
    });

</script>
</body>
</html>