<?php
include 'connect-db.php';
$query="select * from userlogin limit 1"; // Fetch all the data from the table customers
$result=mysqli_query($dbCon,$query);
$singleRow = mysqli_fetch_row($result);
?>