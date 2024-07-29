<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM mst_product ORDER BY id DESC";
	$result = mysqli_query($conn, $query);

	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	if($rows['status'] == '1'){
	$active = '<button id='.$rows["id"].' value="0" type= "button" class="btn btn-outline-success btn-sm change_status">ACTIVE</button>';
	}else{
	$active = '<button id='.$rows["id"].' value="1" type= "button" class="btn btn-outline-danger btn-sm change_status">INACTIVE</button>';
	}

 	// echo "SELECT * FROM validation_log WHERE module_name = 'validate_category_mst' AND mod_id = '".$rows['id']."'";
	// $sql = "SELECT * FROM validation_log WHERE module_name = 'validate_category_mst' AND mod_id = '".$rows['id']."'";
	// $res = mysqli_query($conn , $sql);
	// $vlogres = mysqli_fetch_array($res,MYSQLI_BOTH);
	// $number_filter_row = mysqli_num_rows($res);

	// if($number_filter_row > 0){
	// 	$delete_btn = 'none';
	// }else{
	// 	$delete_btn = '';
	// }

	$qry = "SELECT cat_name AS cat_name FROM mst_category WHERE id = '".$rows['cat_id']."'";
	$rec = mysqli_query($conn,$qry);
	$catres = mysqli_fetch_array($rec,MYSQLI_BOTH);


	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['pro_name'];
   	$sub_array[] = $rows['pro_code'];
   	$sub_array[] = $rows['mat_code'];
   	$sub_array[] = $catres['cat_name'];
   	$sub_array[] = $rows['hsn'];
   	$sub_array[] = $rows['gst_rate'];
	$sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="edit_product.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data">Edit</a> <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data">Delete</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
