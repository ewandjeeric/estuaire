<!DOCTYPE html>
<html>

    <head>
        <title>home</title>
        <meta charset="utf-8">
        <link rel="icon" href="templeate/img/estuaire.png">
        <link rel="stylesheet" type="text/css" href="templeate/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="templeate/css/home.css">
        <link rel="stylesheet" type="text/css" href="templeate/fontawesome-free-5.13.0-web/css/all.css">
        <script type="text/javascript" src="templeate/js/jquery.min3.2.js"></script>
        <script type="text/javascript" src="templeate/js/bootstrap.min4.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <!-- navbar-->
        <nav class="navbar navbar-light navbar-expand-lg fixed-top shadow-sm bg-white"><a href="index.php" class="navbar-brand" style="font-family: 'Comic Sans MS';color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); font-size: 25px;" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000">Centre medicale de l'estuaire</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#horaire" class="nav-link" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="far fa-clock fa-lg"></i> Horaire</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-user-md fa-lg"></i> Service</a></li>
                </ul>
                <div class="navbar-text ml-lg-3"> <a href="templeate/connexion.php" class="btn btn-primary text-white shadow"data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-user-lock fa-lg"></i> Se Connecter</a></div>
            </div>
        </nav>
        <!-- Hero Section-->
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <h1 data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">S'enregistrer pour un rendez-vous</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">Pour prendre un rendez-vous cliquez sur rendez-vous puis remplissez le formulaire </p>
                        <p data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000"><a href="templeate/formulaire.php" class="btn btn-primary shadow mr-2"><i class="fas fa-user-clock"></i> Rendez-vous </a><a href="templeate/nous_ecrire.php" class="btn btn-outline-primary"><i class="fas fa-envelope-open-text fa-lg"></i> Nous Ecrire</a></a>
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2"><img src="templeate/img/2-praticiens-à-leur-bureau.png" alt="..." class="img-fluid"></div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section>
            <div class="container" id="services">
                <h1 data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-user-md fa-2x"></i> Services</h1><br>


                <div class="row row-margin-bottom">
                    <div class="col-md-12 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-6">
                                    <img class="lib-img-show" src="templeate/img/gettyimages-484011481-612x612.png">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        <i class="fas fa-stethoscope fa-2x"></i> Tous les services
                                        <div class="lib-header-seperator"></div>
                                    </div><br>
                                    <div class="lib-row lib-desc">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul class="list-group" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">
                                                        <li class="list-group-item">
                                                            <p><i class="fas fa-notes-medical fa-2x"></i> Gastro entérologie</p>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <p><i class="fas fa-user-nurse fa-2x"></i> Genicologie</p>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <p><i class="fas fa-briefcase-medical fa-2x"></i> Autres</p>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <!-- Horaire-->


        <div class="container" id="horaire">
            <h1  data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000"><i class="far fa-clock fa-2x"></i> Horaire</h1>

            <div class="row">
                <div class="col-md-12">
                    <div class="card-base">
                        <div class="card-icon">
                            <a href="" title="Widgets" id="widgetCardIcon" class="imagecard"><i class="fas fa-history fa-lg"></i></a>
                            <div class="card-data widgetCardData">
                                <h2 class="box-title" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" style="color: linear-gradient(#04519b, #033C73 60%, #02325f);">Ouvert lundi à vendredi de 9h:00 à 14h:00 et samedi 9h:00 à  12h:00</h2>
                                <p class="card-block text-center" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000">Les consultations et les visites sont ouverts de lundi à vendredi à partir de 09H:00 à 14H:00 et samedi 9H à  12H</p>
                                <a href="templeate/formulaire.php" title="Style Builder" class="anchor btn btn-info" data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" style=" border: #bb7824;"> <i class="fa fa-paper-plane" aria-hidden="true"></i>  Prendre un rendez-vous </a>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
            </div>

        </div><br>


        <!-- Footer-->
        <div class="py-3 bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-center text-md-left">
                        <p class="mb-md-0">© 2020. All rights reserved.</p>
                    </div>
                    <div class="col-md-5 text-center text-md-right">
                        <p class="mb-0"><a href="" class="external text-white">Centre medicale de l'estuaire</a> </p>
                    </div>
                </div>
            </div>
        </div>

        <script src="templeate/js/jquery.slim.min.js"></script>
        <script src="templeate/js/js/bootstrap.bundle.min.js"></script>
        <script src="templeate/js/svgembedder.min.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                AOS.init();
                $(document).scroll(function () {
                    $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
                });
            });
        </script>

    </body>

</html>