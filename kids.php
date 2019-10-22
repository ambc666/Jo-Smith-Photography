<!DOCTYPE html>
<html lang="en">
<head>
<?php include("head.php"); ?>
    <title>"JS - Kids Gallery"</title>
    <meta name="description" content="Jo Smiths Kids Shots"> 
    <meta name="keywords" content="newborn photography, kid photos, children, new photo, portrait">
</head>
<body>
<main> 

<?php include ("nav.php"); ?>

        <div class="container-fluid">
            <div class="galleryTextTop" class="row">
                <div class="col-11 col-lg-6 mx-auto text-center bg-1">
                    <h2>Kids Gallery</h2>
                    <br>
                    <p id="galleryPageText">Below you will find some photo's I have taken over the last few months.</p>
                </div>
            </div>
        </div>
    
        <div class="container" id="galleryCarouselContainers">
            <div id="kids" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#kids" data-slide-to="0" class="active"></li>
                    <li data-target="#kids" data-slide-to="1"></li>
                    <li data-target="#kids" data-slide-to="2"></li>
                    <li data-target="#kids" data-slide-to="3"></li>
                    <li data-target="#kids" data-slide-to="4"></li>
                    <li data-target="#kids" data-slide-to="5"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Kids/kids-fashion-A4FES8V.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Kids/children-in-spring-field-PF74XUL.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Kids/cute-baby-boy-dressed-in-fox-costume-sitting-by-PJSB7N4.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Kids/happy-little-children-playing-in-the-field-at-the-PR4DSAW.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Kids/little-cute-baby-girl-lying-in-basket-PAV44K7.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Kids/the-little-baby-or-year-old-child-on-the-grass-in-PF3C7QB.jpg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#kids" data-slide="prev">
                    <span id="carouselArrows" class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#kids" data-slide="next">
                    <span id="carouselArrows" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    
    </main>
<?php include("footer.php"); ?>
<?php include("js.php"); ?>
    </body>
</html>