<?php
session_start();
include('connect-db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'plugins/PHPMailer/src/Exception.php';
require 'plugins/PHPMailer/src/PHPMailer.php';
require 'plugins/PHPMailer/src/SMTP.php';

function send_password_reset($get_name,$get_email,$token)
{

  $mail = new PHPMailer(true);


  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
   $mail->isSMTP();
   $mail->SMTPAuth   = true;
                                           //Send using SMTP
   $mail->Host       = 'smtp.example.com';
   $mail->Username   = 'user@example.com';
   $mail->Password   = '***';

   $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
   $mail->Port       = 587;

   $mail->setFrom('from@example.com',$get_name);
   $mail->addAddress($get_email);

   $mail->isHTML(true);
   $mail->Subject="Reset Password Notification";

   $email_template="
    <h2>Hello</h2>
    <h3>You are receiving this email because we received a password reset request for your account.</h3>
    <br/><br?>
    <a href=""
   "

   $mail->addReplyTo('info@example.com', 'Information');
   $mail->addCC('cc@example.com');
   $mail->addBCC('bcc@example.com');

   //Attachments
   $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

}


if(isset($_POST['[password-reset-link]'])){

  $email = mysqli_real_escape_string($con,$_POST['e-mail']);
  $token = md5(rand());

  $check_email = "SELECT email FROM userlogin WHERE email= '$email' LIMIT 1";
  $check_email_run ="mysqli_query($con,$check_email)";

  if(mysqli_num_rows()>0)
  {

    $row = mysqli_fetch_array($check_email_run);
    $get_name = $row['name'];
    $get_email = $row['email'];

    $update_token = "UPDATE users SET verify_token = '$token' WHERE email='$get_email' LIMIT 1";
    $update_token_run = mysqli_query($con, $update_token);

    if($update_token_run)
    {
      send_password_reset($get_name,$get_email,$token);
      $_SESSION['status'] = "We have emailed you the password reset link.";
      header("Location: password-reset-page.php");
      exit(0);
    }
    else
    {
      $_SESION['status']="Something went wrong. #1";
      header("Location: password-reset-page.php");
      exit(0);
    }

  }else{
    $_SESSION['status']="No Email Found";
    header("Location:password-reset-page.php");
    exit(0);
  }

}

 ?>
