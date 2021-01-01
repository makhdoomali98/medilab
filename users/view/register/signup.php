
<?php
$title='Signup';
include '../../includes/header.php';
?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sign Up</h2>
                <ol>
                    <li><a href="../../index.php">Home</a></li>
                    <li><a href="#">Login here</a></li>
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
<?php
include '../../includes/footer.php';
?>