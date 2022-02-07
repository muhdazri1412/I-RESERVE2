<?php
session_start();



include('connect-db.php');

$matricno = $_POST['matricno'];
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from userlogin where matricno= '$matricno' && password = '$pass' && email='$email'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
  
    $_SESSION["matricno"] = $matricno;
    header('location:mainpage.php');
    exit();

}else{

    header('location:mainpage.php');

}

 ?>

