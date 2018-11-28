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

        .master-phd-detail{
            font-family: lato-regular;
            font-size: 24px;
            color: white;
            margin-left: 15%;
        }

        .btn.register, .btn.upload-brochure{
            font-size: 18px;
            color: white;
        }
    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<div class="row content-header" style="">
    <div class="content-name">
        PhD and Master's in Public Policy
    </div>
    <div class="border-content-header">
        &nbsp;&nbsp;&nbsp;
    </div>

</div>


<div class="container1">
    <div id="content-detail">
        <div class="detail" style="margin-left: 2%; margin-top: 10vh;">
            <p style="font-size: 36px">PhD Program</p>

            <div class="row master-phd-detail" style="margin-left: 15%;    margin-right: 15px;">
                <div class="col-lg-6" style="font-size: 24px;">
                    The PhD in Pubilc Policy  is research  - intensive program
                    idea for aspiring  policy experts.
                </div>
                <div class="col-lg-5" style="font-size: 18px; font-family: lato-regular">
                    <button class="btn register" style="height: 4vh;">Register now</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn register" style="height: 4vh;">Download Brochure</button>
                </div>
            </div>

            <p style="font-size: 36px;    margin-top: 4%;">Master Program</p>
            <div class="row master-phd-detail" style="margin-left: 15%;    margin-right: 15px;">
                <div class="col-lg-6" style="font-size: 24px;">
                    The Master in Public Policy provides rigorous training for
                    the next generation of decision - makers.
                </div>
                <div class="col-lg-5" style="font-size: 18px; font-family: lato-regular;">
                    <button class="btn register" style="height: 4vh;">Register now</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn register" style="height: 4vh;">Download Brochure</button>
                </div>
            </div>

        </div>
    </div>

    <div class="row event-last-research">
        <div class="our-faculty-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our Faculty</div>
            <div style="font-size: 24px; font-family: lato-bold">Our <br>Faculty</div>
            <div style="font-size: 18px; font-family: lato-light">Click for more information </div>
        </div>
    </div>


</div>

</body>
</html>