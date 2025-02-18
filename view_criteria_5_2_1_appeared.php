<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<!doctype html>
<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 font-size-18">Criteria 5.2.1 (Apperead)</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                        <button type="button" class="btn btn-success btn-md waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add </button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form class="" id="criteria_5_2_1_appeared" novalidate>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">academic_year</label>
                                  <input type="text" class="form-control" id="academic_year" placeholder="academic_year" name="academic_year" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">name_of_the_capability_enhancement_scheme</label>
                                  <input type="text" class="form-control" id="name_of_the_capability_enhancement_scheme" placeholder="name_of_the_capability_enhancement_scheme" name="name_of_the_capability_enhancement_scheme" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">name_of_department</label>
                                  <input type="text" class="form-control" id="name_of_department" placeholder="name_of_department" name="name_of_department" onblur="validate_name_Input(this)">
                                </div>

                                 <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">date_of_implementation</label>
                                  <input type="text" class="form-control" id="date_of_implementation" placeholder="date_of_implementation" name="date_of_implementation" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">name_of_college</label>
                                  <input type="text" class="form-control" id="name_of_college" placeholder="name_of_college" name="name_of_college" onblur="validate_name_Input(this)">
                                </div>
                                 <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">number_of_students_enrolled</label>
                                  <input type="text" class="form-control" id="number_of_students_enrolled" placeholder="number_of_students_enrolled" name="number_of_students_enrolled" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">name_of_agencies_involved_with_their_contact_details</label>
                                  <input type="text" class="form-control" id="name_of_agencies_involved_with_their_contact_details" placeholder="name_of_agencies_involved_with_their_contact_details" name="name_of_agencies_involved_with_their_contact_details" onblur="validate_name_Input(this)">
                                </div>

                                 <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">proof_no</label>
                                  <input type="text" class="form-control" id="proof_no" placeholder="proof_no" name="proof_no" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">remark</label>
                                  <input type="text" class="form-control" id="remark" placeholder="remark" name="remark" onblur="validate_name_Input(this)">
                                </div>
                              
                               

                              </div>
                <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                              </div>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
				  
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>academic_year</th>
                      <th>name_of_the_capability_enhancement_scheme</th>
                      <th>name_of_department</th>
                      <th>date_of_implementation</th>
                      <th>name_of_college</th>
                      <th>number_of_students_enrolled</th>
                      <th>name_of_agencies_involved_with_their_contact_details</th>
                      <th>proof_no</th>
                      <th>remark</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include("include/footer.php"); ?>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php include("include/rightsidebar.php"); ?>
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<?php include('include/javascript_library.php');?>
<script type="text/javascript" language="javascript" >
         $(document).ready(function(){
           var dataTable = $('#datatable1').DataTable({
            "ajax" : "fetch_data/get_criteria_5_2_1_appeared.php",
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		 pagingType: "full"
           });
         });
      </script>
<script>
$(document).ready(function(){ 
	$(document).on('click', '.edit_data', function(){ 
           var id = $(this).attr("id");
           $.ajax({  
                url:"fetch/fetch_criteria_5_2_1_appeared.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#academic_year').val(data.academic_year);
           $('#name_of_the_capability_enhancement_scheme').val(data.name_of_the_capability_enhancement_scheme);
           $('#name_of_department').val(data.name_of_department);
           $('#date_of_implementation').val(data.date_of_implementation);
           $('#name_of_college').val(data.name_of_college);
           $('#number_of_students_enrolled').val(data.number_of_students_enrolled);
           $('#name_of_agencies_involved_with_their_contact_details').val(data.name_of_agencies_involved_with_their_contact_details);
           $('#proof_no').val(data.proof_no);
           $('#remark').val(data.remark);
					 $('#id').val(data.id); 
					 $('#add_button').text("Update"); 
					 $('#menu_manage').modal('show');
           $('#myLargeModalLabel').text("Update Record");
                }
           });  
		   
      });
	  
	  $(document).on('click', '.delete_data', function(){
	  	 var checkstr =  confirm('are you sure you want to delete this?');
		 if(checkstr == true){
           var id = $(this).attr("id");
		   				$.ajax({  
							url: "delete_details.php?page=criteria_5_2_1_appeared",
							type: "post",
							data: {id:id},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Record Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Record Not Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}
                		}
           }); 
		   }else{
		   return false;
		   } 
		   
      });
	  
	  $(document).on('click', '.change_status', function(){ 
           var id = $(this).attr("id");
		   var value = $(this).attr("value"); 
           				$.ajax({  
							url: "change_status.php?page=criteria_5_2_1_appeared",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Record Enabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Record Disabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}
                		}
           });  
		   
      }); 
	   
});

$('#menu_manage').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
	$('#add_button').text("add");
	$('#id').val("");
})

function validate_num_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[a-zA-Z0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }

    function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      // if (inputValue !== '' && !/^[A-Za-z\s]+$/.test(inputValue)) {
      //     showDangerToast_name_validation();
      //     inputField.value = ''; // Clear the input field
      //     inputField.focus(); // Set focus back to the input field
      // }
      if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
        showDangerToast_name_validation();
        inputField.value = ''; //inputValue Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }
</script>
</body>
</html>
<!-- 
<th>name_of_department</th>
                      <th>date_of_implementation</th>
                      <th>name_of_college</th>
                      <th>number_of_students_enrolled</th>
                      <th>name_of_agencies_involved_with_their_contact_details</th>
                      <th>proof_no</th>
                      <th>remark</th>
                      
-->