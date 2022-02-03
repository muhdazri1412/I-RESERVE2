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

        @media(max-width:459px){
        .container .content .category{
          flex-direction: column;
        }
    }


    </style>

    </head>

<BODY class="bookingform">
    <section class = "header">

        <h1 id="bookingform">Booking Form</h1>

        <nav>
            
            <a href="mainpage.html"><img src="img/IIUM.png"></a>

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



<button type="button" class="btn-back"><a href="bookingform.php"><ion-icon size="large"name="arrow-back-outline"></ion-icon></a></button>

<div id="title-supportdocs">Supporting Documents</div>
<span id="descr-upload">Documents uploaded in the form of <span style="color:red">PDF</span> only<br>Maximum file size: 10MB ; maximum number of files;5<br>Please provide the relevant <span style="color:red">event proposal</span> and <span style="color:red"></span>event proposal</span></span>

<div class="upload-container">
<div class="upload-docs">
<form class="" action="supporting_controller.php" method="post" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input type="file" name="pdf" required><br><br>
        <button   name="submit" >Upload</button>
      

</form>



    </div>
    <div class="footerz">
    <br>
</div>
    </div>

    





<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</BODY>

<style>

</style>
</html>
