<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'ireserve' );

$matricno = $_POST['matricno'];
$pass = $_POST['password'];
$cpass= $_POST['cpassword'];
$name = $_POST['username'];
$email = $_POST['email'];
$phonenum = $_POST['phone'];




$s = "select * from userlogin where matricno ='$matricno'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){

  echo "Matricno already taken";

}else{

  if($pass===$cpass){
  $reg="insert into userlogin(matricno,password,cpassword,username,email,phone)values('$matricno','$pass','$cpass','$name','$email','$phonenum')";
  mysqli_query($con,$reg);
  echo 'Registration Successful' ;
  header('location:login.php');

}else echo 'Password does not match';



}

 ?>
