<?php 
session_start();
session_destroy();
$home_url = "login.php";
header('Location: ' . $home_url);
?>