<!DOCTYPE html>
<html>
<head>
	<title>nous ecrire</title>
	<meta charset="utf-8">
	<link rel="icon" href="Favicon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
        <link rel="stylesheet" type="text/css" href="css/formulaire.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
	<script type="text/javascript" src="js/jquery.min3.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min4.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

	<nav class="navbar navbar-light navbar-expand-lg  shadow-sm bg-white navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="../index.php" style="font-family: 'Comic Sans MS';color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); font-size: 25px;" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000">Centre medicale de l'estuaire</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-home fa-lg"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="connexion.php" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-user-lock fa-lg"></i> Se Connecter</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</nav><br>



<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-light">
                <div class="card-header bg-primary text-white"><h3><i class="fas fa-file-signature"></i> Nous écrire</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="" id="myForm">
                        <div class="form-group">
                            <label for="name">Noms</label>
                            <input type="text" class="form-control" name="noms" id="noms" aria-describedby="emailHelp" placeholder="Saisir noms.." required>
                        </div>
                        <div class="form-group">
                            <label for="email"> Address email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Saisir email.." required>
                            <small id="emailHelp" class="form-text text-muted">L'address email est obligatoire</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right"><i class="fas fa-paper-plane fa-lg"></i> Envoyer</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fas fa-clinic-medical"></i> Address</div>
                <div class="card-body">
                    <p><i class="fas fa-map-marker-alt"></i> Carrefour Akwa</p>
                    <p><i class="fas fa-city"></i> Douala</p>
                    <p><i class="fas fa-flag"></i> Cameroun</p>
                    <p><i class="fas fa-at"></i> Email : email@example.com</p>
                    <p><i class="fas fa-phone-alt"></i> Tel. +237 56 11 51 84</p>

                </div>

            </div>
        </div>
    </div>
</div><br>


<!-- Modal -->
        <div id="modalOnLoad" class="modal fade" style="background: transparent !important; border: none;"   tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-center">
                <div class="modal-dialog .modal-align-center">
                    <div class="modal-content" style="background: transparent !important; border: none;">
                        <div class="modal-header" style="background: transparent !important; border-bottom: none;">
                            <h4 class="modal-title" id="myModalLabel"></h4>
                        </div>
                        <div class="modal-body" style="background: transparent !important;">
                            <div class="adjust" id="reponse">
                                <div class="loader" id="chargement"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script src="../controller/message.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            AOS.init();
            $(document).scroll(function() {
                $('.navbar').toggleClass('scrolled', $(this).scrollTop() > $('.navbar').height());
            });
        });
    </script>

</body>
</html>