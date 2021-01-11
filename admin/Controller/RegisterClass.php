<?php
session_start();
include __DIR__."/../models/RegisterModel.php";
include __DIR__."/pdf.php";

class RegisterClass{
    public $register;
    function __construct($conn){
        $this->register = new RegisterModel($conn);
    }
    function login($data){
        $data['password'] = sha1($data['password']);
        $response = $this->register->login($data);
        $validate = $this->register->role_type($data);
        if ($response->num_rows > 0) {

            if ($validate['role_type'] == "admin") {
                $_SESSION["users"] = $response->fetch_assoc();
//                print_r($_SESSION["users"]["role_type"]);
//                die();

                header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view.php?action=dashboard");
                die();
            }
//            if ($validate['role_type'] == "user") {
//             $_SESSION["users"] = $validate->fetch_assoc();
//                return header('location: ');
//            }
//
            if ($response->num_rows <= 0) {
                echo "incorrect password";
                die();
            }
        }
    }
    function create_product($data, $files){

        $response = $this->register->create_product($data, $files);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/products/index.php");
        die();

    }
    function create_cities($data){
        $response = $this->register->create_cities($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/areas/index.php");
        die();
    }
    function active_city($data){
        $response = $this->register->active_city($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/areas/index.php");
        die();
    }
    function deActivate_city($data){
        $response = $this->register->deActivate_city($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/areas/index.php");
        die();
    }
    function deleteCity($data){
        $response = $this->register->deleteCity($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/areas/index.php");
        die();
    }
    function deleteProduct($data){
        $response = $this->register->deleteProduct($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/products/index.php");
        die();

    }
    function deleteOrder($data){

        $response = $this->register->deleteOrder($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/orders/index.php");
        die();

    }
    function deleteCategory($data){
        $response = $this->register->deleteCategory($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/category/index.php");
        die();
    }
    function approveOrder($data){

        $response = $this->register->approveOrder($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/orders/index.php");
        die();
    }
    function rejectOrder($data){
        $response = $this->register->rejectOrder($data);
        header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/orders/index.php");
        die();
    }
    function editProduct($data, $id,$files){
        if($files['image']['error'] > 0)
        {
            $this->register->editProduct($data,$id);
            header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/products/index.php");
            die();
        }
        elseif($files['image']['error'] < 1){
            $this->register->edit_product_with_image($data,$id,$files);
            header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/admin_view/products/index.php");
            die();
        }




    }
    function generate_report($data,$files){
        $result = $this->register->generate_report($data,$files);



        $generate = new PDF();
        print_r($generate->generate_pdf($result));


    }

    function slugify($text){
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicated - symbols
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

}
?>