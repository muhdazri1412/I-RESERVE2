<?php
session_start();


?>


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
<BODY class="page1">
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
                        <a href="logout.php" class="logout-btn">out</a>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>
<div class="text-box">
    <p><?php  $_SESSION["matricno"] ?> </p>
    <h1>I-RESERVE</h1>
    <p>IIUM venue and property reservation system</p>
    <br>
</div>
    </section>


<!-----categories-->

<section class="categories">
    <h1>Categories</h1>

    <div class = "row">
        <div class = "kul-col" onclick="location.href='kulliyah.php';" style="cursor: pointer;">
            <h3>Kuliyyah</h3>



        </div>
        <div class = "mah-col" href="">
            <h3>Mahallah</h3>


        </div>
        <div class = "stadd-col" href="">
            <h3>Stadd</h3>


        </div>
    </div>
</section>


<!-------javascript for toggle menu-->
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
</html>
