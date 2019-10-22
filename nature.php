<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"JS - Nature Gallery"</title>
    <meta name="description" content="Jo Smiths Nature Shots"> 
    <meta name="keywords" content="animal photos, nature, flowers photos,">
</head>
<body>
<main> 

<?php include ("nav.php"); ?>

        <div class="container-fluid">
            <div class="galleryTextTop" class="row">
                <div class="col-11 col-lg-6 mx-auto text-center bg-1">
                    <h2>Nature Gallery</h2>
                    <br>
                    <p id="galleryPageText">Below you will find some photo's I have taken over the last few months.</p>
                </div>
            </div>
        </div>
    
        <div class="container" id="galleryCarouselContainers">
            <div id="nature" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#nature" data-slide-to="0" class="active"></li>
                    <li data-target="#nature" data-slide-to="1"></li>
                    <li data-target="#nature" data-slide-to="2"></li>
                    <li data-target="#nature" data-slide-to="3"></li>
                    <li data-target="#nature" data-slide-to="4"></li>
                    <li data-target="#nature" data-slide-to="5"></li>
                    <li data-target="#nature" data-slide-to="6"></li>
                    <li data-target="#nature" data-slide-to="7"></li>
                    <li data-target="#nature" data-slide-to="8"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Nature/beautiful-nature-norway-aerial-photography-PUFV622.jpg" alt="Beautiful aerial shot with deep blue sea">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/beautiful-nature-norway-P36U8HW.jpg" alt="Cloudy mountains">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/wild-parrot-bird-green-parrot-great-green-macaw-PM255QP.jpg" alt="2 green macaw's sitting on a branch">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/lake-in-nature-of-the-countryside-P9PRX7N.jpg" alt="Countryside picture of a lake">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/last-sun-light-hits-high-mountains-peak-at-sunset-PJFLBM5.jpg" alt="Lots of tree's with the sun hitting mountains in the background">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/red-fox-in-nature-PNMTZ8H.jpg" alt="Fox licking its nose in nature">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/swan-P2WTRAD.jpg" alt="Swan in water splashing">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/scenic-mountain-landscape-ceylon-nature-P5N4HXP.jpg" alt="Scenic mountain landscape">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Nature/sunrise-lake-PYC8MES.jpg" alt="Sunrise on a lake">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#nature" data-slide="prev">
                    <span id="carouselArrows" class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#nature" data-slide="next">
                    <span id="carouselArrows" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>