<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "Kaushal@27";
$dbname = "updated_naac";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
date_default_timezone_set('Asia/Kolkata');
date('d-m-Y H:i');
?>