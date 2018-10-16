<!DOCTYPE html>
<html lang="en">

<head>
    <title>School of Public Policy</title>
    <?php include 'head-part.php'?>

    <style>

        *{margin:0;}

        body, html {
            height: 100%;
            margin: 0;
        }

        body {
            /* The image used */
            background-image: url(img/Desktop-Background/PhDMaster.png);

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

        #content-detail {
            position: absolute;
            top: 12vh;
            bottom: 0px;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
            color: white;
            font-family: lato-bold;
        }


        div.row.content-header{
            position: absolute;
            top: 2vh;
            right: 0;
            margin-right: 15px;
            z-index: 2;
        }

        .content-name{
            font-size: 72px;
            font-family: lato-black;
            color: white;
        }


        .border-content-header{
            top: 10px;
            height: 37px;
            border-right: 57px #04B1DC solid;
            margin-right: -15px;
            margin-top: 45px;
        }

        .back-btn{
            position: absolute;
            margin-left: 450px;
            margin-top: 50px;
            color: white;
            z-index: 2;
        }
    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<a class="back-btn" href="about-us.php">
    <b style="font-size: 25px;">&nbsp;&nbsp;<i class="fa fal fa-arrow-left" style="margin-left: 20px"></i>&nbsp;&nbsp;Back</b>
</a>

<div class="row content-header" style="">

    <div class="content-name">
        Master in Public Policy
    </div>
    <div class="border-content-header">
        &nbsp;&nbsp;&nbsp;
    </div>

</div>
<div class="container1">
    <div id="content-detail">
        <div class="detail" style="margin-left: 2%">
            <p style="font-size: 52px">Application open December 2018<br>Key Facts</p>
            <ul class="a" style="font-size: 25px">
                <li>1 Year (5 coursework + product)</li>
                <li>Cutting edge rigorous training</li>
                <li>International lecturers</li>
                <li>Tuition: 330,000 Baht</li>
                <li>Scholarships available</li>
            </ul>
            <p>
                <button class="btn register" style="height: 4vh;">Register now</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn register" style="height: 4vh;">Download Brochure</button></p>
        </div>
    </div>

    <div class="row event-last-research">
        <div class="our-faculty-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our Faculty</div>
            <div style="font-size: 24px; font-family: lato-bold">Our <br>Faculty</div>
            <div style="font-size: 18px; font-family: lato-light">Click for more information </div>
        </div>

        <div class="coursework-master-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our Coursework</div>
            <div style="font-size: 24px; font-family: lato-bold">Learn More Course <br>in PhD program</div>
            <div style="font-size: 18px; font-family: lato-light">Click for more information n</div>
        </div>

        <div class="coursework-phd-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our Coursework</div>
            <div style="font-size: 24px; font-family: lato-bold">Learn More Course<br>in Master program</div>
            <div style="font-size: 18px; font-family: lato-light">Click for more information n</div>
        </div>

        <div class="question-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Have a question </div>
            <div style="font-size: 24px; font-family: lato-bold">What is Public Policy<br>program</div>
            <div style="font-size: 18px; font-family: lato-light">Click for more information </div>
        </div>
    </div>


</div>

</body>
</html>