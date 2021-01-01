<?php 
//require_once '../../app_config.php';
include_once __DIR__. '../../../app_config.php';

Class ConnectionClass {
    public $conn;
    function __construct(){
        $host = app_config::$host;
        $dbusername = app_config::$dbusername;
        $dbpassword = app_config::$dbpassword;
        $dbname = app_config::$dbname;
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }
}
