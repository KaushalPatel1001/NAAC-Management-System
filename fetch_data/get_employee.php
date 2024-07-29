<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM tbl_users ORDER BY id DESC";
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
	$query_n = "SELECT * FROM department where id  = '".$rows['department']."'";
	$result_n = mysqli_query($conn, $query_n);
	$rows_n = mysqli_fetch_array($result_n);
	$style= "<span class='badge badge-danger' style='float:right;'>".$rows_n['department_name']."</span>";
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['user_name'] . $style;
   	$sub_array[] = $rows['user_email'];
   	$sub_array[] = date('d-m-Y',strtotime($rows['joining_date']));
	$sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="edit_kyc_emp.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-target="">Update Kyc</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
