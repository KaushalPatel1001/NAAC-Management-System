<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php include("include/head.php");?>
<?php 
$id = $_REQUEST['id'];
$check_user = "SELECT * FROM `tbl_users` WHERE id='".$id."'";
$check_res_user = mysqli_query($conn,$check_user);
$check_row_user = mysqli_fetch_array($check_res_user);
$project_array     = explode(",", $check_row_user['project_name']);
?>
<link rel="stylesheet" href="assets/css/choices.min.css">
<script src="assets/js/choices.min.js"></script>
<script type="text/javascript" src="assets/script/crud.js"></script>

<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
       <a href="view_users.php" class="btn waves-effect waves-light float_top">View Users</a>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body boxshadow">
                <form class="" id="edit_user_form" novalidate>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Full Name</label>
                                  <input type="text" class="form-control" id="user_name" placeholder="Full Name" autocomplete="off" value="<?php echo $check_row_user['user_name'];?>" name="user_name">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Email</label>
                                  <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter Email" autocomplete="off" value="<?php echo $check_row_user['user_email'];?>">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Mobile</label>
                                  <input type="text" class="form-control" id="user_mobile" placeholder="Mobile" name="user_mobile" value="<?php echo $check_row_user['user_mobile'];?>" autocomplete="off">
                                </div>
                              </div>
							  <div class="row">
							    <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Joining Date</label>
									<div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Joining Date" value="<?php echo $check_row_user['joining_date'];?>" name="joining_date" id="joining_date">
                                     	<div class="input-group-append">
                                     		<span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                      	</div>
                                     </div>                                </div>
                                
								<div class="col-md-4 mb-3">
                                  <label>Department</label>
                                  <select class="custom-select" name="department" id="department">
                                    <option value="">-Select-</option>
                                    <?php 
$select_query = "select * from department WHERE status = '1'";
$process = mysqli_query($conn,$select_query);
while ($fetch = mysqli_fetch_array($process)){
$parent_id = $fetch['id'];
$department_name = $fetch['department_name'];
?>
                                    <option value="<?php echo $parent_id;?>" <?php if($check_row_user['department'] == $parent_id){echo "selected";} ?>><?php echo $department_name;?></option>
                                    <?php } ?>
                                  </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Designation</label>
                                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" autocomplete="off" value="<?php echo $check_row_user['designation'];?>">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Password</label>
                                  <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Enter Password" autocomplete="off" value="<?php echo $check_row_user['user_password'];?>">
								  <input type="hidden" class="form-control" id="old_password" name="old_password" value="<?php echo $check_row_user['user_password'];?>">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
                                    <option value="">-Select-</option>
                                    <option value="1" <?php if($check_row_user['status'] == '1'){echo "selected";} ?>>ACTIVE</option>
                                    <option value="0" <?php if($check_row_user['status'] == '0'){echo "selected";} ?>>INACTIVE</option>
                                  </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label>Menu Profile</label>
                                  <select class="custom-select" name="role" id="role" onChange="showUser(this.value);">
                                    <option value="">-Select-</option>
										<?php 
										$select_query = "select * from menu_profile";
										$process = mysqli_query($conn,$select_query);
										while ($fetch = mysqli_fetch_array($process)){
										$parent_id = $fetch['id'];
										$role = $fetch['role'];
										?>
                                    	<option value="<?php echo $parent_id;?>" <?php if($check_row_user['role'] == $parent_id){echo "selected";} ?>><?php echo $role;?></option>
                                    	<?php } ?>
                                  </select>
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Company Name</label>
                                  
                                    <?php 
										$select_query = "select * from company WHERE status = '1'";
										$process = mysqli_query($conn,$select_query);
										while ($fetch = mysqli_fetch_array($process)){
										$data[] = $fetch['company_name'];
										}
										$com = trim($check_row_user['project_name']);
										$com = explode(',', $com);
										$all_values = $data;
									?>
									<select class="custom-select choices-multiple-remove-button" multiple="multiple" name="project_name[]" id="project_name" >
                                    <?php
										  foreach($all_values as $option_value ) {
											$selected = '';
											if(in_array($option_value, $com)){
											  $selected = "selected";
											}?>
											<option <?php echo $selected; ?> ><?php echo $option_value; ?></option><?php
										  } ?>
                                  </select>
                                </div>
								<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $check_row_user['id'];?>">
                              </div>
							  
							  <div class="row">
          <div class="col-12">
                <div id="txtHint">
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
          </div>
          <!-- end col -->
        </div>
							  
                              <button class="btn btn-outline-primary mb-2 float" id="add_button" type="submit">Submit</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
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
            "ajax" : "fetch_data/get_user_edit_menu.php?id=<?php echo $_REQUEST['id'];?>",
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

function showUser(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else { // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;

                }
            }
            xmlhttp.open("GET", "get_templete.php?q=" + str, true);
            xmlhttp.send();
        }

</script>

</body>
</html>
