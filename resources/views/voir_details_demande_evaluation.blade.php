<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Details de la demande</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                <div class="container-fluid d-flex flex-column p-0"><img class="rounded-circle" src="assets/img/INSTI.png" width="75" height="75">
                        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                            <div class="sidebar-brand-icon rotate-n-15"></div>
                            <div class="sidebar-brand-text mx-3"><span>INSTI</span></div>
                        </a>
                        <hr class="sidebar-divider my-0">
                        <ul class="nav navbar-nav text-light" id="accordionSidebar">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="/dash_ens"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/voir_demande_reclamation"><i class="fas fa-inbox"></i><span>Voir les demandes de reclamation</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/voir_demande_evaluation"><i class="fas fa-inbox"></i><span>Voir les demandes d'??valuation</span></a></li>
                    
                        </ul>
                        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                    </div>
                </nav>
                <div class="d-flex flex-column" id="content-wrapper">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                            <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                                <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <div class="input-group-append"></div>
                                    </div>
                                </form>
                                <ul class="nav navbar-nav flex-nowrap ml-auto">
                                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                            <form class="form-inline mr-auto navbar-search w-100">
                                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <div class="d-none d-sm-block topbar-divider"></div>
                                    <li class="nav-item dropdown no-arrow" role="presentation">
                                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">$user</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar3.jpeg"></a>
                                            <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="/profil_ens"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                                <a class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                                <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    
                        <div class="container-fluid">
                            <div class="coltext-primary justify-content" data-aos='zoom-in' data-aos-duration='700' data-aos-delay='200'>
                                <div class="card shadow mb-3">
                                    <div class="card-header py-3">
                                        <div class="text-center"> 
                                            <p class='text-primary m-0 font-weight-bold'>Details de la demande</p>
                                        </div>
                                        <div class='card-body' style='font-size: 14px;'>
                                                    
                                            <ul class="list-group">
                                            
                                            
                                            <li class='list-group-item'><span style='font-weight: bold;font-size: 12px;'>Nom : {!!$prof->com_nom!!} </span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;font-size: 12px;'>Pr??noms :{!!$prof->com_prenom!!}</span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;font-size: 12px;'>Fill??re : <?php echo $filiere ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Groupe P??dagogique : <?php echo $groupe_pedagogique ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Type de demande : Demande d'evaluation </span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Type d'??valuation : <?php echo $type_evaluation ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Semestre concern??: <?php echo $semestre_academique ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>UE concern??: <?php echo $UE ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Motif: <?php echo $motif ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Description de motif : <?php echo $description_motif ?></span></li>
                                            <li class='list-group-item'><span style='font-weight: bold;'>Quittance: <a href = "<?php echo $fichier_preuve ?>"><?php echo $fichier_preuve ?></a></span></li>
                                        
                                        </ul>         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-brand d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                        
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3">
                                        <button class="btn btn-primary btn-block" type="submit" style="font-weight: bold;">R??pondre ?? la demande</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>                      
            </div>          
        </div>

   
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"><span>Copyright ?? INSTI 2021</span></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" data-aos="fade-up" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html> 
