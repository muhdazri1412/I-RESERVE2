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


    <style>

        @media(max-width: 459px){
        .container .content .category{
          flex-direction: column;
        }
    }

    .btn-submit .button
{
   position:relative;
   background-color:#70AAAF;
   border-radius: 15px;
   margin-bottom: 5%;
   padding:1.2%;
   border: none;

}
.btn-submit:hover{
    transform: scale(1.05);
    transition: 0.3s;
}

.btn-submit .button
{
color:white;
text-decoration: none;
text-align: center;

}



    </style>

    </head>
<BODY class="bookingform">
    <section class = "header">

        <h1 id="bookingform">Booking Form</h1>

        <nav>
            
            <a href="mainpage.php"><img src="img/IIUM.png"></a>

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



    <script>    

        var navlinks = document.getElementById("navlinks")
    
        function showmenu(){
            navlinks.style.right = "0";
    
        }
        function hidemenu(){
            navlinks.style.right = "-200px";
            
        }
    </script>



<div class="form-container">

  <div class="bf-title">Personal Details</div>
    <div class="content">
     <form  method="post" action="insert.php">
        <div class="bform-details">

          <div class="input-box" >
            <span class="details"><span style="color:red;">*</span>First Name</span>
            <input type="text" name="User_fname" placeholder="First name" required>
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="User_lname" placeholder="Last Name" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Email</span>
            <input type="email"  name="User_email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>User ID</span>
            <input readonly type="text" name="User_matric" placeholder="<?php echo $_SESSION["matricno"]?>" id="matricno" required>
          </div>
          <div class="input-box">
            <span class="details"><span style="color:red;">*</span>Mobile No.</span>
            <input type="number" name="User_phone" placeholder="012345678" required>
          </div>
          <div class="input-box">
            <span class="details">Advisor's Number</span>
            <input type="number" name="User_advisor" placeholder="012345678" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="User_address" placeholder="Address" required>
          </div>
          <div class="input-box">
            <span class="details">Organisation</span>
            <input type="text" name="User_org" placeholder="Name of organization" required>
          </div>

         

        </div>

        


        
        
      
        </div>
        <div class="bf-title">Personal Details</div>
          <div class="content">
            <div class="bform-details">
              <div class="input-box">
                <span class="details"><span style="color:red;">*</span>Programme Name</span>
                <input type="text" name="Prog_name" placeholder="Programme Name" required>
              </div>
              <br>
              <div class="input-box">
                <span class="details">Programme type</span>
                <input type="text" name="Prog_type" placeholder="Programme Type" required>
              </div>
              <br>
              <div class="input-box">
                <span class="details"><span style="color:red;">*</span>Total Participants</span>
                <input type="number" name="part_tot" placeholder="Total participants" required>
              </div>
              <br>
            <div class="input-box">
              <span class="details"><span style="color:red;">*</span>Programme Category</span>
              <div class="category"> 
                <select name="Prog_cat" id="format">
                  <option value="University">University</option>
                  <option value="Kuliyyah">Kuliyyah</option>
                  <option value="Organisation">Organisation/club</option>
                  <option value="Extra-curricular">Extra-curricular</option>
                  <option value="Standalone">Standalone</option>
                </select>
              </div>

              
            </div>

              </div>
            
<br>
            

            </div>


            


            <input id="agreebox" type="checkbox" required>
            <p class="declaration">By selecting box above, I/We hereby declare that the information given above is true and complete. I/We further confirm that I/We have read the Terms and Condition overleaf and agree to be bound by them. I/We agree to accept responsibility and liability for any failure in adhering to any parts of the terms and conditions and agree to compensate the University for any loss and damage to the University properties.</p>
<br>
            
            <div class="btn-submit">
              <input type="submit" class="button" value="Add supporting docs">
                &nbsp; &nbsp; &nbsp;
            </div>
    </form>
    </div>

  </div>

  <div class="terms">
    <span>
    <h3>Terms and Conditions</h3>
    <p>1. All applications for booking made at least (7) working days prior to the date of event.</p>
    <p>2.External applications must be accompanied with a guarantor's declaration and signature that are liable and responsible for any loss or damage caused to items rented.</p>
    <p>3. To pay a deposit amounting 50% of the total rental for the confirmation of booking to ‘Director of Finance, IIUM)</p>3. To pay a deposit amounting 50% of the total rental for the confirmation of booking to ‘Director of Finance, IIUM)
    <p>4. All payments is payable within 7 days before the event and made payable to "EXECUTIVE DIRECTOR OF FINANCE , IIUM" and address to Student Affairs and Development Division.</p>
    <p>5. Facilities must be returned in a good condition. Applicants are liable for any loss or damage caused letter.</p>
    <p>6. To ensure the cleanliness of the venue and its compound at all time.</p>
    <p>7. To ensure all the equipments used or rented are returned in a good condition.</p>
    <p>8. Banner/bunting that are to be hanged must get prior approval from the Student Affairs and Development Division (STADD).
    <p>9. The APPLICANTS shall be responsible for the fastening and securing of all doors and windows of the Demised Premises during business hours and for its security and safety when unattended. The APPLICANTS shall not do or permit to be done or omit to do anything which may compromise the security and/or safety of the Demised Premises in particular and that of the generally.</p>
    <p>10. The APPLICANTS shall obtain and maintain at the APPLICANTS’s own expenses all licenses, permits, registrations, authorities and approvals for the conduct of the permitted use of the Demised Premises and ensure that all such licenses, permits, consents and authorities are valid for the duration of this fair.</p>
    </span>
  </div>


  
</div>
</BODY>

<style>

</style>
</html>