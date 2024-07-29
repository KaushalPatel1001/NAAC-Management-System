<?php
session_start();
include('../include/db_connect.php');
	$id = $_GET['id'];
	$query = "SELECT * FROM menu_management ORDER BY id ASC";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	$data = array();
	$cou = 1;
	$check = "SELECT * FROM `menu_profile` WHERE id='".$id."'";
	$check_res = mysqli_query($conn,$check);
	$check_row = mysqli_fetch_array($check_res);
	$check_id = $check_row['show_menu'];
	$checkbox_array = explode(",", $check_id);
	$per_id = $check_row['permissions'];
	$checkper_array = explode(",", $per_id);
	while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) { 
	if($rows['link'] == '#'){
	$style= "<span class='badge badge-danger' style='float:right;'>Top Menu</span>";
	
	}else{
	$style= "<span class='badge badge-success' style='float:right;'>Sub Menu</span>";
	}
	$sub_array   = array();
   	$sub_array[] = $cou++;
   	$sub_array[] = '<td>'.$rows['menu_name'].' '.$style.' </td>';
   	if(in_array($rows['id'], $checkbox_array)) {
	$sub_array[] =  '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass" id="customCheck1_'.$rows["id"].'" name="show_menu[]" value='.$rows["id"].' checked><label class="custom-control-label" for="customCheck1_'.$rows["id"].'"></label></div></td>';
	}else{
	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass" id="customCheck1_'.$rows["id"].'" name="show_menu[]" value='.$rows["id"].'><label class="custom-control-label" for="customCheck1_'.$rows["id"].'"></label></div></td>';
	}
	if(in_array($rows['id'].'_add', $checkper_array)) {
	 $sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass2" id="customCheck2_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_add'.' checked><label class="custom-control-label" for="customCheck2_'.$rows["id"].'"></label></div></td>';
	 }else{
	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass2" id="customCheck2_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_add'.'><label class="custom-control-label" for="customCheck2_'.$rows["id"].'"></label></div></td>'; 
	 }
if(in_array($rows['id'].'_edit', $checkper_array)) {
   	
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass3" id="customCheck3_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_edit'.' checked><label class="custom-control-label" for="customCheck3_'.$rows["id"].'"></label></div></td>';
}else{
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass3" id="customCheck3_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_edit'.'><label class="custom-control-label" for="customCheck3_'.$rows["id"].'"></label></div></td>';
}

if(in_array($rows['id'].'_delete', $checkper_array)) {

   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass4" id="customCheck4_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_delete'.' checked><label class="custom-control-label" for="customCheck4_'.$rows["id"].'"></label></div></td>';
}else{
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass4" id="customCheck4_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_delete'.'><label class="custom-control-label" for="customCheck4_'.$rows["id"].'"></label></div></td>';

}
if(in_array($rows['id'].'_status', $checkper_array)) {

   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass5" id="customCheck5_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_status'.' checked><label class="custom-control-label" for="customCheck5_'.$rows["id"].'"></label></div></td>';
}else{
   	$sub_array[] = '<td><div class="custom-control custom-checkbox mb-0"><input type="checkbox" class="custom-control-input checkBoxClass5" id="customCheck5_'.$rows["id"].'" name="permissions[]" value='.$rows["id"].'_status'.'><label class="custom-control-label" for="customCheck5_'.$rows["id"].'"></label></div></td>';

}	
	$data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
