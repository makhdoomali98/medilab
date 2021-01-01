<?php 
include '../../app_config.php';


print_r(Config::$dbpassword);


class ConnectionClass {
    public $conn;
    function __construct(){
        $this->conn = $this->Connection();
    }
    private function Connection(){
        $host = Config::$host;
        $dbusername = Config::$dbusername;
        $dbpassword = Config::$dbpassword;
        $dbname = Config::$dbname;
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return  $conn;
    }
}