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
		if($page == "group"){
				$grp_name = $_POST['grp_name'];
				$grp_code = $_POST['grp_code'];
				$prefix = $_POST['prefix'];
				$cat_code = $_POST['cat_code'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update mst_group set grp_name = '$grp_name',grp_code = '$grp_code',prefix = '$prefix',cat_code = '$cat_code',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Group UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into mst_group(grp_name, grp_code, prefix, cat_code, status) values('$grp_name','$grp_code','$prefix','$cat_code','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "GROUP CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
			}
			if($page == "sub_group"){
				$sub_grp_name = $_POST['sub_grp_name'];
				$sub_grp_code = $_POST['sub_grp_code'];
				$prefix = $_POST['prefix'];
				$cat_code = $_POST['cat_code'];
				$grp_code = $_POST['grp_code'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				$sql = "SELECT id AS c_id FROM mst_category WHERE cat_code = '".$cat_code."'";
				$number_filter_row = mysqli_num_rows(mysqli_query($conn, $sql));
				$res = mysqli_query($conn, $sql);
				if ($res1 = mysqli_fetch_array($res,MYSQLI_BOTH)) {
					//$sub_array[3] = $res1['cat_name'];
					$c_id = $res1['c_id'];
				}

				$sql1 = "SELECT id AS g_id FROM mst_group WHERE grp_code = '".$grp_code."'";
				$number_filter_row = mysqli_num_rows(mysqli_query($conn, $sql1));
				$res2 = mysqli_query($conn, $sql1);
				if ($res3 = mysqli_fetch_array($res2,MYSQLI_BOTH)) {
					//$sub_array[3] = $res3['grp_name'];
					$g_id = $res3['g_id'];
				}

				if($id != ''){
				$sql = "update mst_sub_group set sub_grp_name = '$sub_grp_name',sub_grp_code = '$sub_grp_code',prefix = '$prefix',cat_code = '$c_id',grp_code = '$g_id',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Sub-Group UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into mst_sub_group(sub_grp_name, sub_grp_code, prefix, cat_code, grp_code, status) values('$sub_grp_name','$sub_grp_code','$prefix','$c_id','$g_id','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Sub-Group CREATED";
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
				if($id != ''){ 
				$sql = "update mst_category set cat_name = '$cat_name',cat_code = '$cat_code',prefix = '$prefix',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Category UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into mst_category(cat_name, cat_code, prefix, status) values('$cat_name','$cat_code','$prefix','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "Category CREATED";
					} else {				
					echo "ERROR";	 
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

		if($page == "shape"){
				$shape = $_POST['shape_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update shape set shape_name = '$shape',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SHAPE UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into shape(shape_name, status) values('$shape','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "SHAPE CREATED";
					} else {				
					echo "ERROR";	 
					}
				}
				
		}

		if($page == "uom"){
				$uom = $_POST['uom_name'];
				$status = $_POST['status'];
				$id = $_POST['id'];
				if($id != ''){
				$sql = "update uom set uom_name = '$uom',status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "UOM UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into uom(uom_name, status) values('$uom','$status')";
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
				if($id != ''){
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
				if($id != ''){
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
				if($id != ''){
				$sql = "update weld_consumable set weld_code = '$weld_code', weld_name = '$weld_name', status = '$status' where id = '".$id."'";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WELD UPDATED";
					} else {				
					echo "ERROR";	 
					}
				}else{
				$sql = "insert into weld_consumable(weld_code,weld_name, status) values('$weld_code','$weld_name','$status')";
				$done = mysqli_query($conn, $sql);			
				if($done){
					echo "WELD CREATED";
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

