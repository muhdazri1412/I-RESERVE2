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
        <img src="img/IIUM.png" alt="IIUM">


        <div class="form">
          <form action="guestvalidation.php" method ="post">
            <p>E-mail:</p>
            <input type="email" placeholder="guest@gmail.com" name="email" required>
            <p>Password</p>
            <input type="password" placeholder="password" name="password" required><br>
            <button type="submit" class="button">Login</button>
            <a href="loginliaison.php" class="liaison-login"> Login for Liaison officer</a><br>
            <a href="login.php" class="guest-login"> Login for  IIUM Community</a><br>
            <a href="registration-page.php" class="create-account">Create an account</a><br>
            <a href="password-reset-page.php" class="forgot-password">Forgot password? Start password recovery</a>
          </form>
        </div>

    </div>
<!-----categories-->



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

<style>

</style>
</html>
