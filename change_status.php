<?php
include_once("include/db_connect.php");
	
	$page = $_REQUEST['page'];
	if($page == "users"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update tbl_users set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "department"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update department set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "tpi"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update tpi set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "tpi1"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update tpi1 set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}


	if($page == "group"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update mst_group set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "product"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update mst_product set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sub_group"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update mst_sub_group set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "category"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update mst_category set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	 if($page == "manpower_category"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update manpower_category set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "manpower"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update manpower set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "itr"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update itr_form set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "itr_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update itr_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "itr_status"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update itr_status set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "it_master"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update it_return_master set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ertlist = "update it_return_master_list set delete_status = '$value' where rm_id='$id'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($value == "0"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "it_return_date"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update it_return_master_list set return_date='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "calling_status"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update calling_status set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "gst_master_txn"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update return_master_list set delete_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "gst_master_txn_act"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update return_master_list set delete_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "epf_master_txn"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update epf_return_master_list set delete_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "epf_master_txn_act"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update epf_return_master_list set delete_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "epf_master"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update epf_return_master set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ertlist = "update epf_return_master_list set delete_status = '$value' where rm_id='$id'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($value == "0"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "epf_return_date"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update epf_return_master_list set return_date='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "gst_master"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$scheme_name = $_POST['scheme_name'];
		$ert = "update return_master set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ertlist = "update return_master_list set delete_status = '$value' where rm_id='$id' and scheme_name = '".$scheme_name."'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($value == "0"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "sent_date"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service_image set sent_date='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "gst_return_date"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update return_master_list set return_date='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	
	if($page == "sent_time"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service_image set sent_time='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "sent_status"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service_image set sent_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "holiday"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update holiday set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "reminder"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update reminder set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "PENDING"){
		echo "COMPLETED";
		}else{
		echo "PENDING";
		}
	}
	if($page == "com_policy"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update company_policy set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "task"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update task set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sticky"){
		$value= $_POST['value'];
		$emp_id = $_POST['emp_id'];
		echo $ert = "update sticky set details='$value' where emp_id='$emp_id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "res_con_change"){
		$value= $_POST['value'];
		$id = $_POST['id'];
		echo $ert = "update responsibility_con set responsibility='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
	}
	if($page == "pending_service"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service_order_items set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	if($page == "sent_to_client"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service_image set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "pending_service_en"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update en_order_items set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sent_to_client_en"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update enquiry_image set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sent_date_en"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update enquiry_image set sent_date='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sent_time_en"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update enquiry_image set sent_time='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sent_status_en"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update enquiry_image set sent_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "cron_order"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update cron_master set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "pancard"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update pancard_report set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "cancel_booking"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$uni=$_POST['uni'];
		$ert = "update sales_order_details set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ert_unit = "update unit set booked_status='' where id='$id'";
		$rt_unit = mysqli_query($conn,$ert_unit);
		if($value == "0"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "reference"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update reference set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sub_category"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update sub_category set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "client_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update client_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "state"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update state set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "city"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update city set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "sub_document"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update sub_document set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "demand"){
		$value=$_POST['value'];
		$all_value = $_POST['stage_name'];
		$breakinto = explode(',',$all_value);
		$stage_name=$breakinto[0];
		$percentage=$breakinto[1];
		$amount=$breakinto[2];
		$gst_amount=$breakinto[3];
		$total_amount=$breakinto[4];
		$gst=$breakinto[5];
		$sales_order_id=$breakinto[6];
		$seg=$breakinto[7];
		$id = $_POST['id'];
		$sql = "insert into demand(stage_name,percentage,amount,gst_amount,total_amount,gst,sales_order_id) values('$stage_name','$percentage','$amount','$gst_amount','$total_amount','$gst','$sales_order_id')";
		$done = mysqli_query($conn, $sql);
		if($seg == "unit"){
		$ert = "update sales_payment_condition set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		}else{
		$ert = "update sales_order_items_oc set demand_status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		}
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "stage_name"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update payment_condition set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "other_charge"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update other_charge set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "construction_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update construction_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "unit_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update unit_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "document"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update document set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "company"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update company set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "work_group"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update work_group set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "work_name"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update work_name set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "menu_management"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update menu_management set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "project"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update project set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "bank"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update bank set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

     if($page == "shape"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update shape set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "uom"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update uom set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "service"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update service set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "activity"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update activity set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "weld"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update weld_consumable set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "estimate"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update estimate_tab set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "contract"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update contract set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}

	if($page == "project_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update project_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "leave_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update leave_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "material_unit"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update material_unit set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "unit"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update unit set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "cheque_remark"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update cheque_remark set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "payment_type"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update payment_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "amenities"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update amenities set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	
	
	if($page == "expense_name"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update expense_type set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "company_bank"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update company_bank_account set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "terms"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update terms set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "category_name"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update material_category set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "tax_slab"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update tax_slab set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "supplier"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update supplier set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "client"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update client set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "material_name"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update material_master set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}
	if($page == "material_rate"){
		$value=$_POST['value'];
		$id = $_POST['id'];
		$ert = "update material_rate_mst set status='$value' where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($value == "1"){
		echo "ACTIVE";
		}else{
		echo "INACTIVE";
		}
	}	
	
?>