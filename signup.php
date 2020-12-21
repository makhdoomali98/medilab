<?php include 'includes_user/header.php'; ?>
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

        <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->





    </div>
</header><!-- End Header -->
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sign Up</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Login here</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">


                <section id="appointment" class="appointment section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Sign Up!</h2>
            <p>Create a free account to use all the features including appointments and managing your data</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <!--action-->
                <input type="hidden" class="form-control" value="signup" id="signup" name="action">
                <div class="col-md-4 form-group">
                <!--name-->
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                </div>
                <!--password-->
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <!--email-->
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <!--age-->
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Your Age" required>
                </div>
                    <!--cnic-->
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="Your CNIC" required>
                </div>
                    <!--contact-->
                <div class="col-md-4 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" id="contact" name="contact" placeholder="Contact #" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 form-group">
                    <input type="text" name="address" class="form-control" placeholder="Your Address" required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="text" name="city" class="form-control" placeholder="Your City" required>
                </div>
                <div class="col-md-4 form-group">
                    <input type="" name="gender" class="form-control" placeholder="Your Gender" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-3">

                    <label>
                    Select image to Upload: </label>
                    <input type="file" name="image"  placeholder="Thumbnail here">

                </div>
            </div>



            <div class="text-center"><button action="" type="submit">  Create Account</button></div>
        </form>

        </div>
    </section>

    </div>
    </section>

</main><!-- End #main -->



<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<?php include 'includes_user/footer.php'; ?>