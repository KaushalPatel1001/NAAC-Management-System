<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<?php 
$id = $_REQUEST['id'];

$sql = "SELECT * FROM mst_product WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);
$record = mysqli_fetch_array($result,MYSQLI_BOTH);



?>
<!doctype html>
<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>
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
                  
                          <div class="card-body">
                                <form class="" id="edit_product_form" novalidate>
                              <div class="row">
                                <input type="text" id="pro_id" placeholder="Product ID" name="pro_id" value ="<?php echo $record["id"];?>" style="display:none;">
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Product Code</label>
                                      <input type="text" class="form-control" id="pro_code" placeholder="Product Code" name="pro_code" value ="<?php echo $record["pro_code"];?>" onblur="validate_num_Input(this)">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Product Name</label>
                                      <input type="text" class="form-control" id="pro_name" placeholder="Product name" name="pro_name" value ="<?php echo $record["pro_name"];?>" onblur="validate_name_Input(this)">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Material code</label>
                                      <input type="text" class="form-control" id="mat_code" placeholder="Material Code" value ="<?php echo $record["mat_code"];?>" name="mat_code">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                      <label for="validationCustom01">Technical Specifications</label>
                                      <!-- <input type="text" class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec" onblur="validate_name_Input(this)"> -->
                                      <textarea class="form-control" id="tech_spec" placeholder="Technical Specifications" name="tech_spec"  rows="1" cols="50" onblur="validate_name_Input(this)"><?php echo $record["tech_spec"];?></textarea>
                                    </div>         
                              </div>
                              <div class="row">
                                      <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Select Category</label>
                                      <select name="cat_id" id="cat_id" class="custom-select" required>
                                       <!--<option value="">Select Category</option> -->
                                       <?php
                                       $qry = "SELECT * FROM mst_category ORDER BY id DESC";
                                       $res = mysqli_query($conn, $qry);

                                       while($name = mysqli_fetch_array($res,MYSQLI_BOTH)){
                                       
                                       ?>
                                        <option value="<?php echo $name["id"];?>"<?php if ($record["cat_id"]==$name["id"]) {
                                          echo "selected = 'selected'";
                                          
                                        } ?>><?php echo $name["cat_name"];?></option>
                                        <?php  
                                        } 
                                     ?>
                                    </select>
                                  </div> 

                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01" id="gs">Select Group</label>
                                       <select name="grp_id" id="grp_id" class="custom-select">
                                       <!-- <option value="">Select Group</option> -->
                                       <?php 
                                       $qry = "SELECT * FROM mst_group WHERE cat_id = '".$record["cat_id"]."'";
                                       $res = mysqli_query($conn, $qry);

                                       while($name = mysqli_fetch_array($res,MYSQLI_BOTH)){
                                       
                                       ?>
                                       <option value="<?php echo $name["id"];?>"<?php if ($record["grp_id"]==$name["id"]) {
                                          echo "selected = 'selected'";
                                          
                                        } ?>><?php echo $name["grp_name"];?></option>
                                        <?php  
                                        } 
                                     ?>
                                    </select>
                                  </div>

                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01" id = "sg">Select Sub-Group</label>
                                       <select name="sub_grp_id" id="sub_grp_id" class="custom-select">
                                        <option value="">Select Sub-Group</option>
                                        <?php 
                                       $qry = "SELECT * FROM mst_sub_group WHERE grp_id = '".$record["grp_id"]."'";
                                       $res = mysqli_query($conn, $qry);

                                       while($name = mysqli_fetch_array($res,MYSQLI_BOTH)){
                                       
                                       ?>
                                       <option value="<?php echo $name["id"];?>"<?php if ($record["sub_grp_id"]==$name["id"]) {
                                          echo "selected = 'selected'";
                                          
                                        } ?>><?php echo $name["sub_grp_name"];?></option>
                                        <?php  
                                        } 
                                     ?>
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
                                      <input type="text" class="form-control" id="hsn" placeholder="HSN" name="hsn" value ="<?php echo $record["hsn"];?>">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">GST Rate</label>
                                      <input type="text" class="form-control" id="gst_rate" placeholder="GST Rate" name="gst_rate" value ="<?php echo $record["gst_rate"];?>">
                                    </div>
                              </div>
                             
                              <div class="row">

                                      <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Purchase UOM</label>
                                       <select name="purchase_uom" id="purchase_uom" class="custom-select">
                                       <?php 
                                       $qry = "SELECT * FROM uom";
                                       $res = mysqli_query($conn, $qry);

                                       while($name = mysqli_fetch_array($res,MYSQLI_BOTH)){
                                       
                                       ?>
                                       <option value="<?php echo $name["id"];?>"<?php if ($record["purchase_uom"]==$name["id"]) {
                                          echo "selected = 'selected'";
                                          
                                        } ?>><?php echo $name["uom_name"];?></option>
                                        <?php  
                                        } 
                                     ?>
                                    </select>
                                  </div>
                                       <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Inventory UOM</label>
                                       <select name="inventory_uom" id="inventory_uom" class="custom-select">
                                       <?php 
                                       $qry = "SELECT * FROM uom";
                                       $res = mysqli_query($conn, $qry);

                                       while($name = mysqli_fetch_array($res,MYSQLI_BOTH)){
                                       
                                       ?>
                                       <option value="<?php echo $name["id"];?>"<?php if ($record["inventory_uom"]==$name["id"]) {
                                          echo "selected = 'selected'";
                                          
                                        } ?>><?php echo $name["uom_name"];?></option>
                                        <?php  
                                        } 
                                     ?>
                                    </select>
                                  </div>
                                  <div class="col-md-4 mb-3">
                                       <label for="validationCustom01">Conv. Factor</label>
                                       <input type="text" class="form-control" id="conv_factor" placeholder="Conv. Factor" name="conv_factor" value ="<?php echo $record["conv_factor"];?>">
                                  </div>
                              </div>

                              <div class="row">
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Indent Required</label>
                                      <select class="custom-select" name="indent" id="indent" required>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                      </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">P.O Required</label>
                                      <select class="custom-select" name="po_req" id="po_req" required>
                                         <option value="1">YES</option>
                                        <option value="0">NO</option> 
                                      </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Q.C Required</label>
                                      <select class="custom-select" name="qc_req" id="qc_req" required>
                                       <option value="1">YES</option>
                                        <option value="0">NO</option> 
                                      </select>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                      <label for="validationCustom01">Status</label>
                                      <select class="custom-select" name="status" id="status" required>
                                       <option value="1">YES</option>
                                        <option value="0">NO</option>
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
                                  <input type="hidden" name="id" id="id"  value ="<?php echo $record["id"];?>" />

                                  <input type="hidden" name="test" id="test"/>
                                  <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Saving... </button>
                                 <!--  <button class="btn btn-primary showbtn" id="show_button" type="button" onclick="toggleDisplay()">Show</button> -->
                                 
                                 <div class="row" id="row" style="display:none;">  
                                  <div class="col-md-3 mb-3">
                                    <label for="validationCustom01">Extra Field</label>
                                    <input type="text" class="form-control" id="ex_fld" placeholder="Extra Field"
                                    name="ex_fld" onblur="validate_name_Input(this)">
                                  </div>
                                  <div class="col-md-3 mb-3">
                                    <label for="validationCustom01">Is Numeric?</label>
                                    <select class="custom-select" name="is_num" id="is_num" >
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                    <label for="validationCustom01">Is Compulsary?</label>
                                    <select class="custom-select" name="is_com" id="is_com" >
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="row" id="row" style="display:none;">  
                                  <div class="col-md-3 mb-3">
                                    
                                    <input type="text" class="form-control" id="ex_fld1" placeholder="Extra Field"
                                    name="ex_fld1" onblur="validate_name_Input(this)">
                                  </div>
                                  <div class="col-md-3 mb-3">
                                   
                                    <select class="custom-select" name="is_num1" id="is_num1" >
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                  </div>
                                  <div class="col-md-3 mb-3">
                                   
                                    <select class="custom-select" name="is_com1" id="is_com1" >
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                  </div>
                                </div>   

                                                              
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


          $(document).ready(function() {
          var pro_id = $('#pro_id').val();
          $.ajax({
            url: "fetch/fetch_product_extra.php",
            method: "POST",
            data: {
              pro_id: pro_id
            },
            success: function(response) {
                if(response){
                  $('#ex_div').html(response);
                }
            }
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


      function validate_input(row_id,inputField){
      var grp_id = $('#grp_id').val();  
      var row_id = row_id;
       $.ajax({
            url: "fetch/fetch_product_extra_validation.php",
            method: "POST",
            data: {
              row_id: row_id
            },
            dataType: "json",
            success: function(response) {
                if(response){ 
                console.log(response); 
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
        inputField.preventDefault();
      }
    }


    function validate_empty_extra(inputField){
       var inputValue = inputField.value.trim();
       if (inputValue == '') {
        showDangerToast_name_validation();
       } 
    }


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

      function validate_num_Input(inputField) {
      
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[a-zA-Z0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
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
    </script>
  </body>
</html>