<?php $url= "http://" . $_SERVER['SERVER_NAME']."/medilab"; ?>

<?php 
// include ('"'.'http://'.$_SERVER['SERVER_NAME'].'/medilab/app_config.php'.'"');
include __DIR__. '../../../app_config.php';

class ConnectionClass {
    public $conn;
    function __construct(){
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
         $this->conn = $conn;
    }

}