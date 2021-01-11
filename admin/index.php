<?php
include 'Helper/helper_function.php';



//if (!isset($_SESSION['users'])){
//    header('location: login.php');
//    die();
//}
if(isset($_POST['action'])){
    $method = $_POST['action'];
}
elseif (isset($_GET['action'])) {
    $method = $_GET['action'];
}
else {
    echo "no action selected !!";
    die();
}
if($method == 'addProduct'){
    $register->create_product($_POST, $_FILES);
}
if($method == 'login') {
    $register->login($_POST);
}
if($method == 'addArea') {
$register->create_cities($_POST);
}
if($method == 'deActivate') {
    $register->deActivate_city($_GET);
}
if($method == 'Activate') {

  $register->active_city($_GET);
}
if($method == 'deleteCity'){
    $register->deleteCity($_GET);
}
if($method == 'deleteCategory'){
    $register->deleteCategory($_GET);
}
if($method == 'deleteProduct'){

    $register->deleteProduct($_GET);
}
elseif($method == 'editProduct')
{
    $register->editProduct($_POST , $_GET['id'] , $_FILES);
}
elseif($method == 'approveOrder'){

    $register->approveOrder($_GET);
}
elseif($method == 'rejectOrder'){
    $register->rejectOrder($_GET);
}elseif ($method == 'generate_report'){

    $register->generate_report($_POST, $_FILES);
}
elseif ($method == 'deleteOrder'){
    $register->deleteOrder($_GET);

}

elseif($method == 'logout'){
    unset($_SESSION['users']);
    header("location: http://" . $_SERVER['HTTP_HOST'] . "/medilab/admin/view/register/login.php");
    die();
}


?>