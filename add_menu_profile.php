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
        <a href="menu_profile.php" class="btn float_top waves-effect waves-light link_css" style="width:120px;">View Profile</a>
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body boxshadow">
                <form class="" id="add_profile_form" novalidate>
                              <div class="row">
								<div class="col-md-12 mb-12">
                                  <label>Profile Name</label>
									<input type="text" class="form-control" id="role" name="role" value="">
								</div>
                              </div>
							  
		<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" data-page-length="200" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Menu Name</th>
                      <th>Top Menu</th>
                      <th>Add</th>
                      <th>Edit</th>
                      <th>Delete</th>
					  <th>Status</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
       </div>
          <!-- end col -->
      </div>
							  
                              <button class="btn btn-outline-primary mb-2" id="add_button" type="submit">Submit</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
							  </button>
                            </form>
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

<script>
  $("#joining_date").datepicker({
    format: "yyyy-mm-dd",
	todayHighlight: true,
    autoclose: true
    })
</script>
<script type="text/javascript" language="javascript" >
         $(document).ready(function(){
           var dataTable = $('#datatable1').DataTable({
            "ajax" : "fetch_data/get_menu_user.php",
         "lengthMenu": [[10, 25, 50,100,200, -1], [10, 25, 50,100,200, "All"]],
		 pagingType: "full"
           });
         });
</script>
</body>
</html>
