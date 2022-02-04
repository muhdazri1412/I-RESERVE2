<?php
session_start();
unset($_SESSION["staffid"]);

header("Location:mainpage.php");
?>