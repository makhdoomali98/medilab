<?php
$title='login';
include '../../includes/header.php'; ?>

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Log IN | Admin</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">


                <section id="appointment" class="appointment section-bg">
                    <div class="container">

                        <div class="section-title">
                            <h2>Log In | Admin</h2>
            <p>Log In as <b>Admin</b> to Start Manage your Site</p>
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
<!--                    <a href="../users_view/reset.php">Reset Password</a>-->
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


 <?php include '../../includes/footer.php' ?>
