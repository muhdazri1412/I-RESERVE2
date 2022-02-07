<?php 
session_start();
include('connect-db.php');



?>

<!DOCTYPE html>
<html>
<head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0 ">
        <title>I-RESERVE</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            :root {
                
                --light-body: #f3f8fe;
                --light-main: #fdfdfd;
                --light-second: #70AAAF;
                --light-hover: #70AAAF;
                --light-text: #151426;
            
                --green: #70AAAF;
                --white: #fff;
            
                --shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            
                --font-family: cursive;
            }
            
            
            
            @keyframes to-top {
                0% {
                    transform: translateY(100%);
                    opacity: 0;
                }
                100% {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
              </style>


    </head>
<BODY class="login">
    <section class = "header">
    <nav>
            <a href="mainpage.php"><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.php">Item List</a></li>
                        <li><a href="kulliyah.php">Kuliyyah</a></li>
                        <li><a href=>Mahallah</a></li>
                        <li><a href=>Stadd</a></li>
                        <li><a  href=>Contact us</a></li> 
                        <li><a href="logout.php">Logout</a></li>
                        <li><a href="userprofile.php"><img src="img/userprofile.png"></a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>



    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>



<div class="userprofile">

<div class="userprofile-header">
<div class="matricdisplay">
<?php 

echo "<div>Hi," .$_SESSION['matricno']. "</div>";

?>
</div> 
</div>

<div class="userprofile-detail">

    <div>

<?php 

$sql = "SELECT * from userlogin where matricno=$_SESSION[matricno] ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
       
        
        echo "<div>User Details</div>";
        echo "<p>Matric   : " .$row['matricno']. "</p>";
        echo "<p>Username : " .$row['username']. "</p>";
        echo "<p>E-mail   : " .$row['email']. "</p>";
        echo "<p>Phone    : " .$row['phone']. "</p>";
       
    }
   
}

else {
    echo "No Booking Made";
}






?>

    </div>

</div>

<div class="userprofile-booking">
   <div class="booktitle">Bookings</div>

   <?php 

$sql = "SELECT b.id, b.matricno,b.date,b.timeslot,b.status,v.name from bookings b , venue v  where b.venue_id=v.venue_id AND matricno=$_SESSION[matricno] ";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    echo "<table ><tr>
    <th>ID</th><th>Name</th><th>Date</th><th>Timeslot</th><th>Status</th></tr>";

    while ($row = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td>" .$row['id']. "</td>";
        echo "<td>" .$row['name']. "</td>";
        echo "<td>" .$row['date']. "</td>";
        echo "<td>" .$row['timeslot']. "</td>";
        echo "<td>" .$row['status']. "</td>";
       
    }
    echo "</table>";
}

else {
    echo "No Booking Made";
}

$con->close();




?>

   
</div>

</div>






</BODY>

<style>

</style>
</html>