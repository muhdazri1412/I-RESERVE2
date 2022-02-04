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
            
            <a href="display-booking.php"><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                        <li><a chref="display-booking.php">All Submission</a></li>
                        <li><a href="for approval.php">For approval</a></li>
                        <li><a href="pending.php">Pending</a></li>
                        <li><a href="accepted.php">Accepted</a></li>
                        <li><a href="rejected.php">Rejected</a></li>
                        <li><a href="addvenueliaison.php">Add venue</a></li>
                        <li><a href="">Dashboard</a></li>
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

echo "<div>Hi," .$_SESSION['staffid']. "</div>";

?>
</div> 
</div>

<div class="userprofile-detail">

    <div>

<?php 

$sql = "SELECT * from liaisonlogin where staffid=$_SESSION[staffid] ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
       
        
        echo "<div>User Details</div>";
        echo "<p>Matric   : " .$row['staffid']. "</p>";
        echo "<p>Username : " .$row['username']. "</p>";
        echo "<p>E-mail   : " .$row['email']. "</p>";
        echo "<p>Phone    : " .$row['department']. "</p>";
       
    }
   
}

else {
    echo "No Booking Made";
}






?>

    </div>

</div>








</BODY>

<style>

</style>
</html>