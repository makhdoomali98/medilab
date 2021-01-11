
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">

	$( document ).ready(function() {
		document.getElementById("rsa-payment-btn").style.visibility = "hidden";
    		$('.stripe-button-el').hide();
    $('input[type=radio][name=payment_method]').change(function() {
    	var method = $(this).val();
    	if (method === "cash") {
    		// document.getElementById("stripe-button").hide();
    		//$("#stripe-button").hide();
    		document.getElementById("cash_proceed").style.visibility = "visible";

    		$('.stripe-button-el').hide();
    		document.getElementById("rsa-payment-btn").style.visibility = "hidden";
    		
    		// alert(method);
    	}
    	if (method === "stripe") {
    		$('.stripe-button-el').show();
    		document.getElementById("cash_proceed").style.visibility = "hidden";
    		document.getElementById("rsa-payment-btn").style.visibility = "hidden";
    	}
    	if (method === "rsa") {
    		document.getElementById("rsa-payment-btn").style.visibility = "visible";
    		$('.stripe-button-el').hide();
    		document.getElementById("cash_proceed").style.visibility = "hidden";
    		
    	}
    	// alert(method);
    // $('.stripe-button-el').hide();
		});
	});
// 	$("#materialGroupExample1").change(function () {
//     document.getElementById("cash_proceed").disabled = false;
//     document.getElementByClassName("stripe-button-el").hide();
    
// });
  
// $("#materialGroupExample2").change(function () {
// 	document.getElementById("cash_proceed").disabled = true;
// }); 

</script>
<script type="text/javascript">
     //My functions Start
 $(document).ready(function() {

  // get_user_data();
  $('#cash_proceed').on('click', function(event) {
     // $("#butsave").attr("disabled", "disabled");   
     event.preventDefault();
     var form = $(this);
     var data = form.serialize();

     // console.log(data); 
    


    var patient_name = $('#patient_name').val();
    var age = $('#age').val();
    var gender = $('#gender').val();
    var sugar  = $('#sugar').val();
    var blood_pressure  = $('#blood_pressure').val();
    var product_id = $('#product_id').val();
    if(patient_name!="" && age!="" && gender!="" && sugar!="" && blood_pressure!=""){
      $.ajax({
        url: "http://localhost/medilab/users/index.php",
        type: "GET",
        data: {
          patient_name: patient_name,
          age: age,
          gender: gender,
          sugar: sugar,
          blood_pressure: blood_pressure,
          product_id: product_id,
          action: 'proceed',
          payment_method: 'cash'    
        },
        // cache: false,
        success:function(data){
                      console.log(data);
                      
                       swal("Order Place Successfully! Our Support Team will Contact you Soon!!");
                                              

                   }
      });
    }
    else{
      alert('Please fill all the field !');
    }
  });
});
</script>
</body>
</html>