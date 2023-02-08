<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lato:300,400,700'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css'); ?>">
</head>

<body>
<?php 
$data=array();
$objets=array();
$data=$this->session->userdata('user');

?>   
<br>  
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
          
            <div class="container">
                <div class="heading">
                    <h5 style="font-size: 29px;font-family: cursive;color: rgb(24,55,122); text-align:center;margin-top:60px;margin-bottom:60px">Vous voulez l'echanger avec quoi?</h5>
                </div>

                <div class="row">
                
                <form action="<?php echo base_url('control_acceuil/insert_attente/'.$data[0]['id_user']);?>" method="post">
                    <?php
                for($i=0;$i<count($liste);$i++) {
                    ?>        
                    <input type="hidden" name="objet_demande" value="<?php echo $liste[$i]['id_objet'];?>">
                    <input type="hidden" name="objet_demander" value="<?php echo $id_demander;?>">

                    <div class="col-md-6 col-lg-4" style="border:inset;margin-left:170px;margin-bottom:40px">
                        <div class="card border-0">
                            <img class="card-img-top scale-on-hover" src="<?php echo base_url('assets/img/'.$liste[$i]['nom_photo']); ?>" alt="Card Image">
                            <div class="card-body">
                                <h6>Categorie : <a href="#"><?php echo $liste[$i]['nom_categorie'];?></a></h6>
                                <p class="text-muted card-text">Prix : <?php echo $liste[$i]['prix'];?> $</p>
                                <p class="text-muted card-text"><?php echo $liste[$i]['description_text'];?></p>
                            </div>
                        </div>  
                    </div>
                    <button style="border-color:white;margin-left:250px">Echanger</button>
                <?php } ?>
                </form>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" ></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" ></script>
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>