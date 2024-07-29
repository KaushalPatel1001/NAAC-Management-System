<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<!doctype html>

<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>

<style type="text/css">

.toggle-label {
    cursor: pointer;
}

.toggle-label:hover {
    color: blue;
    text-decoration: underline;
}
.toggle-checkbox {
    display: none;
}

.content-section {
    display: none;
    padding: 10px;
    border: 1px solid #ccc;
}
.toggle-checkbox:checked + .content-section {
    display: block;
}

</style>
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">

                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                <button type="button" onclick="window.location='view_products.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">View Product</button>
                      </li>
                          <div class="card-body">
                                <form class="" id="product_form" novalidate>
                              <div class="row">
                                    <div class="col-md-3 mb-3">
                                      <label for="validationCustom01">Product Code</label>
                                      <input type="text" class="form-control" id="pro_code" placeholder="Product Code" name="pro_code" onblur="validate_num_Input(this)">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Product Name</label>
                                      <input type="text" class="form-control" id="pro_name" placeholder="Product name" name="pro_name" onblur="validate_name_Input(this)">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                      <label for="validationCustom01">Material code</label>
                                      <input type="text" class="form-control" id="mat_code" placeholder="Material Code" name="mat_code">
                                    </div>
                                    <div class="col-md-9 mb-3">
                                      <label for="validationCustom01">Technical Specifications</label>
                                      <!-- <input type="text" class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec" onblur="validate_name_Input(this)"> -->
                                      <textarea class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec" rows="2" cols="50" onblur="validate_name_Input(this)"></textarea>
                                    </div>         
                              </div>
                              <div class="row">
                                      <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Select Category</label>
                                      <select name="cat_id" id="cat_id" class="custom-select" required>
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
                                       <select name="grp_id" id="grp_id" class="custom-select">
                                        <option value="">Select Group</option>
                                    </select>
                                  </div>

                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01" id = "sg">Select Sub-Group</label>
                                       <select name="sub_grp_id" id="sub_grp_id" class="custom-select">
                                        <option value="">Select Sub-Group</option>
                                    </select>
                                  </div>
                                </div>
                                <hr>
                                   <div class="row" id="ex_div" name="ex_div">
                                </div>
                                <hr>
                                  <div class="row">
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">HSN</label>
                                      <input type="text" class="form-control" id="hsn" placeholder="HSN" name="hsn">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">GST Rate</label>
                                      <input type="text" class="form-control" id="gst_rate" placeholder="GST Rate" name="gst_rate">
                                    </div>
                              </div>
                              <div class="row">

                                      <div class="col-md-2 mb-3">
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
                                       <div class="col-md-2 mb-3">
                                       <label for="validationCustom01">Inventory UOM</label>
                                       <select name="inventory_uom" id="inventory_uom" class="custom-select">
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
                                  <div class="col-md-2 mb-3">
                                       <label for="validationCustom01">Conv. Factor</label>
                                       <input type="text" class="form-control" id="conv_factor" placeholder="Conv. Factor" name="conv_factor">
                                  </div>
                              </div>
                              <div class="row">
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
                                        <!-- <option value="">-Select-</option> -->
                                        <option value="1">ACTIVE</option>
                                        <option value="0">INACTIVE</option>
                                      </select>
                                    </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Upload Product Image</label>
                                  <input type="file" class="form-control" id="file" name="pro_image">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                </div>
                                  <span id="uploaded_image"></span>
                                </div>
                              
                              <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Upload Product Drawing</label>
                                  <input type="file" class="form-control" id="file" name="pro_draw">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                </div>
                                  <span id="uploaded_image"></span>
                                </div>
                              </div>

                                <div id="newinput">
                                 
                                  </div>
                                  
                                 <div id="inventory_extras">
                                  <label for="toggle-section" class="toggle-label">Inventory <span><i class="fa fa-arrow-down" id="icon"></i></span></label>
                                  <input type="checkbox" id="toggle-section" class="toggle-checkbox">
                              <div id="content-section" class="content-section">
                                  <div class="row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Minimum Stock QTY.</label>
                                      <input type="text" class="form-control" id="min_stock_qty" placeholder="Minimum Stock QTY." name="min_stock_qty" onblur="validate_num_Input(this)">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Maximum Stock QTY.</label>
                                      <input type="text" class="form-control" id="max_stock_qty" placeholder="Maximum Stock QTY." name="max_stock_qty" onblur="validate_num_Input(this)">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Minimum Order QTY.</label>
                                      <input type="text" class="form-control" id="min_order_qty" placeholder="Minimum Order QTY." name="min_order_qty" onblur="validate_num_Input(this)">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Maximum Order QTY.</label>
                                      <input type="text" class="form-control" id="max_order_qty" placeholder="Maximum Order QTY." name="max_order_qty" onblur="validate_num_Input(this)">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Minimum IND QTY.</label>
                                      <input type="text" class="form-control" id="min_ind_qty" placeholder="Minimum IND QTY." name="min_ind_qty" onblur="validate_num_Input(this)">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Maximum IND QTY.</label>
                                      <input type="text" class="form-control" id="max_ind_qty" placeholder="Maximum IND QTY." name="max_ind_qty" onblur="validate_num_Input(this)">
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Warehouse</label>
                                      <select name="warehouse" id="warehouse" class="custom-select">
                                       <option value="">Select Warehouse</option>
                                       <?php 
                                       $query = "SELECT id,department_name FROM department";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $waredep){
                                     ?>
                                        <option value="<?php echo $waredep["id"];?>"><?php echo $waredep["department_name"];?></option>
                                        <?php 
                                        }
                                     ?>
                                      </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Rack No.</label>
                                      <input type="text" class="form-control" id="rack_no" placeholder="Rack No." name="rack_no" onblur="validate_num_Input(this)">
                                    </div>
                                  </div>
                              </div>
                        </div> 

                                  <input type="hidden" name="id" id="id" />
                                  <input type="hidden" name="count" id="count" value=""/>
                                  <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Saving... </button>
                                 <!--  <button class="btn btn-primary showbtn" id="show_button" type="button" onclick="toggleDisplay()">Show</button> -->
                                 <input type="hidden" name="is_num_validate" id="is_num_validate" />

                                 <input type="hidden" name="is_com_validate" id="is_com_validate" />


                                 </form>
                              </div>                  
                  </div>
                </div>
              </div>
            </div>
            </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content --> <?php include("include/footer.php"); ?>
      </div>
      <!-- end main content-->  <?php include('include/javascript_library.php');?>
    </div>
    <script>
      
          $(document).ready(function(){
          // $('#sg').hide();
          // $('#gs').hide();  
          // $('#grp_code').hide();
          // $('#sub_grp_code').hide();  
          $('#cat_id').on('change',function(){
            var cat_id = this.value;
            $.ajax({
              url: "group_by_cat.php",
              type: "POST",
              data: {
                cat_id: cat_id
              },
              cache: false,
              success: function(result){
                // $('#gs').show();
                // $('#grp_code').show();
                $('#grp_id').html(result);

              }
            });
          });
        });

          $(document).ready(function(){
          $('#grp_id').on('change',function(){
            var grp_id = this.value;
            $.ajax({
              url: "subgroup_by_group.php",
              type: "POST",
              data: {
                grp_id: grp_id
              },
              cache: false,
              success: function(result){
                // $('#sg').show();
                // $('#sub_grp_code').show();
                $('#sub_grp_id').html(result);

              }
            });
          });
        });

          $(document).ready(function() {
          $('#grp_id').on('change',function(){
          var grp_id = $('#grp_id').val();
          $.ajax({
            url: "fetch/fetch_group_extra.php",
            method: "POST",
            data: {
              grp_id: grp_id
            },
            success: function(response) {
                if(response){
                  $('#ex_div').html(response);
                }
            }
          });
        });
        });

      function validate_num_Input(inputField) {
      
      var inputValue = inputField.value.trim();
      console.log(inputValue);
      if (inputValue == '') {
        inputField.value = 0;
      }
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[a-zA-Z0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }

    function validate_input(row_id,inputField){
      var row_id = row_id;
       $.ajax({
            url: "fetch/fetch_group_extra_validation.php",
            method: "POST",
            data: {
              row_id: row_id
            },
            dataType: "json",
            success: function(response) {
                if(response){
                  if(response.is_num == 1){
                    validate_num_extra_Input(inputField);
                  }
                  if(response.is_com == 1){
                    validate_empty_extra(inputField);
                  }
                  
                }
            }
            
          });
    }

    function validate_num_extra_Input(inputField) {
      
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (!/^[0-9\s]*$/.test(inputValue)) {
        showDangerToast_numonly_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }


    function validate_empty_extra(inputField){
       var inputValue = inputField.value.trim();
       if (inputValue == '') {
        showDangerToast_name_validation();
       } 
    }

    function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
        showDangerToast_name_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }
document.querySelector('.toggle-label').addEventListener('click', function () {
    const checkbox = document.querySelector('#toggle-section');
    var icon = document.getElementById('icon');
    if (checkbox.checked) {
      icon.className = 'fa fa-arrow-down'; 
    }else{
      icon.className = 'fa fa-arrow-up'; 
    }
});

    </script>
  </body>
</html>