<?php include '../../includes/header.php';
?>


<div class="container">

        <div class="section-title">
          <h2>Proceed Method</h2>
          <p>All the Products selected will be shown in details</p>
        </div>
                <h5>Patient Information</h5>
                  <div class="row">
                      <div class="col-md-4">
                        
                        <form action="" method="POST">
                          <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id=$_GET['id'] ?>">
                          <input type="hidden" name="action" value="do_transaction">
                          <input type="hidden" name="payment_method" id="payment_method" value="rsa">
                     <input type="text" name="patient_name" id="patient_name" placeholder="Enter Patient Name" required>
                     <input type="number" name="age" id="age" placeholder="Enter Your Age"required>
                     <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" required>
                     </div>
                     <div class="row">
                      <h5>Patient Sugar Check </h5>
                      <div class="col-md-4">
                      <label for="sugar">ARE YOU A SUGAR PATIENT</label>
                      <input type="text" id="sugar" name="sugar" placeholder="type yes or no" required>
                      </div>
                      </div>
                      <h5>Patient Blood Pressure Check </h5>
                      <div class="col-md-4">
                      <label for="sugar">ARE YOU A BLOOD PRESSURE PATIENT</label>
                      <input type="text" id="blood_pressure" name="blood_pressure" placeholder="type yes or no" required>
                      </div>
                      </div> 
                    

          <h4>Bank Details</h4>
          <div class="col-md-4">
            <label for="token_number">Your Token Number</label><br>
            <input type="text" name="token_number" id="token_number_bank" value="" required>
          </div>

          <div class="col-md-4">
            <label for="card_number">Your Card Number</label><br>
            <input type="text" name="card_number" id="card_number" placeholder="Enter Your Card Number" required>
          </div> 

          <div class="col-md-4">
            <label for="card_number">Your CVV Number</label><br>
            <input type="number" name="cvv_number" id="cvv_number" placeholder="Enter Your Cvv Number" required>
          </div>
          <button class="btn btn-success" id="pay" style="width: 200px" value="submit">Pay</button>

          </form>

          <script type="text/javascript">
            $(document).ready(function() {
                
                       $.ajax({
                                url: "../../../bank/view/index.php",
                                type: "POST",
                                data: {
                                    action: 'token_verification',
                                },
                                dataType : 'json',
                                // cache: false,
                                success:function(response) { 
                                    var token = response.data['token_number'];
                                    console.log(token);
                                    $("#token_number_bank").val(token);
                                }
                            });


            });
            $(document).ready(function() {
                  $('#pay').on('click', function (event) {
                    event.preventDefault();
                    var patient_name = $('#patient_name').val();
                    var age = $('#age').val();
                    var gender = $('#gender').val();
                    var sugar = $('#sugar').val();
                    var blood_pressure = $('#blood_pressure').val();
                    var token_number = $('#token_number_bank').val();
                    var card_number = $('#card_number').val();
                    var cvv_number = $('#cvv_number').val();
                    var product_id = $('#product_id').val();
                    var payment_method = $('#payment_method').val();

                            $.ajax({
                                url: "../../../bank/view/index.php",
                                type: "POST",
                                data: {
                                    action: 'do_transaction',
                                    patient_name: patient_name,
                                    age: age,
                                    gender: gender,
                                    sugar: sugar,
                                    blood_pressure: blood_pressure,
                                    token_number: token_number,
                                    card_number: card_number,
                                    cvv_number: cvv_number,
                                    product_id: product_id,
                                    payment_method: payment_method,
                                },
                                dataType : 'json',
                                // cache: false,
                                success:function(response) {
                                console.log(response); 
                                    
                                }
                            });
                    });
             }); 
            
          </script>          
</div>              




<?php include '../../includes/footer.php' ?>
