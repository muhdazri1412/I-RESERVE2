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
            
            <a href="mainpage.html"><img src="img/i-reserve.png"></a>
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
    <li><a onclick="location.href='dashboard.php';" style="cursor: pointer;">Dashboard</a></li>
        <li><a onclick="location.href='addvenue.php';" style="cursor: pointer;">Add venue</a></li>
        <li><a onclick="location.href='registerliaison.php';" style="cursor: pointer;">Add User</a></li>

    </ul>

    <button class="logoutliaison"><ion-icon name="power-sharp"><a href=""></a></ion-icon></button>

</div>


    <div class="area">
    

        <div class="form" >
          <form action="controller/registration-controllerliaison.php" method="post">
                <u><h1 >Sign up</h1></u><br>
                <p>Name</p>
                <input type="text" name="username" placeholder="Username" required/>
                <p>Staff Id<span style="color:red;">*</span></p>
                <input type="text" name="staffid" placeholder="staff id"  />
                <p>Email</p>
                <input type="email" name="email" placeholder="E-mail" required/>
                <p>Department</p>
                <input type="text" name="Department" placeholder="Department" required/>
                <p>Password<span style="color:red;">*</span></p>
                <input type="password" name="password" placeholder="*******" required/>
                <p>Confirm Password<span style="color:red;">*</span></p>
                <input type="password" name="cpassword" placeholder="*******" required/>


                <button type="submit" class="button">Register</a></button>
                
            </form>
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
