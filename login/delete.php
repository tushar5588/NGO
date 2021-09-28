<?php
$servername="localhost";

$username="root";
$password="";
$database="local_db";
$conn=mysqli_connect($servername,$username, $password, $database);
error_reporting(0);
$id=$_GET['id'];
$query="delete from ngocontact where id='$id'";
$data=mysqli_query($conn, $query);
if($data)
header('location:display.php');
else
header('location: display.php');
?>