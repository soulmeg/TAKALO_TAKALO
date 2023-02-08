<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Bitter:400,700'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Clean.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Header-Blue.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Header-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Dark.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-with-Search.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>

<body>
    <header class="header-blue">
        <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
            <div class="container-fluid"><a class="navbar-brand" href="#">TAKALO-TAKALO</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item"><a class="nav-link" href="#">Acceuil</a></li> -->
                        <?php $data=$this->session->userdata('user'); 
                        if($data[0]['est_admin']=='0'){?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('control_acceuil/allUtilisateur/'.$data[0]['id_user']);?>">Liste de mes objets</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('control_acceuil/notmyObject/'.$data[0]['id_user']);?>">Liste des objets echangeable</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('control_acceuil/allUtilisateur/'.$data[0]['id_user']);?>">Mes propositions</a></li>
                    
                    <?php }
                    if($data[0]['est_admin']=='1') {?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Categorie_controller');?>">Gestion de categories</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-toggle="dropdown" href="">Statistique</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="<?php echo base_url('verifAdmin_controller/nbr_utilisateur');?>">Nombre d'user</a>
                            <a class="dropdown-item" href="<?php echo base_url('verifAdmin_controller/echange_effectue');?>">Nombre d'echange effectuer</a>
                        </div>
                        </li>
                    <?php } ?>
                      
                    </ul>
                    <form class="form-inline mr-auto" target="_self">
                        <div class="form-group mb-0" style="/*margin-left: 235px;*/"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                    </form><span class="navbar-text"> <a class="login" href="#"></a>
                </span>
                <a class="btn btn-light action-button" role="button" href="<?php echo site_url('Login/logout'); ?>">Log Out</a>
                </div>
            </div>
        </nav>
    </header>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>