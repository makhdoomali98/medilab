<?php
include 'Connect.php';
include '../../Models/ViewHelperModel.php';
$conn = new ConnectionClass();
$user = new ViewHelperModel($conn->conn);