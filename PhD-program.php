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
            margin-right: 2rem;
            line-height: 28px;
        }


        .back-btn{
            position: absolute;
            margin-left: 450px;
            margin-top: 50px;
            color: white;
            z-index: 2;
        }
        p{
            margin-right: 1rem;
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
        PhD in Public Policy
    </div>
    <div class="border-content-header">
        &nbsp;&nbsp;&nbsp;
    </div>

</div>
<div class="container1">
    <div id="content-detail">
        <div class="detail" style="margin-left: 2%">

            <p style="font-size: 50px; font-family: lato-black;line-height: 7vh;text-align: center;background: linear-gradient(#cfe1e6, #5d5d5d); padding: 5%;">
                PhD in Public Policy <br>Chiang Mai University School of Public Policy
            </p>

            <p style="font-size: 18px; margin-top: 2%; margin-right: 7rem;">
                The PhD program trains new policy scholars in cutting-edge techniques for policy analysis.
                Methods include dynamic systems modeling, content analysis using software, network analysis,
                large-scale online surveys, and various quasi-experimental approaches. Conceptual frameworks
                include policy systems, policy narratives, institutional analysis, social-ecological systems,
                communication and behavioral psychology, complexity theory, and deliberative democracy.
            </p>
            <p style="font-size: 18px;  margin-top: 2%; margin-right: 7rem;">
                Our PhD supervisors are highly interdisciplinary scholars who can supervise topics such as urban management,
                e-governance, sustainability sciences, energy policies, earth system governance, economic development,
                and ASEAN integration. All academics have degrees from world’s top-ranking universities and are very active in real policy work with governments,
                policy think-tanks, civil society organizations, and international institutions such as the World Bank, the EU, Stockholm Environment Institute,
                UNDP, and ASEAN
            </p>
            <div class="col-lg-12">
                <p style="font-size: 24px; margin-top: 2%;">Key Facts</p>
                <div class="col-lg-6">
                    <ul class="a" style="font-size: 18px; margin-top: 2%;">
                        <li>3-4 Years (with option of thesis only or thesis + coursework)</li>
                        <li>Expert supervisors with excellent publication records and practical experience</li>
                        <li>Intensive training in research design and methods</li>
                        <li>Low tuition costs: 480,000 Baht (ca. 13,000 USD) for thesis only option,
                            or 720,000 Baht (ca. 22,000 USD) for thesis and coursework pathway.
                        </li>
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