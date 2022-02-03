<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php
      $con= mysqli_connect("localhost","root","","ireserve") or die ("could not connect to mysql");
    
      $sqll="select * from pdf_file";
      $query=mysql_query($sqll) or die(mysql_error());
      $result=mysql_fetch_array($query);
      $content=$result['pdf'];
      <object data="data:application/pdf;base64,<?php echo base64_encode(content) ?>" type="application/pdf" style="height:200px;width:60%"></object>

      ?>

    </div>

  </body>
</html>

