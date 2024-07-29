$(document).ready(function() {
    $('#menu_management_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#menu_name').val() == ""){
				showDangerToast_field_required();
				$('#menu_name').focus();	
				}else if($('#link').val() == ""){
				showDangerToast_field_required();
				$('#link').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=menu_management",
							type: "post",
							data: $("#menu_management_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else if($.trim(data) === 'MENU UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#menu_management_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Menu Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#menu_management_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Menu Created Successfully");
								}
                		} 
        			});
				}
			});
			
	$('#sales_commission').on('submit', function(e) {
				e.preventDefault();
				if($('#sales_unit_rate').val() == ""){
				showDangerToast_code_validation();
				$('#sales_unit_rate').focus();	
				}else if($('#sales_quantity').val() == ""){					
				showDangerToast_code_validation();
				$('#sales_quantity').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=sales_commission",
							type: "post",
							data: $("#sales_commission").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#sales_commission")[0].reset();
								}else if($.trim(data) === 'SALES COMMISSION UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sales_commission")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sales Commision Updated Successfully");
								}else if($.trim(data) === 'DOCUMENTATION EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sales_unit_rate").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("unit rate already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sales_commission")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sales Commision Created Successfully");
								}
                		} 
        			});
				}
			});	
			
			
			
			
	
	$('#department_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#department_name').val() == ""){
				showDangerToast_field_required();
				$('#department_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=department",
							type: "post",
							data: $("#department_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#department_form")[0].reset();
								}else if($.trim(data) === 'DEPARTMENT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#department_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Department Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#department_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Department Created Successfully");
								}
                		} 
        			});
				}
			});
			
			


