<?php 
session_start();

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MediLab <?php if (isset($title)){ echo ' | '.$title; }?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab - v3.0.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
            <i class="icofont-google-map"></i> A108 Adam Street, NY
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.php">Medilab </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>

                <li class="<?php if(isset($active)){if($active == 'index'){echo'active';}}?>"><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/View/users_view/index.php">Home</a></li>
                <?php if(isset($_SESSION['users'])){if($_SESSION['users']){?>
                <li class="<?php if(isset($active)){if($active == 'products'){ echo'active';}}?>"><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/View/users_view/products.php">Products</a></li>
                <li class="<?php if(isset($active)){if($active == 'orders'){echo'active';}}?>"><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/View/users_view/orders.php">Orders</a></li>
                 <li class="<?php if(isset($active)){if($active == 'contactUs'){echo'active';}}?>"><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/View/users_view/contactUs.php">Contact</a></li>
                
                <li class="drop-down <?php if(isset($active)){if($active == 'profile'){ echo'active';}}?>" ><a href="#"><?php print_r($_SESSION['users']['name']) ?></a>
                    <ul>
                        <li><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/View/register/edit_profile.php">Edit Profile</a></li>

                        <li><a href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/users/index.php?action=logout">Logout</a></li>

                    </ul>
                </li>
            <?php }}else{ ?>
                <li class="<?php if(isset($active)){if($active == 'login'){ echo'active';}}?>"><a href="https://localhost/medilab/users/View/register/login.php">Login</a></li>
                <li class="<?php if(isset($active)){if($active == 'signup'){ echo'active';}}?>"><a href="https://localhost/medilab/users/View/register/signup.php">Register</a></li>
                <?php
            }
            ?>
            </ul>
        </nav><!-- .nav-menu -->



    </div>
</header><!-- End Header -->
