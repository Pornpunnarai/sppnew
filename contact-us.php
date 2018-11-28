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
            background-image: url(img/Desktop-Background/Calendar.png);

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
            padding-left: 2em;
            padding-right: 2em;
            margin-top: 20vh;
            justify-content: center;
        }



        .box-shade{
            background-color: #2c2c2cad;
            color: white;
            padding: 2%;
            border-radius: 20px;
            margin: 1.5rem;
        }

        #map {
            height: 50%;
        }


    </style>
</head>


<body>

<?php include 'sidebar-navbar.php'?>

<a class="header-word" style="color: white;">
    <b style="font-size: 72px;">&nbsp;Contact Us</b>
</a>

<div class="container1">
    <div id="content-members">
        <div class="lastpost-research-center">
            <div class="row blog">
                <div class="col-md-12">
                    <div class="row">
                        <div id="map"></div>
                    </div>

                </div>

            </div>

            <div class="row blog">
                <div class="col-md-12" >
                    <div class="row" style="color: white; font-family: lato-black; font-size: 21px; text-align: center; justify-content: center;">
                        <div class="col-lg-3 box-shade">
                            <i class="fas fa-map-marked-alt fa-5x" style="padding: 2rem;"></i>
                            <p>Norther Science Park,B Building, Room 303 , 304</p>
                            <p>155 M. 2, Mea Hia,Mueang Chiang Mai,Chiang Mai 50200</p>
                        </div>
                        <div class="col-lg-3 box-shade">
                            <i class="fas fa-phone-volume fa-5x" style="padding: 2rem;"></i>
                            <p>(+66) 087 - 717 - 3637</p>
                            <p>(+66) 055 - 555 - 555</p>
                        </div>
                        <div class="col-lg-3 box-shade">
                            <i class="far fa-paper-plane fa-5x" style="padding: 2rem;"></i>
                            <p>spp@cmu.ac.th</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?php include 'script-part.html';?>

<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
        async defer></script>

</body>
</html>