$('#shape_extra_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#shape_name').val() == ""){
				showDangerToast_name_validation();
				$('#shape_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=shape_extra_form",
							type: "post",
							data: $("#shape_extra_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#shape_extra_form")[0].reset();
								}else if($.trim(data) === 'SHAPE EXTRA CREATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#shape_extra_form")[0].reset();
									$("#menu_manage").modal("hide");
									alertify.success("Extra's Inserted Successfully");
								}
                		} 
        			});
				}
			});

	$('#shape').on('submit', function(e) {
				e.preventDefault();									   
				if($('#shape_name').val() == ""){
				showDangerToast_name_validation();
				$('#shape_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=shape",
							type: "post",
							data: $("#shape").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#shape")[0].reset();
								}else if($.trim(data) === 'SHAPE UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#shape")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Shape Updated Successfully");
								}else if($.trim(data) === 'SHAPE EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#shape_name").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("shape already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#shape")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Shape Created Successfully");
								}
                		} 
        			});
				}
			});

			$('#bill_of_material').on('submit', function(e) {
				e.preventDefault();							   
				if($('.part_no').val() == ""){
				showDangerToast_field_required();
				$('.part_no').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=est_bom",
							type: "post",
							data: $("#bill_of_material").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#bill_of_material")[0].reset();
								}else if($.trim(data) === 'BOM UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#bill_of_material")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("BOM Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#bill_of_material")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("BOM Created Successfully");
								}
                		} 
        			});
				}
			});
			$('#est_broughtout_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('.br_pro_name').val() == ""){
				showDangerToast_field_required();
				$('.br_pro_name').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=est_broughtout_form",
							type: "post",
							data: $("#est_broughtout_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_broughtout_form")[0].reset();
								}else if($.trim(data) === 'BROUGHTOUT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_broughtout_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("BROUGHTOUT Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_broughtout_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("BROUGHTOUT Created Successfully");
								}
                		} 
        			});
				}
			});

			$('#est_total_cost').on('submit', function(e) {
				e.preventDefault();									   
				var request;
							request = $.ajax({
							url: "crud.php?page=est_total_cost",
							type: "post",
							data: $("#est_total_cost").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_total_cost")[0].reset();
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_total_cost")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Total Added Successfully");
								}
                		} 
        			});
			});
			
			$('#manpower_cost_estimation_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('.activity_name').val() == ""){
				showDangerToast_field_required();
				$('.activity_name').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=manpower_cost_estimation",
							type: "post",
							data: $("#manpower_cost_estimation_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#manpower_cost_estimation_form")[0].reset();
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#manpower_cost_estimation_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Manpower Estimated Successfully");
								}
                		} 
        			});
				}
			});
			
			$('#est_contractpage').on('submit', function(e) {
				e.preventDefault();									   
				if($('.select_contract').val() == ""){
				showDangerToast_field_required();
				$('.select_contract').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=est_contractpage",
							type: "post",
							data: $("#est_contractpage").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_contractpage")[0].reset();
								}else if($.trim(data) === 'CONTRACT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_contractpage")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_contractpage")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Created Successfully");
								}
                		} 
        			});
				}
			});
			$('#add_est_service_data').on('submit', function(e) {
				e.preventDefault();									   
				if($('.service_name').val() == ""){
				showDangerToast_field_required();
				$('.service_name').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_est_service_data",
							type: "post",
							data: $("#add_est_service_data").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#add_est_service_data")[0].reset();
								}else if($.trim(data) === 'SERVICE UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_est_service_data")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_est_service_data")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Created Successfully");
								}
                		} 
        			});
				}
			});
			$('#est_ndt').on('submit', function(e) {
				e.preventDefault();									   
				if($('.ut_type').val() == ""){
				showDangerToast_field_required();
				$('.ut_type').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=est_ndt",
							type: "post",
							data: $("#est_ndt").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_ndt")[0].reset();
								}else if($.trim(data) === 'NDT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_ndt")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("NDT Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_ndt")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("NDT Created Successfully");
								}
                		} 
        			});
				}
			});
		$('#est_testing').on('submit', function(e) {
				e.preventDefault();									   
				if($('.chemical_no_of_sample').val() == ""){
				showDangerToast_field_required();
				$('.chemical_no_of_sample').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=est_testing",
							type: "post",
							data: $("#est_testing").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_testing")[0].reset();
								}else if($.trim(data) === 'TESTING UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_testing")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Testing Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_testing")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Testing Created Successfully");
								}
                		} 
        			});
				}
			});	
				
			$('#add_inquiry_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#inquiry_auto_code').val() == ""){
				showDangerToast_name_validation();
				$('#inquiry_auto_code').focus();	
				}else if($('#customer').val() == ""){
				showDangerToast_field_required();
				$('#customer').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_inquiry_form",
							type: "post",
							data: $("#add_inquiry_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#add_inquiry_form")[0].reset();
								}else if($.trim(data) === 'INQUIRY CREATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_inquiry_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Created Successfully");
								}else if($.trim(data) === 'EXTRA'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Product extra field cannot be Null");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_inquiry_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Updated Successfully");
								}
                		} 
        			});
				}
			});
			$('#new_quotation').on('submit', function(e) {
				e.preventDefault();
				if($('#quotation_no').val() == ""){
				showDangerToast_name_validation();	
				$('#quotation_no').focus();	
				}else if($('#quotation_date').val() == ""){	
				showDangerToast_field_required();
				$('#quotation_date').focus();	
				}else if($('#quotation_taxable_amount').val() == ""){
				showDangerToast_field_required();
				$('#quotation_taxable_amount').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=new_quotation",
							type: "post",
							data: $("#new_quotation").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#inquiry_followup")[0].reset();
								}else if($.trim(data) === 'QUOTATION UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_quotation")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Quotation Updated Successfully");
								}else if($.trim(data) === 'QUOTATION EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#quotation_no").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("quotation code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#quotation_no")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("quotation Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#inquiry_followup').on('submit', function(e) {
				e.preventDefault();
				if($('#inquiry_code').val() == ""){
				showDangerToast_name_validation();	
				$('#inquiry_code').focus();	
				}else if($('#followup_name').val() == ""){	
				showDangerToast_name_validation();
				$('#followup_name').focus();	
				}else if($('#followup_status').val() == ""){
				showDangerToast_field_required();
				$('#followup_status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=inquiry_followup",
							type: "post",
							data: $("#inquiry_followup").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#inquiry_followup")[0].reset();
								}else if($.trim(data) === 'FOLLOWUP UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_followup")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Updated Successfully");
								}else if($.trim(data) === 'FOLLOWUP EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("followup code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_followup")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("followup Created Successfully");
								}
                		} 
        			});
				}
			});		
	$('#category_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#cat_name').val() == ""){
				showDangerToast_field_required();
				$('#cat_name').focus();	
				}else if($('#cat_code').val() == ""){
				showDangerToast_field_required();
				$('#cat_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=category",
							type: "post",
							data: $("#category_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#category_form")[0].reset();
								}else if($.trim(data) === 'CATEGORY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#category_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("category Updated Successfully");
								}else if($.trim(data) === 'CATEGORY EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#cat_code").focus();
									var table = $('#datatable1').DataTable();
									alertify.error("category already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#category_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("category Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#group_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#grp_name').val() == ""){
				showDangerToast_field_required();
				$('#grp_name').focus();	
				}else if($('#grp_code').val() == ""){
				showDangerToast_field_required();
				$('#grp_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=group",
							type: "post",
							data: $("#group_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#group_form")[0].reset();
								}else if($.trim(data) === 'GROUP UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#group_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Group Updated Successfully");
								}else if($.trim(data) === 'GROUP EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Group already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#group_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Group Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#broughtout_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#pro_name[1]').val() == ""){
				showDangerToast_field_required();
				$('#pro_name[1]').focus();	
				}else if($('#mat_code[1]').val() == ""){
				showDangerToast_field_required();
				$('#mat_code[1]').focus();	
				}else if($('#unit_rate[1]').val() == ""){
				showDangerToast_field_required();
				$('#unit_rate[1]').focus();
				}else if($('#quantity[1]').val() == ""){
				showDangerToast_field_required();
				$('#quantity[1]').focus();	
				}else if($('#total[1]').val() == ""){
				showDangerToast_field_required();
				$('#total[1]').focus();	
				}else{
				var request;
							
							request = $.ajax({
							url: "crud.php?page=broughtout_data",
							type: "post",
							data: $("#broughtout_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){
							console.log(data); 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#broughtout_form")[0].reset();
								}else if($.trim(data) === 'BROUGHTOUT ADDED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#broughtout_form")[0].reset();
									$("#menu_manage").modal("hide");
									alertify.success("Broughtout Item added Successfully");
								}
                		} 
        			});
				}
			});


	$('#sub_group_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#sub_grp_name').val() == ""){
				showDangerToast_field_required();
				$('#sub_grp_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=sub_group",
							type: "post",
							data: $("#sub_group_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#sub_group_form")[0].reset();
								}else if($.trim(data) === 'SUB-GROUP UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sub_group_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sub-Group Updated Successfully");
								}else if($.trim(data) === 'SUB-GROUP EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Sub-Group already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sub_group_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sub-Group Created Successfully");
								}
                		} 
        			});
				}
			});

	$('#product_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#pro_name').val() == ""){
				showDangerToast_field_required();
				$('#pro_name').focus();	
				}
				else if($('#pro_code').val() == ""){
				showDangerToast_field_required();
				$('#pro_code').focus();	
				}
				else if($('#mat_code').val() == ""){
				showDangerToast_field_required();
				$('#mat_code').focus();	
				}
				else if($('#tech_spec').val() == ""){
				showDangerToast_field_required();
				$('#tech_spec').focus();	
				}
				else if($('#cat_id').val() == ""){
				showDangerToast_field_required();
				$('#cat_id').focus();	
				}
				else if($('#grp_id').val() == ""){
				showDangerToast_field_required();
				$('#grp_id').focus();	
				}
				else if($('#sub_grp_id').val() == ""){
				showDangerToast_field_required();
				$('#sub_grp_id').focus();	
				}
				else if($('#hsn').val() == ""){
				showDangerToast_field_required();
				$('#hsn').focus();	
				}
				else if($('#gst_rate').val() == ""){
				showDangerToast_field_required();
				$('#gst_rate').focus();	
				}
				else if($('#purchase_uom').val() == ""){
				showDangerToast_field_required();
				$('#purchase_uom').focus();	
				}
				else if($('#inventory_uom').val() == ""){
				showDangerToast_field_required();
				$('#inventory_uom').focus();	
				}
				else if($('#indent').val() == ""){
				showDangerToast_field_required();
				$('#indent').focus();	
				}
				else if($('#po_req').val() == ""){
				showDangerToast_field_required();
				$('#po_req').focus();	
				}
				else if($('#qc_req').val() == ""){
				showDangerToast_field_required();
				$('#qc_req').focus();	
				}
				else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}
				else{
				var request;
							request = $.ajax({
							url: "crud.php?page=product",
							type: "post",
							data: $("#product_form").serialize(),
							beforeSend: function(){
							console.log($("#product_form").serialize());
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#product_form")[0].reset();
								}else if($.trim(data) === 'PRODUCT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#product_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Product Updated Successfully");
								}else if($.trim(data) === 'MATERIAL EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Material already exists");
								}else if($.trim(data) === 'invalid factor'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Conv Factor cannot be 0 or null if UOM are not same");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#product_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Product Saved Successfully");
								}
                		} 
        			});
				}
			});

