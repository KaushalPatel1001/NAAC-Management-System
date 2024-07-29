<?php
include_once("include/db_connect.php");
$client_pancard = $_POST['client_pancard'];
$sql1 = "SELECT * FROM client WHERE client_pancard = '".$client_pancard."'";
$res1 = mysqli_query($conn,$sql1);
$num_rows_c = mysqli_num_rows($res1);
if($num_rows_c !='0'){
$num_rows1 = mysqli_fetch_array($res1);
}else{
$num_rows1 = "error";
}
echo json_encode($num_rows1);
die();
?>

