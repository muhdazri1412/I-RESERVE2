<?php 
session_start();
$connect = mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");


?>


<html>


<style>
           table {
  border-collapse: collapse;
  width: 50%;
  margin-left: 700px;
  margin-right: auto;
  top: 7%;
 
}

.container h3{
    text-align: center;
    font-weight: 600;
    margin-left: 800px
}
.sideliaison{
  top: 8.8%;

}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.text-center {
  margin: auto;
  width: 10%;
  border: 3px solid green;
  padding: 10px;
}

.filter{

    margin-left: auto;
    margin-right: auto;
    width: 20%;
    
}
.filter button{

margin-left: auto;
margin-right: auto;
width: 20%;

}

.text-center{
  background-color: #70AAAF; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  margin-left: 1000px;
  margin-right: auto;
 
}
.text-center a
{
color:white;
text-decoration: none;
text-align: center;



.text-center:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0 ">
        <title>I-RESERVE</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        
    <style>

        @media(max-width: 459px){
        .container .content .category{
          flex-direction: column;
        }

       
    } .form-container{
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
                        <li><a  href="display-booking.php">All Submission</a></li>
                        <li><a href="for approval.php">For approval</a></li>
                        <li><a href="pending.php">Pending</a></li>
                        <li><a  href="accepted.php">Accepted</a></li>
                        <li><a href="rejected.php">Rejected</a></li>
                        <li><a class="active" href="addvenueliaison.php">Add venue</a></li>
                        <li><a href="">Dashboard</a></li>
                </ul>
            </div>     
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>
    <br /><br />  
    <div class="form-container">
  <div class="bf-title">Venue Details</div>
    <div class="content">
     <form  method="post" action="addvenue_controller.php">
        <div class="bform-details">

          <div class="input-box" >
            <span class="details"><span style="color:red;">*</span>Venue Name</span>
            <input type="text" name="name" placeholder="Venue Name" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Capacity</span>
            <input type="text" name="capacity" placeholder="Capacity" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Area</span>
            <input type="text" name="area" placeholder="Area" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Rate</span>
            <input type="text" name="rate" placeholder="Rate" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Facility </span>
            <input type="text" name="facility" placeholder="Facility " required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>venue id </span>
            <input type="text" name="venue_id" placeholder="venue id " required>
          </div>

        

         

        </div>
        <div class="btn-submit">
              <input type="submit" class="button" value="Add data">
                &nbsp; &nbsp; &nbsp;
            </div>
        </form>
    </div>

  </div>
</div>

<div class="sideliaison">

<ul>
        <li><a onclick="location.href='liaisonprofile.php';" style="cursor: pointer;"> <?php echo $_SESSION["staffid"]?> </a></li>
        <li><a onclick="location.href='display-booking.php';" style="cursor: pointer;">All submission</a></li>
        <li><a onclick="location.href='for approval.php';" style="cursor: pointer;">for approval</a></li>
        <li><a onclick="location.href='pending.php';" style="cursor: pointer;">pending</a></li>
        <li><a onclick="location.href='accepted.php';" style="cursor: pointer;">Accepted</a></li>
        <li><a onclick="location.href='rejected.php';" style="cursor: pointer;">Rejected</a></li>
        <li><a onclick="location.href='addvenueliaison.php';" style="cursor: pointer;">Add venue</a></li>
        <li><a>Dashboard</a></li>
    </ul>

    <form action="logout.php">
        <button href="logout.php" class="logoutliaison"><ion-icon name="power-sharp"><a href=""></a></ion-icon></button>
    </form>

    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<div align="center">


</div>
</BODY>
</html>



