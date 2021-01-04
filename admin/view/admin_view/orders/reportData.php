<?php

include '../../../models/RegisterModel.php';

require_once '../../../Helper/Connect.php';
$connection = new connectionClass;
$product = new RegisterModel($connection->conn);
$product= $product->generate_report($_POST, $_FILES);





?>