<?php
include_once("include/db_connect.php");
	    $page = $_REQUEST['page'];
		if($page == "menu_management"){
				$menu_name = $_POST['menu_name'];
				$parent_id = $_POST['parent_id'];
				$link =  $_POST['link'];
				$status = $_POST['status'];
				$id = $_POST['id'];
		
				if($id != ''){
				$sql = "update menu_management set menu_name = '$menu_name',parent_id = '$parent_id',link = '$link',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MENU UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into menu_management(menu_name, icon, accesskey, parent_id, link, status) values('$menu_name','','','$parent_id','$link','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MENU CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}

		if($page == "est_total_cost"){
			
			$cost_est_id = $_POST['cost_est_id'];
			$bom_cost = $_POST['hidden_bom_cost'];
			$broughtout_cost = $_POST['hidden_broughtout_cost'];
			$subcontract_cost = $_POST['hidden_subcontract_cost'];
			$jigs_fixtures_cost = $_POST['hidden_jf_cost'];
			$services_cost = $_POST['hidden_services_cost'];
			$testing_cost = $_POST['hidden_testing_cost'];
			$ndt_cost = $_POST['hidden_ndt_cost'];
			$transportation_cost = $_POST['hidden_transportation_cost'];
			$documentation_cost = $_POST['hidden_documentation_cost'];
			$inspection_cost = $_POST['hidden_inspection_cost'];
			$engineering_cost = $_POST['hidden_engineering_cost'];
			$site_visit_cost = $_POST['hidden_site_visit_cost'];
			$electricity_cost = $_POST['hidden_electricity_cost'];
			$administration_cost = $_POST['hidden_administration_cost'];
			$legal_compliances_cost = $_POST['hidden_legal_compliances_cost'];
			$pf_cost = $_POST['hidden_pf_cost'];
			$final_trans_cost = $_POST['hidden_final_trans_cost'];
			$insurance_cost = $_POST['hidden_insurance_cost'];
			$pre_commission_cost = $_POST['hidden_pre_commission_cost'];
			$sales_commission_cost = $_POST['hidden_sales_commission_cost'];
			$refrence_commission_cost = $_POST['hidden_refrence_commission_cost'];
			$post_commission_cost = $_POST['hidden_post_commission_cost'];
			$contigency_cost = $_POST['hidden_contigency_cost'];
			$post_contigency_cost = $_POST['hidden_post_contigency_cost'];
			$profit_overhead_cost = $_POST['hidden_profit_overhead_cost'];
			$final_total_cost = $_POST['hidden_final_total_cost'];

			$sql = "INSERT INTO `tbl_total_cost`(`bom_cost`, `broughtout_cost`, `subcontract_cost`, `jigs_fixtures_cost`, `services_cost`, `testing_cost`, `ndt_cost`, `transportation_cost`, `documentation_cost`, `inspection_cost`, `engineering_cost`, `site_visit_cost`, `electricity_cost`, `administration_cost`, `legal_compliances_cost`, `pf_cost`, `final_trans_cost`, `insurance_cost`, `pre_commission_cost`, `sales_commission_cost`, `refrence_commission_cost`, `post_commission_cost`, `contigency_cost`, `post_contigency_cost`, `profit_overhead_cost`, `final_total_cost`, `cost_est_id`) VALUES ('$bom_cost','$broughtout_cost','$subcontract_cost','$jigs_fixtures_cost','$services_cost','$testing_cost','$ndt_cost','$transportation_cost','$documentation_cost','$inspection_cost','$engineering_cost','$site_visit_cost','$electricity_cost','$administration_cost','$legal_compliances_cost','$pf_cost','$final_trans_cost','$insurance_cost','$pre_commission_cost','$sales_commission_cost','$refrence_commission_cost','$post_commission_cost','$contigency_cost','$post_contigency_cost','$profit_overhead_cost','$final_total_cost','$cost_est_id')";
			echo "$sql";

			$result = mysqli_query($conn, $sql);
			if($result){
				echo "SUCCESS";
			}else{
				echo "ERROR";
			}

		}

		if($page == "group"){
			$grp_name = $_POST['grp_name'];
			$grp_code = $_POST['grp_code'];
			$prefix = $_POST['prefix'];
			$cat_id = $_POST['cat_id'];
			$status = $_POST['status'];
			$id = $_POST['id'];

			$trimmedgrpname = trim($grp_name);
			


			$query = "SELECT * FROM mst_group WHERE grp_code = '".$grp_code."'";  
			$check=mysqli_query($conn,$query);
			$checkrows=mysqli_num_rows($check);

			$querynm = "SELECT * FROM mst_group WHERE grp_name = '".$grp_name."'";  
			$checknm=mysqli_query($conn,$querynm);
			$checkrowsnm=mysqli_num_rows($checknm);

			if ($checkrows > 0 || $checkrowsnm > 0) {
				echo "GROUP EXISTS";
			}else{
				//echo "insert into mst_group(grp_name, grp_code, prefix, cat_id, status) values('$trimmedgrpname','$grp_code','$prefix','$cat_id','$status')";
				$sql = "insert into mst_group(grp_name, grp_code, prefix, cat_id, status) values('$trimmedgrpname','$grp_code','$prefix','$cat_id','$status')";
				$done = mysqli_query($conn, $sql);

				
				$last_id = mysqli_insert_id($conn);	
				//print_r($_POST["extra_field"]);

				for ($x = 0; $x <$_POST["total_item"]; $x++) {

				//	echo "kitne baer";
				
					$extra_field = $_POST['extra_field'][$x];
					$is_num = $_POST['is_num'][$x];
					$is_compulsory = $_POST['is_compulsory'][$x];
					
						
						$exqry = "insert into mst_group_extra(extra_field , is_num, is_compulsory, grp_id) values('$extra_field', '$is_num', '$is_compulsory','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}
						
				if($done){
					echo "GROUP CREATED";
				} else {				
					echo "ERROR";	 
				}

				$add_vlog_group = "insert into validation_log(module_name, mod_id, ref_mod, ref_id) values('validate_category_mst','$cat_id','validate_group_mst','$last_id')";
				$done = mysqli_query($conn, $add_vlog_group);
			}
			if($id != ''){
				$qry = "SELECT * FROM mst_group WHERE grp_code = '".$grp_code."' AND id != '".$id."'";
				$result = mysqli_query($conn,$qry);
				$rec = mysqli_num_rows($result);

				if($rec == 0){
					$query = "SELECT * FROM mst_group WHERE grp_name = '".$grp_name."' AND id != '".$id."'";
					$result1 = mysqli_query($conn,$query);
					$rec1 = mysqli_num_rows($result1);
					if($rec1 == 0){
						$sql = "update mst_group set grp_name = '$trimmedgrpname',grp_code = '$grp_code',prefix = '$prefix',cat_id = '$cat_id',status = '$status' where id = '".$id."'";
						$done = mysqli_query($conn, $sql);			
						if($done){
							echo "Group UPDATED";
						} else {				
							echo "ERROR";	 
						}
					}
				}
			}

		}
		
		if($page == "est_charges"){
			$cost_est_id = $_POST['cost_est_id'];

			for($count=0; $count < $_POST["trans_count"]; $count++){
				$transportation_stage = $_POST['transportation_stage'][$count];
				$transportation_from = $_POST['transportation_from'][$count];
				$transportation_to = $_POST['transportation_to'][$count];
				$transportation_unit_charge = $_POST['transportation_unit_charge'][$count];
				$transportation_no_of_trip = $_POST['transportation_no_of_trip'][$count];
				$transportation_total = $_POST['transportation_total'][$count];

				$sql = "INSERT INTO `transportation_charges`(`cost_est_id`, `transportation_stage`, `transportation_from`, `transportation_to`, `transportation_unit_charge`, `transportation_no_of_trip`, `transportation_total`) VALUES ('$cost_est_id','$transportation_stage','$transportation_from','$transportation_to','$transportation_unit_charge','$transportation_no_of_trip','$transportation_total')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($dcount=0; $dcount < $_POST["doc_count"]; $dcount++){

				$documentation_total_no = $_POST['documentation_total_no'][$dcount];
				$documentation_unit_rate = $_POST['documentation_unit_rate'][$dcount];
				$documentation_total_cost = $_POST['documentation_total_cost'][$dcount];

				$sql = "INSERT INTO `documentation_charges`(`cost_est_id`,`documentation_total_no`, `documentation_unit_rate`, `documentation_total_cost`) VALUES ('$cost_est_id','$documentation_total_no','$documentation_unit_rate','$documentation_total_cost')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($ecount=0; $ecount < $_POST["eng_count"]; $ecount++){
				$engineering_total_no = $_POST['engineering_total_no'][$ecount];
				$engineering_unit_rate = $_POST['engineering_unit_rate'][$ecount];
				$engineering_total_cost = $_POST['engineering_total_cost'][$ecount];

				$sql = "INSERT INTO `engineering_charges`(`cost_est_id`, `engineering_total_no`, `engineering_unit_rate`, `engineering_total_cost`) VALUES ('$cost_est_id','$engineering_total_no','$engineering_unit_rate','$engineering_total_cost')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}

				$pinnacle_name = $_POST['pinnacle_name'];
				$inspecting_type = $_POST['inspecting_type'];
				$inspection_select_tpi = $_POST['inspection_select_tpi'];
				$inspection_total_cost = $_POST['inspection_total_cost'];

				$qry = "INSERT INTO `inspection_charge`(`cost_est_id`, `pinnacle_name`, `inspecting_type`, `inspection_select_tpi`,`inspection_total_cost`) VALUES ('$cost_est_id', '$pinnacle_name','$inspecting_type','$inspection_select_tpi','$inspection_total_cost')";
				echo $qry;
				$success = mysqli_query($conn, $qry);

				
				
				
				//sales commision
				$sales_quantity = $_POST['sales_quantity'];
				$sales_uom = $_POST['sales_uom'];
				$sales_unit_rate = $_POST['sales_unit_rate'];
				$sales_total_cost = $_POST['sales_total_cost'];
				
				$sql = "insert into sales_commission(cost_est_id,sales_quantity,sales_uom,sales_unit_rate,sales_total_cost) values('$cost_est_id','$sales_quantity','$sales_uom','$sales_unit_rate','$sales_total_cost')";
				$donesc = mysqli_query($conn, $sql);
				
				
				
				
				//electricity Charges
				
				$electricity_quantity = $_POST['electricity_quantity'];
				$electricity_uom = $_POST['electricity_uom'];
				$electricity_unit_rate = $_POST['electricity_unit_rate'];
				$electricity_total_cost = $_POST['electricity_total_cost'];

				$sql = "insert into electricity_charges(cost_est_id,electricity_quantity,electricity_uom,electricity_unit_rate,electricity_total_cost) values('$cost_est_id','$electricity_quantity','$electricity_uom','$electricity_unit_rate','$electricity_total_cost')";
				$doneec = mysqli_query($conn, $sql);
				
				//administration Charges
				$administration_quantity = $_POST['administration_quantity'];
				$administration_uom = $_POST['administration_uom'];
				$administration_unit_rate = $_POST['administration_unit_rate'];
				$administration_total_cost = $_POST['administration_total_cost'];
				
				$sql = "insert into administration_charges(cost_est_id,administration_quantity,administration_uom,administration_unit_rate,administration_total_cost) values('$cost_est_id','$administration_quantity','$administration_uom','$administration_unit_rate','$administration_total_cost')";
				$done = mysqli_query($conn, $sql);	
				
				//goverment Charges
				$goverment_quantity = $_POST['goverment_quantity'];
				$goverment_uom = $_POST['goverment_uom'];
				$goverment_unit_rate = $_POST['goverment_unit_rate'];
				$goverment_total_cost = $_POST['goverment_total_cost'];
				
				$sql = "insert into goverment_legal_charges(cost_est_id,goverment_quantity,goverment_uom,goverment_unit_rate,goverment_total_cost) values('$cost_est_id','$goverment_quantity','$goverment_uom','$goverment_unit_rate','$goverment_total_cost')";
				$donegl = mysqli_query($conn, $sql);	
				
				//Packing Charges
				$pac_for_quantity = $_POST['pac_for_quantity'];
				$pac_for_uom = $_POST['pac_for_uom'];
				$pac_for_unit_rate = $_POST['pac_for_unit_rate'];
				$pac_for_total_cost = $_POST['pac_for_total_cost'];
				
				$sql = "insert into packing_forwording(cost_est_id,pac_for_quantity,pac_for_uom,pac_for_unit_rate,pac_for_total_cost) values('$cost_est_id','$pac_for_quantity','$pac_for_uom','$pac_for_unit_rate','$pac_for_total_cost')";
				$donepf = mysqli_query($conn, $sql);	
				//Final transport Charges				
				$final_tra_quantity = $_POST['final_tra_quantity'];
				$final_tra_uom = $_POST['final_tra_uom'];
				$final_tra_unit_rate = $_POST['final_tra_unit_rate'];
				$final_tra_total_cost = $_POST['final_tra_total_cost'];
				
				$sql = "INSERT INTO `final_transport_charges`(`id`, `cost_est_id`, `final_tra_quantity`, `final_tra_uom`, `final_tra_unit_rate`, `final_tra_total_cost`) values('$cost_est_id','$final_tra_quantity','$final_tra_uom','$final_tra_unit_rate','$final_tra_total_cost')";
				$doneft = mysqli_query($conn, $sql);
				
				//Insurance Charges				

				$insurance_char_quantity = $_POST['insurance_char_quantity'];
				$insurance_char_uom = $_POST['insurance_char_uom'];
				$insurance_char_unit_rate = $_POST['insurance_char_unit_rate'];
				$insurance_char_total_cost = $_POST['insurance_char_total_cost'];
				
				$sqlic = "insert into insurance_charges(cost_est_id,insurance_char_quantity,insurance_char_uom,insurance_char_unit_rate,insurance_char_total_cost) values('$cost_est_id','$insurance_char_quantity','$insurance_char_uom','$insurance_char_unit_rate','$insurance_char_total_cost')";
				$done = mysqli_query($conn, $sql);	

		}
		
		
		if($page == "new_welder_qualifications"){

				$id = $_POST['id'];
				
                for($y=0; $y < $_POST['count_new_weld']; $y++){
						
					$new_welder_process = $_POST['new_welder_process'][$y];
					$new_welder_thickness = $_POST['new_welder_thickness'][$y];
					$new_welder_moc = $_POST['new_welder_moc'][$y];
					$new_welder_labtest = $_POST['new_welder_labtest'][$y];
					$new_welder_tpicharge = $_POST['new_welder_tpicharge'][$y];

					if($new_welder_process !=''){
						$sqlqry1 = "insert into est_new_welder_qualifications(cost_est_id, new_welder_process , new_welder_thickness, new_welder_moc, new_welder_labtest, new_welder_tpicharge) values('$cost_est_id','$new_welder_process', '$new_welder_thickness', '$new_welder_moc', '$new_welder_labtest', '$new_welder_tpicharge')";
						$res = mysqli_query($conn, $sqlqry1);
						
						}
					}
		}
		if($page == "add_inquiry_form"){
				$inquiry_auto_code = $_POST['inquiry_auto_code'];
				$date = $_POST['date1'];
				$customer_id = $_POST['customer'];
				$customer_address = $_POST['customer_address'];
				$customer_city = $_POST['customer_city'];
				$customer_pincode = $_POST['customer_pincode'];
				$customer_contact = $_POST['customer_contact'];
				$customer_email = $_POST['customer_email'];
				$customer_gst = $_POST['customer_gst'];
				$source = $_POST['source'];
				$followup = $_POST['followup'];
				$customer_remarks = $_POST['customer_remarks'];
				$id = $_POST['id'];

				
				

                $query = "SELECT * FROM mst_inquiry WHERE inquiry_code = '".$inquiry_auto_code."'";
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    
			    if ($checkrows > 0) {
			    	echo "INQUIRY EXISTS";

			    }else{
				$sql = "insert into mst_inquiry(inquiry_code, created_date, customer_id, customer_address, customer_city, customer_pincode, customer_contact, customer_email, customer_gst, source, followup, customer_remarks, status) VALUES('$inquiry_auto_code','$date', '$customer_id', '$customer_address','$customer_city','$customer_pincode','$customer_contact','$customer_email','$customer_gst','$source','$followup','$customer_remarks','0')";
				$done = mysqli_query($conn, $sql);	
				if($done){
					echo "INQUIRY CREATED";
					}else{				
					echo "ERROR";	 
					}
				$last_id = mysqli_insert_id($conn);
				for ($y = 0; $y < $_POST["total_item"]; $y++) {

					$product_name[$y] = $_POST['product_name'][$y];
					$qty[$y] = $_POST['qty'][$y];

					$exqry = "insert into inquiry_product_extra(product_name , qty , inquiry_id) values('$product_name[$y]', '$qty[$y]','$last_id')";
						$success = mysqli_query($conn, $exqry);

					///////// Product extra validation ///////
					/*if($product_name[$y] != '' AND $qty[$y] != ''){
						$exqry = "insert into inquiry_product_extra(product_name , qty , inquiry_id) values('$product_name[$y]', '$qty[$y]','$last_id')";
						$success = mysqli_query($conn, $exqry);
					}else{
						exit("EXTRA");
						}*/
					}
				
				}

				if($id != ''){
				$qry = "SELECT * FROM mst_inquiry WHERE inquiry_code = '".$inquiry_auto_code."'";
				$result = mysqli_query($conn,$qry);
				$rec = mysqli_num_rows($result);

				if($rec > 0){
					
						$sql = "update mst_inquiry set inquiry_code = '$inquiry_auto_code', created_date = '$date',customer_id = '$customer_id',customer_address = '$customer_address',customer_city = '$customer_city',customer_pincode = '$customer_pincode',customer_contact = '$customer_contact', customer_email = '$customer_email', customer_gst = '$customer_gst', source = '$source', followup = '$followup', customer_remarks = '$customer_remarks', status = '0', where inquiry_code = '".$inquiry_auto_code."'"; 
						
						$done = mysqli_query($conn, $sql);			
						if($done){
							echo "INQUIRY UPDATED";
						} else {				
							echo "ERROR";	 
						}
				}
			} 
				
		}


if($page == "new_quotation") {

				$quotation_no = $_POST['quotation_no'];
				$quotation_date = $_POST['quotation_date'];
				$quotation_cust_name = $_POST['quotation_cust_name'];
				$quotation_gst = $_POST['quotation_gst'];
				// $quotation_attachement = $_POST['quotation_attachement'];
				$quotation_taxable_amount = $_POST['quotation_taxable_amount'];
				$quotation_discount_amount = $_POST['quotation_discount_amount'];
				$quotation_gst_amount = $_POST['quotation_gst_amount'];
				$quotation_net_amount = $_POST['quotation_net_amount'];
				$quotation_final_amount = $_POST['quotation_final_amount'];
				$id = $_POST['id'];
				$query = "SELECT * FROM new_quotation WHERE quotation_no = '".$quotation_no."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
 

			    if ($checkrows > 0) {
			    	echo "QUOTATION EXISTS";
			    }else if($id != ''){
				$sql = "update new_quotation set quotation_no = '$quotation_no', quotation_date = '$quotation_date,'quotation_cust_name = '$quotation_cust_name','quotation_gst = '$quotation_gst','quotation_taxable_amount = '$quotation_taxable_amount',quotation_discount_amount = '$quotation_discount_amount',quotation_gst_amount = '$quotation_gst_amount',quotation_net_amount = '$quotation_net_amount',quotation_final_amount = '$quotation_final_amount' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "QUOTATION UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into new_quotation(quotation_no,quotation_date,quotation_cust_name,quotation_gst,quotation_taxable_amount,quotation_discount_amount,quotation_gst_amount,quotation_net_amount,quotation_final_amount) values('$quotation_no','$quotation_date','$quotation_cust_name','$quotation_gst','$quotation_taxable_amount','$quotation_discount_amount','$quotation_gst_amount','$quotation_net_amount','$quotation_final_amount')";
				$done = mysqli_query($conn, $sql);	

				$last_id = mysqli_insert_id($conn);	
				//print_r($_POST["extra_field"]);

				for ($x = 0; $x < $_POST["total_item"]; $x++) {

					$quotation_sr_no = $_POST['quotation_sr_no'][$x];
					$quotation_product_name = $_POST['quotation_product_name'][$x];
					$quotation_material_code = $_POST['quotation_material_code'][$x];
					$quotation_hsn = $_POST['quotation_hsn'][$x];
					$quotation_pcs = $_POST['quotation_pcs'][$x];
	                     
	                     if($quotation_sr_no !=''){
						$exqry = "insert into mst_quotation_product_extra(quotation_sr_no , quotation_product_name, quotation_material_code, quotation_hsn, quotation_pcs, quo_id) values('$quotation_sr_no','$quotation_product_name','$quotation_material_code','$quotation_hsn','$quotation_pcs','$last_id')";
						$success = mysqli_query($conn, $exqry);
					}

					}
					// echo $_POST["total_item1"];
					for ($y = 0; $y < $_POST["tax_item"]; $y++) {

				//	echo "kitne baer";
				
					$quotation_tax_type = $_POST['quotation_tax_type'][$y];
					$quotation_additional_tax = $_POST['quotation_additional_tax'][$y];
					$quotation_percent = $_POST['quotation_percent'][$y];
					$quotation_amount = $_POST['quotation_amount'][$y];
	                     
	                     if($quotation_tax_type !=''){
						$exqry = "insert into quotation_tax_table(quotation_tax_type , quotation_additional_tax,quotation_percent,quotation_amount, quotation_id) values('$quotation_tax_type', '$quotation_additional_tax','$quotation_percent','$quotation_amount','$last_id')";
						$success = mysqli_query($conn, $exqry);
					}

					}
					for ($z = 0; $z < $_POST["deduct_tax_item"]; $z++) {

				//	echo "kitne baer";
				
					$quo_tax_type = $_POST['quo_tax_type'][$z];
					$quotation_deduction_tax = $_POST['quotation_deduction_tax'][$z];
					$quo_percent = $_POST['quo_percent'][$z];
					$quo_amount = $_POST['quo_amount'][$z];
	                    if($quo_tax_type !=''){
						$exqry = "insert into quotation_deduction_tax_table(quo_tax_type , quotation_deduction_tax,quo_percent,quo_amount, quotation_id) values('$quo_tax_type', '$quotation_deduction_tax','$quo_percent','$quo_amount','$last_id')";
						$success = mysqli_query($conn, $exqry);
					}

					}		
				if($done){
					echo "QUOTATION CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "inquiry_followup"){
				$inquiry_code = $_POST['inquiry_code'];
				$customer_name = $_POST['customer_name'];
				$customer_feedback = $_POST['customer_feedback'];
				$feedback_date = $_POST['feedback_date'];
				$feedback_time = $_POST['feedback_time'];
				$followup_required = $_POST['followup_required'];
				$followup_date = $_POST['followup_date'];
				$followup_time = $_POST['followup_time'];
				$followup_remark = $_POST['followup_remark'];
				$transfer_inquiry = $_POST['transfer_inquiry'];
				$status = $_POST['status'];
				$id = $_POST['inquiry_id'];
				$query = "SELECT * FROM inquiry_followup WHERE inquiry_code = '".$inquiry_code."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
 

				
				$sql = "insert into inquiry_followup(inquiry_code,customer_name,customer_feedback,feedback_date,feedback_time,followup_required,followup_date,followup_time,followup_remark,transfer_inquiry,status) values('$inquiry_code','$customer_name','$customer_feedback','$feedback_date','$feedback_time','$followup_required','$followup_date','$followup_time','$followup_remark','$transfer_inquiry','$status')";
				
				
				$done = mysqli_query($conn, $sql);	

				$last_id = mysqli_insert_id($conn);	
				if($status == 1){
				$upqry = "update mst_inquiry set status = '$status' where inquiry_code = '".$inquiry_code."'";
					echo "$upqry";
					$suc = mysqli_query($conn, $upqry);
				}		
				if($done){
					echo "FOLLOWUP CREATED";
					} else {				
					echo "ERROR2";	 
					}
				
				
		}
		if($page == "jiqsfixtures"){

			
				
                for($y=0; $y < $_POST['count_jiqs']; $y++){
					
					$fixtures_description = $_POST['fixtures_description'][$y];
					$description = $_POST['description'][$y];
					$fixtures_uom = $_POST['fixtures_uom'][$y];
					$fixtures_unit_rate = $_POST['fixtures_unit_rate'][$y];
					$fixtures_quantity = $_POST['fixtures_quantity'][$y];
					$fixtures_total_cost = $_POST['fixtures_total_cost'][$y];

                        if($fixtures_description !=''){					
						$sqlqry = "insert into jiqsfixtures(`fixtures_description` , `description`, `fixtures_uom`, `fixtures_unit_rate`, `fixtures_quantity`, `fixtures_total_cost`) values('".$fixtures_description."', '".$description."', '".$fixtures_uom."','".$fixtures_unit_rate."','".$fixtures_quantity."','".$fixtures_total_cost."')";
						$res = mysqli_query($conn, $sqlqry);
						
                        }

					}
		}
		if($page == "site_visit"){

				$id = $_POST['id'];
				
                for($y=0; $y < $_POST['site_visit_count']; $y++){
						
					$site_location = $_POST['site_location'][$y];
					$site_no_of_person = $_POST['site_no_of_person'][$y];
					$site_no_of_days = $_POST['site_no_of_days'][$y];
					$site_unit_rate = $_POST['site_unit_rate'][$y];
					$site_total_cost = $_POST['site_total_cost'][$y];

					if($site_location !=''){
						$sqlqry1 = "insert into site_visit(site_location , site_no_of_person, site_no_of_days, site_unit_rate, site_total_cost) values('$site_location', '$site_no_of_person', '$site_no_of_days','$site_unit_rate','$site_total_cost')";
						$res = mysqli_query($conn, $sqlqry1);
						
						}
					}
		}
		if ($page == "est_bom") {
			$cost_est_id = $_POST['cost_est_id'];
			
			//echo $_POST["count"];
			for($count=0; $count < $_POST["count"]; $count++){

				$part_no = $_POST['part_no'][$count];
				$pro_name = $_POST['pro_name'][$count];
				$shape = $_POST['shape'][$count];
				$group = $_POST['group'][$count];
				$inv_uom = $_POST['inv_uom'][$count];
				$unit_qty = $_POST['unit_qty'][$count];
				$total_qty = $_POST['total_qty'][$count];
				$unit_weight = $_POST['unit_weight'][$count];
				$total_weight = $_POST['total_weight'][$count];

				$sql = "INSERT into `est_bom` (`cost_est_id` ,`part_no`, `pro_name`, `shape_id`, `group_id`, `inv_uom`, `unit_qty`, `total_qty`, `unit_weight`, `total_weight`) VALUES ('".$cost_est_id."','".$part_no."', '".$pro_name."', '".$shape."', '".$group."', '".$inv_uom."', '".$unit_qty."', '".$total_qty."', '".$unit_weight."', '".$total_weight."' )";
				echo $sql;
				echo "<br>";
				$done = mysqli_query($conn, $sql);
			}

			$userid = $_POST["user_id"];
			$insert = "INSERT INTO `cost_estimation`(`user_id`) VALUES ('".$userid."')";
			echo $insert;
			$insertdone = mysqli_query($conn, $insert);

		}
		if ($page == "est_broughtout_form"){
			$costqry = "SELECT * FROM cost_estimation ORDER BY id DESC";
			$suc = mysqli_query($conn,$costqry);
			$numrows = mysqli_num_rows($suc);
			$costrow = mysqli_fetch_assoc($suc);
			if($numrows < 1 ){
				$cost_est_id = 1;
			}else{
				$cost_est_id = $costrow['id'] + 1; 
			}
			

			for($count=0; $count < $_POST["br_count"]; $count++){
				$pro_name = $_POST['pro_name'][$count];
				$mat_code = $_POST['mat_code'][$count];
				$unit_rate = $_POST['unit_rate'][$count];
				$quantity = $_POST['quantity'][$count];
				$total = $_POST['total'][$count];

				$sql = "INSERT INTO `est_broughtout`(`cost_est_id`, `pro_name`, `mat_code`, `unit_rate`, `quantity`, `total`) VALUES ('".$cost_est_id."', '".$pro_name."', '".$mat_code."', '".$unit_rate."', '".$quantity."', '".$total."')";
					echo $sql;
				$done = mysqli_query($conn, $sql);
			}			
		}
		if($page == "manpower_cost_estimation"){

				$emp_type = implode("," , $_REQUEST['emp_type']);
				$no_of_hours = implode("," , $_REQUEST['no_of_hours']);
				$no_of_person = implode("," , $_REQUEST['no_of_person']);
				$activity_name = implode("," , $_REQUEST['activity_name']);

				$sqls = "insert into manpower_cost_estimation(emp_type, no_of_person, no_of_hours, activity_name) values('$emp_type','$no_of_person','$no_of_hours','$activity_name')";

				$dones = mysqli_query($conn, $sqls);

				if($done){
					echo "MANPOWER ESTIMATED";
					} else {				
					echo "ERROR";	 
					}
				
		}
		if($page == "est_contractpage"){
			$cost_est_id = $_POST['cost_est_id'];

			for($count=0; $count < $_POST["count_contract"]; $count++){

				$contract_desc = $_POST['select_contract'][$count];
				$description = $_POST['description'][$count];
				$contract_uom = $_POST['contract_uom'][$count];
				$contract_unit_rate = $_POST['contract_unit_rate'][$count];
				$contract_quantity = $_POST['contract_quantity'][$count];
				$contract_total_cost = $_POST['contract_total_cost'][$count];

				$sql = "INSERT INTO `est_contract_page`(`cost_est_id`, `contract_desc`,`description`, `contract_uom`, `contract_unit_rate`, `contract_quantity`, `contract_total_cost`) VALUES ('$cost_est_id','$contract_desc','$description','$contract_uom','$contract_unit_rate','$contract_quantity','$contract_total_cost')";
				
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}			

		}
		if($page == "add_est_service_data"){
			$cost_est_id = $_POST['cost_est_id'];
			
			echo $_POST['service_count'];

			for($count=0; $count < $_POST["service_count"]; $count++){

				$service_name = $_POST['service_name'][$count];
				$description = $_POST['description'][$count];
				$service_uom_name = $_POST['service_uom_name'][$count];
				$service_uom_rate = $_POST['service_uom_rate'][$count];
				$service_quantity = $_POST['service_quantity'][$count];
				$service_total = $_POST['service_total'][$count];

				$sql = "INSERT INTO `est_service`(`cost_est_id`, `service_name`,`description`, `service_uom_name`, `service_uom_rate`, `service_quantity`, `service_total`) VALUES ('$cost_est_id','$service_name','$description','$service_uom_name','$service_uom_rate','$service_quantity','$service_total')";
				echo $sql;
				echo "<br>";
				$done = mysqli_query($conn, $sql);
			}			

		}
		if($page == "est_ndt"){
			$cost_est_id = $_POST['cost_est_id'];
			
			for($count=0; $count < $_POST["ut_count"]; $count++){
				$ut_type = $_POST['ut_type'][$count];
				$ut_quantity = $_POST['ut_quantity'][$count];

				$ut_unit_rate = $_POST['ut_unit_rate'][$count];
				$ut_total_cost = $_POST['ut_total_cost'][$count];

				$sql = "INSERT INTO `ndt_ut`(`cost_est_id`, `ut_type`, `ut_quantity`, `unit_rate`, `total_cost`) VALUES ('$cost_est_id' ,'$ut_type','$ut_quantity','$ut_unit_rate','$ut_total_cost')";
				//echo $sql;
				$done = mysqli_query($conn, $sql);
			}


			for($ptcount=0; $ptcount < $_POST["pt_count"]; $ptcount++){
				$pt_type = $_POST['pt_type'][$ptcount];
				$pt_quantity = $_POST['pt_quantity'][$ptcount];

				$pt_unit_rate = $_POST['pt_unit_rate'][$ptcount];
				$pt_total_cost = $_POST['pt_total_cost'][$ptcount];

				$sql = "INSERT INTO `ndt_pt`(`cost_est_id`, `pt_type`, `pt_quantity`, `unit_rate`, `total_cost`) VALUES ('$cost_est_id' ,'$pt_type','$pt_quantity','$pt_unit_rate','$pt_total_cost')";
				//echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($vtcount=0; $vtcount < $_POST["vt_count"]; $vtcount++){
				$vt_type = $_POST['vt_type'][$vtcount];
				$vt_quantity = $_POST['vt_quantity'][$vtcount];

				$vt_unit_rate = $_POST['vt_unit_rate'][$vtcount];
				$vt_total_cost = $_POST['vt_total_cost'][$vtcount];

				$sql = "INSERT INTO `ndt_vt`(`cost_est_id`, `vt_type`, `vt_quantity`, `unit_rate`, `total_cost`) VALUES ('$cost_est_id', '$vt_type','$vt_quantity','$vt_unit_rate','$vt_total_cost')";
				//echo $sql;
				$done = mysqli_query($conn, $sql);
			}
			
			$rt_fix_visit_charge = $_POST['rt_fix_visit_charge'];

			for($rtcount=0; $rtcount < $_POST["rt_count"]; $rtcount++){

				
				$rt_spot_size = $_POST['rt_spot_size'][$rtcount];
				$rt_no_of_spot = $_POST['rt_no_of_spot'][$rtcount];
				$rt_unit_value = $_POST['rt_unit_value'][$rtcount];
				$rt_total_cost = $_POST['rt_total_cost'][$rtcount];

				$sql = "INSERT INTO `ndt_rt`(`cost_est_id`, `fix_visit_charge`, `spot_size`, `no_of_spot` ,`unit_value`, `total_cost`) VALUES ('$cost_est_id', '$rt_fix_visit_charge','$rt_spot_size','$rt_no_of_spot','$rt_unit_value','$rt_total_cost')";
				//echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($pautcount=0; $pautcount < $_POST["paut_count"]; $pautcount++){

				$paut_type = $_POST['paut_ut_type'][$pautcount];
				$paut_quantity = $_POST['paut_quantity'][$pautcount];
				$paut_unit_rate = $_POST['paut_unit_rate'][$pautcount];
				$paut_total_cost = $_POST['paut_total_cost'][$pautcount];

				$sql = "INSERT INTO `ndt_paut`(`cost_est_id`, `paut_type`, `paut_quantity` ,`unit_rate`, `total_cost`) VALUES ('$cost_est_id', '$paut_type','$paut_quantity','$paut_unit_rate','$paut_total_cost')";
				//echo $sql;
				$done = mysqli_query($conn, $sql);
			}			

		}
		if($page == "est_testing"){
			
			$cost_est_id = $_POST['cost_est_id'];
			
			
			for($count=0; $count < $_POST["chemical_count"]; $count++){
				$chemical_no_of_sample = $_POST['chemical_no_of_sample'][$count];
				$chemical_unit_rate = $_POST['chemical_unit_rate'][$count];
				$chemical_total_cost = $_POST['chemical_total_cost'][$count];

				$sql = "INSERT INTO `chemical_testing`(`cost_est_id`, `chemical_no_of_sample`, `chemical_unit_rate`, `chemical_total_cost`) VALUES ('$cost_est_id', '$chemical_no_of_sample','$chemical_unit_rate','$chemical_total_cost')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($mcount=0; $mcount < $_POST["mechanical_count"]; $mcount++){
				$mechanical_no_of_sample = $_POST['mechanical_no_of_sample'][$mcount];
				$mechanical_unit_rate = $_POST['mechanical_unit_rate'][$mcount];
				$mechanical_total_cost = $_POST['mechanical_total_cost'][$mcount];

				$sql = "INSERT INTO `mechanical_testing`(`cost_est_id`,`mechanical_no_of_sample`, `mechanical_unit_rate`, `mechanical_total_cost`) VALUES ('$cost_est_id','$mechanical_no_of_sample','$mechanical_unit_rate','$mechanical_total_cost')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}

			for($tcount=0; $tcount < $_POST["testing_count"]; $tcount++){
				$testing_select_tpi = $_POST['testing_select_tpi'][$tcount];
				$testing_no_of_days = $_POST['testing_no_of_days'][$tcount];

				$testing_unit_rate = $_POST['testing_unit_rate'][$tcount];
				$testing_total_cost = $_POST['testing_total_cost'][$tcount];

				$sql = "INSERT INTO `testing`(`cost_est_id`, `testing_select_tpi`, `testing_no_of_days`, `testing_unit_rate`, `testing_total_cost`) VALUES ('$cost_est_id', '$testing_select_tpi','$testing_no_of_days','$testing_unit_rate','$testing_total_cost')";
				echo $sql;
				$done = mysqli_query($conn, $sql);
			}
		}
		
		if($page == "add_inquiry_form"){
				$inquiry_auto_code = $_POST['inquiry_auto_code'];
				$date = $_POST['date1'];
				$customer_id = $_POST['customer'];
				$customer_address = $_POST['customer_address'];
				$customer_city = $_POST['customer_city'];
				$customer_pincode = $_POST['customer_pincode'];
				$customer_contact = $_POST['customer_contact'];
				$customer_email = $_POST['customer_email'];
				$customer_gst = $_POST['customer_gst'];
				$source = $_POST['source'];
				$followup = $_POST['followup'];
				$customer_remarks = $_POST['customer_remarks'];
				$id = $_POST['id'];

				
				

                $query = "SELECT * FROM mst_inquiry WHERE id = '".$inquiry_auto_code."'";
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    
			    if ($checkrows > 0) {
			    	echo "INQUIRY EXISTS";

			    }else{
				$sql = "insert into mst_inquiry(id, date, customer_id, customer_address, customer_city, customer_pincode, customer_contact, customer_email, customer_gst, source, followup, customer_remarks) VALUES('$inquiry_auto_code','$date', '$customer_id', '$customer_address','$customer_city','$customer_pincode','$customer_contact','$customer_email','$customer_gst','$source','$followup','$customer_remarks')";
				$done = mysqli_query($conn, $sql);	
				if($done){
					echo "INQUIRY CREATED";
					}else{				
					echo "ERROR";	 
					}
				$last_id = mysqli_insert_id($conn);
				for ($y = 0; $y < $_POST["total_item"]; $y++) {

					$product_name = $_POST['product_name'][$y];
					$qty = $_POST['qty'][$y];

					$exqry = "insert into inquiry_product_extra(product_name , qty , inquiry_id) values('$product_name', '$qty','$last_id')";
						$success = mysqli_query($conn, $exqry);

					///////// Product extra validation ///////
					/*if($product_name[$y] != '' AND $qty[$y] != ''){
						$exqry = "insert into inquiry_product_extra(product_name , qty , inquiry_id) values('$product_name[$y]', '$qty[$y]','$last_id')";
						$success = mysqli_query($conn, $exqry);
					}else{
						exit("EXTRA");
						}*/
					}
				
				}

				if($id != ''){
				$qry = "SELECT * FROM mst_inquiry WHERE id = '".$inquiry_auto_code."'";
				$result = mysqli_query($conn,$qry);
				$rec = mysqli_num_rows($result);

				if($rec == 0){
					
						$sql = "update mst_inquiry set date = '$date',customer_id = '$customer_id',customer_address = '$customer_address',customer_city = '$customer_city',customer_pincode = '$customer_pincode',customer_contact = '$customer_contact', customer_email = '$customer_email', customer_gst = '$customer_gst', source = '$source', followup = '$followup', customer_remarks = '$customer_remarks' where id = '".$inquiry_auto_code."'"; 
						
						$done = mysqli_query($conn, $sql);			
						if($done){
							echo "INQUIRY UPDATED";
						} else {				
							echo "ERROR";	 
						}
				}
			} 
				
		}
		if($page == "new_quotation"){
				$quotation_no = $_POST['quotation_no'];
				$quotation_date = $_POST['quotation_date'];
				// $quotation_attachement = $_POST['quotation_attachement'];
				$quotation_taxable_amount = $_POST['quotation_taxable_amount'];
				$quotation_discount_amount = $_POST['quotation_discount_amount'];
				$quotation_gst_amount = $_POST['quotation_gst_amount'];
				$quotation_net_amount = $_POST['quotation_net_amount'];
				$quotation_final_amount = $_POST['quotation_final_amount'];
				$id = $_POST['id'];
				$query = "SELECT * FROM new_quotation WHERE quotation_no = '".$quotation_no."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
 

			    if ($checkrows > 0) {
			    	echo "QUOTATION EXISTS";
			    }else if($id != ''){
				$sql = "update new_quotation set quotation_no = '$quotation_no', quotation_date = '$quotation_date,'quotation_taxable_amount = '$quotation_taxable_amount',quotation_discount_amount = '$quotation_discount_amount',quotation_gst_amount = '$quotation_gst_amount',quotation_net_amount = '$quotation_net_amount',quotation_final_amount = '$quotation_final_amount' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "QUOTATION UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into new_quotation(quotation_no,quotation_date,quotation_taxable_amount,quotation_discount_amount,quotation_gst_amount,quotation_net_amount,quotation_final_amount) values('$quotation_no','$quotation_date','$quotation_taxable_amount','$quotation_discount_amount','$quotation_gst_amount','$quotation_net_amount','$quotation_final_amount')";
				$done = mysqli_query($conn, $sql);	

				$last_id = mysqli_insert_id($conn);	
				//print_r($_POST["extra_field"]);

				for ($x = 0; $x <$_POST["total_item"]; $x++) {

					$quotation_sr_no = $_POST['quotation_sr_no'][$x];
					$quotation_product_name = $_POST['quotation_product_name'][$x];
					$quotation_material_code = $_POST['quotation_material_code'][$x];
					$quotation_hsn = $_POST['quotation_hsn'][$x];
					$quotation_pcs = $_POST['quotation_pcs'][$x];
	
						$exqry = "insert into mst_quotation_extra(quotation_sr_no , quotation_product_name, quotation_material_code, quotation_hsn, quotation_pcs, quo_id) values('$quotation_sr_no','$quotation_product_name','$quotation_material_code','$quotation_hsn','$quotation_pcs','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}
					// echo $_POST["total_item1"];
					for ($y = 0; $y < $_POST["total_item1"]; $y++) {

				//	echo "kitne baer";
				
					$quotation_tax_type = $_POST['quotation_tax_type'][$y];
					$quotation_additional_tax = $_POST['quotation_additional_tax'][$y];
					$quotation_percent = $_POST['quotation_percent'][$y];
					$quotation_amount = $_POST['quotation_amount'][$y];
	
						$exqry = "insert into mst_quo_extra(quotation_tax_type , quotation_additional_tax,quotation_percent,quotation_amount, q_id) values('$quotation_tax_type', '$quotation_additional_tax','$quotation_percent','$quotation_amount','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}
					for ($z = 0; $z < $_POST["total_item2"]; $z++) {

				//	echo "kitne baer";
				
					$quotation_tax_type1 = $_POST['quotation_tax_type1'][$z];
					$quotation_deduction_tax = $_POST['quotation_deduction_tax'][$z];
					$quotation_percent1 = $_POST['quotation_percent1'][$z];
					$quotation_amount1 = $_POST['quotation_amount1'][$z];
	
						$exqry = "insert into quo_extra(quotation_tax_type1 , quotation_deduction_tax,quotation_percent1,quotation_amount1, qu_id) values('$quotation_tax_type1', '$quotation_deduction_tax','$quotation_percent1','$quotation_amount1','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}		
				if($done){
					echo "QUOTATION CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "inquiry_followup"){
				$inquiry_code = $_POST['inquiry_code'];
				$followup_name = $_POST['followup_name'];
				$followup_action = $_POST['followup_action'];
				$followup_date = $_POST['foll_date'];
				$followup_time = $_POST['followup_time'];
				$followup_action_required = $_POST['followup_action_required'];
				$followup_date1 = $_POST['followup_date1'];
				$followup_time1 = $_POST['followup_time1'];
				$followup_remark = $_POST['followup_remark'];
				$followup_transfer_inquiry = $_POST['followup_transfer_inquiry'];
				$followup_status = $_POST['followup_status'];
				$id = $_POST['id'];
				$query = "SELECT * FROM inquiry_followup WHERE inquiry_code = '".$inquiry_code."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
 

			    if ($checkrows > 0) {
			    	echo "FOLLOWUP EXISTS";
			    }else if($id != ''){
				$sql = "update inquiry_followup set inquiry_code = '$inquiry_code', followup_name = '$followup_name',foll_action = '$foll_action',foll_date = '$foll_date',followup_time = '$followup_time',followup_action_required = '$followup_action_required',followup_date1 = '$followup_date1',followup_time1 = '$followup_time1',followup_remark = '$followup_remark',followup_transfer_inquiry = '$followup_transfer_inquiry', followup_status = '$followup_status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "FOLLOWUP UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into inquiry_followup(inquiry_code,followup_name,foll_action,foll_date,followup_time,followup_action_required,followup_date1,followup_time1,followup_remark,followup_transfer_inquiry,followup_status) values('$inquiry_code','$followup_name','$foll_action','$foll_date','$followup_time','$followup_action_required','$followup_date1','$followup_time1','$followup_remark','$followup_transfer_inquiry','$followup_status')";
				$done = mysqli_query($conn, $sql);	

				$last_id = mysqli_insert_id($conn);	
				//print_r($_POST["extra_field"]);

				for ($x = 0; $x <$_POST["total_item"]; $x++) {

					$followup_product_name = $_POST['followup_product_name'][$x];
					$followup_qty = $_POST['followup_qty'][$x];
	
						$exqry = "insert into mst_followup_extra(followup_product_name , followup_qty, foll_id) values('$followup_product_name', '$followup_qty','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}
					echo $_POST["total_item1"];
					for ($y = 0; $y < $_POST["total_item1"]; $y++) {

				//	echo "kitne baer";
				
					$followup_date = $_POST['followup_date'][$y];
					$followup_action = $_POST['followup_action'][$y];
					$followup_remarks = $_POST['followup_remarks'][$y];
					$followup_user = $_POST['followup_user'][$y];
	
						$exqry = "insert into mst_foll_extra(followup_date , followup_action,followup_remarks,followup_user, f_id) values('$followup_date', '$followup_action','$followup_remarks','$followup_user','$last_id')";
						$success = mysqli_query($conn, $exqry);

					}		
				if($done){
					echo "FOLLOWUP CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
			if($page == "sub_group"){
				$sub_grp_name = $_POST['sub_grp_name'];
				$sub_grp_code = $_POST['sub_grp_code'];
				$prefix = $_POST['prefix'];
				$cat_id = $_POST['cat_id'];
				$grp_id = $_POST['grp_id'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$trimmed_sg_name = trim($sub_grp_name);

				$query = "SELECT * FROM mst_sub_group WHERE sub_grp_code = '".$sub_grp_code."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);

			    $querynm = "SELECT * FROM mst_sub_group WHERE sub_grp_name = '".$sub_grp_name."'";  
				$checknm=mysqli_query($conn,$querynm);
			    $checkrowsnm=mysqli_num_rows($checknm);

			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "SUB-GROUP EXISTS";
			    }else{
				$sql = "insert into mst_sub_group(sub_grp_name, sub_grp_code, prefix, cat_id, grp_id, status) values('$sub_grp_name','$sub_grp_code','$prefix','$cat_id','$grp_id','$status')";
				$done = mysqli_query($conn, $sql);
				$last_id = mysqli_insert_id($conn);			
				if($done){
					echo "SUB-GROUP CREATED";
					} else {				
					echo "ERROR";	 
					}
				}

				$add_vlog_sub_group = "insert into validation_log(module_name, mod_id, ref_mod, ref_id) values('validate_group_mst','$grp_id','validate_sub_group_mst','$last_id')";
				$done = mysqli_query($conn, $add_vlog_sub_group);

				if($id != ''){
					$qry = "SELECT * FROM mst_sub_group WHERE sub_grp_code = '".$sub_grp_code."' AND id != '".$id."'";
					$result = mysqli_query($conn,$qry);
					$rec = mysqli_num_rows($result);

					if($rec == 0){
						$query = "SELECT * FROM mst_sub_group WHERE sub_grp_name = '".$sub_grp_name."' AND id != '".$id."'";
						$result1 = mysqli_query($conn,$query);
						$rec1 = mysqli_num_rows($result1);
						if($rec1 == 0){
							$sql = "update mst_sub_group set sub_grp_name = '$sub_grp_name',sub_grp_code = '$sub_grp_code',prefix = '$prefix',cat_id = '$cat_id',grp_id = '$grp_id',status = '$status' where id = '".$id."'";
							$done = mysqli_query($conn, $sql);			
							if($done){
								echo "SUB-GROUP UPDATED";
							} else {				
								echo "ERROR";	 
							}
				}
			}
		}
	}
	if($page == "broughtout_data"){
					
					for($y=0; $y < $_POST['count']; $y++){
					$pro_name = $_POST['pro_name'][$y];
					$mat_code = $_POST['mat_code'][$y];
					$unit_rate = $_POST['unit_rate'][$y];
					$quantity = $_POST['quantity'][$y];
					$total = $_POST['total'][$y];

					if($pro_name !=''){
						$sqlqry = "insert into mst_broughtout(pro_name , mat_code, unit_rate, quantity, total) values('$pro_name', '$mat_code', '$unit_rate','$quantity','$total')";
						$res = mysqli_query($conn, $sqlqry);
						
						}
					}
					echo "BROUGHTOUT ADDED";

			}
	if($page == "uom"){
				$uom_name = $_POST['uom_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$query = "SELECT * FROM uom WHERE uom_name = '".$uom_name."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    if ($checkrows > 0) {
			    	echo "UOM EXISTS";
			    }else if($id != ''){
				$sql = "update uom set uom_name = '$uom_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UOM UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into uom(uom_name, status) values('$uom_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UOM CREATED";
					} else {				
					echo "ERROR";	 
					}
				
         }
				
		}
		if($page == "service"){
				$service_code = $_POST['service_code'];
				$service_name = $_POST['service_name'];
				$u_name = $_POST['u_name'];
				$parameter = $_POST['parameter'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$query = "SELECT * FROM service WHERE service_code = '".$service_code."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                
                $querynm = "SELECT * FROM service WHERE service_name = '".$service_name."' AND id != '".$id."' ";  
				$checknm=mysqli_query($conn,$querynm);
			    $checkrowsnm=mysqli_num_rows($checknm);   

			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "SERVICE EXISTS";
			    }else if($id != ''){
				$sql = "update service set service_code = '$service_code', service_name = '$service_name', u_name = '$u_name', parameter = '$parameter', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SERVICE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into service(service_code,service_name,u_name,parameter, status) values('$service_code','$service_name','$u_name','$parameter','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SERVICE CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "activity"){
				$activity_code = $_POST['activity_code'];
				$activity_name = $_POST['activity_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$query = "SELECT * FROM activity WHERE activity_code = '".$activity_code."' AND id != '".$id."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);

			    $querynm = "SELECT * FROM activity WHERE activity_name = '".$activity_name."' AND id != '".$id."'";  
				$checknm=mysqli_query($conn,$querynm);
			    $checkrowsnm=mysqli_num_rows($checknm);

			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "ACTIVITY EXISTS";
			    }else if($id != ''){
				$sql = "update activity set activity_code = '$activity_code', activity_name = '$activity_name', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ACTIVITY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into activity(activity_code,activity_name, status) values('$activity_code','$activity_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ACTIVITY CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "weld"){
				$weld_code = $_POST['weld_code'];
				$weld_name = $_POST['weld_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];

				$query = "SELECT * FROM weld_consumable WHERE weld_code = '".$weld_code."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                
                $querynm = "SELECT * FROM weld_consumable WHERE weld_name = '".$weld_name."' AND id != '".$id."' ";  
				$checknm=mysqli_query($conn,$querynm);
			    $checkrowsnm=mysqli_num_rows($checknm);   

			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "WELD EXISTS";
			    }else if($id != ''){
				$sql = "update weld_consumable set weld_code = '$weld_code', weld_name = '$weld_name', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WELD UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into weld_consumable(weld_code,weld_name,status) values('$weld_code','$weld_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WELD CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "estimate"){
				$tab_name = $_POST['tab_name'];
				$short_name = $_POST['short_name'];
				$status = $_POST['status'];
				$sequence = $_POST['sequence'];
				
				
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update estimate_tab set tab_name = '$tab_name', sequence = '$sequence', short_name = '$short_name', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ESTIMATE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into estimate_tab(tab_name,sequence, short_name, status) values('$tab_name','$sequence','$short_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ESTIMATE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		
		if($page == "product"){
				$pro_code = $_POST['pro_code'];
				$pro_name = $_POST['pro_name'];
				$mat_code = $_POST['mat_code'];
				$tech_spec = $_POST['tech_spec'];
				$cat_id = $_POST['cat_id'];
				$grp_id = $_POST['grp_id'];
				$sub_grp_id = $_POST['sub_grp_id'];
				$hsn = $_POST['hsn'];
				$gst_rate = $_POST['gst_rate'];
				$purchase_uom = $_POST['purchase_uom'];
				$inventory_uom = $_POST['inventory_uom'];
				$conv_factor = $_POST['conv_factor'];
				$indent = $_POST['indent'];
				$po_req = $_POST['po_req'];
				$qc_req = $_POST['qc_req'];
				$status = $_POST['status'];
				$min_stock_qty = $_POST['min_stock_qty'];
				$max_stock_qty = $_POST['max_stock_qty'];
				$min_order_qty = $_POST['min_order_qty'];
				$max_order_qty = $_POST['max_order_qty'];
				$min_ind_qty = $_POST['min_ind_qty'];
				$max_ind_qty = $_POST['max_ind_qty'];
				$warehouse = $_POST['warehouse'];
				$rack_no = $_POST['rack_no'];
				$id = $_POST['id'];

				$last_id = mysqli_insert_id($conn);
			    if ($purchase_uom !== $inventory_uom) {
			    	if ($conv_factor == 0 || $conv_factor == '') {
			    		echo "invalid factor";
			    	}else{
			    		$query = "SELECT * FROM mst_product WHERE mat_code = '".$mat_code."'";  
			    		$check=mysqli_query($conn,$query);
			    		$checkrows=mysqli_num_rows($check);

			    		if ($checkrows > 0) {
			    			echo "MATERIAL EXISTS";
			    		}else{


			    			$sql = "insert into mst_product(pro_code, pro_name, mat_code, tech_spec, cat_id, grp_id, sub_grp_id, hsn, gst_rate, purchase_uom, inventory_uom, conv_factor, indent, po_req, qc_req,status,min_stock_qty,max_stock_qty,min_order_qty,max_order_qty,min_ind_qty,max_ind_qty,warehouse,rack_no) values('$pro_code','$pro_name','$mat_code','$tech_spec','$cat_id','$grp_id','$sub_grp_id','$hsn','$gst_rate','$purchase_uom','$inventory_uom','$conv_factor','$indent','$po_req','$qc_req','$status','$min_stock_qty','$max_stock_qty','$min_order_qty','$max_order_qty','$min_ind_qty','$max_ind_qty','$warehouse','$rack_no')";
			    			$done = mysqli_query($conn, $sql);
			    			$last_id = mysqli_insert_id($conn);			
			    			if($done){
			    				echo "PRODUCT ADDED";
			    			} else {				
			    				echo "ERROR";	 
			    			}

			    			$last_id = mysqli_insert_id($conn);
			    			for($count=1; $count <=$_POST["grp_fld_count"]; $count++){

			    				$product_extra_field = $_POST['product_extra_field'.$count.''];
			    				$product_extra_label = $_POST['product_extra_label'.$count.''];
			    				if($product_extra_field !=''){
			    					$exqry = "insert into mst_product_extra(product_extra_field , product_extra_label, pro_id) values('$product_extra_field','$product_extra_label','$last_id')";
			    					$success = mysqli_query($conn, $exqry);
			    				}
			    			}
			    			echo "extra product diff UOM";
			    			
			    		}


			    	}
			    
			    }else{
			    $query = "SELECT * FROM mst_product WHERE mat_code = '".$mat_code."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    
			    if ($checkrows > 0) {
			    	echo "MATERIAL EXISTS";
			    }else{

				$sql = "insert into mst_product(pro_code, pro_name, mat_code, tech_spec, cat_id, grp_id, sub_grp_id, hsn, gst_rate, purchase_uom, inventory_uom, conv_factor, indent, po_req, qc_req,status) values('$pro_code','$pro_name','$mat_code','$tech_spec','$cat_id','$grp_id','$sub_grp_id','$hsn','$gst_rate','$purchase_uom','$inventory_uom','$conv_factor','$indent','$po_req','$qc_req','$status')";
				$done = mysqli_query($conn, $sql);
				$last_id = mysqli_insert_id($conn);			
				if($done){
					echo "PRODUCT ADDED";
					} else {				
					echo "ERROR";	 
					}

					$last_id = mysqli_insert_id($conn);
					echo $_POST['grp_fld_count'];
					for($count=1; $count<=$_POST["grp_fld_count"]; $count++){

						$product_extra_field = $_POST['product_extra_field'.$count.''];
						 $product_extra_label = $_POST['product_extra_label'.$count.''];
						 if($product_extra_field !=''){
						 	$exqry = "insert into mst_product_extra(product_extra_field , product_extra_label, pro_id) values('$product_extra_field','$product_extra_label','$last_id')";
						 	$success = mysqli_query($conn, $exqry);
						 }
					}
					echo "extra product added same UOM";
				}
			}

				$add_vlog_sub_group = "insert into validation_log(module_name, mod_id, ref_mod, ref_id) values('validate_sub_group_mst','$sub_grp_id','validate_product_mst','$last_id')";
				$done = mysqli_query($conn, $add_vlog_sub_group);


				if($id != ''){
				$sql = "update mst_product set pro_code = '$pro_code', pro_name = '$pro_name', mat_code = '$mat_code', tech_spec = '$tech_spec', cat_id = '$cat_id',grp_id = '$grp_id',sub_grp_id = '$sub_grp_id', hsn = '$hsn', gst_rate = '$gst_rate', purchase_uom = '$purchase_uom', inventory_uom = '$inventory_uom', conv_factor = '$conv_factor', indent = '$indent', po_req = '$po_req', qc_req = '$qc_req', status = '$status', min_stock_qty = '$min_stock_qty', max_stock_qty = '$max_stock_qty', min_order_qty = '$min_order_qty', max_order_qty = '$max_order_qty', min_ind_qty = '$min_ind_qty', max_ind_qty = '$max_ind_qty', warehouse = '$warehouse', rack_no = '$rack_no' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PRODUCT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}
	}

		if($page == "edit_product"){
				$pro_code = $_POST['pro_code'];
				$pro_name = $_POST['pro_name'];
				$mat_code = $_POST['mat_code'];
				$tech_spec = $_POST['tech_spec'];
				$cat_id = $_POST['cat_id'];
				$grp_id = $_POST['grp_id'];
				$sub_grp_id = $_POST['sub_grp_id'];
				$hsn = $_POST['hsn'];
				$gst_rate = $_POST['gst_rate'];
				$purchase_uom = $_POST['purchase_uom'];
				$inventory_uom = $_POST['inventory_uom'];
				$conv_factor = $_POST['conv_factor'];
				$indent = $_POST['indent'];
				$po_req = $_POST['po_req'];
				$qc_req = $_POST['qc_req'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$pro_id = $_POST['pro_id'];



				$last_id = mysqli_insert_id($conn);

				 if ($purchase_uom !== $inventory_uom) {
			    	if ($conv_factor == 0 || $conv_factor == '') {
			    		echo "invalid factor";
			    	}else{
			    			$sql = "update mst_product set pro_code = '$pro_code', pro_name = '$pro_name', mat_code = '$mat_code', tech_spec = '$tech_spec', cat_id = '$cat_id',grp_id = '$grp_id',sub_grp_id = '$sub_grp_id', hsn = '$hsn', gst_rate = '$gst_rate', purchase_uom = '$purchase_uom', inventory_uom = '$inventory_uom', conv_factor = '$conv_factor', indent = '$indent', po_req = '$po_req', qc_req = '$qc_req', status = '$status' where id = '".$id."'";
			    			$done = mysqli_query($conn, $sql);
			    			$last_id = mysqli_insert_id($conn);			
			    			if($done){
			    				echo "PRODUCT UPDATED";
			    			} else {				
			    				echo "ERROR";	 
			    			}
			    			$delextra = "DELETE FROM mst_product_extra WHERE pro_id = '".$id."'";
							$delsuccess = mysqli_query($conn,$delextra);
							

			    			for($count=1; $count<=$_POST["grp_fld_count"]; $count++){

			    				$product_extra_field = $_POST['product_extra_field'.$count.''];
			    				$product_extra_label = $_POST['product_extra_label'.$count.''];
			    				if($product_extra_field !=''){
			    					$exqry = "insert into mst_product_extra(product_extra_field , product_extra_label, pro_id) values('$product_extra_field','$product_extra_label','$pro_id')";
			    					
			    					$success = mysqli_query($conn, $exqry);
			    				}
			    			}
			    		}

			    	}
			    
			    else{
			    
				$sql = "update mst_product set pro_code = '$pro_code', pro_name = '$pro_name', mat_code = '$mat_code', tech_spec = '$tech_spec', cat_id = '$cat_id',grp_id = '$grp_id',sub_grp_id = '$sub_grp_id', hsn = '$hsn', gst_rate = '$gst_rate', purchase_uom = '$purchase_uom', inventory_uom = '$inventory_uom', conv_factor = '$conv_factor', indent = '$indent', po_req = '$po_req', qc_req = '$qc_req', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);
				$last_id = mysqli_insert_id($conn);			
				if($done){
					echo "PRODUCT UPDATED";
					} else {				
					echo "ERROR";	 
					}

					$delextra = "DELETE FROM mst_product_extra WHERE pro_id = '".$id."'";
					$delsuccess = mysqli_query($conn, $delextra);
					
					for($count=1; $count<=$_POST["grp_fld_count"]; $count++){
						
						$product_extra_field = $_POST['product_extra_field'.$count.''];
						$product_extra_label = $_POST['product_extra_label'.$count.''];
						if($product_extra_field !=''){
							$exqry = "insert into mst_product_extra(product_extra_field , product_extra_label, pro_id) values('$product_extra_field','$product_extra_label','$pro_id')";
							$success = mysqli_query($conn, $exqry);
						}
					}

				}
			}
			if($page == "contract"){
				$contract_desc = $_POST['contract_desc'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				
                $query = "SELECT * FROM contract WHERE contract_desc = '".$contract_desc."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    if ($checkrows > 0) {
			    	echo "CONTRACT EXISTS";
			    }else if($id != ''){

				$sql = "update contract set contract_desc = '$contract_desc',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CONTRACT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into contract(contract_desc, status) values('$contract_desc','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CONTRACT CREATED";
					}else{				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "contractpage"){

				$id = $_POST['id'];
				
                for($y=0; $y < $_POST['count']; $y++){
						
					$select_contract = $_POST['select_contract'][$y];
					$contract_uom = $_POST['contract_uom'][$y];
					$contract_unit_rate = $_POST['contract_unit_rate'][$y];
					$contract_quantity = $_POST['contract_quantity'][$y];
					$contract_total_cost = $_POST['contract_total_cost'][$y];

					if($select_contract !=''){
						$sqlqry = "insert into contractpage(select_contract , contract_uom, contract_unit_rate, contract_quantity, contract_total_cost) values('$select_contract', '$contract_uom', '$contract_unit_rate','$contract_quantity','$contract_total_cost')";
						$res = mysqli_query($conn, $sqlqry);
						
						}
					}
		}
		if($page == "tpi"){
				$enrollment_no = $_POST['enrollment_no'];
				$total_marks = $_POST['total_marks'];
				$status = $_POST['status'];
				$given_marks = $_POST['given_marks'];
				$id = $_POST['id'];
				$query = "SELECT * FROM tpi WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update tpi set enrollment_no = '$enrollment_no', total_marks = '$total_marks', status = '$status', given_marks = '$given_marks' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into tpi(enrollment_no,total_marks, status,given_marks) values('$enrollment_no','$total_marks','$status','$given_marks')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "tpi1"){
				$enrollment_no = $_POST['enrollment_no'];
				$total_marks = $_POST['total_marks'];
				$status = $_POST['status'];
				$given_marks = $_POST['given_marks'];
				$id = $_POST['id'];
				$query = "SELECT * FROM tpi1 WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                
              
			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update tpi1 set enrollment_no = '$enrollment_no', total_marks = '$total_marks', status = '$status', given_marks = '$given_marks' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into tpi1(enrollment_no,total_marks, status,given_marks) values('$enrollment_no','$total_marks','$status','$given_marks')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "tpi2"){
				$enrollment_no = $_POST['enrollment_no'];
				$total_marks = $_POST['total_marks'];
				$status = $_POST['status'];
				$given_marks = $_POST['given_marks'];
				$id = $_POST['id'];
				$query = "SELECT * FROM tpi2 WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                
               
			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update tpi2 set enrollment_no = '$enrollment_no', total_marks = '$total_marks', status = '$status', given_marks = '$given_marks' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into tpi2(enrollment_no,total_marks, status,given_marks) values('$enrollment_no','$total_marks','$status','$given_marks')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "im1"){
				$enrollment_no = $_POST['enrollment_no'];
				$total_mco1 = $_POST['total_mco1'];
				$given_mco1 = $_POST['given_mco1'];
				$total_mco2 = $_POST['total_mco2'];
				$given_mco2 = $_POST['given_mco2'];
				$total_mco3 = $_POST['total_mco3'];
				$given_mco3 = $_POST['given_mco3'];
				$total_mco4 = $_POST['total_mco4'];
				$given_mco4 = $_POST['given_mco4'];
				$total_mco5 = $_POST['total_mco5'];
				$given_mco5 = $_POST['given_mco5'];
				$total_mco6 = $_POST['total_mco6'];
				$given_mco6 = $_POST['given_mco6'];
				$sub_total_marks = $_POST['sub_total_marks'];
				$id = $_POST['id'];
				$query = "SELECT * FROM im1 WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update im1 set enrollment_no = '$enrollment_no', total_mco1 = '$total_mco1', given_mco1 = '$given_mco1',total_mco2 = '$total_mco2', given_mco2 = '$given_mco2',total_mco3 = '$total_mco3', given_mco3 = '$given_mco3',total_mco4 = '$total_mco4', given_mco4 = '$given_mco4',total_mco5 = '$total_mco5', given_mco5 = '$given_mco5',total_mco6 = '$total_mco6', given_mco6 = '$given_mco6', sub_total_marks = '$sub_total_marks' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into im1(enrollment_no, total_mco1,given_mco1 , total_mco2,given_mco2, total_mco3,given_mco3 ,total_mco4,given_mco4,total_mco5,given_mco5,total_mco6,given_mco6,sub_total_marks) values('$enrollment_no','$total_mco1','$given_mco1','$total_mco2','$given_mco2', '$total_mco3','$given_mco3','$total_mco4','$given_mco4','$total_mco5','$given_mco5','$total_mco6','$given_mco6','$sub_total_marks')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "criteria_5_2_1_appeared"){
				$academic_year = $_POST['academic_year'];
				$name_of_the_capability_enhancement_scheme = $_POST['name_of_the_capability_enhancement_scheme'];
				$name_of_department = $_POST['name_of_department'];
				$date_of_implementation = $_POST['date_of_implementation'];
				$name_of_college = $_POST['name_of_college'];
				$number_of_students_enrolled = $_POST['number_of_students_enrolled'];
				$name_of_agencies_involved_with_their_contact_details = $_POST['name_of_agencies_involved_with_their_contact_details'];
				$proof_no = $_POST['proof_no'];
				$remark = $_POST['remark'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_5_2_1_appeared WHERE id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			  $checkrows=mysqli_num_rows($check);                   

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_5_2_1_appeared set academic_year = '$academic_year', name_of_the_capability_enhancement_scheme = '$name_of_the_capability_enhancement_scheme', name_of_department = '$name_of_department',date_of_implementation = '$date_of_implementation', name_of_college = '$name_of_college',number_of_students_enrolled= '$number_of_students_enrolled', name_of_agencies_involved_with_their_contact_details = '$name_of_agencies_involved_with_their_contact_details',proof_no = '$proof_no', remark = '$remark' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_5_2_1_appeared(academic_year, name_of_the_capability_enhancement_scheme,name_of_department , date_of_implementation,name_of_college, number_of_students_enrolled,name_of_agencies_involved_with_their_contact_details ,proof_no,remark) values('$academic_year','$name_of_the_capability_enhancement_scheme','$name_of_department','$date_of_implementation','$number_of_students_enrolled', '$name_of_agencies_involved_with_their_contact_details','$proof_no','$remark')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "criteria_5_2_2_1"){
				$academic_year = $_POST['academic_year'];
                $enrollment_no = $_POST['enrollment_no'];
				$name_of_student = $_POST['name_of_student'];
				$name_of_department = $_POST['name_of_department'];
				$name_of_college = $_POST['name_of_college'];
				$name_of_the_employer_with_contact_details = $_POST['name_of_the_employer_with_contact_details'];
				$programme_graduated_from = $_POST['programme_graduated_from'];
              //  $pay_package_at_appointment = $_POST['pay_package_at_appointment']; //
				$proof_no = $_POST['proof_no'];
				$remark = $_POST['remark'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_5_2_2_1 WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			   // $checkrows=mysqli_num_rows($check); 
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_5_2_2_1 set academic_year = '$academic_year',enrollment_no = '$enrollment_no', name_of_student = '$name_of_student', name_of_department = '$name_of_department', name_of_college = '$name_of_college',name_of_the_employer_with_contact_details= '$name_of_the_employer_with_contact_details', programme_graduated_from = '$programme_graduated_from',pay_package_at_appointment = '$pay_package_at_appointment',proof_no = '$proof_no', remark = '$remark' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_5_2_2_1(academic_year,enrollment_no ,name_of_student,name_of_department ,name_of_college, name_of_the_employer_with_contact_details,programme_graduated_from,pay_package_at_appointment ,proof_no,remark) values('$academic_year','$enrollment_no','$name_of_student','$name_of_department','$name_of_college','$name_of_the_employer_with_contact_details', '$programme_graduated_from','$pay_package_at_appointment','$proof_no','$remark')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "criteria_5_2_2"){
				$academic_year = $_POST['academic_year'];
                $enrollment_no = $_POST['enrollment_no'];
				$name_of_student = $_POST['name_of_student'];
				$name_of_department = $_POST['name_of_department'];
				$name_of_college = $_POST['name_of_college'];
				$name_of_the_employer_with_contact_details = $_POST['name_of_the_employer_with_contact_details'];
				$programme_graduated_from = $_POST['programme_graduated_from'];
                $pay_package_at_appointment = $_POST['pay_package_at_appointment'];
				$proof_no = $_POST['proof_no'];
				$remark = $_POST['remark'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_5_2_2 WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_5_2_2 set academic_year = '$academic_year',enrollment_no = '$enrollment_no', name_of_student = '$name_of_student', name_of_department = '$name_of_department', name_of_college = '$name_of_college',name_of_the_employer_with_contact_details= '$name_of_the_employer_with_contact_details', programme_graduated_from = '$programme_graduated_from',pay_package_at_appointment = '$pay_package_at_appointment',proof_no = '$proof_no', remark = '$remark' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_5_2_2(academic_year,enrollment_no ,name_of_student,name_of_department ,name_of_college, name_of_the_employer_with_contact_details,programme_graduated_from,pay_package_at_appointment ,proof_no,remark) values('$academic_year','$enrollment_no','$name_of_student','$name_of_department','$name_of_college','$name_of_the_employer_with_contact_details', '$programme_graduated_from','$pay_package_at_appointment','$proof_no','$remark')";
				echo $sql;
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "criteria_5_3_1"){
				$academic_year = $_POST['academic_year'];
                $enrollment_no = $_POST['enrollment_no'];
				$name_of_student = $_POST['name_of_student'];
				$name_of_department = $_POST['name_of_department'];
				$name_of_college = $_POST['name_of_college'];
				$name_of_the_award = $_POST['name_of_the_award'];
				$select_appropriate_event = $_POST['select_appropriate_event'];
                $classification_of_event = $_POST['classification_of_event'];
				$proof_no = $_POST['proof_no'];
				$remark = $_POST['remark'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_5_3_1 WHERE academic_year = '".$academic_year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_5_3_1 set academic_year = '$academic_year',enrollment_no = '$enrollment_no', name_of_student = '$name_of_student', name_of_department = '$name_of_department', name_of_college = '$name_of_college',name_of_the_award= '$name_of_the_award', select_appropriate_event = '$select_appropriate_event',classification_of_event = '$classification_of_event',proof_no = '$proof_no', remark = '$remark' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_5_3_1(academic_year,enrollment_no ,name_of_student,name_of_department ,name_of_college, name_of_the_award,select_appropriate_event,classification_of_event ,proof_no,remark) values('$academic_year','$enrollment_no','$name_of_student','$name_of_department','$name_of_college','$name_of_the_award', '$select_appropriate_event','$classification_of_event','$proof_no','$remark')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "weekly"){
				$enrollment_no = $_POST['enrollment_no'];
				$total_mco1 = $_POST['total_mco1'];
				$given_mco1 = $_POST['given_mco1'];
				$total_mco2 = $_POST['total_mco2'];
				$given_mco2 = $_POST['given_mco2'];
				$total_mco3 = $_POST['total_mco3'];
				$given_mco3 = $_POST['given_mco3'];
				$total_mco4 = $_POST['total_mco4'];
				$given_mco4 = $_POST['given_mco4'];
				$total_mco5 = $_POST['total_mco5'];
				$given_mco5 = $_POST['given_mco5'];
			
				$sub_total_marks = $_POST['sub_total_marks'];
				$id = $_POST['id'];
				$query = "SELECT * FROM weekly WHERE enrollment_no = '".$enrollment_no."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update weekly set enrollment_no = '$enrollment_no', total_mco1 = '$total_mco1', given_mco1 = '$given_mco1',total_mco2 = '$total_mco2', given_mco2 = '$given_mco2',total_mco3 = '$total_mco3', given_mco3 = '$given_mco3',total_mco4 = '$total_mco4', given_mco4 = '$given_mco4',total_mco5 = '$total_mco5', given_mco5 = '$given_mco5', sub_total_marks = '$sub_total_marks' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into weekly(enrollment_no, total_mco1,given_mco1 , total_mco2,given_mco2, total_mco3,given_mco3 ,total_mco4,given_mco4,total_mco5,given_mco5,total_mco6,given_mco6,sub_total_marks) values('$enrollment_no','$total_mco1','$given_mco1','$total_mco2','$given_mco2', '$total_mco3','$given_mco3','$total_mco4','$given_mco4','$total_mco5','$given_mco5','$sub_total_marks')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

         if($page == "criteria_3_5_2"){
				$name_of_the_consultancy = $_POST['name_of_the_consultancy'];
                $name_of_advisory = $_POST['name_of_advisory'];
				$consulting = $_POST['consulting'];
				$year = $_POST['year'];
				$month = $_POST['month'];
				$revenue_generated = $_POST['revenue_generated'];
				$department = $_POST['department'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_3_5_2 WHERE year = '".$year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_3_5_2 set name_of_the_consultancy = '$name_of_the_consultancy',name_of_advisory = '$name_of_advisory', consulting = '$consulting', year = '$year', month = '$month', revenue_generated = '$revenue_generated',department = '$department' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_3_5_2(name_of_the_consultancy,name_of_advisory ,consulting,year ,month, revenue_generated,department) values('$name_of_the_consultancy','$name_of_advisory','$consulting','$year','$month','$revenue_generated', '$department')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "criteria_3_5_2_1"){
				$name_of_the_consultancy = $_POST['name_of_the_consultancy'];
                $name_of_advisory = $_POST['name_of_advisory'];
				$consulting = $_POST['consulting'];
				$year = $_POST['year'];
				$month = $_POST['month'];
				$revenue_generated = $_POST['revenue_generated'];
				$department = $_POST['department'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_3_5_2_1 WHERE year = '".$year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_3_5_2_1 set name_of_the_consultancy = '$name_of_the_consultancy',name_of_advisory = '$name_of_advisory', consulting = '$consulting', year = '$year', month = '$month',revenue_generated= '$revenue_generated', department = '$department' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_3_5_2_1(name_of_the_consultancy,name_of_advisory ,consulting,year ,month, revenue_generated,department,classification_of_event ,proof_no,remark) values('$name_of_the_consultancy','$name_of_advisory','$consulting','$year','$month','$revenue_generated', '$department')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "criteria_3_6_1"){
				$year = $_POST['year'];
				$month = $_POST['month'];
				$name_of_the_activity = $_POST['name_of_the_activity'];
                $organising_unit = $_POST['organising_unit'];
				$number_of_students_participated_in_such_activities = $_POST['number_of_students_participated_in_such_activities'];
				$department = $_POST['department'];
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_3_6_1 WHERE year = '".$year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_3_6_1 set year = '$year', month = '$month', name_of_the_activity = '$name_of_the_activity',organising_unit = '$organising_unit', number_of_students_participated_in_such_activities = '$number_of_students_participated_in_such_activities', number_of_teachers_participated_in_such_activities= '$number_of_teachers_participated_in_such_activities', department = '$department' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_3_6_1(year,month,name_of_the_activity,organising_unit ,number_of_students_participated_in_such_activities, number_of_teachers_participated_in_such_activities,department) values('$year','$month','$name_of_the_activity','$organising_unit','$number_of_students_participated_in_such_activities','$number_of_teachers_participated_in_such_activities', '$department')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "criteria_4_3_5_pulms"){
				$academic_year = $_POST['academic_year'];
				$name_of_teacher = $_POST['name_of_teacher'];
				$status = $_POST['status'];
				$name_of_the_module = $_POST['name_of_the_module'];
                $platform_on_which_module_is_developed =$_POST['platform_on_which_module_is_developed']
                $date_of_launching_the_module =$_POST['date_of_launching_the_module']
                $link_to_the_relevant_document =$_POST['link_to_the_relevant_document']
                $name_of_the_department =$_POST['name_of_the_department']
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_4_3_5_pulms WHERE academic_year = '".$academic_year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_4_3_5_pulms set academic_year = '$academic_year', name_of_teacher = '$name_of_teacher', status = '$status', name_of_the_module = '$name_of_the_module',platform_on_which_module_is_developed ='$platform_on_which_module_is_developed ', date_of_launching_the_module='$ date_of_launching_the_module', link_to_the_relevant_document='$link_to_the_relevant_document ',name_of_the_department ='$name_of_the_department ', where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_4_3_5_pulms(academic_year,name_of_teacher, status,name_of_the_module,platform_on_which_module_is_developed ,date_of_launching_the_module ,link_to_the_relevant_document ,name_of_the_department) values('$academic_year','$name_of_teacher','$status','$name_of_the_module','$platform_on_which_module_is_developed ','$date_of_launching_the_module ','$link_to_the_relevant_document ','$name_of_the_department ')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}

		if($page == "criteria_4_3_5_econtent"){
				$academic_year = $_POST['academic_year'];
				$name_of_teacher = $_POST['name_of_teacher'];
				$status = $_POST['status'];
				$name_of_the_module = $_POST['name_of_the_module'];
                $platform_on_which_module_is_developed =$_POST['platform_on_which_module_is_developed']
                $date_of_launching_the_module =$_POST['date_of_launching_the_module']
                $link_to_the_relevant_document =$_POST['link_to_the_relevant_document']
                $name_of_the_department =$_POST['name_of_the_department']
				$id = $_POST['id'];
				$query = "SELECT * FROM criteria_4_3_5_econtent WHERE academic_year = '".$academic_year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			   // $checkrows=mysqli_num_rows($check);
                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_4_3_5_econtent set academic_year = '$academic_year', name_of_teacher = '$name_of_teacher', status = '$status', name_of_the_module = '$name_of_the_module',platform_on_which_module_is_developed ='$platform_on_which_module_is_developed ', date_of_launching_the_module='$ date_of_launching_the_module', link_to_the_relevant_document='$link_to_the_relevant_document ',name_of_the_department ='$name_of_the_department ', where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_4_3_5_econtent(academic_year,name_of_teacher, status,name_of_the_module,platform_on_which_module_is_developed ,date_of_launching_the_module ,link_to_the_relevant_document ,name_of_the_department) values('$academic_year','$name_of_teacher','$status','$name_of_the_module','$platform_on_which_module_is_developed ','$date_of_launching_the_module ','$link_to_the_relevant_document ','$name_of_the_department ')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}


        if($page == "criteria_4_5_1_1"){
				$academic_year = $_POST['academic_year'];
				$name_of_the_department = $_POST['name_of_the_department'];
				$status = $_POST['status'];
				$type_of_expenditure = $_POST['type_of_expenditure'];
				$total_amount_of_remuneration = $_POST['total_amount_of_remuneration'];
				$id = $_POST['id'];
				$query = "SELECT * FROM tpi WHERE academic_year = '".$academic_year."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			   // $checkrows=mysqli_num_rows($check); //

                  

			    if ($checkrows > 0) {
			    	echo "TPI EXISTS";
			    }else if($id != ''){
				$sql = "update criteria_4_5_1_1 set academic_year = '$academic_year', name_of_the_department = '$name_of_the_department', status = '$status', type_of_expenditure = '$type_of_expenditure', total_amount_of_remuneration = '$total_amount_of_remuneration' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into criteria_4_5_1_1(academic_year,name_of_the_department, status,type_of_expenditure,total_amount_of_remuneration) values('$academic_year','$name_of_the_department','$status','$type_of_expenditure','$total_amount_of_remuneration')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TPI CREATED";
					} else {				
					echo "ERROR";	 
					}
				} 
				
		}


		if($page == "category"){
				$cat_name = $_POST['cat_name'];
				$cat_code = $_POST['cat_code'];
				$prefix =  $_POST['prefix'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$trimmedcat_name = trim($cat_name);

				$query = "SELECT * FROM mst_category WHERE cat_code = '".$cat_code."'";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);

				$query1 = "SELECT * FROM mst_category WHERE cat_name = '".$cat_name."'";  
				$check1=mysqli_query($conn,$query1);
			    $checkrowsnm=mysqli_num_rows($check1);


			    if ($checkrows > 0 || $checkrowsnm > 0) {
			    	echo "CATEGORY EXISTS";
			    }else{
					
				$sql = "insert into mst_category(cat_name, cat_code, prefix, status) values('$trimmedcat_name','$cat_code','$prefix','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CATEGORY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}


				if($id != ''){
				$qry = "SELECT * FROM mst_category WHERE cat_code = '".$cat_code."' AND id != '".$id."'";
				$result = mysqli_query($conn,$qry);
				$rec = mysqli_num_rows($result);

				if($rec == 0){
					$query = "SELECT * FROM mst_category WHERE cat_name = '".$cat_name."' AND id != '".$id."'";
					$result1 = mysqli_query($conn,$query);
					$rec1 = mysqli_num_rows($result1);
					if($rec1 == 0){

						$sql = "update mst_category set cat_name = '$trimmedcat_name',cat_code = '$cat_code',prefix = '$prefix',status = '$status' where id = '".$id."'";
						$done = mysqli_query($conn, $sql);			
						if($done){
							echo "CATEGORY UPDATED";
						} else {				
							echo "ERROR";	 
						}	
					}
				}

				}
			 }
			

		
		
				
		
		if($page == "itr_form"){
				$itr_name = $_POST['itr_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update itr_form set itr_name = '$itr_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into itr_form(itr_name, status) values('$itr_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "itr_type"){
				$itr_type = $_POST['itr_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update itr_type set itr_type = '$itr_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into itr_type(itr_type, status) values('$itr_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "itr_status"){
				$itr_status = $_POST['itr_status'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update itr_status set itr_status = '$itr_status',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR STATUS UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into itr_status(itr_status, status) values('$itr_status','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "ITR STATUS CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "it_return_master_edit"){
				$assigned_to = $_POST['assigned_to'];
				$year_name = $_POST['year_name'];
				$itr_type = $_POST['itr_type'];
				$itr_form = $_POST['itr_form'];
				$id = $_POST['id'];
			    $sql = "update it_return_master set assigned_to = '$assigned_to',itr_type = '$itr_type',itr_form = '$itr_form' where id = '$id'";
				$done = mysqli_query($conn, $sql);
				if($done){
				echo "MASTER UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "it_return"){
				$client_name = $_POST['client_name'];
				$id = $_POST['id'];
				$year_name = $_POST['year_name'];
				$return_status = $_POST['return_status'];
				$sqlrs = "update it_return_master set return_status = '".$return_status."' where id = '$id'";
				$doners = mysqli_query($conn, $sqlrs);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				$image = $_POST['upload_material_file'][$count];
				$scheme_name = $_POST['scheme_name'][$count];
				$filling_date = $_POST['filling_date'][$count];
				$description = $_POST['description'][$count];
				if($image !=''){
				$sql = "insert into it_return_image(ret_id,image,scheme_name,filling_date,year_name,description) values('".$id."','$image','$scheme_name','$filling_date','$year_name','$description')";
				$done = mysqli_query($conn, $sql);
				
				$sqls = "update it_return_master_list set filled_status = '1' where rm_id = '$id' and service_name = '".$scheme_name."' and year_name = '".$year_name."'";
				$dones = mysqli_query($conn, $sqls);
				
					}
				}
				
				if($doners){
				echo "RETURN UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "it_return_master"){
				$company_name = $_POST['company_name'];
				$year_name = $_POST['year_name'];
				$return_date = $_POST['return_date'];
				$status = '0';
				for($count_c=0; $count_c<$_POST["total_item"]; $count_c++){
				$client_name = $_POST['client_name'][$count_c];
				$client_id = $_POST['client_id'][$count_c];
				$assigned_to = $_POST['assigned_to'][$count_c];
							if($client_name !=''){
							$sql = "insert into it_return_master(company_name,client_name,client_id,status,assigned_to) values('$company_name','$client_name','$client_id','$status','$assigned_to')";
							$done = mysqli_query($conn, $sql);
							}


							$query_rm_id = "SELECT id from it_return_master order by id DESC LIMIT 1";
							$rm_i = mysqli_query($conn, $query_rm_id);
							$rows_i = mysqli_fetch_assoc($rm_i);
							$rmlist_id = $rows_i['id'];

							$service_name = 'IT';
							$month_name = '';
							$return_date = $_POST['return_date'];
							$sql = "insert into it_return_master_list(rm_id,service_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name','$year_name','$month_name','$return_date','0','0')";
							$done = mysqli_query($conn, $sql);
					}
				if($done){
				echo "STATUS UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "department"){
				$department_name = $_POST['department_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update department set department_name = '$department_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DEPARTMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into department(department_name, status) values('$department_name','$status')";
				$done = mysqli_query($conn, $sql);	
				
				if($done){
					echo "DEPARTMENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "shape"){
				$shape_name = $_POST['shape_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				
                $query = "SELECT * FROM shape WHERE shape_name = '".$shape_name."' AND id != '".$id."' ";  
				$check=mysqli_query($conn,$query);
			    $checkrows=mysqli_num_rows($check);
			    if ($checkrows > 0) {
			    	echo "SHAPE EXISTS";
			    }else if($id != ''){

				$sql = "update shape set shape_name = '$shape_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);

				$exdel = "DELETE FROM `mst_shape_extra` where shape_id = '".$id."'";
				$exs = mysqli_query($conn, $exdel);

				for ($sx = 0; $sx < $_POST["total_item"]; $sx++) {
				
					$shape_extra_field = $_POST['shape_extra_field'][$sx];	

						$upqry = "INSERT INTO `mst_shape_extra`(`shape_extra_field`, `shape_id`) VALUES ('$shape_extra_field','$id')";
						echo $upqry;
						$success = mysqli_query($conn, $upqry);

					}			
				if($done){
					echo "SHAPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into shape(shape_name, status) values('$shape_name','$status')";
				$done = mysqli_query($conn, $sql);

				$last_id = mysqli_insert_id($conn);	
			
				for ($sx = 0; $sx < $_POST["total_item"]; $sx++) {
				
					$shape_extra_field = $_POST['shape_extra_field'][$sx];	

						$exqry = "insert into mst_shape_extra(shape_extra_field , shape_id) values('$shape_extra_field','$last_id')";
						echo $exqry;
						$success = mysqli_query($conn, $exqry);

					}			
				if($done){
					echo "SHAPE CREATED";
					}else{				
					echo "ERROR";	 
					}
				} 
				
		}
		if($page == "shape_extra_form"){

			    			for($count=0; $count <$_POST["grp_fld_count"]; $count++){

			    				$shape_extra_field = $_POST['shape_extra_field'][$count];
			    				$shape_extra_label = $_POST['shape_extra_label'][$count];
			    				if($shape_extra_field !=''){
			    					$exqry = "insert into temp_shape(shape_extra_field , shape_extra_label) values('$shape_extra_field','$shape_extra_label')";
			    					$success = mysqli_query($conn, $exqry);
			    				}
			    			}
			    			if($success){
			    					echo "SHAPE EXTRA CREATED";
			    				} else {				
			    					echo "ERROR";	 
			    				}

		}
		if($page == "reminder"){
				$reminder_name = $_POST['reminder_name'];
				$reminder_date = $_POST['reminder_date'];
				$emp_id = $_POST['emp_id'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update reminder set reminder_name = '$reminder_name',reminder_date = '$reminder_date',emp_id = '$emp_id', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "REMINDER UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into reminder(reminder_name,reminder_date,emp_id, status) values('$reminder_name','$reminder_date','$emp_id','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "REMINDER CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "weekend"){
				$month = $_POST['month'];
				$year = date('Y');
				$sunday = implode("," , $_POST['sunday']);
				$saturday = implode("," , $_POST['saturday']);
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update weekend set month = '$month',year = '$year',sunday = '$sunday',saturday = '$saturday' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WEEKEND UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into weekend(month,year,sunday,saturday) values('$month','$year','$sunday','$saturday')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WEEKEND CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "att_time"){
				
				//				$selectedTime = $fetch_quarter_time['in_time'];
				//echo date('h:i:s',strtotime($selectedTime . ' +'.$fetch_extra_time['mor_time'].' minutes'));
	
//				$qua_in_lat = strtotime($fetch_quarter_time['in_time']. ' +'.$fetch_extra_time['mor_time'].' minutes');
//				$qua_out_lat = strtotime($fetch_quarter_time['out_time']. ' +'.$fetch_extra_time['eve_time'].' minutes');
				//$qua_out_lat = strtotime("+".$fetch_extra_time['eve_time']." minutes", strtotime($fetch_quarter_time['out_time']));
				//echo $qua_in_lat;
				//echo $qua_out_lat;					
//					if($in_time_con > $qua_in_lat){
//					$in_att_type = 'late_in';
//					}
//					if($out_time_con > $qua_out_lat){
//					$out_att_type = 'late_out';
//					}
				
				$emp_id = $_POST['emp_id'];
				$in_time = $_POST['in_time'];
				$out_time = $_POST['out_time'];
				$att_date = $_POST['att_date'];
				$month  = date("m",strtotime($att_date));
				$year  = date("Y",strtotime($att_date));
				$day_num  = date("N",strtotime($att_date));
				

				

				$select_extra_time = "select * from salary_setting where emp_id = '".$emp_id."'";
				$process_extra_time = mysqli_query($conn,$select_extra_time);
				$fetch_extra_time = mysqli_fetch_array($process_extra_time);
				

				
				$select_quarter_time = "select * from time_section where day_name = '".$day_num."'";
				$process_quarter_time = mysqli_query($conn,$select_quarter_time);

				$in_time_qua = '';
				$out_time_qua= '';

				$in_time_con = strtotime($_POST['in_time']);
				$out_time_con = strtotime($_POST['out_time']);
				while($fetch_quarter_time = mysqli_fetch_array($process_quarter_time)){
				
				$fetch_quarter_time['in_time'];
				$fetch_quarter_time['out_time'];

				$qua_in = strtotime($fetch_quarter_time['in_time']);
				$qua_out = strtotime($fetch_quarter_time['out_time']);

					if($in_time_con > $qua_in && $in_time_con < $qua_out){
					$in_time_qua .= $fetch_quarter_time['qua_name'];
					}
					if($out_time_con > $qua_in && $out_time_con < $qua_out){
					$out_time_qua .= $fetch_quarter_time['qua_name'];
					}
				}
				
				if($in_time_qua == ''){
				$f_in = "first";
				}else{
				$f_in = $in_time_qua;
				}
				
				if($out_time_qua != '' && $_POST['out_time'] !=''){
				$f_out = $out_time_qua;
				}else{
				$f_out = "fourth";
				}
				
				$select_quarter_time_io = "select * from time_section where day_name = '".$day_num."' order by id ASC LIMIT 1";
				$process_quarter_time_io = mysqli_query($conn,$select_quarter_time_io);
				$fetch_quarter_time_io = mysqli_fetch_array($process_quarter_time_io);
				$fetch_quarter_time_io['in_time'];
				
				$select_quarter_time_ot = "select * from time_section where day_name = '".$day_num."' order by id DESC LIMIT 1";
				$process_quarter_time_ot = mysqli_query($conn,$select_quarter_time_ot);
				$fetch_quarter_time_ot = mysqli_fetch_array($process_quarter_time_ot);
				$fetch_quarter_time_ot['out_time'];
				
				$qua_in_lat = strtotime($fetch_quarter_time_io['in_time']. ' +'.$fetch_extra_time['mor_time'].' minutes');
				$qua_out_lat = strtotime($fetch_quarter_time_ot['out_time']. ' +'.$fetch_extra_time['eve_time'].' minutes');
				
				if($in_time_con > $qua_in_lat){
				$in_att_type = 'late_in';
				}else{
				$in_att_type = '';
				}
				if($out_time_con > $qua_out_lat){
				$out_att_type = 'late_out';
				}else{
				$out_att_type = '';
				}
				
	
	if($day_num !='06'){
	if($f_in == 'first' && $f_out == 'fourth'){
	$tot_per = "0";
	}else if($f_in == 'first' && $f_out == 'third'){
	$tot_per = "25";
	}else if($f_in == 'first' && $f_out == 'second'){
	$tot_per = "50";
	}else if($f_in == 'second' && $f_out == 'fourth'){
	$tot_per = "25";
	}else if($f_in == 'second' && $f_out == 'third'){
	$tot_per = "50";
	}else if($f_in == 'third' && $f_out == 'fourth'){
	$tot_per = "50";
	}else{
	$tot_per = "0";
	}
	}else{
			if($f_in == 'first' && $f_out == 'second'){
			$tot_per = "0";
			}else{
			$tot_per = "50";
			}
		}

				$id = $_POST['id'];
				if($id != ''){
				echo $sql = "update attendance set emp_id = '$emp_id',in_time = '$in_time',out_time = '$out_time', att_date = '$att_date',month = '$month',year = '$year',qua_name = '$f_in',out_qua_name = '$f_out',in_att_type = '$in_att_type',out_att_type = '$out_att_type',total_per = '$tot_per' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TIME UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into attendance(emp_id,in_time,out_time, att_date,month,year,qua_name,out_qua_name,in_att_type,out_att_type,total_per) values('$emp_id','$in_time','$out_time','$att_date','$month','$year','$f_in','$f_out','$in_att_type','$out_att_type','$tot_per')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TIME CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "time_sec"){
				$qua_name = $_POST['qua_name'];
				$day_name = $_POST['day_name'];
				$in_time = $_POST['in_time'];
				$out_time = $_POST['out_time'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update time_section set qua_name = '$qua_name', day_name = '$day_name',in_time = '$in_time',out_time = '$out_time' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TIME UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into time_section(qua_name,day_name,in_time,out_time) values('$qua_name','$day_name','$in_time','$out_time')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TIME CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "holiday"){
				$holiday_name = $_POST['holiday_name'];
				$holiday_date = $_POST['holiday_date'];
				$month  = date("m",strtotime($holiday_date));
				$year  = date("Y",strtotime($holiday_date));
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update holiday set holiday_name = '$holiday_name',holiday_date = '$holiday_date',month = '$month',year = '$year',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "HOLIDAY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into holiday(holiday_name,holiday_date, month,year, status) values('$holiday_name','$holiday_date','$month','$year','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "HOLIDAY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "com_policy"){
				$policy_name = $_POST['policy_name'];
				$status = $_POST['status'];
				$language = $_POST['language'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update company_policy set policy_name = '$policy_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "POLICY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into company_policy(policy_name,language, status) values('$policy_name','$language','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "POLICY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "responsibility"){
				$emp_id = $_POST['emp_id'];
				$heading = $_POST['heading'];
				$language = $_POST['language'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update responsibility set emp_id = '$emp_id',heading = '$heading' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);		
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				
							$responsibility = $_POST['responsibility'][$count];
							if($responsibility !=''){
							$sqld = "insert into responsibility_con(responsibility_id,responsibility) values('".$id."','$responsibility')";
							$doned = mysqli_query($conn, $sqld);
								}
							}	
				if($done){
					echo "RESPONSIBILITY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into responsibility(emp_id,heading, language) values('$emp_id','$heading','$language')";
				$done = mysqli_query($conn, $sql);
				
				$last_id = mysqli_query($conn,"SELECT id from responsibility ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				
							$responsibility = $_POST['responsibility'][$count];
							if($responsibility !=''){
							$sqld = "insert into responsibility_con(responsibility_id,responsibility) values('".$abc['id']."','$responsibility')";
							$doned = mysqli_query($conn, $sqld);
								}
							}			
				if($done){
					echo "RESPONSIBILITY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "state_name"){
				$state_name = $_POST['state_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update state set state_name = '$state_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "STATE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into state(state_name, status) values('$state_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "STATE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "city_name"){
				$city_name = $_POST['city_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update city set city_name = '$city_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CITY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into city(city_name, status) values('$city_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CITY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "sub_category"){
				$material_category = $_POST['material_category'];
				$sub_category = $_POST['sub_category'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update sub_category set material_category = '$material_category',sub_category = '$sub_category',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUB CATEGORY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into sub_category(material_category,sub_category, status) values('$material_category','$sub_category','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUB CATEGORY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "sub_document"){
				$document_category = $_POST['document_category'];
				$sub_document = $_POST['sub_document'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update sub_document set document_category = '$document_category',sub_document = '$sub_document',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUB DOCUMENT UPDATED";

					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into sub_document(document_category,sub_document, status) values('$document_category','$sub_document','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUB DOCUMENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "client_type"){
				$client_type = $_POST['client_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update client_type set client_type = '$client_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CLIENT TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into client_type(client_type, status) values('$client_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CLIENT TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "pancard_rep"){
				$company_name = $_POST['company_name'];
				$report_date = $_POST['report_date'];
				$pan_rec = $_POST['pan_rec'];
				$notary = $_POST['notary'];
				$we_filled_1 = $_POST['we_filled_1'];
				$we_filled_2 = $_POST['we_filled_2'];
				$client_filled_1 = $_POST['client_filled_1'];
				$client_filled_2 = $_POST['client_filled_2'];
				$r_nsdl = $_POST['r_nsdl'];
				$r_office = $_POST['r_office'];
				$pen_rec = $_POST['pen_rec'];
				$rej = $_POST['rej'];
				$others = $_POST['others'];
				$scan_pen = $_POST['scan_pen'];
				$ret_pan = $_POST['ret_pan'];
				$tot_pan = $_POST['tot_pan'];
				$zerox = $_POST['zerox'];
				$expense = $_POST['expense'];
				$tds = $_POST['tds'];
				$extra = $_POST['extra'];
				$other_income = $_POST['other_income'];
				$final_income = $_POST['final_income'];
				$cash_d = $_POST['cash_d'];
				$gpay_d = $_POST['gpay_d'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update pancard_report set company_name='$company_name',report_date ='$report_date',	pan_rec ='$pan_rec',	notary ='$notary',	we_filled_1 ='$we_filled_1',	we_filled_2 ='$we_filled_2',	client_filled_1 ='$client_filled_1',	client_filled_2 ='$client_filled_2',	r_nsdl ='$r_nsdl',	r_office ='$r_office',	pen_rec ='$pen_rec',	rej ='$rej',	others ='$others',	scan_pen ='$scan_pen',	ret_pan ='$ret_pan',	tot_pan ='$tot_pan',	zerox ='$zerox',	expense ='$expense',	tds ='$tds',	extra ='$extra',	other_income ='$other_income',	final_income ='$final_income',	cash_d ='$cash_d',	gpay_d ='$gpay_d',status ='$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PANCARD UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into pancard_report(company_name,report_date,pan_rec,notary,we_filled_1,we_filled_2,client_filled_1,client_filled_2,r_nsdl,r_office,pen_rec,rej,others,scan_pen,ret_pan,tot_pan,zerox,expense,tds,extra,other_income,final_income,cash_d,gpay_d,status) values('$company_name','$report_date',	'$pan_rec',	'$notary',	'$we_filled_1',	'$we_filled_2',	'$client_filled_1',	'$client_filled_2',	'$r_nsdl',	'$r_office',	'$pen_rec',	'$rej',	'$others',	'$scan_pen',	'$ret_pan',	'$tot_pan',	'$zerox',	'$expense',	'$tds',	'$extra',	'$other_income',	'$final_income',	'$cash_d',	'$gpay_d',	'$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PANCARD CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "invoice_status"){
				$status = $_POST['status'];
				$cancel_reason = $_POST['cancel_reason'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update service_invoice set status = '$status',cancel_reason = '$cancel_reason' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "INVOICE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}
		}
		if($page == "receipt_status"){
				$status = $_POST['status'];
				$cancel_reason = $_POST['cancel_reason'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update service_receipt set status = '$status',cancel_reason = '$cancel_reason' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "RECEIPT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}
		}
		if($page == "other_charge"){
				$other_charge = $_POST['other_charge'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update other_charge set other_charge = '$other_charge',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "OTHER CHARGE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into other_charge(other_charge, status) values('$other_charge','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "OTHER CHARGE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "tax_slab"){
				$slab_name = $_POST['slab_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update tax_slab set slab_name = '$slab_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SLAB UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into tax_slab(slab_name, status) values('$slab_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SLAB CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "construction_type"){
				$construction_type = $_POST['construction_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update construction_type set construction_type = '$construction_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CONSTRUCTION TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into construction_type(construction_type, status) values('$construction_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CONSTRUCTION TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "supplier"){
				$supplier_name = $_POST['supplier_name'];
				$contact_person = $_POST['contact_person'];
				$supplier_mobile = $_POST['supplier_mobile'];
				$supplier_email = $_POST['supplier_email'];
				$supplier_gst = $_POST['supplier_gst'];
				$tin = $_POST['tin'];
				$supplier_pancard = $_POST['supplier_pancard'];
				$supplier_type = $_POST['supplier_type'];
				$supplier_address = $_POST['supplier_address'];
				$state = $_POST['state'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update supplier set supplier_name = '$supplier_name',contact_person = '$contact_person',supplier_mobile = '$supplier_mobile',supplier_email = '$supplier_email',supplier_gst = '$supplier_gst',tin = '$tin',supplier_pancard = '$supplier_pancard',supplier_type = '$supplier_type',supplier_address = '$supplier_address',state = '$state',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUPPLIER UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into supplier(supplier_name,contact_person,supplier_mobile,supplier_email,supplier_gst,tin,supplier_pancard,supplier_type,supplier_address,state,status) values('$supplier_name','$contact_person','$supplier_mobile','$supplier_email','$supplier_gst','$tin','$supplier_pancard','$supplier_type','$supplier_address','$state','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SUPPLIER CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "client"){
				$client_name = $_POST['client_name'];
				$client_dob = $_POST['client_dob'];
				$client_gst = $_POST['client_gst'];
				$client_whatsapp = $_POST['client_whatsapp'];
				$client_mobile = $_POST['client_mobile'];
				$client_email = $_POST['client_email'];
				$client_aadhar = $_POST['client_aadhar'];
				$client_pancard = $_POST['client_pancard'];
				$client_address_1 = $_POST['client_address_1'];
				$client_type = $_POST['client_type'];
				$city = $_POST['city'];
				$country = $_POST['country'];
				$state = $_POST['state'];
				$status = $_POST['status'];
				$executive_name = $_POST['executive_name'];
				$id = $_POST['id'];
				$last_id = mysqli_query($conn,"SELECT id from client ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$customer_id = $abc['id']+1;
				$com_cust = $customer_id;
				$creation_date = date( 'Y-m-d h:i:s A', time () ); 

				if($id != ''){
				$sql = "update client set client_name = '$client_name',client_dob = '$client_dob',client_gst = '$client_gst',client_type = '$client_type',client_whatsapp = '$client_whatsapp',country = '$country',client_mobile = '$client_mobile',client_email = '$client_email',client_aadhar = '$client_aadhar',client_pancard = '$client_pancard',client_address_1 = '$client_address_1',city = '$city',state = '$state',status = '$status',executive_name = '$executive_name' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CLIENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into client(customer_id,client_name,client_dob,client_gst,client_whatsapp,country,client_mobile,client_email,client_aadhar,client_pancard,client_address_1,client_type,city,state,status,executive_name,creation_date) values('$com_cust','$client_name','$client_dob','$client_gst','$client_whatsapp','$country','$client_mobile','$client_email','$client_aadhar','$client_pancard','$client_address_1','$client_type','$city','$state','$status','$executive_name','$creation_date')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CLIENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "material_unit"){
				$unit_name = $_POST['unit_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update material_unit set unit_name = '$unit_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL UNIT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into material_unit(unit_name, status) values('$unit_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL UNIT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "payment_condition"){
				$project_name = $_POST['project_name'];
				$stage_name = $_POST['stage_name'];
				$percentage = $_POST['percentage'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update payment_condition set project_name = '$project_name',percentage = '$percentage',stage_name = '$stage_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT CONDITION UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into payment_condition(project_name,percentage,stage_name, status) values('$project_name','$percentage','$stage_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT CONDITION CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "project_unit"){
		  $project_name =  $_POST["project_name"];
	
		  $unit_no =  $_POST["unit_no"];
	
		  $unit_type =  $_POST["unit_type"];
	
		  $floor =  $_POST["floor"];
		  
		  $block = $_POST["block"];
	
		  $bedroom =  $_POST["bedroom"];
	
		  $bathroom =  $_POST["bathroom"];
	
		  $balcony =  $_POST["balcony"];
	
		  $std_plot_area =  $_POST["std_plot_area"];
	
		  $s_built =  $_POST["s_built"];
	
		  $built_up =  $_POST["built_up"];
	
		  $carpet =  $_POST["carpet"];
	
		  $extra_land =  $_POST["extra_land"];
	
		  $extra_land_rate =  $_POST["extra_land_rate"];
	
		  $total_plot_area =  $_POST["total_plot_area"];
	
		  $n_direction =  $_POST["n_direction"];
	
		  $w_direction =  $_POST["w_direction"];
	
		  $s_direction =  $_POST["s_direction"];
	
		  $e_direction =  $_POST["e_direction"];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = " UPDATE unit   

           SET project_name='$project_name',

		   unit_no='$unit_no',

		   unit_type='$unit_type',

		   floor='$floor',
		   
		   block='$block',

		   bedroom='$bedroom',

		   bathroom='$bathroom',

		   balcony='$balcony',

		   std_plot_area='$std_plot_area',

		   s_built='$s_built',

		   built_up='$built_up',

		   carpet='$carpet',

		   extra_land='$extra_land',

		   extra_land_rate='$extra_land_rate',

		   total_plot_area='$total_plot_area',

		   n_direction='$n_direction',

		   w_direction='$w_direction',

		   s_direction='$s_direction',

		   e_direction='$e_direction',

		   status='$status'

		   WHERE id='".$_POST["id"]."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UNIT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
$sql = "
INSERT INTO unit(project_name,unit_no,unit_type,floor,block,bedroom,bathroom,balcony,std_plot_area,s_built,built_up,carpet,extra_land,extra_land_rate,total_plot_area,n_direction,w_direction,s_direction,e_direction,status)  VALUES('$project_name','$unit_no','$unit_type','$floor','$block','$bedroom','$bathroom','$balcony','$std_plot_area','$s_built','$built_up','$carpet','$extra_land','$extra_land_rate','$total_plot_area','$n_direction','$w_direction','$s_direction','$e_direction','$status')  
";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UNIT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "material_name"){
				$material_category = $_POST['material_category'];
				$material_name = $_POST['material_name'];
				$unit_name = $_POST['unit_name'];
				$status = $_POST['status'];
				$cum_val = $_POST['cum_val'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update material_master set material_category = '$material_category',material_name = '$material_name',unit_name = '$unit_name',cum_val = '$cum_val',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL MASTER UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into material_master(material_category,material_name,unit_name,cum_val,status) values('$material_category','$material_name','$unit_name','$cum_val','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL MASTER CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "material_rate"){
				$material_id = $_POST['material_id'];
				$material_basic_price = $_POST['material_basic_price'];
				$basic_price_valid_from = $_POST['basic_price_valid_from'];
				$sale_price = $_POST['sale_price'];
				$sale_price_valid_from = $_POST['sale_price_valid_from'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update material_rate_mst set material_id = '$material_id',material_basic_price = '$material_basic_price',basic_price_valid_from = '$basic_price_valid_from',sale_price = '$sale_price',sale_price_valid_from = '$sale_price_valid_from',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL RATE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into material_rate_mst(material_id,material_basic_price,basic_price_valid_from,sale_price,sale_price_valid_from,status) values('$material_id','$material_basic_price','$basic_price_valid_from','$sale_price','$sale_price_valid_from','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL RATE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "expense_type"){
				$expense_name = $_POST['expense_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update expense_type set expense_name = '$expense_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "EXPENSE TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into expense_type(expense_name, status) values('$expense_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "EXPENSE TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "daily_expense"){
				$company_name = $_POST['company_name'];
				$expense_name = $_POST['expense_name'];
				$amount = $_POST['amount'];
				$remark = $_POST['remark'];
				$payment_mode = $_POST['payment_mode'];
				$paid_amount = $_POST['paid_amount'];
				$txn_number = $_POST['txn_number'];
				$txn_date = $_POST['txn_date'];
				$created_by = $_POST['created_by'];
				$expense_date = $_POST['expense_date'];
				$creation_date= date( 'Y-m-d h:i:s A', time () );
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update daily_expense set company_name = '$company_name',expense_name = '$expense_name',amount= '$amount',remark= '$remark',created_by= '$created_by', expense_date = '$expense_date', payment_mode = '$payment_mode', paid_amount = '$paid_amount', txn_number = '$txn_number', txn_date = '$txn_date' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "EXPENSE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into daily_expense(company_name,expense_name,amount,created_by,creation_date,expense_date,remark,payment_mode,paid_amount,txn_number,txn_date) values('$company_name','$expense_name','$amount','$created_by','$creation_date','$expense_date','$remark','$payment_mode','$paid_amount','$txn_number','$txn_date')";
				$done = mysqli_query($conn, $sql);
				
				if($done){
					echo "EXPENSE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "add_expense_payment"){
				$company_name = $_POST['company_name'];
				$expense_name = $_POST['expense_name'];
				$amount = $_POST['amount'];
				$remark = $_POST['remark'];
				$payment_mode = $_POST['payment_mode'];
				$paid_amount = $_POST['paid_amount'];
				$txn_number = $_POST['txn_number'];
				$txn_date = $_POST['txn_date'];
				$created_by = $_POST['created_by'];
				$expense_date = $_POST['expense_date'];
				$creation_date= date( 'Y-m-d h:i:s A', time () );
				$id = $_POST['id'];
				
				$sqle = "insert into expense_payment(expense_id,payment_mode,paid_amount,txn_number,txn_date) values('".$id."','$payment_mode','$paid_amount','$txn_number','$txn_date')";
				$donee = mysqli_query($conn, $sqle);
							
				if($donee){
					echo "EXPENSE CREATED";
					} else {				
					echo "ERROR";	 
					}
			}
		if($page == "cheque_remark"){
				$cheque_remark = $_POST['cheque_remark'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update cheque_remark set cheque_remark = '$cheque_remark',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CHEQUE REMARK UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into cheque_remark(cheque_remark, status) values('$cheque_remark','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CHEQUE REMARK CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "payment_type"){
				$payment_type = $_POST['payment_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update payment_type set payment_type = '$payment_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into payment_type(payment_type, status) values('$payment_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "amenities"){
				$amenities = $_POST['amenities'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update amenities set amenities = '$amenities',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "AMENITIES UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into amenities(amenities, status) values('$amenities','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "AMENITIES CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
			}
		if($page == "bank"){
				$bank_name = $_POST['bank_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update bank set bank_name = '$bank_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "BANK UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into bank(bank_name, status) values('$bank_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "BANK CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "manpower_category"){
				$man_description = $_POST['man_description'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update manpower_category set man_description = '$man_description',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CATEGORY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into manpower_category(man_description, status) values('$man_description','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CATEGORY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}

		if($page == "manpower"){
				$manpower_des = $_POST['manpower_des'];
				$short_name = $_POST['short_name'];
				$manpower_cat = $_POST['manpower_cat'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update manpower set manpower_des = '$manpower_des',short_name = '$short_name',manpower_cat = '$manpower_des',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MANPOWER UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into manpower(manpower_des, short_name, manpower_cat , status) values('$manpower_des','$short_name','$manpower_cat','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CATEGORY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}

		if($page == "calling_status"){
				$status_name = $_POST['status_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update calling_status set status_name = '$status_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "STATUS UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into calling_status(status_name, status) values('$status_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "STATUS CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "w_group"){
				$group_name = strtoupper ($_POST['group_name']);
				$client_name = $_POST['client_name'];
				$company_name = $_POST['company_name'];
				$w_number = $_POST['w_number'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update whatsapp_group set company_name = '$company_name',group_name = '$group_name',client_name = '$client_name',w_number = '$w_number' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "NUMBER UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into whatsapp_group(company_name,group_name,client_name, w_number) values('$company_name','$group_name','$client_name','$w_number')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "NUMBER CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "task"){
				$task_name = $_POST['task_name'];
				$assigned = $_POST['assigned'];
				$status = $_POST['status'];
				$task_date = $_POST['task_date'];
				$remark = $_POST['remark'];
				$emp_id = $_POST['emp_id'];
				
				$id = $_POST['id'];
				
				if($id != ''){
				$sql = "update task set task_name = '$task_name', assigned = '$assigned',status = '$status',task_date = '$task_date',remark = '$remark' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				
							$image = $_POST['upload_material_file'][$count];
							if($image !=''){
							$sql = "insert into task_att(task_id,image,emp_id) values('".$id."','$image','$emp_id')";
							$done = mysqli_query($conn, $sql);
								}
							}
										
				if($done){
					echo "TASK UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into task(task_name,assigned, status,task_date) values('$task_name','$assigned','$status','$task_date')";
				$done = mysqli_query($conn, $sql);			
				
				$query_task_i = "SELECT id from task order by id DESC LIMIT 1";
				$task_i = mysqli_query($conn, $query_task_i);
				$row_i = mysqli_fetch_assoc($task_i);
				$task_id = $row_i['id'];

							for($count=0; $count<$_POST["total_item"]; $count++){
							$image = $_POST['upload_material_file'][$count];
							if($image !=''){
							$sql = "insert into task_att(task_id,image,emp_id) values('".$task_id."','$image','$emp_id')";
							$done = mysqli_query($conn, $sql);
								}
							}
								if($done){
								echo "TASK CREATED";
								} else {				
								echo "ERROR";	 
								}			
												
				}
				
		}
		
		if($page == "calling"){
				$company_name = $_POST['company_name'];
				$client_name = $_POST['client_name'];
				$calling_date = $_POST['calling_date'];
				$client_whatsapp = $_POST['client_whatsapp'];
				$normal_number = $_POST['normal_number'];
				$material_id = $_POST['material_id'];
				$sub_category = $_POST['sub_category'];
				$status = $_POST['status'];
				$call_time = $_POST['call_time'];
				$year = $_POST['year'];
				$month = $_POST['month'];
				$remark = $_POST['remark'];
				$emp_id = $_POST['emp_id'];
				$id = $_POST['id'];
				
				if($id != ''){
				$sql = "update calling_data set company_name = '$company_name', client_name= '$client_name',status = '$status',calling_date = '$calling_date',remark = '$remark',client_whatsapp = '$client_whatsapp',normal_number = '$client_whatsapp',material_id = '$material_id',sub_category = '$sub_category',call_time = '$call_time',year = '$year',month = '$month',emp_id = '$emp_id' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				
							$image = $_POST['upload_material_file'][$count];
							$description = $_POST['description'][$count];
							if($image !=''){
							$sql = "insert into calling_att(calling_id,image,description) values('".$id."','$image','$description')";
							$done = mysqli_query($conn, $sql);
								}
							}
										
				if($done){
					echo "CALLING UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				echo $sqls = "insert into calling_data(company_name,year,month,calling_date,client_whatsapp,client_name,normal_number,call_time,material_id,sub_category,status,remark,emp_id) values('$company_name','$year','$month','$calling_date','$client_whatsapp','$client_name','$normal_number','$call_time','$material_id','$sub_category','$status','$remark','$emp_id')";
				$donew = mysqli_query($conn, $sqls);			
				
				$query_task_i = "SELECT id from calling_data order by id DESC LIMIT 1";
				$task_i = mysqli_query($conn, $query_task_i);
				$row_i = mysqli_fetch_assoc($task_i);
				$task_id = $row_i['id'];

							for($count=0; $count<$_POST["total_item"]; $count++){
							$image = $_POST['upload_material_file'][$count];
							$description = $_POST['description'][$count];
							if($image !=''){
							$sql = "insert into calling_att(calling_id,image,description) values('".$task_id."','$image','$description')";
							$done = mysqli_query($conn, $sql);
								}
							}
								if($donew){
								echo "CALLING CREATED";
								} else {				
								echo "ERROR";	 
								}			
												
				}
				
		}
		
		
		
		if($page == "reference"){
				$reference_name = $_POST['reference_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update reference set reference_name = '$reference_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "REFERENCE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into reference(reference_name, status) values('$reference_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "REFERENCE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "unit_type"){
				$unit_type = $_POST['unit_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update unit_type set unit_type = '$unit_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UNIT TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into unit_type(unit_type, status) values('$unit_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UNIT TYPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "document"){
				$document_name = $_POST['document_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update document set document_name = '$document_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into document(document_name, status) values('$document_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "project_type"){
				$project_type = $_POST['project_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update project_type set project_type = '$project_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Project Type Updated";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into project_type(project_type, status) values('$project_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Project Type Created";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "leave_type"){
				$leave_type = $_POST['leave_type'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update leave_type set leave_type = '$leave_type',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "LEAVE TYPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into leave_type(leave_type, status) values('$leave_type','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Leave Type Created";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}		
		if($page == "work_group"){
				$construction_type = $_POST['construction_type'];
				$work_group_name = $_POST['work_group_name'];
				$percentage = $_POST['percentage'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update work_group set construction_type = '$construction_type',work_group_name = '$work_group_name',percentage = '$percentage',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WG UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into work_group(construction_type,work_group_name,percentage, status) values('$construction_type','$work_group_name','$percentage','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WG CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "work_name"){
				$work_group = $_POST['work_group'];
				$construction_type = $_POST['construction_type'];
				$unit_type = $_POST['unit_type'];
				$percentage = $_POST['percentage'];
				$work_name = $_POST['work_name'];
				$project_name = $_POST['project_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update work_name set construction_type = '$construction_type',unit_type = '$unit_type',percentage = '$percentage',work_group = '$work_group',work_name = '$work_name',project_name = '$project_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WN UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into work_name(construction_type,unit_type,percentage,work_group,work_name,project_name,status) values('$construction_type','$unit_type','$percentage','$work_group','$work_name','$project_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WN CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "terms_cond"){
				$header = $_POST['header'];
				$description = $_POST['description'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update terms set header = '$header',description = '$description',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TERMS UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into terms(header,description, status) values('$header','$description','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "TERMS CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "material_category"){
				$category_name = $_POST['category_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update material_category set category_name = '$category_name',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL CATEGORY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into material_category(category_name, status) values('$category_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "MATERIAL CATEGORY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "add_company"){
				$company_name = $_POST['company_name'];
				$company_code = $_POST['company_code'];
				$company_number = $_POST['company_number'];
				$landline = $_POST['landline'];
				$pancard = $_POST['pancard'];
				$gst_number = $_POST['gst_number'];
				$address = $_POST['address'];
				$register_date = $_POST['register_date'];
				$status = $_POST['status'];
				$company_email = $_POST['company_email'];
				$website = $_POST['website'];
				
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update company set company_name = '$company_name',company_code = '$company_code',company_number = '$company_number',landline = '$landline',pancard = '$pancard',gst_number = '$gst_number',register_date = '$register_date',address = '$address',status = '$status',company_email = '$company_email',website = '$website' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "COMPANY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into company(company_name,company_code,company_number,landline,pancard,gst_number,address,register_date,status,company_email,website) values('$company_name','$company_code','$company_number','$landline','$pancard','$gst_number','$address','$register_date','$status','$company_email','$website')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "COMPANY CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "add_project"){
				$company = $_POST['company'];
				$project_name = $_POST['project_name'];
				$project_code = $_POST['project_code'];
				$contact_person = $_POST['contact_person'];
				$contact_number = $_POST['contact_number'];
				$project_email = $_POST['project_email'];
				$upload_material_file = $_POST['upload_material_file'];
				$address = $_POST['address'];
				$start_date = $_POST['start_date'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update project set company = '$company',project_name = '$project_name',project_code = '$project_code',contact_person = '$contact_person',contact_number = '$contact_number',project_email = '$project_email',start_date = '$start_date',address = '$address',status = '$status',logo = '$upload_material_file' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PROJECT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into project(company,project_name,project_code,contact_person,contact_number,project_email,address,start_date,status,logo) values('$company','$project_name','$project_code','$contact_person','$contact_number','$project_email','$address','$start_date','$status','$upload_material_file')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PROJECT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "company_bank"){
				$company = $_POST['company'];
				$bank_name = $_POST['bank_name'];
				$account_number = $_POST['account_number'];
				$account_type = $_POST['account_type'];
				$ifsc_code = $_POST['ifsc_code'];
				$bank_branch = $_POST['bank_branch'];
				$bank_address = $_POST['bank_address'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update company_bank_account set company = '$company',bank_name = '$bank_name',account_number = '$account_number',account_type = '$account_type',ifsc_code = '$ifsc_code',bank_branch = '$bank_branch',bank_address = '$bank_address',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "BANK UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into company_bank_account(company,bank_name,account_number,account_type,ifsc_code,bank_branch,bank_address,status) values('$company','$bank_name','$account_number','$account_type','$ifsc_code','$bank_branch','$bank_address','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "BANK CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "client_cred"){
				
$company_name = $_POST['company_name'];
$client_id = $_POST['client_id'];
$gst_number = $_POST['gst_number'];
$is_gst_date = $_POST['is_gst_date'];
$gst_username = $_POST['gst_username'];
$pancard_number = $_POST['pancard_number'];
$is_pancard_date = $_POST['is_pancard_date'];
$pancard_username = $_POST['pancard_username'];
$pancard_password = $_POST['pancard_password'];
$esi_number = $_POST['esi_number'];
$is_esi_date = $_POST['is_esi_date'];
$esi_username = $_POST['esi_username'];
$esi_password = $_POST['esi_password'];
$epf_number = $_POST['epf_number'];
$is_epf_date = $_POST['is_epf_date'];
$epf_username = $_POST['epf_username'];
$epf_password = $_POST['epf_password'];
$pt_number = $_POST['pt_number'];
$is_pt_date = $_POST['is_pt_date'];
$lwf_number = $_POST['lwf_number'];
$is_lwf_date = $_POST['is_lwf_date'];
$id = $_POST['id'];

$gst_password_old = $_POST['gst_password_old'];
if($_POST['gst_password'] != $gst_password_old){
$gst_password = $_POST['gst_password'];
$gst_updated_by = $_POST['emp_id'];
}else{
$gst_password = $_POST['gst_password_old'];
$gst_updated_by = $_POST['gst_updated_by'];
}
$pancard_password_old = $_POST['pancard_password_old'];
if($_POST['pancard_password'] != $pancard_password_old){
$pancard_password = $_POST['pancard_password'];
$pan_updated_by = $_POST['emp_id'];
}else{
$pancard_password = $_POST['pancard_password_old'];
$pan_updated_by = $_POST['pan_updated_by'];
}
$esi_password_old = $_POST['esi_password_old'];
if($_POST['esi_password'] != $esi_password_old){
$esi_password = $_POST['esi_password'];
$esi_updated_by = $_POST['emp_id'];
}else{
$esi_password = $_POST['esi_password_old'];
$esi_updated_by = $_POST['esi_updated_by'];
}
				if($id != ''){
				$sql = "update client_cred set company_name = '$company_name',client_id = '$client_id',gst_number = '$gst_number',is_gst_date = '$is_gst_date',gst_username = '$gst_username',gst_password = '$gst_password',gst_updated_by = '$gst_updated_by',pancard_number = '$pancard_number',is_pancard_date = '$is_pancard_date',pancard_username = '$pancard_username',pancard_password = '$pancard_password',pan_updated_by = '$pan_updated_by',esi_number = '$esi_number',is_esi_date = '$is_esi_date',esi_username = '$esi_username',esi_password = '$esi_password',esi_updated_by = '$esi_updated_by',epf_number = '$epf_number',is_epf_date = '$is_epf_date',epf_username = '$epf_username',epf_password = '$epf_password',pt_number = '$pt_number',is_pt_date = '$is_pt_date',lwf_number = '$lwf_number',is_lwf_date = '$is_lwf_date' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CREDENTIALS UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				echo $sql = "insert into client_cred(company_name,client_id,gst_number,is_gst_date,gst_username,gst_password,pancard_number,is_pancard_date,pancard_username,pancard_password,esi_number,is_esi_date,esi_username,esi_password,epf_number,is_epf_date,epf_username,epf_password,pt_number,is_pt_date,lwf_number,is_lwf_date)VALUES('$company_name','$client_id','$gst_number','$is_gst_date','$gst_username','$gst_password','$pancard_number','$is_pancard_date','$pancard_username','$pancard_password','$esi_number','$is_esi_date','$esi_username','$esi_password','$epf_number','$is_epf_date','$epf_username','$epf_password','$pt_number','$is_pt_date','$lwf_number','$is_lwf_date')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "CREDENTIALS CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		
		

		
		
		if($page == "upload_document"){
				$document_name = $_POST['document_name'];
				$sub_document = $_POST['sub_document'];
				$doc_type = $_POST['doc_type'];
				if($_POST['upload_material_file'] != ""){
				$image_id = $_POST['upload_material_file'];
				}else{
				$image_id = $_POST['image_id'];
				}
				if($_POST['upload_material_file_word'] != ""){
				$document = $_POST['upload_material_file_word'];
				}else{
				$document = $_POST['document'];
				}
				$language = $_POST['language'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update legal_document set sub_document = '$sub_document',document_name = '$document_name',doc_type = '$doc_type',image_id = '$image_id',language = '$language',document = '$document' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into legal_document(sub_document,document_name,language,image_id,document,doc_type) values('$sub_document','$document_name','$language','$image_id','$document','$doc_type')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "upload_per_document"){
				$document_name = $_POST['document_name'];
				if($_POST['upload_material_file'] != ""){
				$image_id = $_POST['upload_material_file'];
				}else{
				$image_id = $_POST['image_id'];
				}
				if($_POST['upload_material_file_word'] != ""){
				$document = $_POST['upload_material_file_word'];
				}else{
				$document = $_POST['document'];
				}
				$emp_id = $_POST['emp_id'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update personal_document set document_name = '$document_name',image_id = '$image_id',document = '$document' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into personal_document(document_name,emp_id,image_id,document) values('$document_name','$emp_id','$image_id','$document')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "DOCUMENT CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "site_survey"){
				$company_name = $_POST['company_name'];		
				$client_name = $_POST['client_name'];
				$contact_num = $_POST['contact_num'];
				$visited_on = $_POST['visited_on'];
				$client_aadhar = $_POST['client_aadhar'];
				$client_pancard = $_POST['client_pancard'];
				$whatsapp_num = $_POST['whatsapp_num'];
				$remark = $_POST['remark'];
				$status_en = $_POST['status'];
				$email = $_POST['email'];
				$executive_name = $_POST['executive_name'];
				$assigned_by = $_POST['assigned_by'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "UPDATE enquiry SET company_name='$company_name',client_name='$client_name', contact_num='$contact_num', whatsapp_num='$whatsapp_num', client_pancard='$client_pancard', client_aadhar='$client_aadhar', remark='$remark', visited_on='$visited_on',status='$status_en', email='$email', executive_name='$executive_name' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);
				
				$ert = "delete from en_order_items where service_order_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["item_count"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `en_order_items`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('$id', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}
							
				if($done){
					echo "ENQUIRY UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				
				$client_aadhar = $_POST['client_aadhar'];
				$sql1 = "SELECT * FROM client WHERE client_aadhar = '".$client_aadhar."'";
				$res1 = mysqli_query($conn,$sql1);
				$num_rows_c = mysqli_num_rows($res1);
				if($num_rows_c =='0'){
				$client_name = strtoupper($_POST['client_name']);
				$client_dob = $_POST['client_dob'];
				$client_gst = strtoupper($_POST['client_gst']);
				$client_whatsapp = $_POST['whatsapp_num'];
				$client_mobile = $_POST['contact_num'];
				$client_email = strtoupper($_POST['email']);
				$client_aadhar = $_POST['client_aadhar'];
				$client_pancard = strtoupper($_POST['client_pancard']);
				$client_address_1 = strtoupper($_POST['client_address_1']);
				$client_type = $_POST['client_type'];
				$city = $_POST['city'];
				$country = $_POST['country'];
				$state = $_POST['state'];
				$status = '1';
				$executive_name = $_POST['executive_name'];
				
				$last_id = mysqli_query($conn,"SELECT id from client ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$customer_id = $abc['id']+1;
				$com_cust = $customer_id;
				$creation_date =  $_POST['visited_on'];
				
				$insert_client = "insert into client(customer_id,client_name,client_dob,client_gst,client_whatsapp,country,client_mobile,client_email,client_aadhar,client_pancard,client_address_1,client_type,city,state,status,executive_name,creation_date) values('$com_cust','$client_name','$client_dob','$client_gst','$client_whatsapp','$country','$client_mobile','$client_email','$client_aadhar','$client_pancard','$client_address_1','$client_type','$city','$state','$status','$executive_name','$creation_date')";
				$done_client = mysqli_query($conn, $insert_client);
				}
				$select_query = "select * from company WHERE company_name = '".$company_name."'";
				$process = mysqli_query($conn,$select_query);
				$fetch = mysqli_fetch_array($process);
				$fetch_code = $fetch['company_code'];
				$month = date('m');
				$year = date('Y');
				
				if(date('m') >= 04) {
				   $d = date('Y-m-d', strtotime('+1 years'));
				   $e = date('Y') .'-'.date('y', strtotime($d));
				} else {
				  $d = date('Y-m-d', strtotime('-1 years'));
				  $e = date('Y', strtotime($d)).'-'.date('y');
				}
				$et_po = "select * from en_seq where company_code = '".$fetch_code."' and f_year = '".$e."' order by id DESC";

				$et  = mysqli_query($conn, $et_po);
				$quer = mysqli_fetch_array($et);
				$d_seq = $quer['seq'] + 1;
				$day = date('d');
				$en_request_id = 'EN/'.$fetch_code.'/'.$d_seq.'/'.$day.'/'.$month.'/'.$year;
				
				
				$sql = "INSERT INTO enquiry(en_request_id,company_name,client_name, email, contact_num, whatsapp_num, remark, client_aadhar, client_pancard, visited_on, status, executive_name,assigned_by) VALUES ('$en_request_id','$company_name','$client_name','$email','$contact_num','$whatsapp_num','$remark','$client_aadhar','$client_pancard','$visited_on','$status_en','$executive_name','$assigned_by')";
				$done = mysqli_query($conn, $sql);		
				
				
				$last_id = mysqli_query($conn,"SELECT id from enquiry ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				
				$sql_seq = "insert into en_seq(`seq`,`company_code`,`f_year`,`f_month`) values('".$d_seq."','".$fetch_code."','".$e."','".$month."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `en_order_items`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('".$abc['id']."', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}
					
				if($done){
					echo "ENQUIRY ADDED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
		if($page == "add_user"){
				$show_menu         = implode("," , $_REQUEST['show_menu']);
				$permissions       = implode("," , $_REQUEST['permissions']);
				$value2='';
				$query_emp = "SELECT emp_id from tbl_users order by id DESC LIMIT 1";
				$stmt = mysqli_query($conn, $query_emp);
				if(mysqli_num_rows($stmt) > 0) {
					if ($row = mysqli_fetch_assoc($stmt)) {
						$value2 = $row['emp_id'];
						$value2 = $value2 + 1;//Incrementing numeric part
						$value2 = sprintf('%04s', $value2);//concatenating incremented value
						$value = $value2; 
					}
				} 
				else {
					$value2 = "001";
					$value = $value2;
				}
				$user_name = $_POST['user_name'];
				$user_email = $_POST['user_email'];
				$user_mobile = $_POST['user_mobile'];
				$joining_date = $_POST['joining_date'];
				$project_name = implode("," , $_REQUEST['project_name']);
				$department = $_POST['department'];
				$designation = $_POST['designation'];
				$user_password = md5($_POST['user_password']);
				$status = $_POST['status'];
				$emp_id = $value;
				$sql = "insert into tbl_users(user_name,emp_id,user_email,user_mobile,joining_date,project_name,department,designation,user_password,status,show_menu,permissions) values('$user_name','$emp_id','$user_email','$user_mobile','$joining_date','$project_name','$department','$designation','$user_password','$status','$show_menu','$permissions')";
				
				$done = mysqli_query($conn, $sql);
				$query_emp_i = "SELECT id from tbl_users order by id DESC LIMIT 1";
				$stmt_i = mysqli_query($conn, $query_emp_i);
				$row_i = mysqli_fetch_assoc($stmt_i);
				$sticky_id = $row_i['id'];
				
				$sql_sticky = "insert into sticky(details,emp_id) values('','$sticky_id')";
				$done_sticky = mysqli_query($conn, $sql_sticky);			
				if($done){
				echo "USER CREATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "edit_user"){
				$show_menu         = implode("," , $_REQUEST['show_menu']);
				$permissions       = implode("," , $_REQUEST['permissions']);
				$user_name = $_POST['user_name'];
				$user_email = $_POST['user_email'];
				$user_mobile = $_POST['user_mobile'];
				$joining_date = $_POST['joining_date'];
				$project_name = implode("," , $_REQUEST['project_name']);
				$department = $_POST['department'];
				$designation = $_POST['designation'];
				$role = $_POST['role'];
				if($_POST['user_password'] == $_POST['old_password']){
				$user_password =  $_POST['user_password'];
				}else{
				$user_password =  md5($_POST['user_password']);
				}
				$status = $_POST['status'];
				$id_client = $_POST['id'];
				$sql = "update tbl_users set user_name = '$user_name',user_email = '$user_email',user_mobile = '$user_mobile',joining_date = '$joining_date',project_name = '$project_name',department = '$department',designation = '$designation',user_password = '$user_password',status = '$status',show_menu = '$show_menu',permissions = '$permissions',role = '$role' where id = '$id_client'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "USER UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "sal_set"){
				$emp_id = $_POST['id'];
				$monthly_salary = $_POST['monthly_salary'];
				$addt_salary = $_POST['addt_salary'];
				$dedu_salary = $_POST['dedu_salary'];
				$ot_salary = $_POST['ot_salary'];
				$mor_time = $_POST['mor_time'];
				$eve_time = $_POST['eve_time'];
				$late_att = $_POST['late_att'];
				$extra_att = $_POST['extra_att'];
				$sql = "update salary_setting set monthly_salary = '$monthly_salary',addt_salary = '$addt_salary ',dedu_salary  = '$dedu_salary',ot_salary = '$ot_salary',mor_time = '$mor_time',eve_time = '$eve_time',late_att = '$late_att',extra_att = '$extra_att' where emp_id = '$emp_id'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "SALARY UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		
		if($page == "client_transfer"){
				$executive_name = $_POST['executive_name'];
				for($count=0; $count<$_POST["count"]; $count++){
				$client_id = $_POST['client_id'][$count];
				$sql = "update client set executive_name = '$executive_name' where id IN($client_id)";
				$done = mysqli_query($conn, $sql);
				}			
				if($done){
				echo "CLIENT TRANSFERED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "so_status"){
				$status = $_POST['status'];
				$id = $_POST['id'];
				$created_by = $_POST['created_by'];
				$priority = $_POST['priority'];
				$due_date = $_POST['due_date'];
				$complete_date = $_POST['complete_date'];
				$sql = "update service_order_details set status = '$status',created_by = '$created_by',priority = '$priority',due_date = '$due_date',complete_date= '$complete_date' where id = '$id'";
				$done = mysqli_query($conn, $sql);

				for($count=0; $count<$_POST["total_item"]; $count++){
				$image = $_POST['upload_material_file'][$count];
				$description = $_POST['description'][$count];
				$status = '0';
				if($image !=''){
				$sql = "insert into service_image(so_id,image,description,status) values('".$id."','$image','$description','$status')";
				$done = mysqli_query($conn, $sql);
					}
				}
				
				if($done){
				echo "STATUS UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "gst_return"){
				$client_name = $_POST['client_name'];
				$id = $_POST['id'];
				//$rec_id = $_POST['rec_id'];
				$month_name = $_POST['month_name'];
				$year_name = $_POST['year_name'];
//				$due_date = $_POST['due_date'];
//				$complete_date = $_POST['complete_date'];
				for($count=0; $count<$_POST["total_item"]; $count++){
				$image = $_POST['upload_material_file'][$count];
				$scheme_name = $_POST['scheme_name'][$count];
				$filling_date = $_POST['filling_date'][$count];
				if($image !=''){
				$sql = "insert into gst_return_image(ret_id,image,scheme_name,filling_date,month_name,year_name) values('".$id."','$image','$scheme_name','$filling_date','$month_name','$year_name')";
				$done = mysqli_query($conn, $sql);
				echo $sqls = "update return_master_list set filled_status = '1' where rm_id = '$id' and service_name = '".$scheme_name."' and month_name = '".$month_name."' and year_name = '".$year_name."'";
				$dones = mysqli_query($conn, $sqls);
				
					}
				}
				
				if($done){
				echo "RETURN UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		
		if($page == "en_status"){
				$status = $_POST['status'];
				$id = $_POST['id'];
				$executive_name = $_POST['executive_name'];
				$sql = "update enquiry set status = '$status',executive_name = '$executive_name' where id = '$id'";
				$done = mysqli_query($conn, $sql);

				for($count=0; $count<$_POST["total_item"]; $count++){
				$image = $_POST['upload_material_file'][$count];
				$description = $_POST['description'][$count];
				$status = '0';
				if($image !=''){
				$sql = "insert into enquiry_image(so_id,image,description,status) values('".$id."','$image','$description','$status')";
				$done = mysqli_query($conn, $sql);
					}
				}
				
				if($done){
				echo "STATUS UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "gst_return_master"){
				$scheme = $_POST['scheme'];
				$old_scheme = $_POST['old_scheme'];
				$assigned_to = $_POST['assigned_to'];
				$year_name = $_POST['year_name'];
				$gst1_day_name = $_POST['gst1_day_name'];
				$gst3b_day_name = $_POST['gst3b_day_name'];
				//$cmp_day_name = $_POST['cmp_day_name'];
				$id = $_POST['id'];
				if($scheme == 'Regular'){
					$div_c = '24';
				}else{
					$div_c = '4';
				}
				
				$sql_sel = "select * from return_master_list where rm_id = '$id' and scheme_name = '".$scheme."'";
				$sql_query = mysqli_query($conn, $sql_sel);
				$sql_fetch = mysqli_fetch_array($sql_query);
				
				$sql_count = mysqli_num_rows($sql_query);
				
				if($sql_count > 1){
				
					if($scheme == $old_scheme){
				$sqls = "update return_master_list set delete_status = '0' where rm_id = '$id' and scheme_name = '".$scheme."' and delete_status = '0'";
				$dones = mysqli_query($conn, $sqls);
					}else{
				$sqls = "update return_master_list set delete_status = '0' where rm_id = '$id' and scheme_name = '".$scheme."'";
				$dones = mysqli_query($conn, $sqls);
					}
				
				
				
				}else{
				if($scheme == 'Regular'){
					for($count=0; $count<$div_c; $count++){
				$service_name = $_POST['service_name'][$count];
				$month_name = $_POST['month_name'][$count];
				//$year_name = $_POST['year_name'][$count];
				if($service_name == 'GSTR 1'){
				$new_date = $year_name.'-'.$month_name.'-'.$gst1_day_name;
				if($month_name !=''){
				$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$id."','$service_name','$scheme','$year_name','$month_name','$new_date','0','0')";
				$done = mysqli_query($conn, $sql);
						}
				
				
				}else{
				$new_date_3b = $year_name.'-'.$month_name.'-'.$gst3b_day_name;
				if($month_name !=''){
				$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$id."','$service_name','$scheme','$year_name','$month_name','$new_date_3b','0','0')";
				$done = mysqli_query($conn, $sql);
						}
				
				}

				
				
					}
				}
							else{
								for($count=0; $count<$div_c; $count++){
							$service_name_cmp = $_POST['service_name_cmp'][$count];
							//$year_name_cmp = $_POST['year_name_cmp'][$count];
							$month_name_cmp = $_POST['month_name_cmp'][$count];
							$return_date_cmp = $_POST['return_date_cmp'][$count];
							if($month_name_cmp !=''){
							$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$id."','$service_name_cmp','$scheme','$year_name','$month_name_cmp','$return_date_cmp','0','0')";
							$done = mysqli_query($conn, $sql);
									}
								}
							}

		}


			    $sql = "update return_master set scheme = '$scheme',assigned_to = '$assigned_to' where id = '$id'";
				$done = mysqli_query($conn, $sql);
				
				if($done){
				echo "MASTER UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
				
		if($page == "return_master"){
				$company_name = $_POST['company_name'];
				$scheme = $_POST['scheme'];
				$year_name = $_POST['year_name'];
				$gst1_day_name = $_POST['gst1_day_name'];
				$gst3b_day_name = $_POST['gst3b_day_name'];
				//$cmp_day_name = $_POST['cmp_day_name'];
				
				$status = '0';
				if($scheme == 'Regular'){
					$div_c = '24';
				}else{
					$div_c = '4';
				}
				for($count_c=0; $count_c<$_POST["total_item"]; $count_c++){
				$client_name = $_POST['client_name'][$count_c];
				$client_id = $_POST['client_id'][$count_c];
				$assigned_to = $_POST['assigned_to'][$count_c];
				if($client_name !=''){
				$sql = "insert into return_master(company_name,client_name,client_id,scheme,status,assigned_to) values('$company_name','$client_name','$client_id','$scheme','$status','$assigned_to')";
				$done = mysqli_query($conn, $sql);
				}


				$query_rm_id = "SELECT id from return_master order by id DESC LIMIT 1";
				$rm_i = mysqli_query($conn, $query_rm_id);
				$rows_i = mysqli_fetch_assoc($rm_i);
				$rmlist_id = $rows_i['id'];
				
				if($scheme == 'Regular'){
					for($count=0; $count<$div_c; $count++){
				$service_name = $_POST['service_name'][$count];
				$month_name = $_POST['month_name'][$count];
				//$year_name = $_POST['year_name'][$count];
				if($service_name == 'GSTR 1'){
				$new_date = $year_name.'-'.$month_name.'-'.$gst1_day_name;
				if($month_name !=''){
				$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name','$scheme','$year_name','$month_name','$new_date','0','0')";
				$done = mysqli_query($conn, $sql);
						}
				
				
				}else{
				$new_date_3b = $year_name.'-'.$month_name.'-'.$gst3b_day_name;
				if($month_name !=''){
				$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name','$scheme','$year_name','$month_name','$new_date_3b','0','0')";
				$done = mysqli_query($conn, $sql);
						}
				
				}

				
				
					}
				}else{
					for($count=0; $count<$div_c; $count++){
				$service_name_cmp = $_POST['service_name_cmp'][$count];
				//$year_name_cmp = $_POST['year_name_cmp'][$count];
				$month_name_cmp = $_POST['month_name_cmp'][$count];
				$return_date_cmp = $_POST['return_date_cmp'][$count];
				if($month_name_cmp !=''){
				$sql = "insert into return_master_list(rm_id,service_name,scheme_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name_cmp','$scheme','$year_name','$month_name_cmp','$return_date_cmp','0','0')";
				$done = mysqli_query($conn, $sql);
						}
					}
				}

				
				}
				if($done){
				echo "STATUS UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "epf_return"){
				$client_name = $_POST['client_name'];
				$id = $_POST['id'];
				//$rec_id = $_POST['rec_id'];
				$month_name = $_POST['month_name'];
				$year_name = $_POST['year_name'];
//				$due_date = $_POST['due_date'];
//				$complete_date = $_POST['complete_date'];
				for($count=0; $count<$_POST["total_item"]; $count++){
				$image = $_POST['upload_material_file'][$count];
				$scheme_name = $_POST['scheme_name'][$count];
				$filling_date = $_POST['filling_date'][$count];
				if($image !=''){
				$sql = "insert into epf_return_image(ret_id,image,scheme_name,filling_date,month_name,year_name) values('".$id."','$image','$scheme_name','$filling_date','$month_name','$year_name')";
				$done = mysqli_query($conn, $sql);
				echo $sqls = "update epf_return_master_list set filled_status = '1' where rm_id = '$id' and service_name = '".$scheme_name."' and month_name = '".$month_name."' and year_name = '".$year_name."'";
				$dones = mysqli_query($conn, $sqls);
				
					}
				}
				
				if($done){
				echo "RETURN UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "epf_return_master_edit"){
				$assigned_to = $_POST['assigned_to'];
				$year_name = $_POST['year_name'];
				$id = $_POST['id'];
			    $sql = "update epf_return_master set assigned_to = '$assigned_to' where id = '$id'";
				$done = mysqli_query($conn, $sql);
				if($done){
				echo "MASTER UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "epf_return_master"){
				$company_name = $_POST['company_name'];
				$year_name = $_POST['year_name'];
				$epf_day_name = $_POST['epf_day_name'];
				$esi_day_name = $_POST['esi_day_name'];
				$status = '0';
				for($count_c=0; $count_c<$_POST["total_item"]; $count_c++){
				$client_name = $_POST['client_name'][$count_c];
				$client_id = $_POST['client_id'][$count_c];
				$assigned_to = $_POST['assigned_to'][$count_c];
							if($client_name !=''){
							$sql = "insert into epf_return_master(company_name,client_name,client_id,status,assigned_to) values('$company_name','$client_name','$client_id','$status','$assigned_to')";
							$done = mysqli_query($conn, $sql);
							}


							$query_rm_id = "SELECT id from epf_return_master order by id DESC LIMIT 1";
							$rm_i = mysqli_query($conn, $query_rm_id);
							$rows_i = mysqli_fetch_assoc($rm_i);
							$rmlist_id = $rows_i['id'];

							for($count=0; $count<24; $count++){
							$service_name = $_POST['service_name'][$count];
							$month_name = $_POST['month_name'][$count];
							if($service_name == 'ESI'){
								        $new_date = $year_name.'-'.$month_name.'-'.$epf_day_name;
													if($month_name !=''){
													$sql = "insert into epf_return_master_list(rm_id,service_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name','$year_name','$month_name','$new_date','0','0')";
													$done = mysqli_query($conn, $sql);
															}
							}else{
													$new_date_3b = $year_name.'-'.$month_name.'-'.$esi_day_name;
													if($month_name !=''){
													$sql = "insert into epf_return_master_list(rm_id,service_name,year_name,month_name,return_date,filled_status,delete_status) values('".$rmlist_id."','$service_name','$year_name','$month_name','$new_date_3b','0','0')";
													$done = mysqli_query($conn, $sql);
													}
				
						   }
						}
					}
				if($done){
				echo "STATUS UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		
		if($page == "add_profile"){
				$show_menu         = implode("," , $_REQUEST['show_menu']);
				$permissions       = implode("," , $_REQUEST['permissions']);
				$role = $_POST['role'];
				$sql = "insert into menu_profile(role,show_menu,permissions) values('$role','$show_menu','$permissions')";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "PROFILE CREATED";
				}else{				
				echo "ERROR";	 
				}
		}
			if($page == "youtube"){
					$material_id = $_POST['material_id'];
					$sub_category = $_POST['sub_category'];
			
					$insert_vid = "insert into youtube(material_id,sub_category) values('$material_id','$sub_category')";
					$done_vid = mysqli_query($conn, $insert_vid);
					
					$last_id_v = mysqli_query($conn,"SELECT id from youtube ORDER BY id DESC LIMIT 0 , 1");
					$abc_v = mysqli_fetch_array($last_id_v);
					
					for($count=0; $count<$_POST["total_item"]; $count++){
					$video_desc = $_POST['video_desc'][$count];
					$video_link = $_POST['video_link'][$count];
					if($video_desc != ''){
					$sql = "insert into youtube_list(video_id,video_desc,video_link) values('".$abc_v['id']."','$video_desc','$video_link')";
					$done = mysqli_query($conn, $sql);			
					if($done){
					echo "LINK CREATED";
					}else{				
					echo "ERROR";	 
					}
				}
			}		
		}
		if($page == "document_insert"){
				$document = $_POST['upload_material_file'];
				$image_id = $_POST['upload_material_file'];
				$cust_id = $_POST['customer_id'];
				$document_name = $_POST['document_name'];
				
				$sql = "insert into cust_document(customer_id,document_name,document,image_id) values('$cust_id','$document_name','$document','$image_id')";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "IMAGE UPLOADED";
				}else{				
				echo "ERROR";	 
				}
		}
		
		if($page == "cron_master_data"){
				$client_aadhar = $_POST['client_aadhar'];
				$sql1 = "SELECT * FROM client WHERE client_aadhar = '".$client_aadhar."'";
				$res1 = mysqli_query($conn,$sql1);
				$num_rows_c = mysqli_num_rows($res1);
				if($num_rows_c =='0'){
				$client_name = strtoupper($_POST['client_name']);
				$client_dob = $_POST['client_dob'];
				$client_gst = strtoupper($_POST['client_gst']);
				$client_whatsapp = $_POST['client_whatsapp'];
				$client_mobile = $_POST['client_mobile'];
				$client_email = strtoupper($_POST['client_email']);
				$client_aadhar = $_POST['client_aadhar'];
				$client_pancard = strtoupper($_POST['client_pancard']);
				$client_address_1 = strtoupper($_POST['client_address_1']);
				$client_type = $_POST['client_type'];
				$city = $_POST['city'];
				$country = $_POST['country'];
				$state = $_POST['state'];
				$status = '1';
				$executive_name = $_POST['created_by'];
				
				$last_id = mysqli_query($conn,"SELECT id from client ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$customer_id = $abc['id']+1;
				$com_cust = $customer_id;
				$creation_date =  $_POST['creation_date'];
				
				$insert_client = "insert into client(customer_id,client_name,client_dob,client_gst,client_whatsapp,country,client_mobile,client_email,client_aadhar,client_pancard,client_address_1,client_type,city,state,status,executive_name,creation_date) values('$com_cust','$client_name','$client_dob','$client_gst','$client_whatsapp','$country','$client_mobile','$client_email','$client_aadhar','$client_pancard','$client_address_1','$client_type','$city','$state','$status','$executive_name','$creation_date')";
				$done_client = mysqli_query($conn, $insert_client);
				}
				$company_name = $_POST['company_name'];
				$client_name = $_POST['client_name'];
				$client_aadhar = $_POST['client_aadhar'];
				$created_by = $_POST['created_by'];
				$status = $_POST['status'];
				$note = $_POST['note'];
				$month = implode("," , $_POST['month']);
				$assigned_by = $_POST['assigned_by'];
				
				$sql = "insert into cron_master(company_name,client_name,client_aadhar,created_by,status,note,month,assigned_by) values('$company_name','$client_name','$client_aadhar','$created_by','$status','$note','$month','$assigned_by')";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "DATA UPLOADED";
				}else{				
				echo "ERROR";	 
				}
				
				$last_id = mysqli_query($conn,"SELECT id from cron_master ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);				
			for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `cron_data_list`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('".$abc['id']."', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}	
				
				
		}
		
		if($page == "add_attendance"){
				$attendance_date = $_POST['attendance_date'];
				for($count=0; $count<$_POST["count"]; $count++){
				$leave_category_id = $_POST['leave_category_id'][$count];
				$employee_id = $_POST['employee_id'][$count];
				$attendance_status = $_POST['present'][$count];
			if($attendance_status != ''){
				$sql = "insert into tbl_attendance(employee_id,attendance_date,attendance_status,leave_category_id) values('$employee_id','$attendance_date','$attendance_status','$leave_category_id')";
				$done = mysqli_query($conn, $sql);			
					}
				}
				if($done){
				echo "ATTENDANCE CREATED";
				}else{				
				echo "ERROR";	 
				}
				
		}

		if($page == "edit_profile"){
				$show_menu         = implode("," , $_REQUEST['show_menu']);
				$permissions       = implode("," , $_REQUEST['permissions']);
				$role = $_POST['role'];
				$id_client = $_POST['id'];
$sql = "update menu_profile set role = '$role',show_menu = '$show_menu',permissions = '$permissions' where id = '$id_client'";
				$done = mysqli_query($conn, $sql);
				
$sql_r = "update tbl_users set show_menu = '$show_menu',permissions = '$permissions' where role = '$id_client'";
				$done_r = mysqli_query($conn, $sql_r);
				
							
				if($done){
				echo "PROFILE UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "edit_kyc"){
$emp_id = $_POST["emp_id"];
$user_name = $_POST["user_name"];
$dob = $_POST["dob"];
$father_name = $_POST["father_name"];
$gender = $_POST["gender"];
$maratial_status = $_POST["maratial_status"];
$city = $_POST["city"];
$state = $_POST["state"];
$present_address = $_POST["present_address"];
$permanent_address = $_POST["permanent_address"];
$user_mobile = $_POST["user_mobile"];
$emergency_mobile = $_POST["emergency_mobile"];
$user_email = $_POST["user_email"];
$project_name = $_POST["project_name"];
$department = $_POST["department"];
$designation = $_POST["designation"];
$joining_date = $_POST["joining_date"];
$user_password = $_POST["user_password"];
$employment_type = $_POST["employment_type"];
$basic_salary = $_POST["basic_salary"];
$hra = $_POST["hra"];
$medical_allowance = $_POST["medical_allowance"];
$special_allowance = $_POST["special_allowance"];
$phone_allowance = $_POST["phone_allowance"];
$other_allowance = $_POST["other_allowance"];
$provident_fund = $_POST["provident_fund"];
$professional_tax = $_POST["professional_tax"];
$other_deduction = $_POST["other_deduction"];
$gross_salary = $_POST["gross_salary"];
$total_deduction = $_POST["total_deduction"];
$net_salary = $_POST["net_salary"];
$pl_balance = $_POST["pl_balance"];
$half_day_balance = $_POST["half_day_balance"];
$cl_balance = $_POST["cl_balance"];
$sick_balance = $_POST["sick_balance"];




				if($_POST['user_password'] == $_POST['old_password']){
				$user_password =  $_POST['user_password'];
				}else{
				$user_password =  md5($_POST['user_password']);
				}
				
				$id_client = $_POST['id'];
				$sql = "update tbl_users set emp_id = '$emp_id',user_name = '$user_name',dob = '$dob',father_name = '$father_name',gender = '$gender',maratial_status = '$maratial_status',city = '$city',state = '$state',present_address = '$present_address',permanent_address = '$permanent_address',user_mobile = '$user_mobile',emergency_mobile = '$emergency_mobile',user_email = '$user_email',project_name = '$project_name',department = '$department',designation = '$designation',joining_date = '$joining_date',user_password = '$user_password',employment_type = '$employment_type',basic_salary = '$basic_salary',hra = '$hra',medical_allowance = '$medical_allowance',special_allowance = '$special_allowance',phone_allowance = '$phone_allowance',other_allowance = '$other_allowance',provident_fund = '$provident_fund',professional_tax = '$professional_tax',other_deduction = '$other_deduction',gross_salary = '$gross_salary',total_deduction = '$total_deduction',net_salary = '$net_salary',pl_balance = '$pl_balance',half_day_balance = '$half_day_balance',cl_balance = '$cl_balance',sick_balance = '$sick_balance' where id = '$id_client'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "USER UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "follow_up"){
				$next_follow = $_POST['next_follow'];
				$status = $_POST['status'];
				$id_client = $_POST['id'];
				$feedback = $_POST['description'];
				$executive_name = $_POST['executive_name'];
				$sql = "update enquiry set next_follow = '$next_follow',status = '$status' where id = '$id_client'";
				$done = mysqli_query($conn, $sql);
				$sql_1 = "insert into feedback(inq_id,feedback,executive_name) values('$id_client','$feedback','$executive_name')";
				$done_1 = mysqli_query($conn, $sql_1);			
				if($done){
				echo "NEXT FOLLOW UP UPDATED";
				}else{				
				echo "ERROR";	 
				}
		}
		if($page == "sales_order_form"){
				$client_aadhar = $_POST['client_aadhar'];
				$sql1 = "SELECT * FROM client WHERE client_aadhar = '".$client_aadhar."'";
				$res1 = mysqli_query($conn,$sql1);
				$num_rows_c = mysqli_num_rows($res1);
				if($num_rows_c =='0'){
				$client_name = strtoupper($_POST['client_name']);
				$client_dob = $_POST['client_dob'];
				$client_gst = strtoupper($_POST['client_gst']);
				$client_whatsapp = $_POST['client_whatsapp'];
				$client_mobile = $_POST['client_mobile'];
				$client_email = strtoupper($_POST['client_email']);
				$client_aadhar = $_POST['client_aadhar'];
				$client_pancard = strtoupper($_POST['client_pancard']);
				$client_address_1 = strtoupper($_POST['client_address_1']);
				$client_type = $_POST['client_type'];
				$city = $_POST['city'];
				$country = $_POST['country'];
				$state = $_POST['state'];
				$status = '1';
				$executive_name = $_POST['created_by'];
				$last_id = mysqli_query($conn,"SELECT id from client ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$customer_id = $abc['id']+1;
				$com_cust = $customer_id;
				$creation_date =  $_POST['creation_date'];
				
				$insert_client = "insert into client(customer_id,client_name,client_dob,client_gst,client_whatsapp,country,client_mobile,client_email,client_aadhar,client_pancard,client_address_1,client_type,city,state,status,executive_name,creation_date) values('$com_cust','$client_name','$client_dob','$client_gst','$client_whatsapp','$country','$client_mobile','$client_email','$client_aadhar','$client_pancard','$client_address_1','$client_type','$city','$state','$status','$executive_name','$creation_date')";
				$done_client = mysqli_query($conn, $insert_client);
				}
				
				$company_name = $_POST['company_name'];		
				$select_query = "select * from company WHERE company_name = '".$company_name."'";
				$process = mysqli_query($conn,$select_query);
				$fetch = mysqli_fetch_array($process);
				$fetch_code = $fetch['company_code'];
				$month = date('m');
				$year = date('Y');
				
				if(date('m') >= 04) {
				   $d = date('Y-m-d', strtotime('+1 years'));
				   $e = date('Y') .'-'.date('y', strtotime($d));
				} else {
				  $d = date('Y-m-d', strtotime('-1 years'));
				  $e = date('Y', strtotime($d)).'-'.date('y');
				}
				$et_po = "select * from sr_seq where company_code = '".$fetch_code."' and f_year = '".$e."' order by id DESC";

				$et  = mysqli_query($conn, $et_po);
				$quer = mysqli_fetch_array($et);
				$d_seq = $quer['seq'] + 1;
				$day = date('d');
				$creation_date =  $_POST['creation_date'];
				
				$service_request_id = 'O/'.$fetch_code.'/'.$d_seq.'/'.$day.'/'.$month.'/'.$year;
				
				$client_name = strtoupper($_POST['client_name']);
				$client_aadhar = $_POST['client_aadhar'];
				$note = strtoupper($_POST['note']);
				$created_by = $_POST['created_by'];
				$assigned_by = $_POST['assigned_by'];
				$sql_1 = "insert into service_order_details(`service_request_id`, `creation_date`, `company_name`, `client_name`,`client_aadhar`, `created_by`,`note`,`status`,`assigned_by`) values('$service_request_id', '$creation_date', '$company_name', '$client_name','$client_aadhar', '$created_by','$note','PENDING','$assigned_by')";
				$done_1 = mysqli_query($conn, $sql_1);
				
				$last_id = mysqli_query($conn,"SELECT id from service_order_details ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);

				$last_order_id = mysqli_query($conn,"SELECT service_request_id from service_order_details ORDER BY id DESC LIMIT 0 , 1");
				$abc_so = mysqli_fetch_array($last_order_id);
				
				echo $abc_so['service_request_id'];

				$sql_seq = "insert into sr_seq(`seq`,`company_code`,`f_year`,`f_month`) values('".$d_seq."','".$fetch_code."','".$e."','".$month."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `service_order_items`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('".$abc['id']."', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}
		}
		if($page == "purchase_order"){
				$purchase_order_no = $_POST['purchase_order_no'];
				$creation_date = $_POST['creation_date'];
				$project_name = $_POST['project_name'];
				$expected_date = $_POST['expected_date'];
				$supplier_name = $_POST['supplier_name'];
				$quotation_no = $_POST['quotation_no'];
				$quotation_copy = $_POST['upload_material_file'];
				$credit_period = $_POST['credit_period'];
				$transport_charge = $_POST['transport_charge'];
				$round_off = $_POST['round_off'];
				$insurance_charge = $_POST['insurance_charge'];
				$total_po_amount = $_POST['total_po_amount'];
				$terms = $_POST['terms'];
				$status = 'SENT TO PURCHASE MANAGER';
				$sql_1 = "insert into purchase_order_details(`purchase_order_no`, `creation_date`, `project_name`, `expected_date`, `supplier_name`, `credit_period`,`quotation_no`,`quotation_copy`,`transport_charge`,`round_off`,`insurance_charge`,`total_po_amount`,`terms`,`status`) values('$purchase_order_no', '$creation_date', '$project_name', '$expected_date', '$supplier_name', '$credit_period','$quotation_no','$quotation_copy','$transport_charge','$round_off','$insurance_charge','$total_po_amount', '$terms', '$status')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from purchase_order_details ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into purchase_order_seq(`seq`) values('".$abc['id']."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
				$price = $_POST['price'][$count];
				$cgst = $_POST['cgst'][$count];
				$sgst = $_POST['sgst'][$count];
				$igst = $_POST['igst'][$count];
				$order_item_final_amount = $_POST['order_item_final_amount'][$count];
				if($material_id != '' && $quantity != '' && $uom != '' && $price != '' && $cgst != '' && $sgst != '' && $igst != '' && $order_item_final_amount != ''){
	$sql = "INSERT INTO `purchase_order_items`(`purchase_order_id`, `material_id`, `quantity`, `uom`, `price`, `cgst`, `sgst`, `igst`, `order_item_final_amount`) VALUES('".$abc['id']."', '$material_id', '$quantity', '$uom', '$price', '$cgst', '$sgst', '$igst', '$order_item_final_amount')";
				$done = mysqli_query($conn, $sql);
				}			
			}	
				if($done_1){
				echo "ORDER ADDED"; }else{ echo "ERROR"; }
		}
		if($page == "edit_purchase_order"){
				$purchase_order_no = $_POST['purchase_order_no'];
				$creation_date = $_POST['creation_date'];
				$project_name = $_POST['project_name'];
				$expected_date = $_POST['expected_date'];
				$supplier_name = $_POST['supplier_name'];
				$quotation_no = $_POST['quotation_no'];
				if($_POST['upload_material_file'] != ''){
				$quotation_copy = $_POST['upload_material_file'];
				}else{
				$quotation_copy = $_POST['quotation_no_pre'];
				}
				$credit_period = $_POST['credit_period'];
				$transport_charge = $_POST['transport_charge'];
				$round_off = $_POST['round_off'];
				$insurance_charge = $_POST['insurance_charge'];
				$total_po_amount = $_POST['total_po_amount'];
				$terms = $_POST['terms'];
				$id = $_POST['id'];
				$status = 'SENT TO PURCHASE MANAGER';
			$sql_1 = "update purchase_order_details set purchase_order_no = '$purchase_order_no',creation_date = '$creation_date', project_name = '$project_name', expected_date = '$expected_date', supplier_name = '$supplier_name', credit_period = '$credit_period',quotation_no = '$quotation_no',quotation_copy = '$quotation_copy',transport_charge = '$transport_charge',round_off = '$round_off',insurance_charge = '$insurance_charge',total_po_amount = '$total_po_amount',terms = '$terms',status = '$status' where id = '$id'";
				$done_1 = mysqli_query($conn, $sql_1);
				$ert = "delete from purchase_order_items where purchase_order_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
				$price = $_POST['price'][$count];
				$cgst = $_POST['cgst'][$count];
				$sgst = $_POST['sgst'][$count];
				$igst = $_POST['igst'][$count];
				$order_item_final_amount = $_POST['order_item_final_amount'][$count];
				$sql = "INSERT INTO `purchase_order_items`(`purchase_order_id`, `material_id`, `quantity`, `uom`, `price`, `cgst`, `sgst`, `igst`, `order_item_final_amount`) VALUES('".$id."', '$material_id', '$quantity', '$uom', '$price', '$cgst', '$sgst','$igst', '$order_item_final_amount')";
				$done = mysqli_query($conn, $sql);

	 
				}			
				if($done_1){
				echo "ORDER UPDATED"; }else{ echo "ERROR"; }
		}
		if($page == "edit_sales_order_form"){
				$creation_date = $_POST['creation_date'];
				$company_name = $_POST['company_name'];
				$client_name = $_POST['client_name'];
				$client_aadhar = $_POST['client_aadhar'];
				$status = $_POST['status'];
				$cancel_reason = $_POST['cancel_reason'];				
				$note = $_POST['note'];
				$created_by = $_POST['created_by'];
				$id = $_POST['id'];
				$sql_1 = "update service_order_details set creation_date = '$creation_date', company_name = '$company_name', client_name = '$client_name',client_aadhar = '$client_aadhar', note = '$note',status = '$status',cancel_reason = '$cancel_reason' where id = '$id'";
				$done_1 = mysqli_query($conn, $sql_1);
				
				$ert = "delete from service_order_items where service_order_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["item_count"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `service_order_items`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('$id', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}
				if($done_1){
				echo "ORDER UPDATE"; }else{ echo "ERROR"; }
		}
		if($page == "edit_youtube"){
				$material_id = $_POST['material_id'];
				$sub_category = $_POST['sub_category'];
				$id = $_POST['id'];
				$sql_1 = "update youtube set material_id = '$material_id', sub_category = '$sub_category' where id = '$id'";
				$done_1 = mysqli_query($conn, $sql_1);
				
				$ert = "delete from youtube_list where video_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["item_count"]; $count++){
				$video_desc = $_POST['video_desc'][$count];
				$video_link = $_POST['video_link'][$count];
				if($video_desc != ''){
				$sql = "INSERT INTO `youtube_list`(`video_id`, `video_desc`,`video_link`) VALUES('$id', '$video_desc','$video_link')";
				$done = mysqli_query($conn, $sql);
				}
			}
				if($done_1){
				echo "ORDER UPDATE"; }else{ echo "ERROR"; }
		}
		
				if($page == "edit_auto_order_form"){
				$company_name = $_POST['company_name'];
				$client_name = $_POST['client_name'];
				$client_aadhar = $_POST['client_aadhar'];
				$note = $_POST['note'];
				$month = implode("," , $_POST['month']);
				$created_by = $_POST['created_by'];
				$assigned_by = $_POST['assigned_by_1'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$sql_1 = "update cron_master set company_name = '$company_name', client_name = '$client_name',client_aadhar = '$client_aadhar', note = '$note', created_by = '$created_by',assigned_by = '$assigned_by', month = '$month',status = '$status' where id = '$id'";
				$done_1 = mysqli_query($conn, $sql_1);
				
				$ert = "delete from cron_data_list where service_order_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["item_count"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$sub_category = $_POST['sub_category'][$count];
				$price = $_POST['price'][$count];
				if($material_id != ''){
				$sql = "INSERT INTO `cron_data_list`(`service_order_id`, `material_id`,`sub_category`, `price`) VALUES('$id', '$material_id','$sub_category', '$price')";
				$done = mysqli_query($conn, $sql);
				}
			}
				if($done_1){
				echo "ORDER UPDATE"; }else{ echo "ERROR"; }
		}
		
		if($page == "invoice_form"){
				$purchase_order_no = $_POST['purchase_order_no'];
				$invoice_number = $_POST['invoice_number'];
				$creation_date = $_POST['creation_date'];
				$project_name = $_POST['project_name'];
				$client_name = $_POST['client_name'];
				$dispatched_through = $_POST['dispatched_through'];
				$vehicle_number = $_POST['vehicle_number'];
				$delivery_site = $_POST['delivery_site'];
				$ship_to = $_POST['ship_to'];
				$s_address_1 = $_POST['s_address_1'];
				$s_address_2 = $_POST['s_address_2'];
				$s_city = $_POST['s_city'];
				$s_state = $_POST['s_state'];
				$s_postal_code = $_POST['s_postal_code'];
				$s_country = $_POST['s_country'];
				$s_contact_name = $_POST['s_contact_name'];
				$s_contact_phone = $_POST['s_contact_phone'];
				$note = $_POST['note'];
				$created_by = $_POST['created_by'];
				$sales_order_id = $_POST['sales_order_id'];
				$sql_1 = "insert into invoice_details(`invoice_number`,`sales_order_id`,`purchase_order_no`, `creation_date`, `project_name`, `client_name`,`dispatched_through`,`vehicle_number`,`delivery_site`, `ship_to`, `s_address_1`, `s_address_2`, `s_city`, `s_state`, `s_postal_code`, `s_country`, `s_contact_name`, `s_contact_phone`, `created_by`,`note`) values('$invoice_number','$sales_order_id','$purchase_order_no', '$creation_date', '$project_name', '$client_name','$dispatched_through','$vehicle_number','$delivery_site', '$ship_to', '$s_address_1', '$s_address_2', '$s_city', '$s_state', '$s_postal_code', '$s_country', '$s_contact_name', '$s_contact_phone', '$created_by','$note')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from invoice_details ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into so_seq(`seq`) values('".$abc['id']."')";
				$done_seq = mysqli_query($conn, $sql_seq);

				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$quantity_m = $_POST['quantity_m'][$count];
				$uom = $_POST['uom'][$count];
				$price = $_POST['price'][$count];
				$cgst = $_POST['cgst'][$count];
				$sgst = $_POST['sgst'][$count];
				$igst = $_POST['igst'][$count];
				$order_item_final_amount = $_POST['order_item_final_amount'][$count];
				$cum_m = $_POST['cum_m'][$count];
				if($quantity != ''){
				$sql = "INSERT INTO `invoice_items`(`invoice_id`,`sales_order_id`, `material_id`, `quantity`, `quantity_m`, `uom`, `price`, `cgst`, `sgst`,`igst`, `order_item_final_amount`, `cum_m`) VALUES('".$abc['id']."', '$sales_order_id', '$material_id', '$quantity', '$quantity_m', '$uom', '$price', '$cgst', '$sgst','$igst', '$order_item_final_amount', '$cum_m')";
				$done = mysqli_query($conn, $sql);	
					}
				}		
				if($done_1){
				echo "ORDER UPDATE"; }else{ echo "ERROR"; }
		}
		if($page == "approve_purchase_order"){
				$status = $_POST['status'];
				$id = $_POST['id'];
				$sql = "update purchase_order_details set status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "STATUS UPDATED";
				} else {				
				echo "ERROR";	 
				}
		}
		if($page == "upload_bill"){
				$id = $_POST['id'];
				$bill_number = $_POST['bill_number'];
				$bill_date = $_POST['bill_date'];
				$bill_copy = $_POST['upload_material_file'];
				if(!empty($_POST['challan_id'])){
     			foreach($_POST['challan_id'] as $report_id){
				$sql = "update material_received set bill_number = '$bill_number',bill_date = '$bill_date',bill_copy = '$bill_copy' where id = '".$report_id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "BILL ADDED";
				} else {				
				echo "ERROR";	 
				}
     }
   }
		}
		if($page == "change_password"){
				$id = $_POST['id'];
				
				if($_POST['upload_material_file'] != ''){
				$profile_image = $_POST['upload_material_file'];
				}else{
				$profile_image = $_POST['upload_material_file_old'];
				}
				
				
				if($_POST['user_password'] == $_POST['user_password_old']){
				$user_password =  $_POST['user_password'];
				}else{
				$user_password =  md5($_POST['user_password']);
				}
				
				$sql = "update tbl_users set user_password = '$user_password',profile_image = '$profile_image' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
				echo "PROFILE UPDATED";
				} else {				
				echo "ERROR";	 
				}
		}
		if($page == "upload_challan"){
				$purchase_order_no = $_POST['purchase_order_no'];
				$supplier_name = $_POST['supplier_name'];
				$project_name = $_POST['project_name'];
				$receiving_date = $_POST['receiving_date'];
				$vehicle_number = $_POST['vehicle_number'];
				$challan_number = $_POST['challan_number'];
				$challan_copy = $_POST['upload_material_file'];
				$carting_supplier = $_POST['carting_supplier'];
				$purchase_order_id = $_POST['purchase_order_id'];
				$quantity_received_track = $_POST['quantity_received_track'];
	if($quantity_received_track != ''){			
			$sql_1 = "insert into material_received(`purchase_order_no`, `project_name`, `receiving_date`, `supplier_name`,`challan_number`,`challan_copy`,`vehicle_number`,`carting_supplier`) values('$purchase_order_no', '$project_name', '$receiving_date', '$supplier_name', '$challan_number','$challan_copy', '$vehicle_number','$carting_supplier')";
				$done_1 = mysqli_query($conn, $sql_1);
				}
				$last_id = mysqli_query($conn,"SELECT id from material_received ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
				$outward_uom = '4';
				$quantity_received = $_POST['quantity_received'][$count];
				$cum_val = $_POST['cum_val'][$count] * $quantity_received;

	if($quantity_received != ''){			
	$sql = "INSERT INTO `material_received_items`(`material_received_id`,`purchase_order_id`, `material_id`, `quantity`, `uom`,`quantity_received`) VALUES('".$abc['id']."','$purchase_order_id', '$material_id', '$quantity', '$uom', '$quantity_received')";
				$done = mysqli_query($conn, $sql);
				$sql_inven = "INSERT INTO `consumable_inventory` (`material_received_id`,`purchase_order_id`, `material_id`, `inward_qty`,`outward_qty`, `inward_uom`, `outward_uom`,`material_received_on`)
	 	  VALUES('".$abc['id']."','$purchase_order_id', '$material_id', '$quantity_received', '$cum_val','$uom','$outward_uom', '$receiving_date')";
				$done_inve = mysqli_query($conn, $sql_inven);
				echo "CHALLAN UPLOADED";
			}else{
			echo "";
			}
		}				
	}
	if($page == "material_template"){
				$project_name = $_POST['project_name'];
				$unit_type = $_POST['unit_type'];
				$construction_type = $_POST['construction_type'];
				$work_group = $_POST['work_group'];
				$work_name = $_POST['work_name'];
				
$sql_1 = "insert into material_template(`project_name`,`unit_type`,`construction_type`,`work_name`, `work_group`) values('$project_name','$unit_type','$construction_type','$work_name', '$work_group')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from material_template ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
	if($quantity != ''){			
	$sql = "INSERT INTO `material_template_items`(`material_template_id`, `material_id`, `quantity`, `uom`) VALUES('".$abc['id']."', '$material_id', '$quantity', '$uom')";
				$done = mysqli_query($conn, $sql);
				echo "TEMPLATE ADDED";
			}else{
			echo "";
			}
		}				
	}
		if($page == "edit_material_template"){
				$project_name = $_POST['project_name'];
				$unit_type = $_POST['unit_type'];
				$construction_type = $_POST['construction_type'];
				$work_group = $_POST['work_group'];
				$work_name = $_POST['work_name'];
				$id = $_POST['id'];
				$ert = "delete from material_template_items where material_template_id='$id'";
				$rt = mysqli_query($conn,$ert);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
				
				if($quantity != ''){			
					$sql = "INSERT INTO `material_template_items`(`material_template_id`, `material_id`, `quantity`, `uom`) VALUES('".$id."', '$material_id', '$quantity', '$uom')";
				$done = mysqli_query($conn, $sql);
				echo "TEMPLATE ADDED";
			}else{
			echo "";
			}
		}				
	}
	
		if($page == "create_inv_rec"){
				$service_order_no = $_POST['service_order_no'];
				if($_POST['creation_date'] != ''){
				$creation_date = $_POST['creation_date'];
				}else{
				$creation_date = date('Y-m-d');
				}
				$created_by = $_POST['created_by'];
				$company_name = $_POST['company_name'];
				$select_query = "select * from company WHERE company_name = '".$company_name."'";
				$process = mysqli_query($conn,$select_query);
				$fetch = mysqli_fetch_array($process);
				$fetch_code = $fetch['company_code'];
				$month = date('m');
				$year = date('Y');
				
				if(date('m') >= 04) {
				   $d = date('Y-m-d', strtotime('+1 years'));
				   $e = date('Y') .'-'.date('y', strtotime($d));
				} else {
				  $d = date('Y-m-d', strtotime('-1 years'));
				  $e = date('Y', strtotime($d)).'-'.date('y');
				}
				
				$last_inv_id = "select * from invoice_seq where company_code = '".$fetch_code."' and f_year = '".$e."' order by id desc";
				$last_inv_pr  = mysqli_query($conn, $last_inv_id);
				$quer = mysqli_fetch_array($last_inv_pr);
				$d_seq = $quer['seq'] + 1;
				$day = date('d');
				
				$invoice_number = 'I/'.$fetch_code.'/'.$d_seq.'/'.$day.'/'.$month.'/'.$year;
				
$sql_1 = "insert into service_invoice(`invoice_number`, `service_order_no`,`company_name`,`creation_date`,`created_by`,`status`) values('$invoice_number', '$service_order_no', '$company_name','$creation_date', '$created_by', 'ACTIVE')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from service_invoice ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into invoice_seq(`seq`,`company_code`,`f_year`,`f_month`) values('".$d_seq."','".$fetch_code."','".$e."','".$month."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				
				$sql = "update service_order_details set invoice_created = 'yes' where service_request_id = '".$service_order_no."'";
				$done = mysqli_query($conn, $sql);
				
				if($done_1){
				echo $service_order_no;
				} else {				
				echo "ERROR";	 
				}
	}
	
	if($page == "create_invoice"){
				$service_order_no = $_POST['service_order_no'];
				if($_POST['creation_date'] != ''){
				$creation_date = $_POST['creation_date'];
				}else{
				$creation_date = date('Y-m-d');
				}
				$created_by = $_POST['created_by'];
				$company_name = $_POST['company_name'];
				$select_query = "select * from company WHERE company_name = '".$company_name."'";
				$process = mysqli_query($conn,$select_query);
				$fetch = mysqli_fetch_array($process);
				$fetch_code = $fetch['company_code'];
				$month = date('m');
				$year = date('Y');
				
				if(date('m') >= 04) {
				   $d = date('Y-m-d', strtotime('+1 years'));
				   $e = date('Y') .'-'.date('y', strtotime($d));
				} else {
				  $d = date('Y-m-d', strtotime('-1 years'));
				  $e = date('Y', strtotime($d)).'-'.date('y');
				}
				
				$last_inv_id = "select * from invoice_seq where company_code = '".$fetch_code."' and f_year = '".$e."' order by id desc";
				$last_inv_pr  = mysqli_query($conn, $last_inv_id);
				$quer = mysqli_fetch_array($last_inv_pr);
				$d_seq = $quer['seq'] + 1;
				$day = date('d');
				
				$invoice_number = 'I/'.$fetch_code.'/'.$d_seq.'/'.$day.'/'.$month.'/'.$year;
				
$sql_1 = "insert into service_invoice(`invoice_number`, `service_order_no`,`company_name`,`creation_date`,`created_by`,`status`) values('$invoice_number', '$service_order_no', '$company_name','$creation_date', '$created_by', 'ACTIVE')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from service_invoice ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into invoice_seq(`seq`,`company_code`,`f_year`,`f_month`) values('".$d_seq."','".$fetch_code."','".$e."','".$month."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				
				$sql = "update service_order_details set invoice_created = 'yes' where service_request_id = '".$service_order_no."'";
				$done = mysqli_query($conn, $sql);
				
				if($done_1){
				echo $invoice_number;
				} else {				
				echo "ERROR";	 
				}
	}
	
		if($page == "create_receipt"){
				$service_order_no = $_POST['service_order_no'];
				$invoice_number = $_POST['invoice_number'];
				if($_POST['creation_date'] != ''){
				$creation_date = $_POST['creation_date'];
				}else{
				$creation_date = date('Y-m-d');
				}
				$created_by = $_POST['created_by'];
				$company_name = $_POST['company_name'];
				$month = date('m');
				$year = date('Y');
				
				if(date('m') >= 04) {
				   $d = date('Y-m-d', strtotime('+1 years'));
				   $e = date('Y') .'-'.date('y', strtotime($d));
				} else {
				  $d = date('Y-m-d', strtotime('-1 years'));
				  $e = date('Y', strtotime($d)).'-'.date('y');
				}
				
				$select_query = "select * from company WHERE company_name = '".$company_name."'";
				$process = mysqli_query($conn,$select_query);
				$fetch = mysqli_fetch_array($process);
				$fetch_code = $fetch['company_code'];
				
				$last_inv_id = "select * from receipt_seq where company_code = '".$fetch_code."' and f_year = '".$e."' order by id desc";
				$last_inv_pr  = mysqli_query($conn, $last_inv_id);
				$quer = mysqli_fetch_array($last_inv_pr);
				$d_seq = $quer['seq'] + 1;
				$day = date('d');
				$client_name = $_POST['client_id'];
				$payment_mode = $_POST['payment_mode'];
				$cheque_received_date =  $_POST['cheque_received_date'];
				$cheque_deposit_date = $_POST['cheque_deposit_date'];
				$cheque_clear_date = $_POST['cheque_clear_date'];
				$cheque_cancel_date = $_POST['cheque_cancel_date'];
				$cheque_number = $_POST['cheque_number'];
				$cheque_date = $_POST['cheque_date'];
				$bank_name = $_POST['bank_name'];
				$bank_branch = $_POST['bank_branch'];
				$cheque_amount = $_POST['cheque_amount'];
				$depositing_bank = $_POST['depositing_bank'];
				$cheque_status = $_POST['cheque_status'];
				
				$receipt_number = 'R/'.$fetch_code.'/'.$d_seq.'/'.$day.'/'.$month.'/'.$year;
				
$sql_1 = "insert into service_receipt(`receipt_number`,`invoice_number`, `service_order_no`,`company_name`,`creation_date`,`created_by`,`status`) values('$receipt_number','$invoice_number', '$service_order_no', '$company_name','$creation_date', '$created_by','ACTIVE')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from service_receipt ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into receipt_seq(`seq`,`company_code`,`f_year`,`f_month`) values('".$d_seq."','".$fetch_code."','".$e."','".$month."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				
				$sqlpay = "INSERT INTO `customer_payment`(`company_name`,`client_name`,`payment_mode`,`service_order_no`,`invoice_number`,`receipt_number`,`cheque_number`, `cheque_date`, `cheque_received_date`, `cheque_deposit_date`, `cheque_clear_date`, `cheque_cancel_date`, `bank_name`, `bank_branch`, `cheque_amount`, `depositing_bank`, `cheque_status`) VALUES ('$company_name','$client_name','$payment_mode','$service_order_no','$invoice_number','$receipt_number','$cheque_number','$cheque_date','$cheque_received_date','$cheque_deposit_date','$cheque_clear_date','$cheque_cancel_date','$bank_name','$bank_branch','$cheque_amount','$depositing_bank','$cheque_status')";
				$donepay = mysqli_query($conn, $sqlpay);	
				
				
				$sql = "update service_order_details set receipt_created = 'yes' where service_request_id = '".$service_order_no."'";
				$done = mysqli_query($conn, $sql);
				
				if($done_1){
				echo $receipt_number;
				} else {				
				echo "ERROR";	 
				}
	}
	
	if($page == "mo_request"){
				$project_name = $_POST['project_name'];
				$work_group = $_POST['work_group'];
				$batch_number = $_POST['batch_number'];
				$quantity = $_POST['quantity'];
				$creation_date = $_POST['creation_date'];
				$created_by = $_POST['created_by'];
				$material_template_id = $_POST['material_template_id'];
				$mr_status = 'REQUESTED';
$sql_1 = "insert into manufacturing_order(`project_name`, `work_group`,`batch_number`,`material_template_id`,`quantity`,`creation_date`,`created_by`,`mr_status`) values('$project_name', '$work_group', '$batch_number','$material_template_id', '$quantity', '$creation_date', '$created_by', '$mr_status')";
				$done_1 = mysqli_query($conn, $sql_1);
				$last_id = mysqli_query($conn,"SELECT id from manufacturing_order ORDER BY id DESC LIMIT 0 , 1");
				$abc = mysqli_fetch_array($last_id);
				$sql_seq = "insert into mo_seq(`seq`) values('".$abc['id']."')";
				$done_seq = mysqli_query($conn, $sql_seq);
				if($done_1){
				echo "MO CREATED";
				} else {				
				echo "ERROR";	 
				}
	}
	if($page == "mo_approve"){
				$batch_number = $_POST['batch_number'];
				$quantity = $_POST['quantity'];
				$approved_date = $_POST['approved_date'];
				$approved_by = $_POST['user_id'];
				$material_template_id = $_POST['material_template_id'];
				$mr_status = $_POST['mr_status'];
				$sql = "update manufacturing_order set approved_date = '$approved_date',approved_by = '$approved_by',mr_status = '$mr_status' where batch_number = '".$batch_number."'";
				$done = mysqli_query($conn, $sql);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$uom = $_POST['uom'][$count];
				$sql_1 = "insert into material_dispatch(`batch_number`,`material_id`, `quantity`, `uom`) values('$batch_number', '$material_id', '$quantity', '$uom')";
				$done_1 = mysqli_query($conn, $sql_1);
				if($done_1){
				echo "MO CREATED";
				} else {				
				echo "ERROR";	 
				}
			}
	}
	if($page == "final_pro"){
				$batch_number = $_POST['batch_number'];
				$production_date = $_POST['production_date'];
				$entered_by = $_POST['entered_by'];
				$material_uploaded = 'YES';
				$mt = "update manufacturing_order set material_uploaded = '$material_uploaded' where batch_number = '$batch_number'";
				mysqli_query($conn,$mt);
				for($count=0; $count<$_POST["total_item"]; $count++){
				$material_id = $_POST['material_id'][$count];
				$quantity = $_POST['quantity'][$count];
				$quantity_m = $_POST['quantity_m'][$count];
				$uom = $_POST['uom'][$count];
				$sql_1 = "insert into saleable_inventory(`batch_number`,`production_date`,`entered_by`,`quantity_m`,`material_id`, `quantity`, `uom`) values('$batch_number','$production_date','$entered_by','$quantity_m', '$material_id', '$quantity', '$uom')";
				$done_1 = mysqli_query($conn, $sql_1);
				if($done_1){
				echo "STOCK UPDATED";
				} else {				
				echo "ERROR";	 
				}
			}
	}	
	if($page == "receive_payment"){
				$client_name = $_POST['client_name'];
				$payment_type = $_POST['payment_type'];
				$project_name = $_POST['project_name'];
				$client_id = $_POST['client_id'];
				$payment_mode = $_POST['payment_mode'];
				$cheque_received_date =  $_POST['cheque_received_date'];
				$cheque_deposit_date = $_POST['cheque_deposit_date'];
				$cheque_clear_date = $_POST['cheque_clear_date'];
				$cheque_cancel_date = $_POST['cheque_cancel_date'];
				$cheque_number = $_POST['cheque_number'];
				$cheque_date = $_POST['cheque_date'];
				$bank_name = $_POST['bank_name'];
				$bank_branch = $_POST['bank_branch'];
				$cheque_amount = $_POST['cheque_amount'];
				$depositing_bank = $_POST['depositing_bank'];
				$cheque_status = $_POST['cheque_status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update customer_payment set client_name = '$client_name',payment_type = '$payment_type',payment_mode = '$payment_mode',cheque_received_date = '$cheque_received_date',cheque_deposit_date = '$cheque_deposit_date',cheque_clear_date = '$cheque_clear_date',cheque_cancel_date = '$cheque_cancel_date',cheque_number = '$cheque_number',cheque_date = '$cheque_date',bank_name = '$bank_name',bank_branch = '$bank_branch',cheque_amount = '$cheque_amount',depositing_bank = '$depositing_bank',cheque_status = '$cheque_status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "INSERT INTO `customer_payment`(`client_name`,`payment_type`,`payment_mode`,`cheque_number`, `cheque_date`, `cheque_received_date`, `cheque_deposit_date`, `cheque_clear_date`, `cheque_cancel_date`, `bank_name`, `bank_branch`, `cheque_amount`, `depositing_bank`, `cheque_status`) VALUES ('$client_name','$payment_type','$payment_mode','$cheque_number','$cheque_date','$cheque_received_date','$cheque_deposit_date','$cheque_clear_date','$cheque_cancel_date','$bank_name','$bank_branch','$cheque_amount','$depositing_bank','$cheque_status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT DONE";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}	
		
		
		if($page == "vendor_payment"){
				$supplier_name = $_POST['supplier_name'];
				$payment_mode = $_POST['payment_mode'];
				$cheque_received_date =  $_POST['cheque_received_date'];
				$cheque_deposit_date = $_POST['cheque_deposit_date'];
				$cheque_clear_date = $_POST['cheque_clear_date'];
				$cheque_cancel_date = $_POST['cheque_cancel_date'];
				$cheque_number = $_POST['cheque_number'];
				$cheque_date = $_POST['cheque_date'];
				$bank_name = $_POST['bank_name'];
				$bank_branch = $_POST['bank_branch'];
				$cheque_amount = $_POST['cheque_amount'];
				$depositing_bank = $_POST['depositing_bank'];
				$cheque_status = $_POST['cheque_status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update vendor_payment set supplier_name = '$supplier_name',payment_mode = '$payment_mode',cheque_received_date = '$cheque_received_date',cheque_deposit_date = '$cheque_deposit_date',cheque_clear_date = '$cheque_clear_date',cheque_cancel_date = '$cheque_cancel_date',cheque_number = '$cheque_number',cheque_date = '$cheque_date',bank_name = '$bank_name',bank_branch = '$bank_branch',cheque_amount = '$cheque_amount',depositing_bank = '$depositing_bank',cheque_status = '$cheque_status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "INSERT INTO `vendor_payment`(`supplier_name`, `payment_mode`,`cheque_number`, `cheque_date`, `cheque_received_date`, `cheque_deposit_date`, `cheque_clear_date`, `cheque_cancel_date`, `bank_name`, `bank_branch`, `cheque_amount`, `depositing_bank`, `cheque_status`) VALUES ('$supplier_name','$payment_mode','$cheque_number','$cheque_date','$cheque_received_date','$cheque_deposit_date','$cheque_clear_date','$cheque_cancel_date','$bank_name','$bank_branch','$cheque_amount','$depositing_bank','$cheque_status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "PAYMENT DONE";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}
?>

