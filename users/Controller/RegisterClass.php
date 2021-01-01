<?php 
session_start();
include '../users/Models/RegisterModel.php';

Class RegisterClass{
    public $register;
    public $helper;

    function __construct($conn, $helper){
        $this->register = new RegisterModel($conn);
    	$this->helper = $helper;
    }
    public function signup($data,$files){
    	// print_r($this->register->users());
    	// $data['password'] =sha1 ( string $data['password'] [, bool $binary = false ] ) : string;
    	$result = $this->register->check($data['email']);
    	if(mysqli_num_rows($result)>0){
            $_SESSION["email_error_msg"]="Email Already Submitted ";
            return header('location: View/register/signup.php');
        }
    	$data['password'] = sha1($data['password']);
    	$data['image'] = $this->helper->upload_file($files['image']);  	
    	$response = $this->register->insert($data,$files); 
    	 if ($response == true) {
    	  	return header('location: View/register/login.php');
    	  }else{
    	  	return header('location: View/register/signup.php');
    	  } 


    }
    public function login($data){

    	$data['password'] = sha1($data['password']);
    	$response = $this->register->login($data);
    	$result = $this->register->check_roletype($data);

    	 if ($response->num_rows>0){
            if ($result['role_type'] == "admin" ) {
                $_SESSION["users"]=$response->fetch_assoc();
                return header('location: admin.php');
            }if ($result['role_type'] == "user" ){
                $_SESSION["users"]=$response->fetch_assoc();
                return header('location: View/users_view/products.php');
            }
        }
        if($response->num_rows<0){
            echo "wrong credentials";
        }
    }
     function register_order($data){
        
       return $this->register->register_order($data);
    }
    function edit_profile($data,$files){
      if (isset($files['image'])) {
            $data['image'] = $this->helper->upload_file($files['image']);
            $response = $this->register->edit_profile_image($data,$files);
            

        }else{
            $response = $this->register->edit_profile($data,$files);
            }
    }
    function send_feedback($data)
    {
        $response = $this->register->send_feedback($data);
        if ($response == true) {
            $response = $this->register->send_mail($data);
            return header('location: View/users_view/contactUs.php') ;

          }else{
            return header('location: View/users_view/products.php');
          }
    }
    function register_patient($data,$last_id)
    {
        $response = $this->register->register_patient($data,$last_id);
    }
    
}