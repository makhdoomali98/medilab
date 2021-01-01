<?php
include '../view/admin_view/orders/pdf.php';

class RegisterModel
{
    private $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function login($data)
    {

        $email = $data['email'];
        $password = $data['password'];
        $validate = $this->conn->query("Select * from users where email= '" . $email . "' && password = '" . $password . "'");
        $response = $validate;
        return $response;
    }
    function role_type($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $validate = $this->conn->query("Select role_type from users where email= '" . $email . "' && password = '" . $password . "'");
        $result = mysqli_fetch_assoc($validate);
        return $result;
    }
    function get_users(){
        return $this->conn->query("SELECT * FROM users where role_type = 'user'");
    }
    function get_cities(){
        return $this->conn->query("SELECT * FROM cities ");
    }
    /* category and city name conversion
    */
//    function get_city_name(){
//        return $this->conn->query("SELECT product.city_id FROM products INNER JOIN cities ON product.city_id = cities.id");
//    }
//    function get_category_name(){
//        echo "nothing";
//        die();
//    }
    function get_products(){
        return $this->conn->query("SELECT products.id, products.name,products.description,category.name as category_name,products.price,cities.name as city_name, image  FROM products 
                                    INNER JOIN category on products.category_id = category.id 
                                    INNER JOIN cities on products.city_id= cities.id");
    }
    function get($id){
        return $this->conn->query("SELECT * FROM products where id=$id");
    }
//    function get()
//    {
//        $id = $_SESSION['users']['id'];
//        print_r($id);
//        die();
//
//        $sql = "SELECT * FROM products where user_id = $id";
//        return $this->conn->query($sql);
//    }
    function get_categories(){
        return $this->conn->query("SELECT * FROM category ");
    }
    function create_cities($data){
        $name = $data['name'];
        $check = "SELECT * from cities where name = '$name'";
        $check= $this->conn->query($check);

        if ($check-> num_rows > 0) {
            echo "city already exist";
            die();
        }
        elseif($check->num_rows < 1)  {
            $sql = "INSERT INTO cities (name, state)
		Values ('" . $data['name'] . "','" . $data['state'] . "')";
            $result = $this->conn->query($sql);
        }
    }

    function create_product($data, $files){
        $name = $data['name'];
        $check = "SELECT * from products where name = '$name'";
        $check= $this->conn->query($check);
        if ($check-> num_rows > 0) {
            echo "product already exist";
            die();
        }
        elseif($check->num_rows < 1)  {
            $img_name = $this->upload_file($files['image']);
            $sql = "INSERT INTO products (name, description, category_id, price, city_id, image)
		    Values ('" . $data['name'] . "','" . $data['description'] . "','" . $data['category_id'] . "','" . $data['price'] . "','" . $data['city_id'] . "','" . $img_name . "')";
            $result = $this->conn->query($sql);
        }
    }
    function get_order($search= ''){
        $sql =("SELECT orders.id, orders.user_id, orders.product_id, users.name as user_name, products.name, orders.order_time, orders.status FROM orders 
                                    INNER JOIN products on orders.product_id = products.id 
                                    INNER JOIN users on orders.user_id = users.id ");
        if ($search!= ''){
            $sql .= "WHERE status = '$search'";
        }
        return $this->conn->query($sql);
    }
    function generate_report($data,$files){

        $image = $this->upload_file($files['report'], 'reports/images');
        $id = ($data['order_id']);

        $sql = "SELECT orders.id, orders.user_id, orders.product_id, users.name as user_name, products.name, orders.order_time, orders.status FROM orders 
                                    INNER JOIN products on orders.product_id = products.id 
                                    INNER JOIN users on orders.user_id = users.id
                                    WHERE orders.id = $id";
        $qry = "UPDATE orders SET report= '" . $image . "' WHERE orders.id = $id";
        $qry = $this->conn->query($qry);
        $result = $this->conn->query($sql);
        $result = mysqli_fetch_assoc($result);
        $generate = new PDF();
        $generate->generate_pdf();

        print_r($qry);
        echo "<br>";
        print_r($result);
        die();






    }
    function approveOrder($id){
        $order = $id['id'];
        $sql = "UPDATE orders SET status ='processing' where id = $order";
        $this->conn->query($sql);
        return $sql;
    }
    function rejectOrder($id){
        $order = $id['id'];
        $sql = "UPDATE orders SET status ='cancelled' where id = $order";
        $sql = $this->conn->query($sql);
        return $sql;
    }
    function active_city($data){
        $id=$data['id'];
        $sql = "UPDATE cities SET state = 1 where id = $id";
        $this->conn->query($sql);
    }
    function deActivate_city($data){
        $id=$data['id'];
        $sql = "UPDATE cities SET state = 0 where id = $id";
        $this->conn->query($sql);
    }
    function deleteCity($data){
        $id=$data['id'];
        $sql= "DELETE from cities where id = $id";
        $this->conn->query($sql);
    }
    function deleteCategory($data){
        $id=$data['id'];
        $sql= "DELETE from category where id = $id";
        $this->conn->query($sql);
    }
    function deleteProduct($data)
    {
        $id=$data['id'];
        $sql= "DELETE from products where id = $id";
        $this->conn->query($sql);
    }
    function editProduct($data,$id){
        $sql = "UPDATE products SET name ='" . $data['name'] . "', description = '" . $data['description'] . "', category_id = '" . $data['category_id'] . "', price = '" . $data['price'] . "', city_id = '" . $data['city_id'] . "' WHERE id = $id";
        $this->conn->query($sql);
    }
    function edit_product_with_image($data,$id,$files){
        $image=$this->upload_file($files['image']);
        $sql = "UPDATE products SET name ='" . $data['name'] . "', description = '" . $data['description'] . "', category_id = '" . $data['category_id'] . "', price = '" . $data['price'] . "', city_id = '" . $data['city_id'] . "', image= '" . $image . "' WHERE id = $id";
        $this->conn->query($sql);
    }
//    function upload_Report($file){
//        $target_dir = "../admin/media/reports/";
//        $target_file = $target_dir. ($file["name"]);
//        $uploadOk = 1;
//        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
//        // Check if image file is a actual image or fake image
//        if(isset($_POST["submit"])) {
//            $check = getimagesize($file["tmp_name"]);
//            if($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
//                $uploadOk = 1;
//            } else {
//                echo "File is not an image.";
//                $uploadOk = 0;
//            }
//        }
//        // Check if $uploadOk is set to 0 by an error
//        if ($uploadOk == 0) {
//            echo "Sorry, your file was not uploaded.";
//            // if everything is ok, try to upload file
//        } else {
//            if (move_uploaded_file($file["tmp_name"], $target_file)) {
//                echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
//            } else {
//                echo "Sorry, there was an error uploading your file.";
//            }
//        }
//        return $target_file;
//    }


    function upload_file($file, $path = 'products/images'){

        $target_dir = "../admin/media/". $path;

        $target_file = $target_dir. ($file["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                echo "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        return $target_file;
    }
}

?>
