<?php
Class ViewHelperModel{
	public $conn;

	function __construct($conn)
	{
		$this->conn = $conn;
	}
	function get_products(){
        $sql = "SELECT * FROM products ";
        $result =$this->conn->query($sql);
        if ($result->num_rows > 0) {
        return $result; 
        } else {
        return false;
        }
        $conn->close();
    }
    function get_product_by_id($id){
    	$query = "SELECT * FROM products WHERE id ='" . $id . "'";
        $result=$this->conn->query($query);
        $results = mysqli_fetch_assoc($result);
        return $results;
    }
     function get_single_user_data($data){
        $id =$data;
        $sql = "SELECT * FROM users where id = $data";
        $result=$this->conn->query($sql);
        return $result;
    }
    function get_orders(){
        $user_id = $_SESSION['users']['id'];
        $sql ="SELECT orders.id, orders.user_id, orders.product_id, products.name, orders.order_time, orders.status, orders.payment_method FROM orders INNER JOIN products ON orders.product_id = products.id WHERE orders.user_id = $user_id ";
        $orders=$this->conn->query($sql);
        return $orders;
    }
    
	
}

