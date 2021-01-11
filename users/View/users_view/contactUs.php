<?php
$title='contactUs';
$active = 'contactUs';
include '../../includes/header.php'; ?>


<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact Us</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <section id="contact" class="contact">


                <div>
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="container">
                    <div class="row mt-5">

                        <div class="col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="icofont-google-map"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>

                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="icofont-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0">

                            <form action="../../index.php" method="post"  class="php-email-form">
                                <!--action-->
                            <input type="hidden" class="form-control" value="feedback" id="feedback" name="action">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="this is test" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->
        </div>
    </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <!--    <div class="footer-top">-->
    <!--        <div class="container">-->
    <!--            <div class="row">-->

    <!--                <div class="col-lg-3 col-md-6 footer-contact">-->
    <!--                    <h3>Medilab</h3>-->
    <!--                    <p>-->
    <!--                        A108 Adam Street <br>-->
    <!--                        New York, NY 535022<br>-->
    <!--                        United States <br><br>-->
    <!--                        <strong>Phone:</strong> +1 5589 55488 55<br>-->
    <!--                        <strong>Email:</strong> info@example.com<br>-->
    <!--                    </p>-->
    <!--                </div>-->

    <!--                <div class="col-lg-2 col-md-6 footer-links">-->
    <!--                    <h4>Useful Links</h4>-->
    <!--                    <ul>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->

    <!--                <div class="col-lg-3 col-md-6 footer-links">-->
    <!--                    <h4>Our Services</h4>-->
    <!--                    <ul>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>-->
    <!--                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->

    <!--                <div class="col-lg-4 col-md-6 footer-newsletter">-->
    <!--                    <h4>Join Our Newsletter</h4>-->
    <!--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>-->
    <!--                    <form action="" method="post">-->
    <!--                        <input type="email" name="email"><input type="submit" value="Subscribe">-->
    <!--                    </form>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->

    <!--    <div class="container d-md-flex py-4">-->

    <!--        <div class="me-md-auto text-center text-md-start">-->
    <!--            <div class="copyright">-->
    <!--                &copy; Copyright <strong><span>Medilab</span></strong>. All Rights Reserved-->
    <!--            </div>-->
    <!--            <div class="credits">-->
    <!--                &lt;!&ndash; All the links in the footer should remain intact. &ndash;&gt;-->
    <!--                &lt;!&ndash; You can delete the links only if you purchased the pro version. &ndash;&gt;-->
    <!--                &lt;!&ndash; Licensing information: https://bootstrapmade.com/license/ &ndash;&gt;-->
    <!--                &lt;!&ndash; Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ &ndash;&gt;-->
    <!--                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        <div class="social-links text-center text-md-right pt-3 pt-md-0">-->
    <!--            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->
    <!--            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->
    <!--            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->
    <!--            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
    <!--            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->
    <!--        </div>-->
    <!--    </div>-->
</footer><!-- End Footer -->

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