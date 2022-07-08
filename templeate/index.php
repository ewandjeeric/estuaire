<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>prendre rendez-vous</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="icon" href="img/centre-medical-de-lestuaire.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/creer_compte.css">
        <link rel="stylesheet" type="text/css" href="css/formulaire.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min4.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-light navbar-expand-lg shadow-sm bg-white navbar-laravel" style="background-color: #071041 !important;">
            <div class="container">
                <a href="http://centremedicaldelestuaire.com/" class="navbar-brand" style="font-family: 'Comic Sans MS';color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); font-size: 25px;"><img src="img/centre-medical-de-lestuaire.png" width="52"> Centre medicale de l'estuaire</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="http://centremedicaldelestuaire.com/"><i class="fas fa-home fa-lg"></i> Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: white;" href="connexion.php"><i class="fas fa-user-lock fa-lg"></i> Se connecter</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>



        <main class="login-form">
            <div class="cotainer">
                <div class="alert alert-dismissible alert-success text-center lead" style=" font-family: Raleway, sans-serif; background-color: #93c800 !important;">
   PRENDRE RENDEZ-VOUS AU : <b style="font-family: 'Abril Fatface', cursive">+ 237 679 797 066 / 243 547 562</b>.
</div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="background-color: #071041 !important;"><h3 style="color: white;"><i class="fas fa-clipboard-list fa-lg"></i> Prendre un rendez-vous</h3></div>
                            <div class="card-body">
                                <form method="POST" action="" id="myForm">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="basic-url" class="lead">Noms</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-signature"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="noms" aria-describedby="basic-addon3" name="noms">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basic-url" class="lead">Prénoms</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-signature"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="prenoms" aria-describedby="basic-addon3" name="prenoms">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="basic-url" class="lead">Email</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" aria-describedby="basic-addon3" name="email">
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="basic-url" class="lead">Ville</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-city"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="ville" aria-describedby="basic-addon3" name="ville">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="basic-url" class="lead">Quartier</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="quartier" aria-describedby="basic-addon3" name="quartier">
                                            </div>
                                        </div>
                                    </div>
                                    <label for="service" class="lead">Service</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3" style="font-size: 20px;"><i class="fas fa-briefcase-medical"></i></span>
                                        </div>
                                        <select class="form-control" id="service" required="required" name="service">
                                            <option value="Gastro entérologie" selected>Gastro entérologie</option>
                                            <option value="Genicologie">Génicologie</option>
                                            <option value="Urologie">Urologie</option>
                                            <option value="Anesthésiologie">Anesthésiologie</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                    </div>
                                    <label for="motif" class="lead">Motif</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3" style="font-size: 20px;"><i class="fas fa-pencil-alt"></i></span>
                                        </div>
                                        <select class="form-control" id="motif" required="required" name="motif">
                                            <option value="Consultation" selected>Consultation</option>
                                            <option value="Examen fibrocan">Examen fibrocan</option>
                                            <option value="Examen coloscopie">Examen coloscopie</option>
                                            <option value="Endoscopy">Endoscopy</option>
                                            <option value="Autres">Autres</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <label for="jour" class="lead">Jour</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3" style="font-size: 20px;"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <select class="custom-select" id="jour" required="required" name="jour">
                                                    <option value=""></option>
                                                    <?php
                                                    $today = time();
                                                    setlocale(LC_TIME, "fr.UTF8", "French");
                                                    $time = $today;
                                                    for ($i = 0; $i <= 100; $i++) {
                                                        $time += 86400; // On incrémente au timestamp 86400 s par jour
                                                        $jour = date('l', $time);
                                                        if ($jour == 'Sunday') {
                                                            
                                                        } else {
                                                            ?>
                                                            <option value="<?php echo date('Y-m-d', $time); ?>"><?php $jr = date('d-F-Y', $time); echo strftime("%A %d %B %G", strtotime($jr)); ?> </option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="heure" class="lead">Heure</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3" style="font-size: 20px;"><i class="far fa-clock"></i></span>
                                                </div>
                                                <select class="custom-select" id="heure" required="required" name="heure">
                                                </select>
                                                <span id="success" style="display: none;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="basic-url" class="lead"><i class="fas fa-male fa-2x"></i> Patient</label>
                                    <div class="input-group mb-3" id="pat" style="border: 1px solid #ced4da; padding: 10px; width: 425px; border-radius: 5px 5px 5px;">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" required="required" id="customRadioInline1" name="patient" class="custom-control-input" value="ancien">
                                            <label class="custom-control-label" for="customRadioInline1">Ancien patient</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" required="required" id="customRadioInline2" name="patient" class="custom-control-input" value="nouveau">
                                            <label class="custom-control-label" for="customRadioInline2">Nouveau patient</label>
                                        </div>
                                    </div>
                                    <label for="basic-url" class="lead">Téléphone</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-phone-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="telephone" aria-describedby="basic-addon3" name="telephone">
                                        <small id="FormCustomSelectPref" class="form-text text-muted"></small>
                                    </div>
                                    <button type="submit" class="btn  btn-success" id="envoyer" style="color: white; background: #93c800 !important;"><i class="fas fa-share-square fa-lg"></i> Envoyer</button>
                                    <a href="http://centremedicaldelestuaire.com/" class="btn btn-warning"><i class="fas fa-times fa-lg"></i> Annuler</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
         <div style="text-align:center;font-size:14px;padding-top:20px;padding-bottom:20px;">© 2020. All rights reserved. <a href="http://centremedicaldelestuaire.com/" target="_blank" style="color:#ff5e63;font-weight:bold;">Centre medicale de l'estuaire</a></div>




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


        <script type="text/javascript" src="../controller/verification.js"></script>
        <script src="../controller/creer_compte.js"></script>

    </body>
</html>