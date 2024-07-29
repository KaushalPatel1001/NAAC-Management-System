<?php 
session_start();
include('../include/db_connect.php');
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}

$result =  mysqli_query($conn,"SELECT * from `cost_estimation` ORDER BY id DESC LIMIT 1;");
$checkrows = mysqli_num_rows($result);
if ($checkrows == 0) {
	echo "1";
}else{
while($row = mysqli_fetch_array($result)) {
$row["id"] = $row["id"] + 1;
echo $row["id"];
}
}
?>