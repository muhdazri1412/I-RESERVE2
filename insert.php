
<?php
session_start();
$con= mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");


$User_fname = mysqli_real_escape_string($con, $_REQUEST['User_fname']);
$User_lname = mysqli_real_escape_string($con, $_REQUEST['User_lname']);
$User_email = mysqli_real_escape_string($con, $_REQUEST['User_email']);
$matricno = $_SESSION['matricno'];
$User_phone = mysqli_real_escape_string($con, $_REQUEST['User_phone']);
$User_advisor = mysqli_real_escape_string($con, $_REQUEST['User_advisor']);
$User_address = mysqli_real_escape_string($con, $_REQUEST['User_address']);
$User_org = mysqli_real_escape_string($con, $_REQUEST['User_org']);
$Prog_name = mysqli_real_escape_string($con, $_REQUEST['Prog_name']);
$Prog_type = mysqli_real_escape_string($con, $_REQUEST['Prog_type']);
$part_tot = mysqli_real_escape_string($con, $_REQUEST['part_tot']);
$Prog_cat = mysqli_real_escape_string($con, $_REQUEST['Prog_cat']);
$book_id = $con->prepare("select id from bookings where matricno = $matricno");
$book_id->execute();
$book_id->store_result();
$book_id->bind_result($book_id);
$book_id->fetch();

$sql = "INSERT INTO form (User_fname,User_lname,User_email,matricno,User_phone,User_advisor,User_address,User_org,Prog_name,Prog_type,part_tot,Prog_cat,book_id) VALUES 
('$User_fname','$User_lname','$User_email','$matricno','$User_phone','$User_advisor','$User_address','$User_org','$Prog_name','$Prog_type','$part_tot','$Prog_cat','$book_id' )";
//Execute query
if(mysqli_query($con, $sql))
{
    echo '<script type="text/javascript"> alert("submission successful") </script>';
    header('Refresh:0; url=/I-RESERVE/mainpage.php');

} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}


?>