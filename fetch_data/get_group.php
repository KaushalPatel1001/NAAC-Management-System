<?php
session_start();
include('../include/db_connect.php');


	$query = "SELECT * FROM mst_group ORDER BY id DESC";
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
	$qry = "SELECT * FROM validation_log WHERE module_name = 'validate_group_mst' AND mod_id = '".$rows['id']."'";
	$res1 = mysqli_query($conn , $qry);
	$vlogres = mysqli_fetch_array($res1,MYSQLI_BOTH);
	$number_filter_row = mysqli_num_rows($res1);

	if($number_filter_row > 0){
		$delete_btn = 'none';
	}else{
		$delete_btn = '';
	}

	$sql = "SELECT * FROM mst_category WHERE id = '".$rows['cat_id']."'";
	$res = mysqli_query($conn, $sql);
	$res1 = mysqli_fetch_array($res,MYSQLI_BOTH);

	$cat_name_val = $res1['cat_name']; 
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['grp_name'];
   	$sub_array[] = $rows['grp_code'];
   	$sub_array[] = $res1['cat_name'];
   	
   	$sub_array[] = $rows['prefix'];
	$sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="#" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-toggle="modal" data-target="">Edit</a> <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-toggle="modal" data-target="" style = display:'.$delete_btn.'>Delete</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
