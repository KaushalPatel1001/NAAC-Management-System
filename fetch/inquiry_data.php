<?php
include('../include/db_connect.php');

if(isset($_POST['id']) && !empty($_POST['id'])) {
	$id = $_POST['id'];
}


$query = mysqli_query($conn, "SELECT * FROM `mst_inquiry` WHERE `id` = '".$id."'");
$rows  = mysqli_fetch_assoc($query);

$sql = mysqli_query($conn, "SELECT vendor_name FROM mst_vendor WHERE vendor_code = '".$rows['customer_id']."'");
$res = mysqli_fetch_assoc($sql);


$data['id']   			= $rows['id'];
$data['inquiry_code']   = $rows['inquiry_code'];
$data['customer_name'] 	= $res['vendor_name'];
echo json_encode($data);
die();
?>