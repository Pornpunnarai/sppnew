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

        .header-word{
            position: absolute;
            margin-left: 450px;
            color: white;
            z-index: 2;
            width: 50%;
        }

        #content-members {
            position: absolute;
            top: 0px;
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


        input,
        button {
            background-color:transparent;
            border:0;
        }

        ol.carousel-indicators {
            bottom: 90%;
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
    <b style="font-size: 72px;">&nbsp;News & Activities</b>
    <p style="font-size: 24px;margin-left: 5%;">Let see more our activites</p>
</a>



<div class="container1">
    <div id="content-members">
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

                        <p style="color: white;font-size: 36px;font-family: lato-bold;">Lasted activities </p>
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


                        <p style="color: white;font-size: 36px;font-family: lato-bold;    margin-top: 4vh;">Current policy debates</p>
                        <!-- Carousel items -->
                        <div class="a-inner">
                            <div class="a-item active">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="#">
                                            <div class="image-overlay">
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
                        </div>

                        <p style="color: white;font-size: 36px;font-family: lato-regular; float: right;    margin-top: 4vh;">Read more -></p>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
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