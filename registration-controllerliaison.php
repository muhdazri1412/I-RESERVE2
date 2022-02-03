<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'ireserve' );

$staffid = $_POST['staffid'];
$pass = $_POST['password'];
$cpass= $_POST['cpassword'];
$name = $_POST['username'];
$email = $_POST['email'];
$department = $_POST['Department'];




$s = "select * from liaisonlogin where staffid ='$staffid'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){

  echo "Matricno already taken";

}else{

  if($pass===$cpass){
  $reg="insert into liaisonlogin(staffid,password,cpassword,username,email,Department)values('$staffid','$pass','$cpass','$name','$email','$department')";
  mysqli_query($con,$reg);
  echo '<script type="text/javascript"> alert("Registration successful") </script>';
  header('Refresh: 0, url = /I-RESERVE/registerliaison.php');


}else echo 'Password does not match';



}

 ?>
