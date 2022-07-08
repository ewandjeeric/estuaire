<?php
if (isset($_COOKIE['username'])) {

    $dec = filter_input(INPUT_GET, 'deconnexion');

    if ($dec == "true") {
        setcookie('username', '', time());

        unset($_SESSION['username']);

        header("Location:http://centremedicaldelestuaire.com/");
        exit();
    }
} else {

    header("Location:../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

    <head>
        <title>gestion de rendevous</title>
        <meta charset="utf-8">
        <link rel="icon" href="img/centre-medical-de-lestuaire.png">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/gestion.css">
        <link rel="stylesheet" type="text/css" href="fontawesome-free-5.13.0-web/css/all.css">
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min4.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
        <style type="text/css">
            .pagination>li>a,
            .pagination>li>span {
                border-radius: 50% !important;
                margin: 0 5px;
            }
        </style>
    </head>

    <body>
        <?php include('../manager/manager.php'); ?>

        <!-- navbar-->
        <nav class="navbar navbar-light navbar-expand-lg shadow-sm bg-white"><a href="http://centremedicaldelestuaire.com/" class="navbar-brand" style="font-family: 'Comic Sans MS';color: #333333; text-shadow: 2px 2px 0px #FFFFFF, 5px 4px 0px rgba(0,0,0,0.15); font-size: 25px;" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"> <img src="img/centre-medical-de-lestuaire.png" width="52">Centre medicale de l'estuaire</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                </ul>
                <div class="navbar-text ml-lg-3"> <a href="gestion_rendez_vous.php?deconnexion=true" class="btn btn-success text-white shadow" data-aos="fade-right"  data-aos-delay="0" data-aos-duration="1000"><i class="fas fa-power-off fa-lg"></i> Deconnexion</a></div>
            </div>
        </nav>


        <div class="container-fluid">

            <div class="card shadow bg-light mb-4">
                <div class="card-header py-3">
                    <div class="display-flex align-center">
                        <button  class="btn btn-outline-secondary" data-toggle="modal" data-target="#date">
                            <img src="img/icons8-dossier-de-recherche-35.png">
                        </button>
                        <a href="gestion_rendez_vous.php?all=all" class="btn btn-outline-secondary">
                            <img src="img/icons8-grille-d'activité-2-35.png">
                        </a>
                        <a href="gestion_rendez_vous.php" class="btn btn-outline-secondary">
                            <img src="img/icons8-mises-à-jour-disponibles-35.png">
                        </a>

                        <div class="ml-auto display-flex align-center">
                            <form action="#" method="get" class="form-inline my-2 my-lg-0">
                                <div class="input-group input-group-md">
                                    <input type="text" class="form-control" name="q" id="system-search" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success btn-number">
                                            <i style="color: white;" class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <ul>
                            <li class="page-item" style="display: flex; float: left;">
                                <a class="page-link btn btn-outline-secondary" href="#"><img src="img/icons8-gauche-35.png"></a>
                            </li>
                            <li class="page-item" style="display: flex; float: right; margin-right: 40px;">
                                <a class="page-link btn btn-outline-secondary" href="#"><img src="img/icons8-droite-35.png"></a>
                            </li>
                        </ul>
                        <table class="table table-bordered table-list-search" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><i class="fas fa-user fa-lg"></i> Noms & Prénoms</th>
                                    <th><i class="fab fa-whatsapp fa-lg"></i> Téléphone</th>
                                    <th><i class="fas fa-at fa-lg"></i> Email</th>
                                    <th><i class="fas fa-city fa-lg"></i> Ville</th>
                                    <th><i class="fas fa-map-marker-alt fa-lg"></i> Quartier</th>
                                    <th><i class="far fa-clock fa-lg"></i> Heure</th>
                                    <th style="width: 190px;"><i class="far fa-calendar-alt fa-lg"></i> Jour</th>
                                    <th><i class="fas fa-briefcase-medical fa-lg"></i> Service</th>
                                    <th><i class="fas fa-pencil-alt fa-lg"></i> Motif</th>
                                    <th><i class="fas fa-male fa-lg"></i> Patient</th>
                                    <th><i class="far fa-edit fa-lg"></i> Modifier</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <?php 
                                 $jour = date('Y-m-d', time());
                                 $jr = date('Y-m-d', time());
                                 $j = new DateTime($jour);
                                $donnees = get_order_list();
                                while ($patient = $donnees->fetch()) {

                                    $RDV = date('Y-m-d', strtotime($patient['jour']));
                                    $R = new DateTime($RDV);
                                    if(!isset($_GET['all'])){
                                    if($j < $R){
                                    ?>
                                    <tr>
                                        <td><?php echo $patient['noms']; ?></td>
                                        <td><?php echo $patient['telephone']; ?></td>
                                        <td><?php echo $patient['email']; ?></td>
                                        <td><?php echo $patient['ville']; ?></td>
                                        <td><?php echo $patient['quartier']; ?></td>
                                        <td><?php echo $patient['heure']; ?></td>
                                        <td id="<?php $jrs = date('Y-m-d', strtotime($patient['jour']));  echo $jrs; ?>">
                                        <?php 
                                        setlocale(LC_TIME, "fr.UTF8", "French");
                                        echo strftime("%A %d %B %G", strtotime($patient['jour']));
                                        ?>  
                                        </td>
                                        <td><?php echo $patient['service']; ?></td>
                                        <td><?php echo $patient['motif']; ?></td>
                                        <td><?php echo $patient['patient']; ?></td>
                                        <td><button type="button" class="btn btn-secondary modifier" id="<?php echo $patient['id']; ?>" data-toggle="modal" data-target="#openEditor"><img src="img/icons8-modifier-le-calendrier-30.png"></button></td>
                                    </tr>
                                    <?php
                                }
                                }else{
                                    ?>

                                    <tr>
                                        <td><?php echo $patient['noms']; ?></td>
                                        <td><?php echo $patient['telephone']; ?></td>
                                        <td><?php echo $patient['email']; ?></td>
                                        <td><?php echo $patient['ville']; ?></td>
                                        <td><?php echo $patient['quartier']; ?></td>
                                        <td><?php echo $patient['heure']; ?></td>
                                        <td id="<?php $jrs = date('Y-m-d', strtotime($patient['jour']));  echo $jrs; ?>">
                                        <?php 
                                        setlocale(LC_TIME, "fr.UTF8", "French");
                                        echo strftime("%A %d %B %G", strtotime($patient['jour']));
                                        ?>  
                                        </td>
                                        <td><?php echo $patient['service']; ?></td>
                                        <td><?php echo $patient['motif']; ?></td>
                                        <td><?php echo $patient['patient']; ?></td>
                                        <td><button type="button" class="btn btn-secondary modifier" id="<?php echo $patient['id']; ?>" data-toggle="modal" data-target="#openEditor"><img src="img/icons8-modifier-le-calendrier-30.png"></button></td>
                                    </tr>
                                <?php
                            }

                                
                            }
                                $donnees->closeCursor(); // Termine le traitement de la requête
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 text-center">
                        <ul class="pagination pager" id="myPager"></ul>
                    </div>
                </div>
            </div>
            <div style="text-align:center;font-size:14px;padding-top:20px;padding-bottom:20px;">© 2020. All rights reserved. <a href="http://centremedicaldelestuaire.com/" target="_blank" style="color:#ff5e63;font-weight:bold;">Centre medicale de l'estuaire</a></div>
        </div>


        <div class="modal fade" id="openEditor" role="dialog">
            <div class="modal-dialog card border-secondary" role="document">
                <div class="modal-content">
                    <form method="post" action="../controller/update_rendez_vous.php">
                        <div class="modal-header card-header bg-primary">
                            <h5 class="modal-title"><img src="img/icons8-modifier-le-calendrier-40.png"> Modifier</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body card-body">
                            <div class="form-group row" style="display: none;">
                                <label for="example-week-input" class="col-2 col-form-label"><i class="far fa-cloud fa-2x"></i></label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="example-id-input" name="id">
                                </div>
                            </div>
                            <div class="form-group row" style="display: none;">
                                <label for="example-week-input" class="col-2 col-form-label"><i class="far fa-cloud fa-2x"></i></label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="example-noms-input" name="noms">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-week-input" class="col-2 col-form-label"><i class="far fa-calendar-alt fa-2x"></i></label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="" id="example-date-input" name="jour">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-time-input" class="col-2 col-form-label"><i class="far fa-clock fa-2x"></i></label>
                                <div class="col-10">
                                    <input class="form-control" type="time" value="" id="example-time-input" name="heure">
                                </div>
                            </div>
                            <div class="form-group row" style="display: none;">
                                <label for="example-week-input" class="col-2 col-form-label"><i class="far fa-phone fa-2x"></i></label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="example-tel-input" name="telephone">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><img src="img/icons8-modifier-le-calendrier-36.png"></button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal"><img src="img/icons8-annuler-35.png"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="date">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="">
                        <div class="modal-header card-header bg-primary">
                            <h5 class="modal-title"><img src="img/icons8-heures-supplémentaires-50.png"> Recherche</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body card-body">
                            <div class="form-group row">
                                <label for="example-week-input" class="col-2 col-form-label">Jour</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="<?php echo $jr;?>" id="example-date-input">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><img src="img/icons8-recherche-immobilière-35.png"></button>
                            <button type="reset" class="btn btn-danger" data-dismiss="modal"><img src="img/icons8-annuler-35.png"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="js/pagination.js"></script>
        <script type="text/javascript" src="js/search.js"></script>
        <script type="text/javascript" src="js/modifier.js"></script>
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