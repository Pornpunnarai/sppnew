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

        .content{
            position: absolute;
            bottom: 5vh;
            left: 6vh;
            margin: 0 0 0 450px;
            font-size: 14px;
            font-family: lato-regular;
            color: white;
            width: 40%;
            border-left: 12px #6DBC98 solid;
            text-align: left;
        }

        .content-menu{
            position: absolute;
            bottom: 2%;
            font-size: 24px;
            font-family: lato-black;
            color: white;
            right: 5%;
            text-align: right;
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
            The Chiang Mai University School of Public Policy<br>
            is the first public policy school established in Thailand.<br>
            The school is made up of three centers,<br>
            including Excellence Center in Urban Study and Public Policy.<br>
            Aside from conducting high quality research and providing consultations to governments,<br>
            the school also offers graduate programs in public policy<br>
            for academically ambitious students from within the region and beyond.
        </p>
    </div>

    <div class="content-menu">
        <p>
            <a href="faculty-member.php">Faculty Members <i class="fa fal fa-arrow-right"></i></a><br>
            <a href="staff-team.php">Staff Team <i class="fa fal fa-arrow-right"></i></a>
        </p>
    </div>

</body>
</html>