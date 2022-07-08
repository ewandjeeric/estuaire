<!DOCTYPE html>
<html>

    <head>
        <title>Se connecter</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/centre-medical-de-lestuaire.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/creer_compte.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
        <script type="text/javascript" src="js/jquery.min3.2.js"></script>
        <script type="text/javascript" src="js/bootstrap.min4.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    </head>

    <body>

        <nav class="navbar navbar-light navbar-expand-lg  shadow-sm bg-white navbar-laravel" style="background-color: #071041 !important;">
            <div class="container">
                <a class="navbar-brand" href="http://centremedicaldelestuaire.com/" style="font-family: 'Comic Sans MS';color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); font-size: 25px;" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><img src="img/centre-medical-de-lestuaire.png" width="52">Centre medicale de l'estuaire</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="http://centremedicaldelestuaire.com/" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-home fa-lg" ></i> Accueil</a>
                        </li>
                    </ul>

                    <form class="form-inline my-2 my-lg-0">
                        <div class="input-group input-group-sm" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000">
                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                            <div class="input-group-append">
                                <button style="color: white; background: #93c800 !important;" type="button" class="btn btn-success btn-number">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </nav>


        <main class="login-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card bg-light">
                            <div class="card-header" style=" font-family: Raleway, sans-serif; background-color: #93c800 !important;">
                                <h3 style="color: white;"><i class="fas fa-user-lock fa-lg"></i> Se connecter</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="../controller/Controller_connexion.php" >
                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Nom d'utilisateur</label>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-lock"></i></span>
                                                </div>
                                                <input type="password" class="form-control" id="password" name="password" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Se souvenir
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success" style="background: #93c800 !important;">
                                            <i class="fas fa-sign-in-alt fa-lg"></i> Connexion
                                        </button>

                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/creer_compte.js"></script>
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

