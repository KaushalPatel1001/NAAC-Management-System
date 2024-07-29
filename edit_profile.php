<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php include("include/head.php");?>
<?php 
$id = $_REQUEST['id'];
$check_user = "SELECT * FROM `menu_profile` WHERE id='".$id."'";
$check_res_user = mysqli_query($conn,$check_user);
$check_row_user = mysqli_fetch_array($check_res_user);
?>
<script type="text/javascript" src="assets/script/crud.js"></script>
<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <a href="menu_profile.php" class="btn float_top waves-effect waves-light link_css" style="width:110px;">View Profile</a>

        
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body boxshadow">
                <form class="" id="edit_profile_form" novalidate>
                              <div class="row">
                                <div class="col-md-12 mb-12">
                                  <label for="validationCustom01">Role</label>
                                  <input type="text" class="form-control" id="role" autocomplete="off" value="<?php echo $check_row_user['role'];?>" name="role">
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
                      <th><input type="checkbox" id="ckbCheckAll" /> Top Menu</th>
                      <th><input type="checkbox" id="ckbCheckAll2" /> Add</th>
                      <th><input type="checkbox" id="ckbCheckAll3" /> Edit</th>
                      <th><input type="checkbox" id="ckbCheckAll4" /> Delete</th>
					  <th><input type="checkbox" id="ckbCheckAll5" /> Status</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
          <!-- end col -->
        </div>
							  
                              <button class="btn btn-outline-primary mb-2" id="add_button" type="submit">Update</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
							  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $check_row_user['id'];?>">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Updating...
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
            "ajax" : "fetch_data/get_profile_edit_menu.php?id=<?php echo $_REQUEST['id']; ?>",
         "lengthMenu": [[10, 25, 50,100,200, -1], [10, 25, 50,100,200, "All"]],
		 pagingType: "full"
           });
         });
</script>
<script>
	$(document).ready(function () {
    $("#ckbCheckAll").click(function () {
        $(".checkBoxClass").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll2").click(function () {
        $(".checkBoxClass2").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll3").click(function () {
        $(".checkBoxClass3").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll4").click(function () {
        $(".checkBoxClass4").prop('checked', $(this).prop('checked'));
    });
	$("#ckbCheckAll5").click(function () {
        $(".checkBoxClass5").prop('checked', $(this).prop('checked'));
    });
});
</script>
</body>
</html>
