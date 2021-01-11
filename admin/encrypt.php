<?php
echo sha1('password');
die();
//$stolen_hash='$2y$10$T8zodUbNjQ2SJ5Y9IxMKg.bSOkUrXr7lGAH3VtmrMBH92imW2d7sy';
//print_r(password_verify("rasmuslerdorf", $stolen_hash));

$password = $_POST['password'];
//$hash = password_hash($password, PASSWORD_DEFAULT);
?>