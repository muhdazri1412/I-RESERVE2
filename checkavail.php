<?php 
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



    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>



<div class="sidebar">


<ul>
    <li><h2>KICT</h2></li><br>
    <li><h4>Venue</h4></li><br>
    <li><a class="active" href="Multipuposehall.html" >Multipurpose Hall</a><br></li>
    <li><a href="" >Conference Room Level 5</a><br></li>
    <li><a href="" >Classroom</a><br></li>
    
</ul>

</div>

<div class="venuedetails">


    <ul>
        <li><h3>Venue Details</h3></li>
       
        <li><a href="" >Capacity(pax) : 200</a></li>
        <li><a href="" >Area/sq(metre): 500</a></li>
        <li><a href="" >Rate          : RM120/hr </a></li>
        <li><a href="" >Facilities    : AV </a></li>
        
    </ul>

</div>

<div class= "venueimage" >
    <img src="img/kuliyyah.jpg">
</div>

<div class="light">
    <div class="calendar">
        <?php include('calendar.php'); ?>
    </div>   
    
    <div class="footerz">
    <br>
</div>
</div>






</BODY>

<style>

</style>
</html>