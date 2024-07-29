<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM new_quotation ORDER BY id DESC";
	$result = mysqli_query($conn, $query);

	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {

	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = $rows['quotation_no'];
   	$sub_array[] = $rows['quotation_date'];
   	$sub_array[] = $rows['quotation_cust_name'];
   	$sub_array[] = $rows['quotation_gst_amount'];
   	$sub_array[] = $rows['quotation_taxable_amount'];
   	$sub_array[] = $rows['quotation_final_amount'];
	// $sub_array[] = '<td>'.$active.'</td>';
   	$sub_array[] = '<td><a href="edit_quotation.php?id='.$rows["id"].'" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data">Edit</a> <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data">Delete</a></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
