<?php 
session_start();
if(!isset($_SESSION['id']))
{
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- Start Page -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                <button type="button" onclick="window.location='add_product.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">Add Product</button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form class="" id="category_form" novalidate>
                                  <div class="row">
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Product Code</label>
                                      <input type="text" class="form-control" id="pro_code" placeholder="Product Code" name="pro_code" onblur="validate_num_Input(this)">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Product Name</label>
                                      <input type="text" class="form-control" id="pro_name" placeholder="Product name" name="pro_name" onblur="validate_name_Input(this)">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Material code</label>
                                      <input type="text" class="form-control" id="mat_code" placeholder="Material Code" name="mat_code">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Technical Specifications</label>
                                      <!-- <input type="text" class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec" onblur="validate_name_Input(this)"> -->
                                      <textarea class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec" rows="1" cols="50" onblur="validate_name_Input(this)"></textarea>
                                    </div>  

                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Select Category</label>
                                      <select name="cat_code" id="cat_code" class="custom-select" required>
                                       <option value="">Select Category</option>
                                       <?php
                                       $query = "SELECT id,cat_name FROM mst_category"; 
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $catcode){
                                     ?>
                                        <option value="<?php echo $catcode["id"];?>"><?php echo $catcode["cat_name"];?></option>
                                        <?php  
                                         }
                                     ?>
                                    </select>
                                  </div> 

                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01" id = "gs">Select Group</label>
                                       <select name="grp_code" id="grp_code" class="custom-select">
                                        <option value="">Select Group</option>
                                    </select>
                                  </div>

                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01" id = "sg">Select Sub-Group</label>
                                       <select name="sub_grp_code" id="sub_grp_code" class="custom-select">
                                        <option value="">Select Sub-Group</option>
                                    </select>
                                  </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">HSN</label>
                                      <input type="text" class="form-control" id="hsn" placeholder="HSN" name="hsn">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">GST Rate</label>
                                      <input type="text" class="form-control" id="gst_rate" placeholder="GST Rate" name="gst_rate">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Purchase UOM</label>
                                       <select name="purchase_uom" id="purchase_uom" class="custom-select">
                                       <option value="">Select Purchase UOM</option>
                                       <?php 
                                       $query = "SELECT id,uom_name FROM uom";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $pur_uom){
                                     ?>
                                        <option value="<?php echo $pur_uom["id"];?>"><?php echo $pur_uom["uom_name"];?></option>
                                        <?php 
                                        }
                                     ?>
                                    </select>
                                  </div>
                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Inventory UOM</label>
                                       <select name="inventory_uom" id="inventory_uom" class="custom-select"  onblur="validate_uom()">
                                       <option value="">Select Inventory UOM</option>
                                       <?php 
                                       $query = "SELECT id,uom_name FROM uom";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $inv_uom){
                                     ?>
                                        <option value="<?php echo $inv_uom["id"];?>"><?php echo $inv_uom["uom_name"];?></option>
                                        <?php 
                                        }
                                     ?>
                                    </select>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Conv. Factor</label>
                                       <input type="text" class="form-control" id="conv_factor" placeholder="Conv. Factor" name="conv_factor">
                                  </div>
                                   <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Indent Required</label>
                                      <select class="custom-select" name="indent" id="indent" required>
                                        <option value="">-Select-</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                      </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">P.O Required</label>
                                      <select class="custom-select" name="po_req" id="po_req" required>
                                        <option value="">-Select-</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                      </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Q.C Required</label>
                                      <select class="custom-select" name="qc_req" id="qc_req" required>
                                        <option value="">-Select-</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                      </select>
                                    </div>

                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Status</label>
                                      <select class="custom-select" name="status" id="status" required>
                                       <!--  <option value="">-Select-</option> -->
                                        <option value="1">ACTIVE</option>
                                        <option value="0">INACTIVE</option>
                                      </select>
                                    </div>
                                  </div>
                                  <input type="hidden" name="id" id="id" />
                                  <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Adding... </button>
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
            <!-- END PAGE -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Product Name</th>
                          <th>Product Code</th>
                          <th>Material Code</th>
                          <th>Category Name</th>
                          <th>HSN</th>
                          <th>GST</th>
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
        <!-- End Page-content --> <?php include("include/footer.php"); ?>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar --> <?php include("include/rightsidebar.php"); ?>
    <!-- Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT --> <?php include('include/javascript_library.php');?>
     <script type="text/javascript" language="javascript">
      $(document).ready(function() {
        var dataTable = $('#datatable1').DataTable({
          "ajax": "fetch_data/get_product.php",
          "lengthMenu": [ 
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          pagingType: "full"
        });
      });
    </script>
    <script>
        
          $(document).on('click', '.change_status', function() {
          var id = $(this).attr("id");
          var value = $(this).attr("value");
          $.ajax({
            url: "change_status.php?page=product",
            type: "post",
            data: {
              id: id,
              value: value
            },
            success: function(data) {
              if (data == 'ACTIVE') {
                alertify.success("Product Enabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              } else {
                $('#change_status').text("inactive");
                alertify.error("Product Disabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }
            }
          });
        });

          $(document).on('click', '.delete_data', function() {
          var checkstr = confirm('are you sure you want to delete this?');
          if (checkstr == true) {
            var id = $(this).attr("id");
            $.ajax({
              url: "delete_details.php?page=product",
              type: "post",
              data: {
                id: id
              },
              success: function(data) {
                if (data == 'DELETED') {
                  alertify.success("Product Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                } else {
                  alertify.error("Product Not Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                }
              }
            });
          } else {
            return false;
          }
        });
      
</script>
</body>
</html>