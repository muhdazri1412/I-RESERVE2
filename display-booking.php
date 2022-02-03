
<html>


<style>
           table {
  border-collapse: collapse;
  width: 70%;
  margin-left: 300px;
  margin-right: auto;
  font-size: 13px;
}

th, td {
  text-align: left;
  padding: 5px;
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

}

.text-center:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
<head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0 ">
        <title>I-RESERVE</title>
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

       
    }


    </style>

    </head>
<BODY class="login">
<section class = "header">
        <nav>
            
            <a href="mainpage.html"><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.html">Item List</a></li>
                        <li><a href="kulliyah.html">Kuliyyah</a></li>
                        <li><a href=>Mahallah</a></li>
                        <li><a href=>Stadd</a></li>
                        <li><a  href=>Contact us</a></li>
                </ul>
            </div>     
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>




<div class="sideliaison">

    <ul>
        <li><a>John Doe</a></li>
        <li><a onclick="location.href='display-booking.php';" style="cursor: pointer;">All submission</a></li>
        <li><a onclick="location.href='for approval.php';" style="cursor: pointer;">for approval</a></li>
        <li><a onclick="location.href='accepted.php';" style="cursor: pointer;">Accepted</a></li>
        <li><a onclick="location.href='rejected.php';" style="cursor: pointer;">Rejected</a></li>
        <li><a >Approved</a></li>
        <li><a>Dashboard</a></li>
    </ul>

    <button class="logoutliaison"><ion-icon name="power-sharp"><a href=""></a></ion-icon></button>

</div>

<div class ="filter">
    <form> 
    <input type="date" name="StartDate">
    <input type="date" name="EndDate">
    <input type="submit" name="search" value="Search booking">
    </p>
    </form>



</div>




<?php
$con = mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");
$sql = "SELECT * FROM FORM,bookings where form.matricno=bookings.matricno";
$result = $con->query($sql);



if ($result->num_rows > 0) {
    echo "<table ><tr>
    <th>id</th><th>date</th><th>timeslot</th><th>status</th>
    <th>venue_id</th><th>book_id</th><th>First Name</th>
    <th>Last Name</th><th>Email</th><th>Matric No</th>
    <th>Phone Number</th><th>Advisor Phone number</th>
    <th>Address</th><th>Organisation</th><th>Programme Name</th>
    <th>Programme type</th><th>Total participant</th><th>Category</th></tr>";

    while ($row = $result->fetch_assoc()) {
        
        echo "<tr>";
        echo "<td>" .$row['id']. "</td>";
        echo "<td>" .$row['date']. "</td>";
        echo "<td>" .$row['timeslot']. "</td>";
        echo "<td>" .$row['status']. "</td>";
        echo "<td>" .$row['venue_id']. "</td>";
        echo "<td>" .$row['book_id']. "</td>";
        echo "<td>" .$row['User_fname']. "</td>";
        echo "<td>" .$row['User_lname']. "</td>";
        echo "<td>" .$row['User_email']. "</td>";
        echo "<td>" .$row['matricno']. "</td>";
        echo "<td>" .$row['User_phone']. "</td>";
        echo "<td>" .$row['User_advisor']. "</td>";
        echo "<td>" .$row['User_address']. "</td>";
        echo "<td>" .$row['User_org']. "</td>";
        echo "<td>" .$row['Prog_name']. "</td>";
        echo "<td>" .$row['Prog_type']. "</td>";
        echo "<td>" .$row['part_tot']. "</td>";
        echo "<td>" .$row['Prog_cat']. "</td>";
        
       
    }
    echo "</table>";
}

else {
    echo "0 results";
}

$con->close();

  ?>

 <div class="text-center">
    <a href="controller/user_data_download.php" class="export-button"
    target="_blank">Data export</a>




 


    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>




<div align="center">





  


  
</div>
</BODY>
</html>