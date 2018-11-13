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
            background-image: url(img/Desktop-Background/NewsActivity.png);

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

        .header-word{
            position: absolute;
            margin-left: 450px;
            margin-top: 50px;
            color: white;
            z-index: 2;
        }

        #content-members {
            position: absolute;
            top: 12vh;
            bottom: 20vh;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
        }

        .members {
            margin: 0;
            padding-left: 2em;
            padding-right: 2em;

        }

        .member {
            display: inline-block;
            width: 234px;
            height: 172px;
            margin: 10px;
            background: #FE5B29;
            margin-top: 5%;

        }

        .member-content{
            padding: 10px;
            margin-top: 73%;
            background-color: #FFFFFF;
            border: 1px solid #AFAFAF;
        }


        .box{
            font-family: lato-black;
            font-size: 7px;
            margin-top: -3px;
            width: 50%;
            float: left;
        }

        div.our-center-block {
            /*left: 85%;*/
            margin-left: 5px;
            border-left: 10px #F1D32B solid;
        }


        div.our-center-block2 {
            /*left: 85%;*/
            margin-left: 5px;
            border-left: 10px #6A8E41 solid;
        }

        .our-partner{
            margin-left: 450px;
            bottom: 2%;
            position: absolute;
            left: 2%;
            font-family: lato-black;
            font-size: 25px;
            color: white;
        }
        .back-btn{
            position: absolute;
            margin-left: 450px;
            bottom: 10vh;
            color: white;
            z-index: 2;
        }
    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<a class="header-word" href="about-us.php">
    <b style="font-size: 72px;">&nbsp;News & Activities</b>
</a>


<div class="container1">
    <div id="content-members">
        <ul class="members">
            <li class="member">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member" style="background-color: #00B3DE">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member" style="background-color: #00B3DE">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member" style="background-color: #00B3DE">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member" style="background-color: #00B3DE">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

            <li class="member" style="background-color: #00B3DE">
                <div class="member-content">
                    <p style="font-family: lato-bold; font-size: 17px; margin-bottom: 3rem;">Head Topics</p>
                    <p class="box">
                        Date (xx:xx:xx)
                    </p>
                    <p class="box" style="text-align: right; color:#A7A7A7 ">
                        the Author name
                    </p>
                </div>
            </li>

        </ul>
    </div>

    <a class="back-btn" href="about-us.php">
        <b style="font-size: 25px;">&nbsp;&nbsp;<i class="fa fal fa-arrow-left" style="margin-left: 20px"></i>&nbsp;&nbsp;Back</b>
    </a>

</div>

</body>
</html>