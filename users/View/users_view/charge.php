<?php
  require_once('./config.php');


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
?>