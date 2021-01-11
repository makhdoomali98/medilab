<?php
 include 'Helper/Helper.php';

 if(isset($_POST['action'])){
 	$method = $_POST['action'];
 }elseif(isset($_GET['action'])) {
 	$method = $_GET['action'];
 }else{

 	// header('location: View/users_view/index.php');
 	// die();
 	echo "no action selected";
 }

	if ($method == "signup") {
		$register->signup($_POST,$_FILES);
	}

    if ($method == "login") {
        $register->login($_POST);
	}

	if ($method == "proceed") {
		if ($_GET['payment_method'] == "stripe") {
			$stripe_token =$_GET['stripeToken'];
			$stripe_email =$_GET['stripeEmail'];
			$price =$_GET['price'];
			$_POST['id'] = $_GET['product_id'];
			$_POST['payment_method'] = $_GET['payment_method'];
			$last_id = $register->register_order($_POST);
			$register->register_patient($_GET,$last_id);
			header("location: https://localhost/medilab/users/View/users_view/charge.php?&stripeToken=$stripe_token&stripeEmail=$stripe_email&price=$price&last_id=$last_id");

		}
		if ($_GET['payment_method'] == "cash") {
			$_POST['id'] = $_GET['product_id'];
			$_POST['payment_method'] = $_GET['payment_method'];
			$last_id = $register->register_order($_POST);
			$register->register_patient($_GET,$last_id);
		}
		
	}


	if ($method == "logout") {
		session_destroy();
		
		header('location: https://localhost/medilab/users/View/users_view/index.php');
		die();	
	}
	if ($method == "edit_profile") {
		$register->edit_profile($_POST,$_FILES);
	}
	if ($method == "feedback") {
		$register->send_feedback($_POST);
	}


 