<!DOCTYPE html>
    <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <title>Faire une demande de Réclamation</title>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
            <link rel="stylesheet" href="assets/css/animate.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/aos.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/aos.css">
            <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
            <link rel="stylesheet" href="../bootstrap/assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
            <link rel="stylesheet" href="../bootstrap/assets/fonts/fontawesome-all.min.css">
        
        </head>

        <body>
        <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><img class="rounded-circle" src="assets/img/INSTI.png" width="75" height="75">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>INSTI</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/dash_etu"><i class="fas fa-tachometer-alt"></i><span>Tableau de bord</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="/faire_demande_reclamation"><i class="fas fa-inbox"></i><span>Faire une demande de réclamation</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/faire_demande_evaluation"><i class="fas fa-inbox"></i><span>Faire une demande d'évaluation</span></a></li>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar3.jpeg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container bg-light">
                    <div class="row text-primary justify-content-center">
                            <div class="col-md-9 col-lg-12 col-xl-10">
                                <div class="card shadow-lg o-hidden border-0 my-5">
                                    <div class="card-body p-0">
                                        <div>
                                            <div>
                                                <div class="text-center p-5">
                                                    <div class="text-center">                   
                                                    <form data-bs-hover-animate="pulse" method="post">
                                                            <h2 class="text-center" data-aos="fade-down" data-aos-duration="600" data-aos-delay="400" style="font-size: 29px;"><strong>Demande de réclamation</strong></h2>
                                                    
                                                            <div class="form-group">

                                                                <div class="form-row">

                                                                <div class="col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600">
                                                                        <label style="font-weight: normal;">Semestre concerné</label>
                                                                        <select class="form-control" name="semester">
                                                                            <optgroup >
                                                                            @foreach($acad_sems as $a_sem)
                                                                           

                                                                           <option>
                                                                               {!!$a_sem->designation!!}
                                                                        
                                                                           </option>
                                                                           @endforeach
                                                                                                    
                                                                            </optgroup>                                                                       </optgroup>
                                                                        </select>
                                                                    </div>

                                                                <div class="col" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600" V>
                                                                        <label style="font-weight: normal;">UE concerné</label>
                                                                        <select class="form-control" name="ue">
                                                                            <optgroup >
                                                                            @foreach($ues as $an_ue)
                                                                           

                                                                           <option>
                                                                               {!!$an_ue->appelation!!}
                                                                        
                                                                           </option>
                                                                           @endforeach
                                                                            </optgroup>
                                                                            
                                                                        </select>
                                                                    </div>

                                                                   
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="form-row">
                                                                
                                                                <div class="col" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600">
                                                                        <label style="font-weight: normal;">Type d'évaluation</label>
                                                                        <select class="form-control" name="evaluationType" required="required">
                                                                            <optgroup label="Type d'évaluation">
                                                                            @foreach($eva_types as $an_eva_type)
                                                                           

                                                                           <option>
                                                                               {!!$an_eva_type->appelation!!}
                                                                        
                                                                           </option>
                                                                           @endforeach
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <div class="col">
                                                                        <label style="font-weight: normal;"> Document preuve </label>
                                                                        <input class="form-control" type="file" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="paymentProof">   
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <label style="font-weight: normal;"> Motif </label>
                                                                        <input class="form-control" type="text" data-aos="fade-left" data-aos-duration="700" data-aos-delay="600" name="reclamationMotif" >
                                                                    </div>
                                                    
                                                                    <div class="col">
                                                                        <label style="font-weight: normal;"> Description du Motif </label>
                                                                        <input class="form-control" type="text-area" data-aos="fade-right" data-aos-duration="700" data-aos-delay="600" name="motifDescription" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <button class="btn btn-primary btn-block" data-aos="fade-down" data-aos-duration="750" data-aos-delay="600" type="submit" name = "demande" style=" font-weight:bold;" >Envoyer</button>
                                                            </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/bs-init.js"></script>
            <script src="assets/js/aos.js"></script>
            <script src="assets/js/aos.js"></script>
        </body>
        <div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>

        <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span> <?php echo ("Copyright © INSTI&nbsp;".date('Y') ) ?> </span></div>
                </div>
            </footer>
    </html>


