<?php
session_start();
unset($_SESSION["matricno"]);

header("Location:homepage.php");
?>