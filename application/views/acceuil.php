<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lato:300,400,700');?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css');?>">
</head>

<body>
<?php 
$data=array();
$objets=array();
$data=$this->session->userdata('user');
?>  
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="row">
                        <div class="col-md-6 col-lg-4" style="width:300px;margin: 10px;margin-left:110px;border-radius: 20px;box-shadow: 0 2px 10px rgba(0,0,0,.1);">
                        <div class="card border-0"><a href="#" style="height: 50px;">User : <?php echo $liste['user_name'];?></a>
                        <a href="#" style="height: 50px;">Categorie : <?php echo $liste['nom_categorie']?></a>
                        <a href="#">
                            <img class="card-img-top scale-on-hover" src="assets/img/nature/<?php echo $liste['nom_photo'];?>" alt="Card Image">
                        </a>
                            <div class="card-body">
                                <h6>Email<a href="#"><?php echo $liste['user_email'];?></a></h6>
                                <p class="text-muted card-text"> <?php echo $liste['description_text'];?></p>
                                <button class="btn btn-primary" type="button">accept</button>
                                <button class="btn btn-primary" type="button">refuse</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js');?>"></script>
</body>

</html>