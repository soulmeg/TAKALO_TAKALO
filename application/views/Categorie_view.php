<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
$data=$this->session->userdata('user');
    ?>
<?php foreach($categories as $categorie) : ?>
    <p>
        <?php echo $categorie['nom_categorie'];?>
            <a href="categorie_controller/get_form/<?php echo $categorie['id_categorie'];?>">
                <button>modifier</button>
            </a>
            <a href="categorie_controller/delete/<?php echo $categorie['id_categorie'];?>">
                <button>supprimer</button>
            </a>
    </p>
<?php endforeach ?>
</body>
</html>


