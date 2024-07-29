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
	$('#category_form').on('submit', function(e) {
				e.preventDefault();									   
				if($('#Category_name').val() == ""){
				showDangerToast_field_required();
				$('#Category_name').focus();	
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
				if($('#group_name').val() == ""){
				showDangerToast_field_required();
				$('#group_name').focus();	
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

	$('#sub_group_form').on('submit', function(e) {
													   
				if($('#sub_grp_name').val() == ""){
				e.preventDefault();	
				showDangerToast_field_required();
				$('#sub_grp_name').focus();	
				}
				if($('#sub_grp_code').val() == ""){
				e.preventDefault();	
				showDangerToast_field_required();
				$('#sub_grp_code').focus();	
				}
				else if($('#status').val() == ""){
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
								}else if($.trim(data) === 'GROUP UPDATED'){
									$('#loader').hide("slow");
									$('#add_button').show("slow");
									$("#sub_group_form")[0].reset();
									$("#menu_manage").modal("hide");
									var table = $('#datatable1').DataTable();
									table.ajax.reload(null, false);
									alertify.success("Sub-Group Updated Successfully");
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


	$('#shape').on('submit', function(e) {
				e.preventDefault();									   
				if($('#shape_name').val() == ""){

				showDangerToast_field_required();
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

	$('#uom').on('submit', function(e) {
				e.preventDefault();									   
				if($('#uom_name').val() == ""){
					
				showDangerToast_field_required();
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
				if($('#service_code').val() == ""){
					
				showDangerToast_field_required();
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
				if($('#activity_code').val() == ""){
					
				showDangerToast_field_required();
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
				if($('#weld_code').val() == ""){
					
				showDangerToast_field_required();
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