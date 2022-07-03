<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <title>DMG Bank</title>


</head>

<body>

    <link rel="stylesheet" href="fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.min.css">

    <!----Navigation----->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html"><img src="img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                      <input type="checkbox" id="checkbox">
                      <div class="mode-container">
                          <i class="gg-sun"></i>
                          <i class="gg-moon"></i>
                      </div>
                  </label>
                    </div>
                </nav>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html">ACASA </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="desprenoi.html">DESPRE NOI</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="servicii.html">SERVICII</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <div class="mobile-position"></div>
                        <nav class="navigation">
                            <div class="theme-switch-wrapper">
                                <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="fa fa-sun"></i>
                              <i class="fa fa-moon"></i>                                
                              </i>
                          </div>
                      </label>
                            </div>
                        </nav>
            </div>

            </li>
            </ul>
            </div>
        </nav>
    </section>

    <!-----Bread crumb------->
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Acasa</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact</li>
            </ul>
        </div>
    </section>


    <!------Contact-------->
    <div class="w3l-contact-info py-5" id="contact">
        <div class="container py-lg-5 py-md-4">
            <div class="title text-center">
                <h3 class="title-big">Contactează-ne</h3>
                <p class="mt-2 mx-lg-5">Vă veți găsi lucrând într-un parteneriat adevărat care are ca rezultat o experiență incredibilă și un produs final care este cel mai bun.</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                </div>
                <div class="align-self mt-lg-0 mt-md-5 mt-4">
                    <div class="contact-infos">
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                            <div class="text-box">
                                <h3 class="mb-1">Andresa</h3>
                                <p>DMG Bank, strada Mitropolit Andrei Saguna Brasov</p>
                            </div>
                        </div>
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fa fa-phone"></span></div>
                            <div class="text-box">
                                <h3 class="mb-1">Suna-ne</h3>
                                <p><a href="">0728765234</a></p>
                            </div>
                        </div>
                        <div class="single-contact-infos">
                            <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                            <div class="text-box">
                                <h3 class="mb-1">Email</h3>
                                <p> <a href="mailto:info@support.com">info@supportdmg.ro</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1394.8035644467677!2d25.584214364690016!3d45.63862812022866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9850a50e950e79e!2zQ29sZWdpdWwgTmHIm2lvbmFsICJBbmRyZWkgyJhhZ3VuYSIgQnJhyJlvdg!5e0!3m2!1sro!2sro!4v1617712113412!5m2!1sro!2sro"
                        frameborder="0" allowfullscreen=""></iframe>

                </div>
                <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4">
                    <form action="form.php" method="post" class="signin-form">
                        <div class="form-input">
                            <input type="text" name="nume" placeholder="Nume">
                        </div>
                        <div class="form-input">
                            <input type="text" name="email" placeholder="Adresa de email" required="">
                        </div>
                        <div class="form-input">
                            <textarea type="text" name="mesaj" placeholder="Mesajul tau" required=""></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-style btn-primary">Trimite</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-----------Footer----------->
    <section class="w3l-footer-29-main">
        <div class="footer-29 py-5">
            <div class="container py-lg-4">
                <div class="row footer-top-29">
                    <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5">
                        <div class="footer-logo mb-4">
                            <a class="navbar-brand" href="index.html">
                                <span class="fa fa-cc-visa"></span> Bank Card</a>
                        </div>
                        <p>Este principala unitate financiară care oferă servicii bancare internaționale de înaltă calitate. Succesul nostru este atribuit clienților noștri fideli. Vă oferim servicii de încredere.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-5 col-5 footer-list-29 footer-2 mt-md-0 mt-5">
                        <ul>
                            <h6 class="footer-title-29">Link-uri </h6>
                            <li><a href="desprenoi.html">Despre noi</a></li>
                            <li><a href="servicii.html">Servicii</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-7 col-7 footer-list-29 footer-3 mt-lg-0 mt-5">
                        <h6 class="footer-title-29">Sediul Central</h6>
                        <p class="mb-3"> DMG Bank, strada Mitropolit Andrei Saguna Brasov </p>
                        <p class="mb-2"> <span class="fa fa-phone"></span> <a href="">0728746287</a></p>
                        <p class="mb-2"><span class="fa fa-envelope"></span> <a href="">info@dmgbank.ro</a></p>
                        <p><span class="fa fa-hands-helping"></span> <a href="">info@supportdmg.ro</a></p>
                    </div>

                   

                </div>
            </div>
        </div>
        <!-- copyright -->
        <section class="w3l-copyright text-center">
            <div class="container">
                <p class="copy-footer-29">© 2021 DMG Bank All rights reserved. Design by <a href="" target="_blank">
          Daniel Malancioiu</a></p>
            </div>


            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            ⤴
          </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function() {
                    scrollFunction()
                };

                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }

                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- //copyright -->
    </section>


    
    <script src="js/theme-change.js"></script>




</body>

</html>