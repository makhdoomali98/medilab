
<<<<<<< HEAD
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

</body>
=======

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>
<script src="../assets/vendor/venobox/venobox.min.js"></script>
<script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="../assets/vendor/counterup/counterup.min.js"></script>
<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</div>

</body>

>>>>>>> e8341d8fa2b664f0597a7fc3762ac700dc3a94bf
</html>