<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM uom ORDER BY id DESC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	if($rows['status'] == '1'){
	$active = '<button id='.$rows["id"].' value="0" type= "button" class="btn btn-outline-success btn-sm change_status">ACTIVE</button>';
	}else{
	$active = '<button id='.$rows["id"].' value="1" type= "button" class="btn btn-outline-danger btn-sm change_status">INACTIVE</button>';
	}
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['uom_name'];
	$sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="#" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-toggle="modal" data-target="">Edit</a> | <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-toggle="modal" data-target="">Delete</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
