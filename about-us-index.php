<!DOCTYPE html>
<html lang="en">

<head>
    <title>School of Public Policy</title>
    <?php include 'head-part.php'?>

    <style>

        body, html {
            height: 100%;
            margin: 0;
        }


        .background-container {
            /* The image used */
            background-image: url(img/Desktop-Background/AboutUs.png);

            /* Full height */
            height: 100%;
            filter: brightness(90%);

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        div.row.content-header{
            position: absolute;
            top: 0;
            right: 0;
            margin-right: 15px;
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

        .content{
            position: absolute;
            bottom: 5vh;
            right: 5vh;
            margin: 0 0 0 450px;
            font-size: 24px;
            font-family: lato-regular;
            color: white;
            width: 50%;
            border-left: 12px #6DBC98 solid;
        }

        .content-menu{
            position: absolute;
            bottom: 2%;
            margin: 0 0 0 450px;
            font-size: 24px;
            font-family: lato-black;
            color: white;
            left: 2%;
        }

        .content-menu a {
            color: #ffffff !important;
        }

    </style>
</head>


<body>
<div class="background-container"></div>
<?php include 'sidebar-navbar.php'?>

    <div class="row content-header">
        <div class="content-name">
            About us
        </div>
        <div class="border-content-header">
            &nbsp;&nbsp;&nbsp;
        </div>

    </div>


    <div class="content">
        <p style="margin-left: 5px">
            The Chiang Mai University School of Public Policy
            is the first public policy school established in Thailand.
            The school is made up of three centers,
            including Excellence Center in Urban Study and Public Policy.
            Aside from conducting high quality research and providing consultations to governments,
            the school also offers graduate programs in public policy
            for academically ambitious students from within the region and beyond.
        </p>
    </div>

    <div class="content-menu">
        <p>
            <a href="#">Faculty Members</a><br>
            <a href="#">Staff Team</a>
        </p>
    </div>

</body>
</html>