<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_51HzPliC8ASikmvWWwERNdroUf7rpiDtuUXWb8EEFM0Ka6WwShAttvMp1NbGX1qSvZq3vFwt6T5GPqSd3YmUDPbFo00i02Gzmbe",
  "publishable_key" => "pk_test_51HzPliC8ASikmvWWzkgk1vwn8rbtWJX9vTS75gkZx7FYvHvZ0JSigZtEPtlaIkQRVjRU8W9Q6MOlijv7IUGHOoP700bkQTHNHQ",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>