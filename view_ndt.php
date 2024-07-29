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
                                  <select class="custom-select" name="ut_type" id="ut_type">
                                    <option value="">-Select-</option>
                                    <option value="">Running Meter</option>
                                    <option value="">Day</option>
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

                            <form class="" id="ndt_pt" novalidate>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Pt Type</label>
                                  <select class="custom-select" name="pt_type" id="pt_type" required>
                                    <option value="">-Select-</option>
                                    <option value="">Running Meter</option>
                                    <option value="">Day</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control number" id="pt_unit_rate" name="pt_unit_rate">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control number" id="pt_total_cost" name="pt_total_cost">
                                </div>

                              </div>
                <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>

                    <form class="" id="ndt_vt" novalidate>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Vt Type</label>
                                  <select class="custom-select" name="vt_type" id="vt_type" required>
                                    <option value="">-Select-</option>
                                    <option value="">Running Meter</option>
                                    <option value="">Day</option>
                                  </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control number" id="vt_unit_rate" name="vt_unit_rate">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control number" id="vt_total_cost" name="vt_total_cost">
                                </div>
                 
                              </div>
                <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>

                          <form class="" id="ndt_rt" novalidate>
                              <div class="row">
                                <div class="col-md-3 mb-3">

                                  <label for="validationCustom01">Fix Visit Charge</label>
                                  <input type="text" class="form-control number" id="rt_fix_visit_charge" name="rt_rt_fix_visit_charge">
                                </div>
                              </div>
                              <div class="row">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Film Charge</label>
                                   
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Spot Size</label>
                                  <select class="custom-select" name="rt_spot_size" id="rt_spot_size" required>
                                    <option value="">-Select-</option>                         
                                    <option value="">6</option>
                                    <option value="">12</option>
                                    <option value="">18</option>
                                  </select>
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">No.Of Spot</label>
                                  <input type="text" class="form-control number" id="rt_no_of_spot" name="rt_no_of_spot">
                                </div>
                                <div class="col-md-2 mb-3">

                                  <label for="validationCustom01">Unit Value</label>
                                  <input type="text" class="form-control number" id="rt_unit_value" name="rt_unit_value">
                                </div>

                                <div class="col-md-2 mb-3">

                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control number" id="rt_total_cost" name="rt_total_cost">
                                </div>
                 
                              </div>
                <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                       
                       <form class="" id="ndt_paut" novalidate>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Paut Type</label>
                                  <select class="custom-select" name="ut_type" id="ut_type" required>
                                    <option value="">-Select-</option>
                                    <option value="">Running Meter</option>
                                    <option value="">Day</option>
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
 
 <script type="text/javascript">
   function toggleInputs() {
    var testingType = document.getElementById("testing_type").value;
    var inputFields = document.getElementsByClassName("input-fields");
    
    if (testingType === "Yes") {
        for (var i = 0; i < inputFields.length; i++) {
            inputFields[i].style.display = "block";
        }
    } else {
        for (var i = 0; i < inputFields.length; i++) {
            inputFields[i].style.display = "none";
        }
    }
}
</script>
 	
  
</body>
</html>
