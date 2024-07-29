<?php
session_start();
include('../include/db_connect.php');


	$query = "SELECT * FROM mst_sub_group ORDER BY id DESC";
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
   	$sub_array[] = $rows['sub_grp_name'];
   	$sub_array[] = $rows['sub_grp_code'];

   	$sql = "SELECT cat_name FROM mst_category WHERE id = '".$rows['cat_code']."'";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $sql));
	$res  = mysqli_query($conn, $sql);
	if ($res1 = mysqli_fetch_array($res,MYSQLI_BOTH)) {
		$sub_array[] = $res1['cat_name'];
	}
	$sql1 = "SELECT grp_name FROM mst_group WHERE id = '".$rows['grp_code']."'";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $sql1));
	$res2 = mysqli_query($conn, $sql1);
	if ($res3 = mysqli_fetch_array($res2,MYSQLI_BOTH)) {
		$sub_array[] = $res3['grp_name'];
	}
   	$sub_array[] = $rows['prefix'];
	$sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="#" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-toggle="modal" data-target="">Edit</a> | <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-toggle="modal" data-target="">Delete</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>