<?php
require_once('./config.php');
include __DIR__. '../../../../app_config.php';

         $host = Project_Config::$host;
        $dbusername = Project_Config::$dbusername;
        $dbpassword = Project_Config::$dbpassword;
        $dbname = Project_Config::$dbname;
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        

 
  

  $token  = $_GET['stripeToken'];
  $email  = $_GET['stripeEmail'];
  $price = $_GET['price'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => $price,
      'currency' => 'usd',
  ]);
  echo '<h1>Successfully charged </h1>'.$price;

  $payment_key = '1';
  $order_id =$_GET['last_id'];
  $sql ="UPDATE orders SET payment_key = '". $payment_key ."' WHERE id=$order_id ";
  $conn->query($sql);
  header('location: View/users_view/products.php');
?>