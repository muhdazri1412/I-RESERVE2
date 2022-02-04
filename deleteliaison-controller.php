<?php

session_start();


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'ireserve' );

$staffid = $_POST['staffid'];


$s = "select * from liaisonlogin where staffid ='$staffid'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){

  $reg="DELETE FROM liaisonlogin WHERE staffid='$staffid'";
  mysqli_query($con,$reg);
  echo '<script type="text/javascript"> alert("Deleted successfully") </script>';
  header('Refresh: 0, url = deleteliaison.php');

}else{

echo "Staff Id is not exist";





}

 ?>