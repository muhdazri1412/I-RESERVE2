
<html>


<style>
.sideadmin{
    background-color:#343a40;
    width:13.5%;
    height:100%;
    top: 6.5%;
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
            
            <a href=""><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.html"></a></li>
                        <li><a href="kulliyah.html"></a></li>
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
        <li><a>Dashboard</a></li>
        <li><a onclick="location.href='addvenue.php';" style="cursor: pointer;">Add venue</a></li>
        <li><a onclick="location.href='registerliaison.php';" style="cursor: pointer;">Add User</a></li>

    </ul>

    <button class="logoutliaison"><ion-icon name="power-sharp"><a href=""></a></ion-icon></button>

</div>

<div class="form-container">
  <div class="bf-title">Venue Details</div>
    <div class="content">
     <form  method="post" action="controller/addvenue_controller.php">
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







 


    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>

  
</div>
</BODY>
</html>



