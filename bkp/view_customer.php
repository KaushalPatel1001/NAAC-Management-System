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
<button type="button" class="btn float_top waves-effect waves-light add_data" style="width:120px;" data-toggle="modal" data-target=".bs-example-modal-xl">Add Clients</button>

        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item active">
                  </li>
                  <div class="modal fade bs-example-modal-xl" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Clients</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="add_clients_form" novalidate>
                              <div class="row">
								<div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Client Name</label>
                                  <input type="text" class="form-control" id="client_name" name="client_name" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Date of Birth</label>
                                  <input type="text" class="form-control" id="client_dob" name="client_dob" autocomplete="off" placeholder="dd-mm-yyyy">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Aadhar Number</label>
                                  <input type="text" class="masked form-control" id="client_aadhar" name="client_aadhar" autocomplete="off" placeholder="XXXXXXXXXXXX" pattern="\d{4}\d{4}\d{4}">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Pancard</label>
                                  <input type="text" class="masked form-control" id="client_pancard" name="client_pancard" autocomplete="off" placeholder="XXXXXXXXXX" pattern="\w\w\w\w\w\d\d\d\d\w" data-charset="_____XXXX_">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">GST Number</label>
                                  <input type="text" class="form-control" id="client_gst" name="client_gst" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Mobile Number</label>
                                  <input type="text" class="form-control" id="client_mobile" name="client_mobile" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Whatsapp Number</label>
                                  <input type="text" class="form-control" id="client_whatsapp" name="client_whatsapp" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Email Id</label>
                                  <input type="text" class="form-control" id="client_email" name="client_email" autocomplete="off">
                                </div>
								<div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Address</label>
                                  <input  type="text" class="form-control" id="client_address_1" name="client_address_1">
                                </div>
								<div class="col-md-3 mb-3">
                              <label for="validationCustom01">Client Type</label>
                              <select class="custom-select" name="client_type" id="client_type">
									<option value="">-Select-</option>
											<?php 
											$select_query = "select * from client_type WHERE status = '1'";
											$process = mysqli_query($conn,$select_query);
											while ($fetch = mysqli_fetch_array($process)){
											$id = $fetch['id'];
											$client_type = $fetch['client_type'];
											?>
									<option value="<?php echo $id;?>"><?php echo $client_type;?></option>
									<?php } ?>
								</select>
                            </div>
								<div class="col-md-3 mb-3">
                                  <label for="validationCustom01">State</label>
								<select class="custom-select" name="state" id="state">
									<option value="">-Select-</option>
											<?php 
											$select_query = "select * from state WHERE status = '1'";
											$process = mysqli_query($conn,$select_query);
											while ($fetch = mysqli_fetch_array($process)){
											$state_id = $fetch['id'];
											$state_name = $fetch['state_name'];
											?>
									<option value="<?php echo $state_name;?>"><?php echo $state_name;?></option>
									<?php } ?>
								</select>
                                </div>
								<div class="col-md-3 mb-3">
                              <label for="validationCustom01">City</label>
                             <select class="custom-select" name="city" id="city">
									<option value="">-Select-</option>
											<?php 
											$select_query = "select * from city WHERE status = '1'";
											$process = mysqli_query($conn,$select_query);
											while ($fetch = mysqli_fetch_array($process)){
											$state_id = $fetch['id'];
											$city_name = $fetch['city_name'];	
											?>
									<option value="<?php echo $city_name;?>"><?php echo $city_name;?></option>
									<?php } ?>
								</select>
                            </div>
								<div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Country</label>
                                  <input type="text" class="form-control" id="country" name="country" value="INDIA">
                                </div>
								<div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
                                    <option value="">-Select-</option>
                                    <option value="1">ACTIVE</option>
                                    <option value="0">INACTIVE</option>
                                  </select>
                                </div>

                              </div>
							  <input type="hidden" class="form-control" id="executive_name" name="executive_name" value="<?php echo $_SESSION['id']; ?>">
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
                      <th>Client Id</th>
                      <th>Customer Name</th>
                      <th>Client Mobile</th>
                      <th>Client Email</th>
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
            "ajax" : "fetch_data/get_client.php?id=<?php echo $_SESSION['id'];?>",
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
                url:"fetch/fetch_client.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#client_name').val(data.client_name);
				 	 $('#customer_id').val(data.customer_id);
				 	 $('#client_mobile').val(data.client_mobile);
					 $('#client_dob').val(data.client_dob);
					 $('#client_gst').val(data.client_gst);
					 $('#client_whatsapp').val(data.client_whatsapp);
				 	 $('#client_email').val(data.client_email);
				 	 $('#client_aadhar').val(data.client_aadhar);
				 	 $('#client_pancard').val(data.client_pancard);
				 	 $('#client_address_1').val(data.client_address_1);
					 $('#client_type').val(data.client_type);
				 	 $('#city').val(data.city);
				 	 $('#country').val(data.country);
				 	 $('#state').val(data.state);
					 $('#status').val(data.status);
					 $('#id').val(data.id); 
					 $('#add_button').text("update"); 
					 $('#menu_manage').modal('show');
                }
           });  
		   
      });
	  $(document).on('click', '.change_status', function(){ 
           var id = $(this).attr("id");
		   var value = $(this).attr("value"); 
           				$.ajax({  
							url: "change_status.php?page=client",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Client Enabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Client Disabled");
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
  $("#client_dob").datepicker({
    format: "dd-mm-yyyy",
	todayHighlight: true,
    autoclose: true
    })
</script>  
</body>
</html>
