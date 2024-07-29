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
<button type="button" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add City</button>
        <form class="" id="ndt_ut" novalidate>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Ut Type</label>
                                  <select class="custom-select" name="ut_type" id="ut_type" required>
                                    <option value="">-Select-</option>
                                    <option value="1">Running Meter</option>
                                    <option value="0">Day</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control number" id="unit_rate" name="unit_rate">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control number" id="total_cost" name="total_cost">
                                </div>
                 
                              </div>
                <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
        <!-- end page title -->
        
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
 
 	
  
</body>
</html>
