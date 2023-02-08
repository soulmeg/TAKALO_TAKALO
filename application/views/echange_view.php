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
                    <h2 style="font-size: 29px;font-family: cursive;color: rgb(24,55,122); text-align:center;margin-top:60px;margin-bottom:60px">
                    NOMBRE D'ECHANGE EFFECTUE </h2>
                </div>

                <div class="row">
                <h5>Nombre d'echange effectue : <?php echo $echange;?></h5>
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