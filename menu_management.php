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
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0 font-size-18">Manage Menu</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item active">
                    <button type="button" class="btn btn-success btn-md waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add Menu</button>
                  </li>
                  <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Menu</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="menu_management_form" novalidate>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Menu name</label>
                                  <input type="text" class="form-control" id="menu_name" placeholder="Menu name" name="menu_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label>Parent Menu</label>
                                  <select class="custom-select" name="parent_id" id="parent_id" required>
                                    <option value="0">-Select-</option>
                                    <?php 
$select_query = "select * from menu_management where parent_id = '#' and status = '1'";
$process = mysqli_query($conn,$select_query);
while ($fetch = mysqli_fetch_array($process)){
$parent_id = $fetch['id'];
$menu_name = $fetch['menu_name'];
?>
                                    <option value="<?php echo $parent_id; ?>"><?php echo $menu_name;?></option>
                                    <?php } ?>
                                  </select>
                                  <div class="invalid-feedback">Example invalid custom select feedback</div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Link</label>
                                  <input type="text" class="form-control" id="link" name="link" placeholder="Link" required>
                                  <div class="valid-feedback"> Looks good! </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
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
                      <th>Menu Name</th>
                      <th>Parent Menu</th>
                      <th>Link</th>
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
            "ajax" : "fetch_data/get_menu.php",
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
                url:"fetch/fetch_menu.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#menu_name').val(data.menu_name);
                     $('#parent_id').val(data.parent_id);
					 $('#link').val(data.link);
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
		    var value = $(this).attr("rel");
		   				$.ajax({  
							url: "delete_details.php?page=menu_manage",
							type: "post",
							data: {id:id, value:value},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Menu Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Menu Not Deleted");
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
							url: "change_status.php?page=menu_management",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Menu Enabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Menu Disabled");
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
  
</body>
</html>
