

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Hire me - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container" style="text-align: center;    height: auto;">
            <?php 
                $data=$this->session->userdata('user');
            ?>
            <?php foreach($categories as $categorie) : ?>
                
                    <div class="form-group"><label style="width: 250PX;box-shadow: 0 2px 5px grey;border-radius: 10px;text-align: center;height: 30PX;"><?php echo $categorie['nom_categorie'];?></label>
                    <a href="categorie_controller/get_form/<?php echo $categorie['id_categorie'];?>">
                        <button class="btn btn-primary" type="button" style="margin-left: 50px;">Modifier</button>
                    </a>
                    <a href="categorie_controller/delete/<?php echo $categorie['id_categorie'];?>">
                        <button class="btn btn-primary" type="button" style="margin-left: 20px;">Supprimer</button>
                    </a>
                    </div>
                
                <?php endforeach ?>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>