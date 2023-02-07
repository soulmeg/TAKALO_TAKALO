


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Bitter:400,700');?>">
    <link rel="stylesheet" href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/ionicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Clean.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Footer-Dark.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Header-Blue.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Header-Dark.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Dark.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Navigation-with-Search.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
</head>
<body>
<form action="<?php echo base_url("categorie_controller/update");?>
<?php echo"/".$categories['id_categorie'];?>" method="post">
   <div style ="margin-top:100px"class="form-group"><input class="form-control" style="height:100px" type="text" name="categorie_name" value=<?php echo $categories['nom_categorie'];?>></div>
   <!-- <div class="form-group"><input class="form-control" type="submit" value="valider"></div> -->
   <div class="form-group"><button class="btn btn-primary btn-block" style="height:100px" type="submit">valider</button></div>

</form>

<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>
</body>
</html>