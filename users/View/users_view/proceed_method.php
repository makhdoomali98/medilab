<?php
$title='proceed_method';
include '../../includes/header.php';
include '../../Helper/ViewHelper.php';
require_once('./config.php');
$id = $_GET['id'];
$results =$user->get_product_by_id($id);

?>
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Proceed Method Page</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->
  <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
      <div class="container">

        <div class="section-title">
          <h2>Proceed Method</h2>
          <p>All the Products selected will be shown in details</p>
        </div>
        <?php if (isset($results)) {
                 ?>
        <form action="../../index.php?id=<?php echo $results['id']?>" method="get" value="proceed" id="fupForm" name="myForm" >
          <input type="hidden" class="form-control" value="proceed" id="proceed" name="action">
        <div class="row">
          <!-- <form action="action.php" method="post" value = "proceed"> -->

          <div class="col-lg-12">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="../../assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <input type="hidden" name="product_id" id="product_id" value="<?php echo $results['id'] ?>">
                <h4 class="products-title"><?php echo $results['name'] ?></h4>
                <p class="product-description"><h5>Description: <?php echo $results['description'] ?> </h5><br><h5>Category_id: <?php echo $results['category_id'] ?> </h5><br><h5>City_id: <?php echo $results['city_id'] ?></h5><br><h5>Image: <?php echo $results['image'] ?></h5><br><h5>Price: <?php echo $results['price'] ?> </h5></p>
                <h5>Patient Information</h5>
                  <div class="row">
                      <div class="col-md-4">
                     <input type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name" required>
                     <input type="number" name="age" id="age" placeholder="Enter Your Age"required>
                     <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
                     </div>
                     <div class="row">
                      <h5>Patient Sugar Check </h5>
                      <div class="col-md-4">
                     <input type="checkbox" id="sugar" name="sugar" value="yes">
                      <label for="sugar">  Sugar Patient</label><br>
                      <input type="checkbox" id="sugar" name="sugar" value="no">
                      <label for="vehicle1"> I am not Sugar Patient </label><br>
                      </div>
                      </div>
                      <h5>Patient Blood Pressure Check </h5>
                      <div class="col-md-4">
                     <input type="checkbox" id="blood_pressure" name="blood_pressure" value="yes">
                      <label for="sugar">  Blood Pressure Patient</label><br>
                      <input type="checkbox" id="blood_pressure" name="blood_pressure" value="no">
                      <label for="vehicle1"> I am not Blood Pressure Patient </label><br>
                      </div>
                      </div> 
                    

                <h5>Payment Methods</h5>
                <!-- Group of material radios - option 1 -->
                <div class="row">
                  <div class="col-md-4">
                     <div class="form-check">
                    <input type="radio" class="form-check-input" value="cash" id="materialGroupExample1" name="payment_method" checked>
                    <label class="form-check-label" for="materialGroupExample1">Cash</label>
                  </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-check" style="" class="card">
                    <label class="form-check-label" for="materialGroupExample2">Strip Method</label>
                    <input type="radio" class="form-check-input" value="stripe" id="materialGroupExample2" name="payment_method" >
                  </div>

                  </div>
                  <div class="col-md-4">
                     <div class="form-check">
                    <label class="form-check-label" for="materialGroupExample3">RSA Method</label>
                    <input type="radio" class="form-check-input" value="rsa" id="materialGroupExample3" name="payment_method">
                  </div>
                  </div>
                </div>
               

                <!-- Group of material radios - option 2 -->
                
                <!-- Group of material radios - option 3 -->
               
                  <!-- <a href="../../index.php?id=<?php echo $results['id']?>&action=proceed&value=cash" value="submit" class="btn btn-primary">Proceed</a> -->
                  <div style="text-align: center;padding-top: 20px">
                    <!-- ../../index.php?&action=proceed&payment_method=cash&id=<?php echo $results['id'] ?> -->
                     <!-- <a  class="btn btn-success" style="width: 200px" id="cash_proceed" >Proceed</a> -->
                     <button   class="btn btn-success" style="width: 200px" id="cash_proceed"   >proceed</button>
                     <form>
                      <input type="hidden" name="product_id" value="<?php echo $results['id'] ?>">
                      <input type="hidden" id="price" value="<?php echo $results['price'] ?>" name="price">
                      <script src="https://checkout.stripe.com/checkout.js" id="stripe-button" class="stripe-button" data-key="<?php echo $stripe['publishable_key']; ?>"></script>
                      <a href="#" class="btn btn-success" style="width: 200px" id="rsa-payment-btn" value="submit">RSA</a>

                  </div>
                  </form>
                    
                  </div>

              </div>
            </div>
          </div>
        <!-- </form> -->
        </div>
       
          
          </form>
        <?php 
          }else{
            echo "no data found";
          }
          ?>
      </div>
    </section><!-- End Doctors Section -->
<?php include '../../includes/footer.php' ?>