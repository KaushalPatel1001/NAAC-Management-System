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
              <h4 class="mb-0 font-size-18">Manage Users</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item active">
                    <a href="add_user.php" class="btn btn-success btn-md waves-effect waves-light link_css add_data">Add Users</a>
                  </li>
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
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Joining Date</th>
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
         "ajax" : "fetch_data/get_users.php",
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		 pagingType: "full"
           });
         });
      </script>
<script>
$(document).ready(function(){ 
	  $(document).on('click', '.change_status', function(){ 
	       var id = $(this).attr("id");
		   var value = $(this).attr("value"); 
           				$.ajax({  
							url: "change_status.php?page=users",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("User Active");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("User Inactive");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}
                		}
           });  
		   
      });
	  $(document).on('click', '.delete_data', function(){
	  	 var checkstr =  confirm('are you sure you want to delete this?');
		 if(checkstr == true){
           var id = $(this).attr("id");
		   				$.ajax({  
							url: "delete_details.php?page=users",
							type: "post",
							data: {id:id},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("User Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("User Not Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}
                		}
           }); 
		   }else{
		   return false;
		   } 
		   
      }); 
});

</script>	
  
</body>
</html>
