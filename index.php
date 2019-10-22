<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>JS - Home</title>
    <meta name="description" content="Jo Smith Photography Homepage">
    <meta name="keywords" content="Jo Smith Photography, taking pictures, professionally, camera, headshots, instagram">
</head>
<body>
    <main>

        <?php include ("nav.php"); ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="banner">
                <div class="container">
                    <h2>Learn More</h2>
                    <a class="btn btn-lg" href="about.php" role="button">About Me</a>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-11 col-lg-6 mx-auto bg-1">
                    <h2 class="text-center">Welcome to Jo Smith Photography</h2>
                    <br>
                    <p id="homePageText">I am a photographer based in Dundee covering the majority of Scotland. Please have a look around our website and if you'd like to discuss your wedding or private function please contact me <a href="contact.php">here</a> or on one of my social media pages.
                </div>
            </div>
        </div>
            
            <div class="container-fluid">
                <div class="row">
                <div id="homePageTextContainers" class="col-11 col-md-5 mx-auto bg-1">
                    <h3>Jo’s Child and Family Portrait Photography</h3>
                    <br>
                    <p id="homePageText">Jo has years of experience in producing beautiful classic portraits of children and their families to be treasured. No matter how many children you have, I can love to get to know them and capture their personalities. I take pictures of little people that show how beautiful they are.
                    </p>
                </div>
                <div id="homePageTextContainers" class="col-11 col-md-5 mx-auto bg-1">
                    <h3>Jo’s Wedding Photography</h3>
                    <p id="homePageText">Intuition and spontaneity are two key ingredients that I believe are crucial in making a great wedding photographer – the third ingredient is experience. Experience to know how to get great shots in pouring rain and gloomy light. The experience to know where to position yourself to get key shots during a day that might have been years in the planning. The experience to know how to get the very best from you and your guests.
                    </p>
                </div>
            </div>
        </div>
        
    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>
</html>