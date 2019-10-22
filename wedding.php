<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>JS - Weddings Gallery</title>
    <meta name="description" content="Jo Smiths Wedding Shots">
    <meta name="keywords" content="photo gallery, wedding photography, couple photo, photo shots">
</head>
<body>
    <main>

        <?php include ("nav.php"); ?>

        <div class="container-fluid">
            <div class="galleryTextTop" class="row">
                <div class="col-11 col-lg-6 mx-auto text-center bg-1">
                    <h2>Wedding Gallery</h2>
                    <br>
                    <p id="galleryPageText">Below you will find some photo's I have taken over the last few months.</p>
                </div>
            </div>
        </div>
        
        <div class="container" id="galleryCarouselContainers">
            <div id="wedding" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#wedding" data-slide-to="0" class="active"></li>
                    <li data-target="#wedding" data-slide-to="1"></li>
                    <li data-target="#wedding" data-slide-to="2"></li>
                    <li data-target="#wedding" data-slide-to="3"></li>
                    <li data-target="#wedding" data-slide-to="4"></li>
                    <li data-target="#wedding" data-slide-to="5"></li>
                    <li data-target="#wedding" data-slide-to="6"></li>
                    <li data-target="#wedding" data-slide-to="7"></li>
                    <li data-target="#wedding" data-slide-to="8"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Weddings/guests-with-smartphones-taking-photo-of-bride-and-HU8RSK4.jpg" alt="Guests taking photo of the bride with smart phones">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/happy-friends-and-family-at-a-wedding-party-FNT5QAU.jpg" alt="Happy friends and family at a wedding party">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/turkish-wedding-ST7EAVJ.jpg" alt="bride and groom kissing at wedding">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/married-couple-8HEKQ7N.jpg" alt="bride and groom close-up sharing a kiss">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/wedding-couple-4RJUVNA.jpg" alt="bride and groom kissing at outside wedding venue">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/wedding-in-a-city-HY4B8AQ.jpg" alt="married couple posing outside of venue">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/wedding-couple-6FV3YQD.jpg" alt="black and white wedding couple">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/wedding-couple-XE4B89W.jpg" alt="bride resting head on grooms shoulder outside">
                    </div>
                    <div class="carousel-item">
                        <img src="img/Weddings/wedding-PQYN4HV.jpg" alt="Bride and groom with back to camera enjoying the view">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#wedding" data-slide="prev">
                    <span id="carouselArrows" class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#wedding" data-slide="next">
                    <span id="carouselArrows" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>
</html>