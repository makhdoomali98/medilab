<?php
$title='reset';
include '../../includes/header.php'; ?>

    <main id="main">

        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Password reset</h2>
                    <ol>
                        <li><a href="../register/signup.php">Signup here</a></li>
                        <li><a href="../register/login.php">Login here</a></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">


                <section id="appointment" class="appointment section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Reset Your Password</h2>
                            <p>Forgot Password? <br> Enter your email to reset your password</p>
                        </div>

                        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <!--action-->
                                <input type="hidden" class="form-control" value="signup" id="signup" name="action">
                                <!--email-->
                                <div class=" col-md-4 form-group m-auto ">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <!--button-->
                                <div class="text-center"><button action="" type="submit">Reset</button></div>
                            </div>
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