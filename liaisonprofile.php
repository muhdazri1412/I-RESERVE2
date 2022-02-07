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

<style>

@media(max-width: 459px){
.container .content .category{
  flex-direction: column;
}

}
.form-container{
position: absolute;
left:15%;
top:20%;
max-width: 40%;
width: 100%;
background-color: #fff;
padding: 25px 30px;
border-radius: 5px;

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
        echo "<p>Staff ID   : " .$row['staffid']. "</p>";
        echo "<p>Username : " .$row['username']. "</p>";
        echo "<p>E-mail   : " .$row['email']. "</p>";
        echo "<p>Department    : " .$row['department']. "</p>";
       
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
    .form{
    margin: 30px;
    width: 30%;
    height: 80%;
    color:#000;
    position: absolute;
    bottom: 0px;
    left: 30%;
    text-align: left;
    outline: none;
    align-items: center;
}

.form input{
    width: 80%;
    background-color: #F1F1F1;
    border-radius: 5px;
    border: 0px solid;
    padding: 12px 20px;
    margin: 10px 0;
    text-align: left;
    }
.form button {
        margin: 30px 0;
        width: 100%;
        background-color: #677578;
        border: none;
        color: black;
        padding: 10px 100px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 20px;
        cursor: pointer;
      }

.already,
.guest-link{
    font-size: 12px;
    color: rgb(0, 153, 255);
}

</html>