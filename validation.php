<?php
session_start();



include('connect-db.php');

$matricno = $_POST['matricno'];
$pass = $_POST['password'];

$s = "select * from userlogin where matricno= '$matricno' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
  
    $_SESSION["matricno"] = $matricno;
    header('location:mainpage.php');
    exit();

}else{

    header('location:login.php');

}

 ?>

