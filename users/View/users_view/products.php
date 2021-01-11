<?php

$title='Products';
$active = 'products';
include '../../includes/header.php';

include '../../Helper/ViewHelper.php';

// print_r($result);
// $row = $result->fetch_assoc();
// print_r($row);
$result =$user->get_products();

 ?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Products</h2>
                <ol>
                    <li>
                        <form class="form-inline md-form form-sm mt-0">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-200" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

        <?php 
        if($result->num_rows > 0)
        {
        $index = 1;
       
        ?>
    <section class="inner-page">
        <div class="container">

            <?php 

             if(isset($_SESSION['msg'])){
                ?>
            <div class="alert alert-info">
                <p><?php print_r($_SESSION['msg']);?></p>
            </div>
            <?php
                unset($_SESSION['msg']);
                }
            ?>
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2>Products</h2>
                        <p>Select the product according to your needs</p>
                    </div>

                    <div class="row">
                        <?php
                         while($row = $result->fetch_assoc()) {?>
                        <div class="col-lg-4 col-md-6 align-items-stretch">
                            <div class="icon-box">
                                <div class="icon"><i class="icofont-heart-beat"></i></div>
                                <h4><a href="proceed_method.php?id=<?php echo $row['id']?>"><?php echo $row['name'] ?></a></h4>
                                <p>Description:<?php echo $row['description']?><br>Category_id:<?php echo $row['category_id']?><br>Price:<?php echo $row['price']?><br>City_id:<?php echo $row['city_id']?><br>Image:<?php echo $row['image']?><br></p>
                            </div>
                        </div>

                        <?php }?>
                    </div>

                </div>
            </section><!-- End Services Section -->
        </div>
    </section>
    <?php
                
                }
                ?>
</main><!-- End #main -->



<!--&lt;!&ndash; ======= Footer ======= &ndash;&gt;-->
<!--<footer id="footer">-->

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
<!--</footer>&lt;!&ndash; End Footer &ndash;&gt;-->

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