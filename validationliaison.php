<?php
session_start();



include('connect-db.php');

$staffid = $_POST['staffid'];
$pass = $_POST['password'];

$s = "select * from liaisonlogin where staffid= '$staffid' && password = '$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
  
    $_SESSION["staffid"] = $staffid;
    header('location:display-booking.php');
    exit();

}else{

    header('location:loginliaison.php');

}

 ?>