$('#edit_product_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#pro_name').val() == ""){
				showDangerToast_field_required();
				$('#pro_name').focus();	
				}
				else if($('#pro_code').val() == ""){
				showDangerToast_field_required();
				$('#pro_code').focus();	
				}
				else if($('#mat_code').val() == ""){
				showDangerToast_field_required();
				$('#mat_code').focus();	
				}
				else if($('#tech_spec').val() == ""){
				showDangerToast_field_required();
				$('#tech_spec').focus();	
				}
				else if($('#cat_id').val() == ""){
				showDangerToast_field_required();
				$('#cat_id').focus();	
				}
				else if($('#grp_id').val() == ""){
				showDangerToast_field_required();
				$('#grp_id').focus();	
				}
				else if($('#sub_grp_id').val() == ""){
				showDangerToast_field_required();
				$('#sub_grp_id').focus();	
				}
				else if($('#hsn').val() == ""){
				showDangerToast_field_required();
				$('#hsn').focus();	
				}
				else if($('#gst_rate').val() == ""){
				showDangerToast_field_required();
				$('#gst_rate').focus();	
				}
				else if($('#purchase_uom').val() == ""){
				showDangerToast_field_required();
				$('#purchase_uom').focus();	
				}
				else if($('#inventory_uom').val() == ""){
				showDangerToast_field_required();
				$('#inventory_uom').focus();	
				}
				else if($('#indent').val() == ""){
				showDangerToast_field_required();
				$('#indent').focus();	
				}
				else if($('#po_req').val() == ""){
				showDangerToast_field_required();
				$('#po_req').focus();	
				}
				else if($('#qc_req').val() == ""){
				showDangerToast_field_required();
				$('#qc_req').focus();	
				}
				else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}
				else{
				var request;
							request = $.ajax({
							url: "crud.php?page=edit_product",
							type: "post",
							data: $("#edit_product_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#edit_product_form")[0].reset();
								}else if($.trim(data) === 'PRODUCT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Product Updated Successfully");
								}else if($.trim(data) === 'MATERIAL EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Material already exists");
								}else if($.trim(data) === 'invalid factor'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Conv Factor cannot be 0 or null if UOM are not same");
								}
                		} 
        			});
				}
			});
