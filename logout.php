<?php
session_start();
unset($_SESSION["matricno"]);

header("Location:mainpage.php");
?>