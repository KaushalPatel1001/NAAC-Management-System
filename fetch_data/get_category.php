<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM mst_category ORDER BY id DESC";
	$result = mysqli_query($conn, $query);

	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	if($rows['status'] == '1'){
	$active = '<button id='.$rows["id"].' value="0" type= "button" class="btn btn-outline-success btn-sm change_status">ACTIVE</button>';
	}else{
	$active = '<button id='.$rows["id"].' value="1" type= "button" class="btn btn-outline-danger btn-sm change_status">INACTIVE</button>';
	}
 	//echo "SELECT * FROM validation_log WHERE module_name = 'validate_category_mst' AND mod_id = '".$rows['id']."'";
	$sql = "SELECT * FROM validation_log WHERE module_name = 'validate_category_mst' AND mod_id = '".$rows['id']."'";
	$res = mysqli_query($conn , $sql);
	$vlogres = mysqli_fetch_array($res,MYSQLI_BOTH);
	$number_filter_row = mysqli_num_rows($res);

	if($number_filter_row > 0){
		$delete_btn = 'none';
	}else{
		$delete_btn = '';
	}

	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['criteria'];
 
  
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