$('#contract').on('submit', function(e) {
				e.preventDefault();									   
				if($('#contract_desc').val() == ""){
				showDangerToast_name_validation();
				$('#contract_desc').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=contract",
							type: "post",
							data: $("#contract").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#contract")[0].reset();
								}else if($.trim(data) === 'CONTRACT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contract")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Updated Successfully");
								}else if($.trim(data) === 'CONTRACT EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contract_desc").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("contract already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contract")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Created Successfully");
								}
                		} 
        			});
				}
			});

		$('#contractpage').on('submit', function(e) {
				e.preventDefault();									   
				if($('#contract_unit_rate[1]').val() == ""){
				showDangerToast_name_validation();
				$('#contract_unit_rate[1]').focus();	
				}else if($('#select_contract[1]').val() == ""){
				showDangerToast_field_required();
				$('#select_contract[1]').focus();	
				}else if($('#contract_uom[1]').val() == ""){
				showDangerToast_field_required();
				$('#contract_uom[1]').focus();	
				}else if($('#contract_quantity[1]').val() == ""){
				showDangerToast_field_required();
				$('#contract_quantity[1]').focus();	
				}else if($('#contract_total_cost[1]').val() == ""){
				showDangerToast_field_required();
				$('#contract_total_cost[1]').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=contractpage",
							type: "post",
							data: $("#contractpage").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#contractpage")[0].reset();
								}else if($.trim(data) === 'CONTRACT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contractpage")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Updated Successfully");
								}else if($.trim(data) === 'CONTRACT EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contract_unit_rate").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("contract already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#contractpage")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Contract Created Successfully");
								}
                		} 
        			});
				}
			});

		$('#tpi').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=tpi",
							type: "post",
							data: $("#tpi").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#tpi")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 



		$('#tpi1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=tpi1",
							type: "post",
							data: $("#tpi1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#tpi1")[0].reset();
								}else if($.trim(data) === 'TPI UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

		$('#tpi2').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=tpi2",
							type: "post",
							data: $("#tpi2").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#tpi2")[0].reset();
								}else if($.trim(data) === 'TPI UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

		$('#im1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=im1",
							type: "post",
							data: $("#im1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#im1")[0].reset();
								}else if($.trim(data) === 'TPI UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#im1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#im1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

		$('#criteria_5_2_1_appeared').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_5_2_1_appeared",
							type: "post",
							data: $("#criteria_5_2_1_appeared").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_5_2_1_appeared")[0].reset();
								}else if($.trim(data) === 'TPI UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_1_appeared")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_1_appeared")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			});

			$('#criteria_5_2_2_1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_5_2_2_1",
							type: "post",
							data: $("#criteria_5_2_2_1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_5_2_2_1")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_2_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_2_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

			$('#criteria_5_2_2').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_5_2_2",
							type: "post",
							data: $("#criteria_5_2_2").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_5_2_2")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_2_2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

			$('#criteria_5_3_1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_5_3_1",
							type: "post",
							data: $("#criteria_5_3_1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_5_3_1")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_3_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_5_3_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 



 

		$('#weekly').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=weekly",
							type: "post",
							data: $("#weekly").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#weekly")[0].reset();
								}else if($.trim(data) === 'TPI UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#weekly")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#weekly")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

	$('#criteria_3_5_2').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_3_5_2",
							type: "post",
							data: $("#criteria_3_5_2").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_3_5_2")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_5_2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_5_2")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

	$('#criteria_3_5_2_1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_3_5_2_1",
							type: "post",
							data: $("#criteria_3_5_2_1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_3_5_2_1")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_5_2_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_5_2_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

	$('#criteria_3_6_1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_3_6_1",
							type: "post",
							data: $("#criteria_3_6_1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_3_6_1")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_6_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_3_6_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 
	$('#criteria_4_3_5_pulms').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_4_3_5_pulms",
							type: "post",
							data: $("#criteria_4_3_5_pulms").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_4_3_5_pulms")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_3_5_pulms")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_3_5_pulms")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 

	$('#criteria_4_3_5_econtent').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_4_3_5_econtent",
							type: "post",
							data: $("#criteria_4_3_5_econtent").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#criteria_4_3_5_econtent")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_3_5_econtent")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_3_5_econtent")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 






	
    $('#criteria_4_5_1_1').on('submit', function(e) {
				e.preventDefault();
				if($('#tpi_name').val() == ""){
				showDangerToast_name_validation();
				$('#tpi_name').focus();	
				}else if($('#tpi_code').val() == ""){	
				showDangerToast_name_validation();
				$('#tpi_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=criteria_4_5_1_1",
							type: "post",
							data: $("#criteria_4_5_1_1").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("criteria_4_5_1_1i")[0].reset();
								}else if($.trim(data) === 'Record UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_5_1_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Updated Successfully");
								}else if($.trim(data) === 'TPI EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#tpi_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Record code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#criteria_4_5_1_1")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Record Created Successfully");
								}
                		} 
        			});
				}
			}); 


	$('#uom').on('submit', function(e) {
				e.preventDefault();									   
				if($('#uom_name').val() == ""){
				showDangerToast_name_validation();					
				$('#uom_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=uom",
							type: "post",
							data: $("#uom").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#uom")[0].reset();
								}else if($.trim(data) === 'UOM UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#uom")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Uom Updated Successfully");
								}else if($.trim(data) === 'UOM EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#uom_name").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("uom already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#uom")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Uom Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#service').on('submit', function(e) {
				e.preventDefault();
				if($('#service_name').val() == ""){
				showDangerToast_name_validation();	
				$('#service_name').focus();	
				}else if($('#service_code').val() == ""){	
				showDangerToast_name_validation();
				$('#service_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=service",
							type: "post",
							data: $("#service").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#service")[0].reset();
								}else if($.trim(data) === 'SERVICE UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#service")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Updated Successfully");
								}else if($.trim(data) === 'SERVICE EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#service_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("service code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#service")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Created Successfully");
								}
                		} 
        			});
				}
			});

	$('#activity').on('submit', function(e) {
				e.preventDefault();
				if($('#activity_name').val() == ""){
				showDangerToast_name_validation();
				$('#activity_name').focus();	
				}else if($('#activity_code').val() == ""){
				showDangerToast_name_validation();
				$('#activity_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=activity",
							type: "post",
							data: $("#activity").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#activity")[0].reset();
								}else if($.trim(data) === 'ACTIVITY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#activity")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Activity Updated Successfully");
								}else if($.trim(data) === 'ACTIVITY EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#activity_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("activity code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#activity")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Activity Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#weld').on('submit', function(e) {
				e.preventDefault();
				if($('#weld_name').val() == ""){
				showDangerToast_name_validation();	
				$('#weld_name').focus();	
				}else if($('#weld_code').val() == ""){	
				showDangerToast_name_validation();
				$('#weld_code').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=weld",
							type: "post",
							data: $("#weld").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#weld")[0].reset();
								}else if($.trim(data) === 'WELD UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#weld")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Weld Updated Successfully");
								}else if($.trim(data) === 'WELD EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#weld_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("weld code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#weld")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Weld Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#estimate').on('submit', function(e) {
				e.preventDefault();									   
				if($('#tab_name').val() == ""){					
				// showDangerToast_field_required();
				$('#tab_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=estimate",
							type: "post",
							data: $("#estimate").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#estimate")[0].reset();
								}else if($.trim(data) === 'ESTIMATE UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#estimate")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Estimate Tab Updated");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#estimate")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Estimate Tab Created");
								}
                		} 
        			});
				}
			});
			$('#new_welder_qualifications').on('submit', function(e) {
				e.preventDefault();
				if($('#new_welder_process').val() == ""){
				showDangerToast_field_required();
				$('#new_welder_process').focus();	
				}else if($('#new_welder_thickness').val() == ""){					
				showDangerToast_field_required();
				$('#new_welder_thickness').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=new_welder_qualifications",
							type: "post",
							data: $("#new_welder_qualifications").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#new_welder_qualifications")[0].reset();
								}else if($.trim(data) === 'WELDER UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_welder_qualifications")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Welder Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_welder_qualifications")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Welder Created Successfully");
								}
                		} 
        			});
				}
			});
			
			$('#add_inquiry_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#inquiry_auto_code').val() == ""){
				showDangerToast_name_validation();
				$('#inquiry_auto_code').focus();	
				}else if($('#customer').val() == ""){
				showDangerToast_field_required();
				$('#customer').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_inquiry_form",
							type: "post",
							data: $("#add_inquiry_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#add_inquiry_form")[0].reset();
								}else if($.trim(data) === 'INQUIRY CREATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_inquiry_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Created Successfully");
								}else if($.trim(data) === 'EXTRA'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Product extra field cannot be Null");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_inquiry_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Updated Successfully");
								}
                		} 
        			});
				}
			});

		$('#inquiry_followup').on('submit', function(e) {
				e.preventDefault();
				if($('#inquiry_code').val() == ""){
				showDangerToast_name_validation();	
				$('#inquiry_code').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=inquiry_followup",
							type: "post",
							data: $("#inquiry_followup").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#inquiry_followup")[0].reset();
								}else if($.trim(data) === 'FOLLOWUP UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_followup")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Service Updated Successfully");
								}else if($.trim(data) === 'FOLLOWUP EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_code").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("followup code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#inquiry_followup")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("followup Created Successfully");
									setTimeout("window.location.href='view_inquiry.php';",1000);
								}
                		} 
        			});
				}
			});
			$('#edit_inquiry_form').on('submit', function(e) {
				e.preventDefault();
				if($('#inquiry_code').val() == ""){
				showDangerToast_name_validation();	
				$('#inquiry_code').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=edit_inquiry_form",
							type: "post",
							data: $("#edit_inquiry_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#edit_inquiry_form")[0].reset();
								}else if($.trim(data) === 'INQUIRY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#edit_inquiry_form")[0].reset();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Updated Successfully");
								}else if($.trim(data) === 'INQUIRY EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#edit_inquiry_form").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("Inquiry code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#edit_inquiry_form")[0].reset();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Inquiry Created Successfully");
								}
                		} 
        			});
				}
			});
			$('#new_quotation').on('submit', function(e) {
				e.preventDefault();
				if($('#quotation_no').val() == ""){
				showDangerToast_name_validation();	
				$('#quotation_no').focus();	
				}else if($('#quotation_date').val() == ""){	
				showDangerToast_field_required();
				$('#quotation_date').focus();	
				}else if($('#quotation_taxable_amount').val() == ""){
				showDangerToast_field_required();
				$('#quotation_taxable_amount').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=new_quotation",
							type: "post",
							data: $("#new_quotation").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#inquiry_followup")[0].reset();
								}else if($.trim(data) === 'QUOTATION UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_quotation")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Quotation Updated Successfully");
								}else if($.trim(data) === 'QUOTATION EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_quotation").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("quotation code already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#new_quotation")[0].reset();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("quotation Created Successfully");
									setTimeout("windows.location.href = 'view_new_quotation.php';",1000);
								}
                		} 
        			});
				}
			});
	$('#status_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#status_name').val() == ""){
				showDangerToast_field_required();
				$('#status_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=calling_status",
							type: "post",
							data: $("#status_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#status_form")[0].reset();
								}else if($.trim(data) === 'STATUS UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#status_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Calling Status Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#status_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Calling Status Created Successfully");
								}
                		} 
        			});
				}
			});

		
		$('#state_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#state_name').val() == ""){
				showDangerToast_field_required();
				$('#state_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=state_name",
							type: "post",
							data: $("#state_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#state_form")[0].reset();
								}else if($.trim(data) === 'STATE UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#state_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("State Updated");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#state_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("State Created");
								}
                		} 
        			});
				}
			});

		
				$('#city_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#city_name').val() == ""){
				showDangerToast_field_required();
				$('#city_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=city_name",
							type: "post",
							data: $("#city_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#city_form")[0].reset();
								}else if($.trim(data) === 'CITY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#city_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("City Updated");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#city_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("City Created");
								}
                		} 
        			});
				}
			});


	$('#bank_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#bank_name').val() == ""){
				showDangerToast_field_required();
				$('#bank_name').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=bank",
							type: "post",
							data: $("#bank_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#bank_form")[0].reset();
								}else if($.trim(data) === 'BANK UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#bank_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Bank Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#bank_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Bank Created Successfully");
								}
                		} 
        			});
				}
			});

           $('#manpower_category').on('submit', function(e) {
				e.preventDefault();									   
				if($('#man_description').val() == ""){
				showDangerToast_field_required();
				$('#man_description').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=manpower_category",
							type: "post",
							data: $("#manpower_category").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#manpower_category")[0].reset();
								}else if($.trim(data) === 'MANPOWER CATEGORY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#manpower_category")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Category Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#manpower_category")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Category Created Successfully");
								}
                		} 
        			});
				}
			});

           $('#manpower').on('submit', function(e) {
				e.preventDefault();									   
				if($('#manpower_des').val() == ""){
				showDangerToast_field_required();
				$('#manpower_des').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=manpower",
							type: "post",
							data: $("#manpower").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#manpower")[0].reset();
								}else if($.trim(data) === 'MANPOWER CATEGORY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#manpower")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Manpower Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#manpower")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Manpower Created Successfully");
								}
                		} 
        			});
				}
			});


	$('#add_material_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#material_category').val() == ""){
				showDangerToast_field_required();
				$('#material_category').focus();	
				}else if($('#material_name').val() == ""){
				showDangerToast_field_required();
				$('#material_name').focus();	
				}else if($('#unit_name').val() == ""){
				showDangerToast_field_required();
				$('#unit_name').focus();	
				}else if($('#cum_val').val() == ""){
				showDangerToast_field_required();
				$('#cum_val').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=material_name",
							type: "post",
							data: $("#add_material_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#add_material_form")[0].reset();
								}else if($.trim(data) === 'MATERIAL MASTER UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_material_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("MATERIAL MASTER UPDATED");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_material_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("MATERIAL MASTER CREATED");
								}
                		} 
        			});
				}
			});
	$('#sub_category_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#material_category').val() == ""){
				showDangerToast_field_required();
				$('#material_category').focus();	
				}else if($('#sub_category').val() == ""){
				showDangerToast_field_required();
				$('#sub_category').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=sub_category",
							type: "post",
							data: $("#sub_category_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#sub_category_form")[0].reset();
								}else if($.trim(data) === 'SUB CATEGORY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sub_category_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sub Category Updated");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sub_category_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sub Category Created");
								}
                		} 
        			});
				}
			});

	$('#add_user_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#user_name').val() == ""){
				showDangerToast_field_required();
				$('#user_name').focus();	
				}else if($('#user_email').val() == ""){
				showDangerToast_field_required();
				$('#user_email').focus();	
				}else if($('#user_mobile').val() == ""){
				showDangerToast_field_required();
				$('#user_mobile').focus();	
				}else if($('#joining_date').val() == ""){
				showDangerToast_field_required();
				$('#joining_date').focus();	
				}else if($('#project_name').val() == ""){
				showDangerToast_field_required();
				$('#project_name').focus();	
				}else if($('#department').val() == ""){
				showDangerToast_field_required();
				$('#department').focus();	
				}else if($('#designation').val() == ""){
				showDangerToast_field_required();
				$('#designation').focus();	
				}else if($('#user_password').val() == ""){
				showDangerToast_field_required();
				$('#user_password').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_user",
							type: "post",
							data: $("#add_user_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_user_form")[0].reset();
									alertify.success("User Created Successfully");
									setTimeout("window.location.href='view_users.php';",2000);
								}
                		} 
        			});
				}
			});
	$('#jiqsfixtures').on('submit', function(e) {
				e.preventDefault();									   
				if($('#fixtures_description[1]').val() == ""){
				showDangerToast_field_required();
				$('#fixtures_description[1]').focus();	
				}else if($('#fixtures_uom[1]').val() == ""){
				showDangerToast_field_required();
				$('#fixtures_uom[1]').focus();	
				}else if($('#fixtures_unit_rate[1]').val() == ""){
				showDangerToast_code_validation();
				$('#fixtures_unit_rate[1]').focus();	
				}else if($('#fixtures_total_cost[1]').val() == ""){
				showDangerToast_code_validation();
				$('#fixtures_total_cost[1]').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=jiqsfixtures",
							type: "post",
							data: $("#jiqsfixtures").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#jiqsfixtures")[0].reset();
								}else if($.trim(data) === 'FIXTURES UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#jiqsfixtures")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Fixtures Updated Successfully");
								}else if($.trim(data) === 'FIXTURES EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#fixtures_unit_rate").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("fixtures already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#jiqsfixtures")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Fixtures Created Successfully");
								}
                		} 
        			});
				}
			});	
			$('#est_charges').on('submit', function(e) {
				e.preventDefault();									   
				var request;
							request = $.ajax({
							url: "crud.php?page=est_charges",
							type: "post",
							data: $("#est_charges").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#est_charges")[0].reset();
								}else if($.trim(data) === 'TESTING UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_charges")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Charges Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#est_charges")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Charges Created Successfully");
								}
                		} 
        			});
			});
			$('#site_visit').on('submit', function(e) {
				e.preventDefault();
				if($('#site_unit_days').val() == ""){
				showDangerToast_code_validation();
				$('#site_unit_days').focus();	
				}else if($('#site_no_of_person').val() == ""){					
				showDangerToast_code_validation();
				$('#site_no_of_person').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=site_visit",
							type: "post",
							data: $("#site_visit").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#site_visit")[0].reset();
								}else if($.trim(data) === 'SITE VISIT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#site_visit")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Site Vsit Updated Successfully");
								}else if($.trim(data) === 'SITE EXISTS'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#site_unit_days").focus();
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.error("site visit already exists");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#site_visit")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Site Visit Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#add_profile_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#role').val() == ""){
				showDangerToast_field_required();
				$('#role').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_profile",
							type: "post",
							data: $("#add_profile_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#add_profile_form")[0].reset();
									alertify.success("Profile Created Successfully");
								}
                		} 
        			});
				}
			});

	$('#company_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#company_name').val() == ""){
				showDangerToast_field_required();
				$('#company_name').focus();	
				}else if($('#company_code').val() == ""){
				showDangerToast_field_required();
				$('#company_code').focus();	
				}else if($('#company_number').val() == ""){
				showDangerToast_field_required();
				$('#company_number').focus();	
				}else if($('#landline').val() == ""){
				showDangerToast_field_required();
				$('#landline').focus();	
				}else if($('#pancard').val() == ""){
				showDangerToast_field_required();
				$('#pancard').focus();	
				}else if($('#gst_number').val() == ""){
				showDangerToast_field_required();
				$('#gst_number').focus();	
				}else if($('#register_date').val() == ""){
				showDangerToast_field_required();
				$('#register_date').focus();	
				}else if($('#address').val() == ""){
				showDangerToast_field_required();
				$('#address').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else if($('#company_email').val() == ""){
				showDangerToast_field_required();
				$('#company_email').focus();	
				}else if($('#website').val() == ""){
				showDangerToast_field_required();
				$('#website').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_company",
							type: "post",
							data: $("#company_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else if($.trim(data) === 'COMPANY UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#company_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Company Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#company_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Company Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#project_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#company').val() == ""){
				showDangerToast_field_required();
				$('#company').focus();	
				}else if($('#project_name').val() == ""){
				showDangerToast_field_required();
				$('#project_name').focus();	
				}else if($('#project_code').val() == ""){
				showDangerToast_field_required();
				$('#project_code').focus();	
				}else if($('#contact_person').val() == ""){
				showDangerToast_field_required();
				$('#contact_person').focus();	
				}else if($('#contact_number').val() == ""){
				showDangerToast_field_required();
				$('#contact_number').focus();	
				}else if($('#project_email').val() == ""){
				showDangerToast_field_required();
				$('#project_email').focus();	
				}else if($('#start_date').val() == ""){
				showDangerToast_field_required();
				$('#start_date').focus();	
				}else if($('#address').val() == ""){
				showDangerToast_field_required();
				$('#address').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=add_project",
							type: "post",
							data: $("#project_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else if($.trim(data) === 'PROJECT UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#project_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Project Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#project_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Project Created Successfully");
								}
                		} 
        			});
				}
			});
	$('#company_bank_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#company').val() == ""){
				showDangerToast_field_required();
				$('#company').focus();	
				}else if($('#bank_name').val() == ""){
				showDangerToast_field_required();
				$('#bank_name').focus();	
				}else if($('#account_number').val() == ""){
				showDangerToast_field_required();
				$('#account_number').focus();	
				}else if($('#account_type').val() == ""){
				showDangerToast_field_required();
				$('#account_type').focus();	
				}else if($('#ifsc_code').val() == ""){
				showDangerToast_field_required();
				$('#ifsc_code').focus();	
				}else if($('#bank_branch').val() == ""){
				showDangerToast_field_required();
				$('#bank_branch').focus();	
				}else if($('#bank_address').val() == ""){
				showDangerToast_field_required();
				$('#bank_address').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=company_bank",
							type: "post",
							data: $("#company_bank_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							$("#company_bank_form")[0].reset();
							alertify.error("Something Went Wrong");
								}else if($.trim(data) === 'BANK UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#company_bank_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Bank Updated Successfully");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#company_bank_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Bank Created Successfully");
								}
                		} 
        			});
				}
			});
		$('#edit_user_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#user_name').val() == ""){
				showDangerToast_field_required();
				$('#user_name').focus();	
				}else if($('#user_email').val() == ""){
				showDangerToast_field_required();
				$('#user_email').focus();	
				}else if($('#user_mobile').val() == ""){
				showDangerToast_field_required();
				$('#user_mobile').focus();	
				}else if($('#joining_date').val() == ""){
				showDangerToast_field_required();
				$('#joining_date').focus();	
				}else if($('#project_name').val() == ""){
				showDangerToast_field_required();
				$('#project_name').focus();	
				}else if($('#department').val() == ""){
				showDangerToast_field_required();
				$('#department').focus();	
				}else if($('#designation').val() == ""){
				showDangerToast_field_required();
				$('#designation').focus();	
				}else if($('#user_password').val() == ""){
				showDangerToast_field_required();
				$('#user_password').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=edit_user",
							type: "post",
							data: $("#edit_user_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									$("#designation").html(data.designation);
									alertify.success("User Updated Successfully");
									setTimeout("window.location.href='view_users.php';",2000);
								}
                		} 
        			});
				}
			});
		
		$('#edit_profile_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#role').val() == ""){
				showDangerToast_field_required();
				$('#role').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=edit_profile",
							type: "post",
							data: $("#edit_profile_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Profile Updated Successfully");
								}
                		} 
        			});
				}
			});
		
		$('#edit_kyc_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#user_name').val() == ""){
				showDangerToast_field_required();
				$('#user_name').focus();	
				}else if($('#user_email').val() == ""){
				showDangerToast_field_required();
				$('#user_email').focus();	
				}else if($('#user_mobile').val() == ""){
				showDangerToast_field_required();
				$('#user_mobile').focus();	
				}else if($('#joining_date').val() == ""){
				showDangerToast_field_required();
				$('#joining_date').focus();	
				}else if($('#project_name').val() == ""){
				showDangerToast_field_required();
				$('#project_name').focus();	
				}else if($('#department').val() == ""){
				showDangerToast_field_required();
				$('#department').focus();	
				}else if($('#designation').val() == ""){
				showDangerToast_field_required();
				$('#designation').focus();	
				}else if($('#user_password').val() == ""){
				showDangerToast_field_required();
				$('#user_password').focus();	
				}else if($('#status').val() == ""){
				showDangerToast_field_required();
				$('#status').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=edit_kyc",
							type: "post",
							data: $("#edit_kyc_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').hide("slow");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
							alertify.error("Something Went Wrong");
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("User Updated Successfully");
									setTimeout("window.location.href='view_employee.php';",2000);
								}
                		} 
        			});
				}
			});
		



		

		$('#change_password_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#user_password').val() == ""){
				alertify.error("Password Is Required");
				$('#user_password').focus();	
				}else{
				var request;
							request = $.ajax({
							url: "crud.php?page=change_password",
							type: "post",
							data: $("#change_password_form").serialize(),
							beforeSend: function(){
					        $('#loader').show("slow");
							$('#add_button').attr('disabled','true');
							$('#add_button').hide("fast");
							},
							success:function(data){ 
							if($.trim(data) === 'ERROR'){
								alertify.error("Something Went Wrong");
								$("#change_password_form")[0].reset();
								}else{
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									alertify.success("Profile Updated Successfully");
									setTimeout("window.location.href='dashboard.php';",1000);
									
								}
                		} 
        			});
				}
			});

		
	
});