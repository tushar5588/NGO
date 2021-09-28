<?php
date_default_timezone_set('Asia/Calcutta');
session_start();
try {
    $db = new mysqli("localhost", "root", "", "local_db");

}
catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
    $_SESSION["name"] = $_POST['name'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["phone"] = $_POST['phone'];
    $_SESSION["message"] = $_POST['message'];
    $today = date("F j, Y, g:i a");

    $is_insert = $db->query("INSERT INTO `ngocontact`(`name`, `email`, `phone`, `message`, `date`) VALUES ('{$_SESSION["name"]}','{$_SESSION["email"]}','{$_SESSION["phone"]}','{$_SESSION["message"]}','$today')");
    if($is_insert == TRUE) {
        header('location: thankyou.html');
        exit() ;
    
    }
}
?>