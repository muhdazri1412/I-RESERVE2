<!DOCTYPE html>
<?php 
      $con = mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");
      $sql = "SELECT * FROM userlogin";
      $result = $con->query($sql);
      
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
            <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
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
<section>
    <div class="profile">
        <div class="student-profile py-4">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                      <img class="profile_img" src="img/jones2.jpg" alt="student dp">
                      <h3>Phil Jones</h3>
                    </div>
                    <div class="card-body">
                    <?php while($rows=mysql_fetch_assoc($result))
		                  {?>  
                      <p class="mb-0"><strong class="pr-1"><?php echo $rows['matricno']; ?> </strong>321000001</p>
                      <p class="mb-0"><strong class="pr-1"><?php echo $rows['username']; ?></strong>4</p>
                      <p class="mb-0"><strong class="pr-1"><?php echo $rows['email']; ?></strong>A</p>
                      <?php 
                     } 
                      ?>  
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                      <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                      <table class="table table-bordered">
                        <tr>
                          <th width="30%">Roll</th>
                          <td width="2%">:</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <th width="30%">Academic Year	</th>
                          <td width="2%">:</td>
                          <td>2020</td>
                        </tr>
                        <tr>
                          <th width="30%">Gender</th>
                          <td width="2%">:</td>
                          <td>Male</td>
                        </tr>
                        <tr>
                          <th width="30%">Religion</th>
                          <td width="2%">:</td>
                          <td>Group</td>
                        </tr>
                        <tr>
                          <th width="30%">blood</th>
                          <td width="2%">:</td>
                          <td>B+</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                    <div style="height: 26px"></div>
                 
                </div>
              </div>
            </div>
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

<style>
    body {


        padding: 0;
        margin: 0;
        font-family: 'Lato', sans-serif;
        color: #000;
    }
    .student-profile .card {
        border-radius: 10px;
    }    
    .student-profile .card .card-header .profile_img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        margin: 10px auto;
        border: 10px solid #fff;
        border-radius: 50%;
    }
    .student-profile .card h3 {
        font-size: 20px;
        font-weight: 700;
    }
    .student-profile .card p {
        font-size: 16px;
        color: #000;
    }
    .student-profile .table th,
    .student-profile .table td {
        font-size: 14px;
        padding: 5px 10px;
        color: #000;
    }
</style>
</html>