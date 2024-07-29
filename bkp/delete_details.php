<?php
include_once("include/db_connect.php");
	
	$page = $_REQUEST['page'];
	if($page == "users"){
		$id = $_POST['id'];
		$ert = "delete from tbl_users where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "sub_group"){
		$id = $_POST['id'];
		$ert = "delete from mst_sub_group where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "itr_name"){
		$id = $_POST['id'];
		$ert = "delete from itr_form where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "itr_type"){
		$id = $_POST['id'];
		$ert = "delete from itr_type where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "time_sec"){
		$id = $_POST['id'];
		$ert = "delete from time_section where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "itr_status"){
		$id = $_POST['id'];
		$ert = "delete from itr_status where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "it_master"){
		$id = $_POST['id'];
		$ert = "delete from it_return_master where id='$id' ";
		$rt = mysqli_query($conn,$ert);
		
		$ert_m = "delete from it_return_master_list where rm_id='$id'";
		$rt_m = mysqli_query($conn,$ert_m);


		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
		if($page == "it_return_file"){
		$id = $_POST['id'];
		$list_val = $_POST['list_val'];
		$ert = "delete from it_return_image where id='$id'";
		$rt = mysqli_query($conn,$ert);

		$ertlist = "update it_return_master_list set filled_status = '0' where id='$list_val'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}

	
	if($page == "state"){
		$id = $_POST['id'];
		$ert = "delete from state where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "gst_return_file"){
		$id = $_POST['id'];
		$list_val = $_POST['list_val'];
		$ert = "delete from gst_return_image where id='$id'";
		$rt = mysqli_query($conn,$ert);

		$ertlist = "update return_master_list set filled_status = '0' where id='$list_val'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
		
	if($page == "gst_master"){
		$id = $_POST['id'];
		$ert = "delete from return_master where id='$id' ";
		$rt = mysqli_query($conn,$ert);
		
		$ert_m = "delete from return_master_list where rm_id='$id'";
		$rt_m = mysqli_query($conn,$ert_m);


		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "epf_return_file"){
		$id = $_POST['id'];
		$list_val = $_POST['list_val'];
		$ert = "delete from epf_return_image where id='$id'";
		$rt = mysqli_query($conn,$ert);

		$ertlist = "update epf_return_master_list set filled_status = '0' where id='$list_val'";
		$rtlist = mysqli_query($conn,$ertlist);
		
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "epf_master"){
		$id = $_POST['id'];
		$ert = "delete from epf_return_master where id='$id' ";
		$rt = mysqli_query($conn,$ert);
		
		$ert_m = "delete from epf_return_master_list where rm_id='$id'";
		$rt_m = mysqli_query($conn,$ert_m);


		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "epf_master_service"){
		$id = $_POST['record'];
		$exp_rec = explode(',',$id);
		$comma_rec = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $exp_rec));
		$ert = "update epf_return_master_list set delete_status = '1' where id IN($comma_rec)";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "gst_master_service"){
		$id = $_POST['record'];
		$exp_rec = explode(',',$id);
		$comma_rec = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $exp_rec));
		$ert = "update return_master_list set delete_status = '1' where id IN($comma_rec)";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "w_group"){
		$id = $_POST['id'];
		$ert = "delete from whatsapp_group where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "calling_status"){
		$id = $_POST['id'];
		$ert = "delete from calling_status where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "client_cred"){
		$id = $_POST['id'];
		$ert = "delete from client_cred where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "call_image"){
		$id = $_POST['id'];
		$ert = "delete from calling_att where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "task_name"){
		$id = $_POST['id'];
		$ert = "delete from task where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "client_calling"){
		$id = $_POST['id'];
		$ert = "delete from calling_data where id='$id'";
		$rt = mysqli_query($conn,$ert);
		
		$ert_sub = "delete from calling_att where calling_id='$id'";
		$rt_sub = mysqli_query($conn,$ert_sub);
		
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "per_document"){
		$id = $_POST['id'];
		$ert = "delete from personal_document where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "com_policy"){
		$id = $_POST['id'];
		$ert = "delete from company_policy where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "resp"){
		$id = $_POST['id'];
		$ert = "delete from responsibility where id='$id'";
		$rt = mysqli_query($conn,$ert);
		
		$ert_sub = "delete from responsibility_con where responsibility_id='$id'";
		$rt_sub = mysqli_query($conn,$ert_sub);
		
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "resp_con"){
		$id = $_POST['id'];
		$ert_sub = "delete from responsibility_con where id='$id'";
		$rt_sub = mysqli_query($conn,$ert_sub);
		if($rt_sub){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "attendance"){
		$id = $_POST['id'];
		$ert = "delete from attendance where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "reminder"){
		$id = $_POST['id'];
		$ert = "delete from reminder where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "holiday_name"){
		$id = $_POST['id'];
		$ert = "delete from holiday where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "task_name_att"){
		$id = $_POST['id'];
		$ert = "delete from task_att where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "so_image"){
		$id = $_POST['id'];
		$ert = "delete from service_image where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "en_image"){
		$id = $_POST['id'];
		$ert = "delete from enquiry_image where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "menu_manage"){
		$id = $_POST['id'];
		$ert = "delete from menu_management where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "profile_name"){
		$id = $_POST['id'];
		$ert = "delete from menu_profile where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "sub_document"){
		$id = $_POST['id'];
		$ert = "delete from sub_document where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "uploaded_document"){
		$id = $_POST['id'];
		$ert = "delete from legal_document where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "service_order"){
		$id = $_POST['id'];
		$ert = "delete from cron_master where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ert_sub = "delete from cron_data_list where service_order_id='$id'";
		$rt_sub = mysqli_query($conn,$ert_sub);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
		if($page == "youtube"){
		$id = $_POST['id'];
		$value = $_POST['value'];
		
		$ert = "delete from youtube where id='$id'";
		$rt = mysqli_query($conn,$ert);
		$ert_sub = "delete from youtube_list where video_id='$id'";
		$rt_sub = mysqli_query($conn,$ert_sub);

		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "sub_category"){
		$id = $_POST['id'];
		$ert = "delete from sub_category where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "document"){
		$id = $_POST['id'];
		$ert = "delete from document where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "cheque_remark"){
		$id = $_POST['id'];
		$ert = "delete from cheque_remark where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "city"){
		$id = $_POST['id'];
		$ert = "delete from city where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "department"){
		$id = $_POST['id'];
		$ert = "delete from department where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "group"){
		$id = $_POST['id'];
		$ert = "delete from mst_group where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "category"){
		$id = $_POST['id'];
		$ert = "delete from mst_category where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "company"){
		$id = $_POST['id'];
		$ert = "delete from company where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "company_bank"){
		$id = $_POST['id'];
		$ert = "delete from company_bank_account where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "bank_name"){
		$id = $_POST['id'];
		$ert = "delete from bank where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
    
    if($page == "shape"){
		$id = $_POST['id'];
		$ert = "delete from shape where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}

	if($page == "uom"){
		$id = $_POST['id'];
		$ert = "delete from uom where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	} 

	if($page == "service"){
		$id = $_POST['id'];
		$ert = "delete from service where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}

	if($page == "activity"){
		$id = $_POST['id'];
		$ert = "delete from activity where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}

	if($page == "payment_type"){
		$id = $_POST['id'];
		$ert = "delete from payment_type where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "expense"){
		$id = $_POST['id'];
		$ert = "delete from expense_payment where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}

	if($page == "expense_type"){
		$id = $_POST['id'];
		$ert = "delete from expense_type where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	
	if($page == "service_category"){
		$id = $_POST['id'];
		$ert = "delete from material_category where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "client_type"){
		$id = $_POST['id'];
		$ert = "delete from client_type where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
	if($page == "tax_slab"){
		$id = $_POST['id'];
		$ert = "delete from tax_slab where id='$id'";
		$rt = mysqli_query($conn,$ert);
		if($rt){
		echo "DELETED";
		}else{
		echo "NOT DELETED";
		}
	}
		
	
?>