<?php
session_start();
include('../include/db_connect.php');
	
	$query = "SELECT * FROM menu_management ORDER BY id ASC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) { 
   	
	$query_n = "SELECT * FROM menu_management where id  = '".$rows['parent_id']."'";
	$result_n = mysqli_query($conn, $query_n);
	$rows_n = mysqli_fetch_array($result_n);
	if($rows['link'] == '#'){
	$style= "<span class='badge badge-danger' style='float:right;'>Top Menu</span>";
	
	}else{
	$style= "<span class='badge badge-success' style='float:right;'>Sub Menu</span>";
	}
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = '<td>'.$rows['menu_name'].' '.$style.'</td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck1_'.$rows["id"].'" name="show_menu[]" value='.$rows["id"].'><label class="custom-control-label" for="customCheck1_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck2_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_add'.'><label class="custom-control-label" for="customCheck2_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck3_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_edit'.'><label class="custom-control-label" for="customCheck3_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck4_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_delete'.'><label class="custom-control-label" for="customCheck4_'.$rows["id"].'"></label></div></td>';
	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck5_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_status'.'><label class="custom-control-label" for="customCheck5_'.$rows["id"].'"></label></div></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
