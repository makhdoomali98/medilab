<?php
require '../../../users/Helper/Connect.php';
Class ViewHelperModel{
	public $conn;

	function __construct(){
            $obj = new ConnectionClass();
            $this->conn = $obj->conn;
        }
	// to get bank_users data
    public function get_bank_users_data()
    {
        $sql = "SELECT * FROM bank_users ";
        $result =$this->conn->query($sql);
        if ($result->num_rows > 0) {
        return $result; 
        } else {
        return false;
        }
        $conn->close();
    }
    // to get all transaction of bank users
    public function get_all_transactions_data()
    {
        $sql = "SELECT * FROM transactions ";
        $result =$this->conn->query($sql);
        if ($result->num_rows > 0) {
        return $result; 
        } else {
        return false;
        }
        $conn->close();
    }
	
}