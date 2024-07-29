<?php
session_start();
include('../include/db_connect.php');
	$id = $_GET['id'];
	$query = "SELECT * FROM menu_management ORDER BY id ASC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) { 

	$check = "SELECT * FROM `tbl_users` WHERE id='".$id."'";
	$check_res = mysqli_query($conn,$check);
	$check_row = mysqli_fetch_array($check_res);
	$check_id = $check_row['show_menu'];
	$checkbox_array = explode(",", $check_id);
	print_r($checkbox_array);
	$per_id = $check_row['permissions'];
	$checkper_array = explode(",", $per_id);
	if($rows['link'] == '#'){
	$style= "btn btn-danger";
	}else{
	$style= "btn btn-success";
	}
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = '<td><span class="'.$style.'">'.$rows['menu_name'].'</span></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck1_'.$rows["id"].'" name="show_menu[]" value='.$rows["id"].'><label class="custom-control-label" for="customCheck1_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck2_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_add'.'><label class="custom-control-label" for="customCheck2_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck3_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_edit'.'><label class="custom-control-label" for="customCheck3_'.$rows["id"].'"></label></div></td>';
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input" id="customCheck4_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_delete'.'><label class="custom-control-label" for="customCheck4_'.$rows["id"].'"></label></div></td>';
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
