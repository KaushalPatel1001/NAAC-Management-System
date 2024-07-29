<?php 
include('include/db_connect.php');
$gsa_a = "select * from tbl_users where id= '".$_SESSION['id']."'";
$er_a = mysqli_query($conn,$gsa_a);
$err_a = mysqli_fetch_assoc($er_a);
$err_a['permissions'];
$fetch_me = "SELECT * FROM `menu_management` where `link` = '". basename($_SERVER['PHP_SELF'])."'";
$result_me = mysqli_query($conn, $fetch_me);
$rtyue = mysqli_fetch_array($result_me);
$rtyue['id'];
$checkbox_arrays = explode(",", $err_a['permissions']);
?>
<style type="text/css">
.add_data{
	display:<?php 	if(in_array($rtyue['id']."_add", $checkbox_arrays)) { echo "";}else{
	echo "none !important";
	}?>
 ;}
	.edit_data{
	display:<?php 	if(in_array($rtyue['id']."_edit", $checkbox_arrays)) { echo "";}else{
	echo "none !important";
	}?>
;}
.view_data{
	display:<?php 	if(in_array($rtyue['id']."_view", $checkbox_arrays)) { echo "";}else{
	echo "none !important";
	}?>
;}
.delete_data{
	display:<?php 	if(in_array($rtyue['id']."_delete", $checkbox_arrays)) { echo "";}else{
	echo "none !important";
	}?>
;}
.change_status{
	display:<?php 	if(in_array($rtyue['id']."_status", $checkbox_arrays)) { echo "";}else{
	echo "none !important";
	}?>
;}
</style>