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
            background-image: url(img/Desktop-Background/ResearchUnit.png);

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
            top: 20vh;
            bottom: 0px;
            left: 0px;
            right: -20px;
            overflow: auto;
            margin-left: 450px;
        }

        .lastpost-research-center {
            margin: 0;
            position: absolute;
            padding-left: 2em;
            padding-right: 2em;
            margin-top: 20vh;
            justify-content: center;
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
        .search-container{
            position: absolute;
            z-index: 2;
            text-align: center;
            width: 95%;
        }
        .search-wrapper {
            border: 1px solid #e9ecef;
            display: inline-block;
            width: 80%;
            border-radius: 30px;
            background-color: #E6E6E6;
        }

        input,
        button {
            background-color:transparent;
            border:0;
        }

        ol.carousel-indicators {
            bottom: 80%;
            width: 15vw;
            left: 65%;
        }
        a.carousel-control-prev{
            top: -100%;
            margin-left: 20%;
        }

        a.carousel-control-next{
            top: -100%;
            margin-right: 20%;
        }

        .image-overlay {
            position: relative;
        }

        .image {
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #000000;
        }

        .image-overlay:hover .overlay {
            opacity: 0.7;
        }

        .text-overlay {
            color: white;
            font-size: 36px;
            font-family: lato-bold;
            position: absolute;
            top: 25%;
            -webkit-transform: translate(-10%, -10%);
            -ms-transform: translate(-10%, -10%);
            transform: translate(-10%, -10%);
            text-align: right;
        }
    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<a class="header-word" href="about-us.php">
    <b style="font-size: 72px;">&nbsp;Research Center</b>
    <p style="font-size: 24px;margin-left: 5%;">Read more our signature research for Public Policy</p>
</a>



<div class="container1">
    <div id="content-members">

        <div class="search-container">
            <div class="search-wrapper">
                <form action="/action_page.php">
                    <input type="text" style="width: 80%; font-family: lato-light;    font-style: italic; color: #707070; font-size: 18px;" placeholder="write something you need to know" name="search">
                    <button type="submit" style="float: right; color: white; background-color: #3EB060; border: 1px solid #3EB060; border-radius: 30px; padding: 5px; padding-left: 25px; padding-right: 25px;">search</button>
                </form>
            </div>


            <div class="row" style="text-align: center;font-size: 24px;color: white;font-family: lato-light;    margin-top: 5%;">
                <div class="col-lg-2"></div>
                <div class="col-lg-2">Environment</div>
                <div class="col-lg-1">|</div>
                <div class="col-lg-2">Urban</div>
                <div class="col-lg-1">|</div>
                <div class="col-lg-2">E-governance</div>
                <div class="col-lg-2"></div>
            </div>

        </div>

        <div class="lastpost-research-center">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">

                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>

                            <a class="carousel-control-prev" href="#blogCarousel" role="button" data-slide="prev">
                                <i class="fa fal fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="carousel-control-next" href="#blogCarousel" role="button" data-slide="next">
                                <i class="fa fal fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </ol>

                        <p style="color: white;font-size: 36px;font-family: lato-bold;">Lasted post</p>
                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <div class=" image-overlay">
                                                <img src="img/research-center/1.png" class="image" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                                <div class="overlay">
                                                    <div class="text-overlay">How to make sustainable world<br>
                                                        <small style="font-family: lato-light; font-style: italic;font-size: 18px;">by Dr. Warathida</small></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <div class=" image-overlay">
                                                <img src="img/research-center/2.png" class="image" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                                <div class="overlay">
                                                    <div class="text-overlay">How to make sustainable world<br>
                                                        <small style="font-family: lato-light; font-style: italic;font-size: 18px;">by Dr. Warathida</small></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <div class=" image-overlay">
                                                <img src="img/research-center/3.png" class="image" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                                <div class="overlay">
                                                    <div class="text-overlay">How to make sustainable world<br>
                                                        <small style="font-family: lato-light; font-style: italic;font-size: 18px;">by Dr. Warathida</small></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-3" style="z-index: 2;">
                                        <a href="#">
                                            <div class=" image-overlay">
                                                <img src="img/research-center/4.png" class="image" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                                <div class="overlay">
                                                    <div class="text-overlay">How to make sustainable world<br>
                                                        <small style="font-family: lato-light; font-style: italic;font-size: 18px;">by Dr. Warathida</small></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="img/research-center/3.png" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="img/research-center/1.png" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="img/research-center/4.png" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#">
                                            <img src="img/research-center/2.png" alt="Image" style="max-width:100%;    border-bottom: 10px solid #04B1DC;">
                                        </a>
                                    </div>
                                </div>
                                <!--.row-->
                            </div>
                            <!--.item-->

                        </div>


                        <!--.carousel-inner-->

                        <p style="color: white;font-size: 36px;font-family: lato-regular; float: right;margin-top: 5px;">Read more our work -></p>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
    </div>

    <div class="row event-last-research">
        <div class="our-center-block" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our center</div>
            <div style="font-size: 24px; font-family: lato-bold">ECUP</div><br>
            <div style="font-size: 18px; font-family: lato-light">Click for more information</div>
        </div>

        <div class="our-center-block2" style="text-align: left">
            <div style="font-size: 14px; font-family: lato-bold">Our center </div>
            <div style="font-size: 24px; font-family: lato-bold">USER</div><br>
            <div style="font-size: 18px; font-family: lato-light">Click for more information </div>
        </div>
    </div>

    <div class="our-partner">
        <p>Our Partner</p>
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