<?php 
session_start();
if(!isset($_SESSION['id']))
{
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<?php include("include/head.php");?>

<script type="text/javascript" src="assets/script/crud.js"></script>
<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
<button type="button" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-xl" style="width:120px;">Add Company</button>
		<div class="modal fade bs-example-modal-xl" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Company</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="company_form" novalidate>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Company Name</label>
                                  <input type="text" class="form-control" id="company_name" name="company_name" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Company Code</label>
                                  <input type="text" class="form-control" id="company_code" name="company_code" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Pancard</label>
                                  <input type="text" class="form-control" id="pancard" name="pancard" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">GST Number</label>
                                  <input type="text" class="form-control" id="gst_number" name="gst_number" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Registration Date</label>
                                  <input type="text" class="form-control" id="register_date" name="register_date" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Email Address</label>
                                  <input type="text" class="form-control" id="company_email" name="company_email" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Contact Number</label>
                                  <input type="number" class="form-control" id="company_number" name="company_number" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Phone Number</label>
                                  <input type="text" class="form-control" id="landline" name="landline" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Website</label>
                                  <input type="text" class="form-control" id="website" name="website" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
                                    <option value="">-Select-</option>
                                    <option value="1">ACTIVE</option>
                                    <option value="0">INACTIVE</option>
                                  </select>
                                </div>
                                <div class="col-md-8 mb-3">
                                  <label for="validationCustom01">Registered Address</label>
                                  <textarea class="form-control" id="address" name="address" autocomplete="off"></textarea>
                                </div>
                              </div>
							  <input type="hidden" name="id" id="id" />
                              <button class="btn btn-success" id="add_button" type="submit">Submit</button>
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
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Company Name</th>
                      <th>Status</th>
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
            "ajax" : "fetch_data/get_company.php",
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
                url:"fetch/fetch_company.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#company_name').val(data.company_name);
				 	 $('#company_code').val(data.company_code);
				 	 $('#company_number').val(data.company_number);
				 	 $('#landline').val(data.landline);
				 	 $('#pancard').val(data.pancard);
				 	 $('#gst_number').val(data.gst_number);
				 	 $('#register_date').val(data.register_date);
				 	 $('#address').val(data.address);
					 $('#company_email').val(data.company_email);
					 $('#website').val(data.website);
					 $('#status').val(data.status);
					 $('#id').val(data.id); 
					 $('#add_button').text("update"); 
					 $('#menu_manage').modal('show');
                }
           });  
		   
      });
	  $(document).on('click', '.delete_data', function(){
	  	 var checkstr =  confirm('are you sure you want to delete this?');
		 if(checkstr == true){
           var id = $(this).attr("id");
		   				$.ajax({  
							url: "delete_details.php?page=company",
							type: "post",
							data: {id:id},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Company Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Company Not Deleted");
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
							url: "change_status.php?page=company",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Company Is Active Now");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Company Is Inactive");
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
</script>	
 <script>
  $("#register_date").datepicker({
    format: "yyyy-mm-dd",
	todayHighlight: true,
    autoclose: true
    })
</script> 
</body>
</html>
