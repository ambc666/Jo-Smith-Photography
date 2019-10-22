<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>"JS - About"</title>
    <meta name="description" content="About Jo Smith">
    <meta name="keywords" content="pricing, about jo, experienced photographer">
</head>
<body>
    <main>

        <?php include ("nav.php"); ?>

        <div class="container-fluid">
            <div id="aboutContainer" class="row">
                <div class="col-11 col-lg-5 mx-auto bg-1">
                    <h2 class="text-center">About Jo Smith</h2>
                    <br>
                    <p id="aboutPageText">Jo Smith Photography is a leading nature photographer with over eight years’ experience working within landscape and natural world photography, specialising in the landscapes of Scotland. Jo’s style has developed organically through photographing the wide variety of landscapes and seascapes found around Scotland. Her bold, colourful landscape photographs are always in-demand.</p>
                    
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h2 class="display-4">My Rates</h2>
                <p class="lead">Please see my current rates, please contact me for more information.</p>
            </div>
        </div>

        <section class="pricing py-5">
            <div class="container">
                <div class="row">
                    <!-- Private Events -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                            <div id="cardContaners" class="card-body">
                                <h4 class="card-title my-0 font-weight-normal text-center">Private Events</h4>
                                <hr class="linesPricingTables">
                                <h3 class="card-price text-center">£40 <small class="text-muted">/hr</small></h3>
                                <hr class="linesPricingTables">
                                <ul>
                                    <li class="nobull">Events such as:</li><br>
                                    <li class="bulletCircle">Weddings</li>
                                    <li class="bulletCircle">Birthdays</li>
                                    <li class="bulletCircle">Parties</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Short-Term -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                            <div id="cardContaners" class="card-body">
                                <h4 class="card-title my-0 font-weight-normal text-center">Short-Term</h4>
                                <hr class="linesPricingTables">
                                <h3 class="card-price text-center">£25 <small class="text-muted">/ hr</small></h3>
                                <hr class="linesPricingTables">
                                <ul>
                                    <li class="bulletCircle">Short-term contractual work</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Long-Term -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                        <div class="card">
                            <div id="cardContaners" class="card-body">
                                <h4 class="card-title my-0 font-weight-normal text-center">Long-Term</h4>
                                <hr class="linesPricingTables">
                                <h3 class="card-price text-center">£ Negotiable</h3>
                                <hr class="linesPricingTables">
                                <ul>
                                    <li class="bulletCircle">Long-term contractual work</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Photo Packages -->
                    <div class="col-lg-3">
                        <div class="card mb-5 mb-lg-0">
                        <div class="card">
                            <div id="cardContaners" class="card-body">
                                <h4 class="card-title my-0 font-weight-normal text-center">Photo Packages</h4>
                                <hr class="linesPricingTables">
                                <h3 class="card-price text-center">£ Variable</h3>
                                <hr class="linesPricingTables">
                                <ul>
                                    <li class="bulletCircle">Prices will be supplied seperately</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Button -->
                <div id="aboutButton" class="row">
                    <div class="col-12 mx-auto mt-3">
                        <a href="contact.php" class="btn btn-block text-uppercase">Click here for contact info</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>
</html>