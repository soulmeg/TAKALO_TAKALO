<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Projects - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="row">
                    <?php for ($i=0;$i<9;$i++) {?>
                        <div class="col-md-6 col-lg-4" style="width:300px;margin: 10px;margin-left:110px;border-radius: 20px;box-shadow: 0 2px 10px rgba(0,0,0,.1);">
                        <div class="card border-0"><a href="#" style="height: 50px;">User : Megane</a><a href="#" style="height: 50px;">Categorie : Vetement</a><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image1.jpg" alt="Card Image"></a>
                            <div class="card-body">
                                <h6><a href="#">Lorem Ipsum</a></h6>
                                <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p><button class="btn btn-primary" type="button">accept</button><button class="btn btn-primary" type="button">refuse</button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>