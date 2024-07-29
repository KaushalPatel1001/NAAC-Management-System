<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM cost_estimation ORDER BY id DESC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {	
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['id'];
   	$sub_array[] = '<td><a href="./prints/total_cost_print.php?id='.$rows["id"].'" class="btn btn-outline-primary btn-sm" data-target="">Print</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);


 ?>