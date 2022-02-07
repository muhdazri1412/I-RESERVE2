<html>


<style>
.sideadmin{
    background-color:#343a40;
    width:13.5%;
    height:100%;
    top: 6.7%;
    position:absolute;
    left:0;
}


.sideadmin ul li {

    position: relative;
    display:inline-block;
    width:100%;
    padding-top:8%;
    padding-bottom:8%;
    text-align: center;
    color:white;
    border-bottom: 2px solid rgba(0,0,0,0.3);

}

.sideadmin ul li:hover {
    background-color: #47525e;
    border: none;
    transition:0.3s;
}


.sideadmin .logoutliaison{
    
    position: absolute;
    bottom: 15px;
    left:15px;
    background-color:#0F3538;
    outline: none;
    border:none;
    color: white;
    transform:scale(1.5);

}

.sideadmin .logoutliaison:hover{

    transform: scale(2);
    transition: 0.3s;
}
.admin nav{
    display: flex;
    padding: 1% 4%;
    justify-content: space-between;
    align-items: center;
    background-color: #343a40;
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
<BODY class="admin">
<section class = "header">
        <nav>
            
            <a href="dashboard.php"><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.php"></a></li>
                        <li><a href="kulliyyah.php"></a></li>
                        <li><a href=></a></li>
                        <li><a href=></a></li>
                        <li><a  href=></a></li>
                </ul>
            </div>     
            <i class="fa fa-bars" onclick="showmenu()" ></i>
            

        </nav>

    </section>




<div class="sideadmin">

    <ul>
    <li><a onclick="location.href='dashboard.php';" style="cursor: pointer;">Dashboard</a></li>
        <li><a onclick="location.href='registerliaison.php';" style="cursor: pointer;">Add liaison officer</a></li>
        <li><a onclick="location.href='editliaison.php';" style="cursor: pointer;">Edit liaison officer</a></li>
        <li><a onclick="location.href='deleteliaison.php';" style="cursor: pointer;">delete liaison officer</a></li>
        

    </ul>

    <button class="logoutliaison"><ion-icon name="power-sharp"><a href="mainpage.php"></a></ion-icon></button>

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
        <div id="kuliyyahbar"><span>Kuliyyah</span></div>
        <div id="mahallahbar"><span class="mahallah">Mahallah</span></div>
        <div id="staddbar">
        </div>
    </div>
    
    <div class="dash3">

        <div class="dash-stats">
            <span class="dash-stats-detail">Least Booked Venue</span>
            <div class="dash-stats-num">KICT</div> 
        </div>

        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Venue</span>
            <div class="dash-stats-num">AIKOL</div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Venue by Guest</span>
            <div class="dash-stats-num">KICT</div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Profitable Venue</span>
            <div class="dash-stats-num">AIKOL</div> 
        </div>
        <div class="dash-stats">
            <span class="dash-stats-detail">Most Booked Day</span>
            <div class="dash-stats-num">Friday</div> 
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


</style>
</html>
