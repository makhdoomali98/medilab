<?php
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/PHPMailer/Exceptions.php'; 
require 'PHPMailer/PHPMailer/PHPMailers.php'; 
require 'PHPMailer/PHPMailer/SMTP.php'; 
class RegisterModel{
   public $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function insert($data,$files){
         $sql = "INSERT INTO users (name, password, email, age, cnic, contact, address, city, gender, image, role_type)
        VALUES ('".$data['name']."','".$data['password']."' , '". $data['email'] ."', '". $data['age'] ."', '". $data['cnic'] ."', '". $data['contact'] ."','". $data['address'] ."','". $data['city'] ."','". $data['gender'] ."','". $data['image'] ."','". $data['role_type'] ."')";
        $response = $this->conn->query($sql);
        return $response;
    }
    function check($data){
        $email=$data['email'];
        $query= "SELECT email FROM users where email ='" . $email . "'";
        $result= $this->conn->query($sql);
        return $result;
    }
    function login($data)
    {
        $email =$data['email'];
        $password =$data['password'];
        $response = $this->conn->query("Select * from users where email= '" . $email ."' && password = '" . $password ."'");
        return $response;
    }
    function check_roletype($data)
    {
        $email =$data['email'];
        $password =$data['password'];
        $check = $this->conn->query("Select role_type from users where email= '" . $email ."' && password = '" . $password ."'");
        $result =mysqli_fetch_assoc($check);
        return $result;
    }
    function register_order($data){
        $user_id = $_SESSION["users"]['id'];
        $product_id =$data['id'];
        $order_time = date('Y/m/d h:i:s a', time());
        $payment_method =$data['payment_method'];
        $sql = "INSERT INTO orders (user_id, product_id, order_time, payment_method)
        VALUES ('".$user_id."','".$product_id."' , '". $order_time ."', '". $payment_method ."')";
        $response = $this->conn->query($sql);
        $last_id = mysqli_insert_id($this->conn);
        return $last_id;
    }
    function send_feedback($data){
        $user_id = $_SESSION["users"]['id'];
        $sql = "INSERT INTO feedback (user_id, name, email, subject, message)
        VALUES ('".$user_id."','".$data['name']."' , '". $data['email'] ."', '". $data['subject'] ."','". $data['message'] ."')";
        $response = $this->conn->query($sql);
        return $response;
    }
    function send_mail($data){
          $mail = new PHPMailer; 
         
        $mail->isSMTP();                      // Set mailer to use SMTP 
        $mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
        $mail->SMTPAuth = true;               // Enable SMTP authentication 
        $mail->Username = 'bscsf16-08@qu.edu.pk';   // SMTP username 
        $mail->Password = 'balo1998';   // SMTP password 
        $mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
        $mail->Port = 587;                    // TCP port to connect to 
         
        // Sender info 
        $mail->setFrom('bscsf16-08@qu.edu.pk',$data['name']); 
        $mail->addReplyTo('bscsf16-08@qu.edu.pk',$data['name']); 
         
        // Add a recipient 
        $mail->addAddress('ibrar1000@gmail.com'); 
         
        //$mail->addCC('cc@example.com'); 
        //$mail->addBCC('bcc@example.com'); 
         
        // Set email format to HTML 
        $mail->isHTML(true); 
         
        // Mail subject 
        $mail->Subject = $data['subject']; 
         
        // Mail body content 
        $bodyContent = $data['message']; 
        $bodyContent .= '<p>This HTML email is sent from the localhost server using PHP by <b>CodexWorld</b></p>'; 
        $mail->Body    = $bodyContent; 
         
        // Send email 
        if(!$mail->send()) { 
            echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
        } else { 
            echo 'Message has been sent.'; 
        }   
        
    }
    function edit_profile_image($data){
        $user_id = $data['id'];
        $sql ="UPDATE users SET name ='" . $data['name'] . "', contact ='" . $data['contact'] . "',address ='" . $data['address'] . "',city ='" . $data['city'] . "',image ='" . $data['image'] . "' WHERE id= $user_id ";
        $response=$this->conn->query($sql);

        return header('location: View/register/edit_profile.php');
        
    }
    function edit_profile($data){
        $user_id = $data['id'];
        $sql ="UPDATE users SET name ='" . $data['name'] . "', contact ='" . $data['contact'] . "',address ='" . $data['address'] . "',city ='" . $data['city'] . "' WHERE id= $user_id ";
        $response=$this->conn->query($sql);
        return header('location: View/register/edit_profile.php');
    }
    function register_patient($data,$last_id){
        $order_id =$last_id;
        $name =$data['patient_name'];
        $age =$data['age'];
        $gender =$data['gender'];
        $sugar =$data['sugar'];
        $blood_pressure =$data['blood_pressure'];
        $sql = "INSERT INTO patients (order_id, name, age, gender, sugar, blood_pressure)
        VALUES ('".$order_id."','".$name."' , '". $age ."', '". $gender ."','". $sugar ."','". $blood_pressure ."')";
        $response = $this->conn->query($sql);
    }

} 
?>