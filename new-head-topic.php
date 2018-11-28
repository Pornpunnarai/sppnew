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

        #content-members {
            position: absolute;
            top: 12vh;
            bottom: 0px;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
        }

        .members {
            margin: 0;
            padding: 2em;
            padding-top: 1rem;
        }

        .member {
            display: inline-block;
            margin: 10px;
            color: white;
            font-family: lato-light;
            font-size: 25px;
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

<a class="back-btn" href="new-activity-unit.php">
    <b style="font-size: 18px;">&nbsp;&nbsp;<i class="fa fal fa-arrow-left" style="margin-left: 20px"></i>&nbsp;&nbsp;Back</b>
    <p style="font-size: 36px; font-family: lato-black; margin-left: 30px;">News & Activities Topic</p>
</a>

<div class="container1">
    <div id="content-members">
        <div class="members">
            <div class="member">
                <p style="background-color: #00B3DE; width: 100%; height: 500px;"></p>
                <p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id massa id arcu dictum facilisis in et nunc.
                    Pellentesque sodales rhoncus vulputate. Aenean quis purus consectetur, facilisis arcu et, scelerisque lorem.
                    Sed gravida neque fermentum augue convallis, nec bibendum massa molestie. Phasellus tempor arcu nisl.
                    Vestibulum pharetra volutpat vulputate. Integer vitae ex ullamcorper, varius magna molestie, ultrices odio.
                    Maecenas lobortis nisl nisl, nec suscipit dolor hendrerit non. Ut ac tellus eu nibh aliquet rutrum.
                    Pellentesque suscipit arcu ut mauris porta, et sagittis quam cursus. Nunc auctor suscipit risus at porttitor.
                    Phasellus suscipit finibus mauris vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sed lacinia sapien vel odio faucibus gravida. In vitae nisi sit amet quam aliquet cursus a eget nisi.</p>
                <p>	Integer pulvinar massa ultrices ligula sodales, eget fringilla purus maximus.
                    Suspendisse at quam et metus consequat maximus eu ac justo. Donec dignissim congue dignissim.
                    Duis condimentum faucibus nunc, sit amet vulputate ante malesuada ut. Maecenas hendrerit eget est ut sagittis.
                    Pellentesque facilisis, ipsum in ornare interdum, nulla sapien dignissim metus, nec viverra augue erat id ipsum.
                    Sed lacinia quam sem, sit amet porta diam blandit nec. Fusce at enim felis. Vestibulum lobortis libero vitae ex mattis,
                    eu porta velit vulputate. In leo velit, vestibulum venenatis congue eu, rhoncus at odio. Vestibulum odio erat,
                    vestibulum id semper in, maximus id sapien.</p>
                <p>	Donec ligula dolor, congue tempor iaculis fringilla, dictum vel massa.
                    Proin facilisis nec tortor quis tincidunt. Vivamus euismod fringilla nunc in elementum.
                    Cras condimentum nunc et tellus posuere, at venenatis metus accumsan. Cras viverra erat vitae odio posuere rutrum.
                    Nullam nec felis ut nisi consectetur dapibus a at urna. Nullam volutpat tincidunt sodales.</p>


                <div class="row" style="background-color: #FFFEFE; width: 100%;padding: 30px;">
                    <div class="col-lg-3" style="background-color: #FE5B29; border-radius: 50%;"></div>
                    <div class="col-lg-9">
                        <p style="font-style: italic; font-family: lato-bold; font-size: 36px; color: black;">The Author name</p>
                        <p style="font-family: lato-regular; font-size: 30px; color: black;">The Author position</p>
                        <p style="font-style: italic; font-family: lato-light; font-size: 30px; color: black;">The Author qute</p>
                        <br>
                        <p style="font-style: italic; font-family: lato-light; font-size: 30px; color: black;">presentation...</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>



</body>
</html>