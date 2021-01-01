<?php
include 'users/Helper/helper_function.php';
Class SigupClass{
    public $conn;

    function __construct($connection){
        
        $this->conn = $connection->conn;
    }
    public function insert($data,$files){
    	$name =$data['name'];
        $password =$data['password'];
        $email =$data['email'];
        $age =$data['age'];
        $cnic =$data['cnic'];
        $contact =$data['contact'];
        $address =$data['address'];
        $city =$data['city'];
        $gender =$data['gender'];
        $img = $this->upload_file($files['img']);
        $role_type =$data['role_type'];
        $sql = "INSERT INTO users (name, password, email, age, cnic, contact, address, city, gender, image, role_type) VALUES ('".$name."','".$password."' , '". $email ."','".$age."','".$cnic."','".$contact."','".$address."','".$city."','".$gender."','".$img."','".$role_type."')";
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;

        }
        $response = $sql; 
        return $response;
        $this->conn->close();
        



    }
    function upload_file($file){
        $target_dir = 'images/';
        $target_file = $target_dir.  round(microtime(true)). rand(9, 9999) . $file['name'];
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
            if (move_uploaded_file($file['tmp_name'], $target_file)) {
                
                echo "The file ". htmlspecialchars( basename( $file['name'])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

        return $target_file;
    }
}