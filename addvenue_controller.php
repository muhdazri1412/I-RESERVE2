<html>
    <?php

$con= mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");



$name = mysqli_real_escape_string($con, $_REQUEST['name']);
$capacity = mysqli_real_escape_string($con, $_REQUEST['capacity']);
$area = mysqli_real_escape_string($con, $_REQUEST['area']);
$rate = mysqli_real_escape_string($con, $_REQUEST['rate']);
$facility = mysqli_real_escape_string($con, $_REQUEST['facility']);
$venue_id = mysqli_real_escape_string($con, $_REQUEST['venue_id']);
//Attempt insert query execution

$sql = "INSERT INTO venue (name,capacity,area,rate,facility,venue_id) VALUES 
('$name','$capacity','$area','$rate','$facility','$venue_id' )";
//Execute query
if(mysqli_query($con, $sql))
{
    echo '<script type="text/javascript"> alert("New record created successfully") </script>';
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection

header('Refresh: 0, url = addvenueliaison.php');
mysqli_close($con);
?>
</html>
