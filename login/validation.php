<?php
session_start();
 $con=mysqli_connect('localhost', 'root', '');
 mysqli_select_db($con, 'local_db');
 $name = $_POST['name'];
 $password= $_POST['password'];
 $s = "select * from  ngousers where name='$name' && password='$password'";
 $result = mysqli_query($con,$s);
 $num = mysqli_num_rows($result);
 if($num == 1){
    header('location:display.php');
    
 }else{
     header('location:login.html');
 }
 ?>