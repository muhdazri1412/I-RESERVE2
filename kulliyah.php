<?php
session_start();


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


    </head>
<BODY class="login">
    <section class = "header">
        <nav>
            
            <a href="mainpage.php"><img src="img/IIUM.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.php">Item List</a></li>
                        <li><a href="kulliyyah.php">Kuliyyah</a></li>
                        <li><a href=>Mahallah</a></li>
                        <li><a href="">Stadd</a></li>
                        <li><a  href=>Contact us</a></li>
                </ul>
            </div>     
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>

    <h1 class="title-klist">Kuliyyah List</h1>

    <div class="kuliyyah">

   

        <div >
            <img src="img/kuliyyah.jpg" alt="">
            <p>Kuliyyah of Information and Communication Technology(KICT) </p>
            <button ><a href="checkavail.php">Details</a></button>
           

        </div>

        <div >

        <img src="img/kaed.png" alt="">
        <p>Kuliyyah of Architecture and Environmental Design(KAED) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>

        <div >

        <img src="img/aikol.PNG" alt="">
        <p>Ahmad Ibrahim Kuliyyah of Law (AIKOL) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>

        <div >

        <img src="img/koe.PNG" alt="">
        <p>Kuliyyah of Engineering(KOE) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>


        <div >

        <img src="img/academy.PNG" alt="">
        <p>Academy </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>

        <div >

        <img src="img/koedu.PNG" alt="">
        <p>Kuliyyah of Education (EDU) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>

        <div >

        <img src="img/kenms.PNG" alt="">
        <p>Kuliyyah of Economics (KENMS) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>

        <div >

        <img src="img/IRK.PNG" alt="">
        <p>Kuliyyah of Islamic Revealed Knowledge and Human Science(IRKHS) </p>
        <button ><a href="checkavail.php">Details</a></button>

        </div>
        
    </div>



    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>




</BODY>

<style>

</style>
</html>