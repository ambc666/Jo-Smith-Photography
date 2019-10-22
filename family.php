<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"JS - Family Gallery"</title>
    <meta name="description" content="Jo Smiths Family Shots"> 
    <meta name="keywords" content="headshot, photo studio, photo shoot, photo">
</head>
<body>
<main> 

<?php include ("nav.php"); ?>

        <div class="container-fluid">
            <div class="galleryTextTop" class="row">
                <div class="col-11 col-lg-6 mx-auto text-center bg-1">
                    <h2>Family Gallery</h2>
                    <br>
                    <p id="galleryPageText">Below you will find some photo's I have taken over the last few months.</p>
                </div>
            </div>
        </div>
    
        <div class="container" id="galleryCarouselContainers">
            <div id="family" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#family" data-slide-to="0" class="active"></li>
                    <li data-target="#family" data-slide-to="1"></li>
                    <li data-target="#family" data-slide-to="2"></li>
                    <li data-target="#family" data-slide-to="3"></li>
                    <li data-target="#family" data-slide-to="4"></li>
                    <li data-target="#family" data-slide-to="5"></li>
                    <li data-target="#family" data-slide-to="6"></li>
                    <li data-target="#family" data-slide-to="7"></li>
                    <li data-target="#family" data-slide-to="8"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Family/family-holding-up-the-word-family-BR23WQP.jpg" alt="Family holding up letters that spell FAMILY on a beach">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/cute-family-in-a-sunny-park-A95PKED.jpg" alt="Couple and baby out walking">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-celebrating-halloween-SQZKGN3.jpg" alt="Family halloween photo">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-in-a-town-ETZ5JKX.jpg" alt="Family getting photo taken in nature">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-in-a-town-PJ7NE8L.jpg" alt="Family in town getting picture taken">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-on-a-beach-L68AEFG.jpg" alt="Family on a beach smiling for camera">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-on-a-beach-T7WHLFX.jpg" alt="Mum and Dad kissing whilst holding baby on a beach">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-playing-on-bed-in-the-bedroom-PNWNM9G.jpg" alt="Family of 4 and dog playing on a bed">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Family/family-with-baby-boy-at-home-decorated-for-PF82RQJ.jpg" alt="Family with baby boy at home in front of christmas tree">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#family" data-slide="prev">
                    <span id="carouselArrows" class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#family" data-slide="next">
                    <span id="carouselArrows" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>