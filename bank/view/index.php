<?php 
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

/**
 * 
 */
require '../../users/Helper/Connect.php';
session_start(); 
// server class
class BankClass{
	public $conn;


		function __construct(){
			$obj = new ConnectionClass();
			$this->conn = $obj->conn;
		}
	// to login for bank admin
	public function login($data)
	{
		if (empty($data['name'])) {
			$_SESSION["error_msg"]="logIn credentials Missing";
            return header('location: register/login.php');
		}
		if (empty($data['email'])) {
			$_SESSION["error_msg"]="logIn credentials Missing";
            return header('location: register/login.php');
		}
		if (empty($data['password'])) {
			$_SESSION["error_msg"]="logIn credentials Missing";
            return header('location: register/login.php');
		}
		$email =$data['email'];
        $password =$data['password'];
        $check = $this->conn->query("Select role_type from bank_users where email= '" . $email ."' && password = '" . $password ."'");
        $result =mysqli_fetch_assoc($check);
        if ($result['role_type'] == "admin" ) {
              return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/bank/view/dashboard/dashboard.php");
        }else{
        	$_SESSION["error_msg"]="Wrong Credentials";
            return header('location: register/login.php');
        }

	}
	// for token verification
	public function token_verification()
	{
		$response = ['error' => true, 'status' => 'error', 'message' => 'Server Error'];
		$user_id = $_SESSION['users']['id'];
        $query= "SELECT token_number FROM bank_users where user_id ='" . $user_id . "'";
        $result= $this->conn->query($query);
        $results =mysqli_fetch_assoc($result);
        if (!empty($results)) {
        		$response = [
        	 	'error' => false,
	            'status' => 'success',
	            'message' => 'You get your bank token number',
	            'data' =>$results,
	          ];
        }
        print_r(json_encode($response, true));
		
	}
	// to do transactions
	public function do_transaction($data)
	{
		if (empty($data['token_number'])) {
			$response = [
            'error' => true,
            'status' => 'error',
            'message' => 'you have missing Token number input fields in the given form',
          ];
          	print_r(json_encode($response, true));
			die();
		}
		$response = ['error' => true, 'status' => 'error', 'message' => 'Server Error'];
		$user_id = $_SESSION['users']['id'];
		$sender_name = $_SESSION['users']['name'];
		$email = $_SESSION['users']['email'];
		$reciever_user_id = "26";
		$reciever_token_number = "YWRtaW4xMjM0";
		$product_id =$data['product_id'];
		$query= "SELECT price FROM products where id ='" . $product_id . "'";
        $result= $this->conn->query($query);
        $amount =mysqli_fetch_assoc($result);
        $transaction_amount=$amount['price'];
        $order_time = date('Y/m/d h:i:s a', time());
        $payment_method =$data['payment_method'];
        $sqll = "INSERT INTO orders (user_id, product_id, order_time, payment_method)
        VALUES ('".$user_id."','".$product_id."' , '". $order_time ."', '". $payment_method ."')";
		$res = $this->conn->query($sqll);
        $last_id = mysqli_insert_id($this->conn);
        $order_id =$last_id;
        $name =$data['patient_name'];
        $age =$data['age'];
        $gender =$data['gender'];
        $sugar =$data['sugar'];
        $blood_pressure =$data['blood_pressure'];
        $transaction_date = date('Y/m/d h:i:s a', time());
        $sender_card_number = $data['card_number'];
        $sender_token_number = $data['token_number'];

        $query_t= "SELECT token_number FROM bank_users where user_id ='" . $user_id . "'";
        $result_t= $this->conn->query($query_t);
        $results_t =mysqli_fetch_assoc($result_t);
        if (!$sender_token_number == $results_t['token_number']) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'Your Token Number does not exsists',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['card_number'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty card number field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['cvv_number'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty cvv number field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['token_number'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty token_number number field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['blood_pressure'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty blood pressure field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['sugar'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty sugar field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['patient_name'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty patient_name field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        if (empty($data['gender'])) {
        	$response = [
        	 	'error' => true,
	            'status' => 'error',
	            'message' => 'empty gender field',
	          ];
        	return header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/users/View/users_view/rsa.php");
        }
        $sender_cvv_number = $data['cvv_number'];
        $sql = "INSERT INTO patients (order_id, name, age, gender, sugar, blood_pressure)
        VALUES ('".$order_id."','".$name."' , '". $age ."', '". $gender ."','". $sugar ."','". $blood_pressure ."')";
        $rest = $this->conn->query($sql);

        $sql_b = "INSERT INTO transactions (sender_user_id, name, email, sender_token_number, sender_card_number, sender_cvv_number, reciever_user_id, reciever_token_number, transaction_amount, transaction_date)
        VALUES ('".$user_id."','".$sender_name."' , '". $email ."', '". $sender_token_number ."','". $sender_card_number ."','". $sender_cvv_number ."','". $reciever_user_id ."','". $reciever_token_number ."','". $transaction_amount ."','". $transaction_date ."')";
        $rest_b = $this->conn->query($sql_b);
        if (!empty($rest_b)) {
        		$response = [
        	 	'error' => false,
	            'status' => 'success',
	            'message' => 'Your Transaction Completed Successfully',
	            'data' =>$rest_b,
	          ];
        }
        print_r(json_encode($response, true));
	}
	
}


// route for function


// creating object of class
$temp = new BankClass();
if (isset($_POST['action']) && $_POST['action'] !== '' ) {
		$action = $_POST['action'];
		}else{
			$response = [
		            'error' => true,
		            'status' => 'error',
		            'message' => 'No Action Selected',

		          ];
			print_r(json_encode($response, true));
			die();
		}
// to check action
if ($action == 'login') {
	
	$temp->login($_POST);
}
if ($action == 'token_verification') {
	
	$temp->token_verification();
}
if ($action == 'do_transaction') {
	
	$temp->do_transaction($_POST);
}