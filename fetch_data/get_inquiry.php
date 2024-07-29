<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM mst_inquiry ORDER BY id DESC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
	if($rows['status'] == '0'){
	$active = '<a href="view_inquiry_followup.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-primary btn-sm" data-target="">Followup</a>';
	}else{
	$active = '<a href="#" class="btn btn-outline-danger btn-sm" data-target="">Closed</a>';
	}

	$vensql = "SELECT * FROM mst_vendor WHERE id = '".$rows['customer_id']."'";
	$res=mysqli_query($conn,$vensql);	
	while($vendor_name = mysqli_fetch_array($res)){
					
	$customer_name = $vendor_name['vendor_name'];
	}
	
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['inquiry_code'];
   	$sub_array[] = $customer_name;
   	$sub_array[] = '<td><a href="edit_inquiry.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-target="">Edit</a> | <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-target="">Delete</a> | '.$active.' </td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>