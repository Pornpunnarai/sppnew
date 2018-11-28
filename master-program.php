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
            font-family: lato-black;
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
    <b style="font-size: 18px;">&nbsp;&nbsp;<i class="fa fal fa-arrow-left" style="margin-left: 18px"></i>&nbsp;&nbsp;Back</b>
</a>

<div class="row content-header">

    <div class="content-name">
        Master's in Public Policy
    </div>
    <div class="border-content-header">
        &nbsp;&nbsp;&nbsp;
    </div>

</div>
<div class="container1">
    <div id="content-detail">
        <div class="detail" style="margin-left: 2%;">
            <p style="font-size: 50px; font-family: lato-black;line-height: 7vh;text-align: center;background: linear-gradient(#cfe1e6, #5d5d5d); padding: 5%;">
                Master in Public Policy <br>Chiang Mai University School of Public Policy
            </p>

            <div class="col-lg-12">
                <b><p style="font-size: 36px">Application open December 2018<br>Key Facts</p></b>
                <div class="col-lg-6">
                    <ul class="a" style="font-size: 18px">
                        <li>1 Year (5 coursework + product)</li>
                        <li>Cutting edge rigorous training</li>
                        <li>International lecturers</li>
                        <li>Tuition: 330,000 Baht</li>
                        <li>Scholarships available</li>
                    </ul>
                </div>

                <p class="col-lg-6" style="margin-top: -10%; left: 50%; text-align: center;">
                    <button class="btn register" style="height: 4vh;">Register now</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="btn register" style="height: 4vh;">Download Brochure</button>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>