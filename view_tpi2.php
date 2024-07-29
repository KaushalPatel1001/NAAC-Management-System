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
                  <h4 class="mb-0 font-size-18">Intrnal Practical</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                        <button type="button" class="btn btn-success btn-md waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add Student</button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Student</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form class="" id="tpi2" novalidate>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Enrollment No</label>
                                  <input type="text" class="form-control" id="enrollment_no" placeholder="EN_NO" name="enrollment_no" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Totals Marks</label>
                                  <input type="text" class="form-control" id="total_marks" placeholder="Total_Marks" name="total_marks" onblur="validate_name_Input(this)">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Given Marks</label>
                                  <input type="text" class="form-control" id="given_marks" placeholder="Given_Marks" name="given_marks" onblur="validate_name_Input(this)">
                                </div>
                                 
                               <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status">
                                    <option value="">-Select-</option>
                                    <option value="1">ACTIVE</option>
                                    <option value="0">INACTIVE</option>
                                  </select>
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
                      <th>Enrollment No</th>
                      <th>Total Marks</th>               
                      <th>Status</th>
                      <th>Given Marks </th>
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
            "ajax" : "fetch_data/get_tpi2.php",
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
                url:"fetch/fetch_tpi2.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#enrollment_no').val(data.enrollment_no);
           $('#total_marks').val(data.total_marks);
					 $('#status').val(data.status);
					 $('#id').val(data.id); 
           $('#given_marks').val(data.given_marks);
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
							url: "delete_details.php?page=tpi2",
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
							url: "change_status.php?page=tpi2",
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
