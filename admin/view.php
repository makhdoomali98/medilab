<?php




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
if ($method=='dashboard')
{
    header('location: view/admin_view/dashboard.php');
}
