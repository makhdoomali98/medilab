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
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admin/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/admina/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab - v3.0.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
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
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="../index.php">Medilab</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Departments</a></li>
                <li><a href="#">cart</a></li>
                <li class="drop-down"><a href="#">Drop Down</a>
                    <ul>
                        <li class="drop-down"><a href="#">Settings</a>
                            <ul>
                                <li><a href="#">Edit Profile</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Logout</a></li>

                    </ul>
                </li>
                <li><a href="#">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->



    </div>
</header><!-- End Header -->
