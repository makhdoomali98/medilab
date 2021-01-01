
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
</html>