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
<button type="button" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-xl" style="width:150px;">Add Sub Services</button>
        
		<div class="modal fade bs-example-modal-xl" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Sub Services</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="sub_category_form" novalidate>
                              <div class="row">
							  <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Material Category</label>
                                  <select class="custom-select" name="material_category" id="material_category" onChange="change_text(this);">
                                    <option value="">-Select-</option>
											<?php 
											$select_query = "select * from material_category WHERE status = '1'";
											$process = mysqli_query($conn,$select_query);
											while ($fetch = mysqli_fetch_array($process)){
											$category_id = $fetch['id'];
											$category_name = $fetch['category_name'];
											?>
									<option value="<?php echo $category_id;?>"><?php echo $category_name;?></option>
									<?php } ?>

                                  </select>

                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Sub Service Name</label>
                                  <input type="text" class="form-control" id="sub_category" name="sub_category">
                                </div>
								<div class="col-md-4 mb-3">
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
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Main Category</th>
                      <th>Sub Category</th>
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
            "ajax" : "fetch_data/get_sub_category.php",
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
                url:"fetch/fetch_sub_category.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#sub_category').val(data.sub_category);
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
							url: "delete_details.php?page=sub_category",
							type: "post",
							data: {id:id},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Sub Category Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Sub Category Not Deleted");
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
							url: "change_status.php?page=sub_category",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Sub Category Enabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Sub Category Disabled");
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
