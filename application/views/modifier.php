<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Update</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lato:300,400,700'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css'); ?>">
</head>

<body>
    <main class="page hire-me-page">
        <section class="portfolio-block hire-me">
            <div class="container">
                <div class="heading"></div>
                <form action="<?php echo base_url("objet_controller/update");?><?php echo"/".$objet['id_objet'];?>" method="post">
                    <div class="form-group"><input class="form-control" type="hidden"></div>    
                    <div class="form-group"></label><input class="form-control" type="hidden"></div>
                    <div class="form-group"><label for="subject">Categorie :</label><select class="form-control" id="subject">
                                <?php for ($i=0;$i<count($categories);$i++) {?>
                                    <option value="<?php echo $categories[$i]['id_categorie'] ;?>"><?php echo $categories[$i]['nom_categorie'] ;?></option>
                                <?php }?>
                    </select></div>
                        <div class="form-group"><label>Description :</label><input class="form-control" type="text" value=<?php echo $objet['description_text'];?> name="description_text"></div>
                        <div class="form-group"><label>prix :</label><input class="form-control" type="number" value=<?php echo $objet['prix'];?> name="prix"></div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6 button"><button class="btn btn-primary btn-block" type="submit">Modifier</button></div>
                            </div>
                        </div>
                </form>
            </div>
        </section>
    </main>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/theme.js'); ?>"></script>
</body>

</html>