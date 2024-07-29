<?php
session_start();
include('../include/db_connect.php');
	$CURDATE = date('Y-m-d');
	$query = "SELECT * FROM menu_profile ORDER BY id DESC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['role'];
   	
   	$sub_array[] = '<td><a href="edit_profile.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-target="">EDIT</a> | <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-target="">DELETE</a> </td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
