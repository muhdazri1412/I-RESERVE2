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

            <a href="mainpage.php"><img src="img/i-reserve.png"></a>
            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>

                <ul>
                    <li><a class="active" href="mainpage.php">Item List</a></li>
                        <li><a href="kulliyyah.php">Kuliyyah</a></li>
                        <li><a href=>Mahallah</a></li>
                        <li><a href=>Stadd</a></li>
                        <li><a  href=>Contact us</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()" ></i>

        </nav>

    </section>


    <div class="area">
        <img src="img/login.png" alt="garden">

        <div class="form" >
          <form action="registration-controller.php" method="post">
                <u><h1 >Sign up</h1></u><br>
                <p>Name</p>
                <input type="text" name="username" placeholder="Username" required/>
                <p>Matric No./Staff Id<span style="color:red;">*</span></p>
                <input type="text" name="matricno" placeholder="7 digit number e.g. (181xxxx)" required pattern="[0-9]{7,7}" />
                <p>Email</p>
                <input type="email" name="email" placeholder="E-mail" required/>
                <p>Phone Number</p>
                <input type="text" name="phone" placeholder="e.g. 0123456789" required pattern="[0-9]{10,11}"/>
                <p>Password<span style="color:red;">*</span></p>
                <input type="password" name="password" placeholder="*******" required/>
                <p>Confirm Password<span style="color:red;">*</span></p>
                <input type="password" name="cpassword" placeholder="*******" required/>


                <button type="submit" class="button">Register</a></button>
                <a href="login.php" class="already">Already register? Login Here</a><br>
                <a href="guestregistrationpage.php" class="guest-link">Not from IIUM? Guest register here</a><br>
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
    left: 65%;
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
