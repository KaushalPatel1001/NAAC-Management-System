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
        <a href="view_users.php" class="btn float_top btn-md waves-effect waves-light">View Users</a>
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body boxshadow">
                <form class="" id="add_user_form" novalidate>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Full Name</label>
                                  <input type="text" class="form-control" id="user_name" placeholder="Full Name" autocomplete="off" name="user_name">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Email</label>
                                  <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Enter Email" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Mobile</label>
                                  <input type="text" class="form-control" id="user_mobile" placeholder="Mobile" name="user_mobile" autocomplete="off">
                                </div>
                              </div>
							  <div class="row">
							    <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Joining Date</label>
									<div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Joining Date" name="joining_date" id="joining_date" autocomplete="off">
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
                                    	<option value="<?php echo $parent_id;?>"><?php echo $department_name;?></option>
                                    	<?php } ?>
                                  </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Designation</label>
                                  <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Password</label>
                                  <input type="text" class="form-control" id="user_password" name="user_password" placeholder="Enter Password" autocomplete="off">
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
                                    <option value="">-Select-</option>
                                    <option value="1">ACTIVE</option>
                                    <option value="0">INACTIVE</option>
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
                                    	<option value="<?php echo $parent_id;?>"><?php echo $role;?></option>
                                    	<?php } ?>
                                  </select>
                                </div>
								<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Company Name</label>
								  <select class="custom-select choices-multiple-remove-button" multiple="multiple" name="project_name[]" id="project_name">
                                    <?php 
										$select_query = "select * from company WHERE status = '1'";
										$process = mysqli_query($conn,$select_query);
										while ($fetch = mysqli_fetch_array($process)){
										$parent_id = $fetch['id'];
										$project_name = $fetch['company_name'];
									?>
                                    <option value="<?php echo $project_name;?>"><?php echo $project_name;?></option>
                                    <?php } ?>
                                  </select>
                                </div>
								

                              </div>
							  
							  <div class="row">
         
		  <div class="col-lg-12">
                                        
                                       <div id="txtHint">
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
                                    </div>
          <!-- end col -->
        </div>
							  
                              <button class="btn float" id="add_button" type="submit">Submit</button>
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
