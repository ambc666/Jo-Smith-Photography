<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php"); ?>
    <title>"JS - Contact"</title>
    <meta name="description" content="Contact Jo Smith">
    <meta name="keywords" content="photography dundee, photography scotland, enquire jo smith, brook street">
</head>
<body>
    <main>

        <?php include ("nav.php"); ?>
        
        <div class="container-fluid">
            <div class="row">
                <div id="contactPageContainer" class="col-11 col-md-5 mx-auto text-center bg-1">
                    <h2 id="contactPageText">Contact info</h2>
                    <br>
                    <p id="contactPageText">Address: 987 Brook Street, Dundee, DD5 2EA
                        <br>Tel: <a href="tel:0138212345">01382 12345</a>
                        <br>Email: <a href="mailto:enquire@josmithphoto.com">enquire@josmithphoto.com</a>
                        <br>Twitter: <a href="https://twitter.com/josmithphoto" target="_blank">@josmithphoto</a>
                        <br>Instagram: <a href="https://instagram.com/josmithphoto/" target="_blank">@josmithphoto</a>
                    </p>
                    <br>
                    <!--Contact Me Button-->
                    <div id="contactMeContainer" class="text-center">
                        <a id="contactMeButton" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">Contact Me</a> <!--Onpage Button-->
                    </div>
                </div>
                <!--Map-->
                <div class="col-11 col-md-5 mx-auto bg-1">
                    <div id="myMap"></div>
                    <button id="mapButton" type="button" class="btn btn-secondary" onclick="resetPage()">Reset Map</button>
                </div>
            </div>
        </div>
                        <!--Modal Starts Here-->
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <!-- Full screen-->
                <form class="backform" method="post" autocomplete="off">
                    <div class="modal-content">
                        <!-- Modal box-->
                        <div class="modal-header text-center">
                            <!--Title box-->
                            <h4 class="modal-title ">Contact Me</h4>
                            <!-- Actual title-->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <!--Close button top right-->
                                <span aria-hidden="true">&times;</span>
                                <!--Accessibility - For screen readers-->
                            </button>
                        </div>
                        <div class="modal-body mx-3">
                            <!--Modal body-->
                            <div class="md-form mb-5">
                                <!--Section 1-->
                                <label class="text">Name:</label>
                                <input type="text" id="nameForm" name="nameForm" class="form-control" required>
                            </div>

                            <div class="md-form mb-5">
                                <!--Section 2-->
                                <label class="text">Email:</label>
                                <input type="email" id="emailForm" name="emailForm"  class="form-control" required>
                            </div>

                            <div class="md-form mb-5">
                                <!--Section 3-->
                                <label class="text">Subject:</label>
                                <input type="text" id="subjectForm" name="subjectForm" class="form-control" required>
                            </div>

                            <div class="md-form">
                                <!--Section 4-->
                                <label class="text">Your Enquiry:</label>
                                <textarea type="text" id="enquiryForm" name="enquiryForm"  class="md-textarea form-control" rows="4" required></textarea>
                            </div>
                        </div>
                        
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" data-toggle="modal" class="btn btn-unique">Send</button>
                        </div>
                    </div> <!--Modal Box close-->
                </form>
            </div><!--Full screen close-->
        </div>

    </main>
    <?php include("footer.php"); ?>
    <?php include("js.php"); ?>
</body>
</html>