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
            background-image: url(img/Desktop-Background/AboutUs.png);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #container1 {
            height: 100%;
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        #content-members {
            position: absolute;
            top: 10vh;
            bottom: 0px;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
        }

        .members {
            margin: 0;
            padding: 2em;
            text-align: center;

        }

        .member {
            display: inline-block;
            width: 200px;
            height: 200px;
            margin: 10px;
            border-radius: 50%;
            background: #00B3DE;
        }

        .member .foodicon {
            font-size: 4em;
            line-height: 190px;
            color: #3b3d4a;
        }

        .foodicon {
            font-family: 'organicfoodicons';
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
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
<div id="container1">
    <div id="content-members">
        <ul class="members">
            <li class="member">
                <div class="foodicon foodicon--broccoli"></div>
            </li>
            <li class="product"><div class="foodicon foodicon--broccoli"></div></li>
            <li class="product"><div class="foodicon foodicon--broccoli"></div></li>
            <li class="product"><div class="foodicon foodicon--broccoli"></div></li>
        </ul>
    </div>
</div>

</body>
</html>