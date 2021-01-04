<?php 
include 'Connect.php';
//include '../Controller/RegisterClass.php';
include __DIR__."/../Controller/RegisterClass.php";


$conn = new ConnectionClass();

$register = new RegisterClass($conn->conn);
