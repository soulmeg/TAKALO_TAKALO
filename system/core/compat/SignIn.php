<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
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
    <section class="login-dark">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fa fa-user"></i></div><input class="form-control" type="text" name="name" placeholder="Name">
            <input class="form-control" type="email" name="email" placeholder="Email">
            <input class="form-control" type="password" name="password" placeholder="Password">
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign In</button>
        </div>
        <a class="forgot" href="<?php echo site_url('Login/index'); ?>">return Login</a>
        </form>
    </section>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
</body>

</html>