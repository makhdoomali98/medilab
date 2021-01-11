<?php
$active = 'login';
include '../../includes/header.php'; 
if (isset($_SESSION['users'])) {
        header('location: https://localhost/medilab/users/View/users_view/index.php');
    }
if (isset($_SESSION['wrong_credentials'])) {
    echo $_SESSION['wrong_credentials'];
    unset($_SESSION['wrong_credentials']);
}
?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Log IN</h2>
                <ol>
                    <li><a href="signup.php">Signup here</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">


                <section id="appointment" class="appointment section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Log In!</h2>
            <p>Log In to Start Manage your Account</p>
        </div>

        <form action="../../index.php" method="post" class="php-email-form">
            <div class="row">
                <!--action-->
                <input type="hidden" class="form-control" value="login" id="login" name="action">
               <!--email-->
                <div class="col-md-4 form-group m-auto">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
               
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    <div class="col-md-4 form-group mt-3 mt-md-0">
                    <a href="../users_view/reset.php">Reset Password</a>
                </div>
                </div>
            </div>
            <div class="text-center"><button class="btn btn-success" name="submit" value="submit" id="submit" type="submit">login</button></div>
        </form>

        </div>
    </section>

    </div>
    </section>

</main><!-- End #main -->

<div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>
 <?php include '../../includes/footer.php' ?>
