<?php
include 'GlobalHelper.php';
include 'Connect.php';
require_once  '../users/Controller/RegisterClass.php';





$conn = new ConnectionClass();
$helper = new GlobalHelper();
$register = new RegisterClass($conn->conn, $helper);
