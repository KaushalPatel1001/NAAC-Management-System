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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <a href="add_menu_profile.php" class="btn float_top waves-effect waves-light link_css add_data">Add Profile</a>
        
        <!-- end page title -->
        
							  <div class="row">
								  <div class="col-12">
									<div class="card">
									  <div class="card-body">
										<table id="datatable1" class="table table-bordered dt-responsive nowrap" data-page-length="200" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
										  <thead>
											<tr>
											  <th width="10%">Sr.No</th>
											  <th width="30%">Profile Name</th>
											  <th width="30%">Action</th>
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
            "ajax" : "fetch_data/get_profile.php",
         "lengthMenu": [[10, 25, 50,100,200, -1], [10, 25, 50,100,200, "All"]],
		 pagingType: "full"
           });
           
           $(document).on('click', '.delete_data', function(){
	  	 var checkstr =  confirm('are you sure you want to delete this?');
		 if(checkstr == true){
           var id = $(this).attr("id");
		   				$.ajax({  
							url: "delete_details.php?page=profile_name",
							type: "post",
							data: {id:id},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Profile Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Profile Not Deleted");
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
