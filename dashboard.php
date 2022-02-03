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
        <li><a>Pending</a></li>
        <li><a>Accepted</a></li>
        <li><a>Rejected</a></li>
        <li><a>For approval</a></li>
        <li><a>Approved</a></li>
        <li><a>Dashboard</a></li>
    </ul>

    <button class="logoutliaison"><ion-icon name="power-sharp"><a href=""></a></ion-icon></button>

</div>


<div class="dashboard">
    <h1 id="title-dash1">Dashboard</h1>
    <div class="dash1">

        <h3>Booking Performance</h3>
        <div class="fbar"><p>Average booking per week</p><div></div></div>
        <div class="fbar"><p>Average booking per week(IIUM) community</p><div></div></div>
        <div class="fbar"><p>Average booking per week(Guest)</p><div></div></div>
    </div>

    <div class="dash2">
        <h3>Booking Performance by Location Category</h3>
        <div id="kuliyyahbar"></div>
        <div id="mahallahbar"></div>
        <div id="staddbar">
        </div>
    </div>
    
    <div class="dash3">

        <div class="dash-stats">
            <span class="dash-stats-detail">Least Booked Venue</span>
            <div class="dash-stats-num"></div> 
        </div>

        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Venue</span>
            <div class="dash-stats-num"></div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Venue by Guest</span>
            <div class="dash-stats-num"></div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Profitable Venue</span>
            <div class="dash-stats-num"></div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Day</span>
            <div class="dash-stats-num"></div> 
        </div>
      
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

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




</BODY>

<style>

</style>
</html>