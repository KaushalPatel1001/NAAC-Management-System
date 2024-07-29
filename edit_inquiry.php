<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}

$id = $_REQUEST['id'];

$sql = "SELECT * FROM mst_inquiry WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);
$record = mysqli_fetch_array($result,MYSQLI_BOTH);

$cus_sel = "SELECT vendor_name FROM mst_vendor WHERE vendor_code = '".$record['customer_id']."'";
$cus_res = mysqli_query($conn,$cus_sel);
$cus_rec = mysqli_fetch_array($cus_res,MYSQLI_BOTH);

$source_sel = mysqli_query($conn, "SELECT user_name from tbl_users WHERE id = '".$record['source']."'");
$s_rec = mysqli_fetch_array($source_sel,MYSQLI_BOTH);

$follow_sel = mysqli_query($conn, "SELECT user_name from tbl_users WHERE id = '".$record['followup']."'");
$f_rec = mysqli_fetch_array($follow_sel,MYSQLI_BOTH);

$pro_extra_select = mysqli_query($conn, "SELECT * FROM inquiry_product_extra WHERE inquiry_id = '".$record['inquiry_code']."'");
$pro_num_rows = mysqli_num_rows($pro_extra_select);


?>

<!doctype html>
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
                              <form class="" id="edit_inquiry_form">
                              <div class="row">
                                <input type="text" id="inquiry_id" placeholder="Inquiry ID" name="inquiry_id" value ="<?php echo $record["id"];?>" style="display:none;">

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Inquiry Code</label>
                                  <input type="text" class="form-control" id="inquiry_code" name="inquiry_code" autocomplete="off" value="<?php echo $record['inquiry_code']; ?>" readonly>
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Date</label>
                                    <input type="date" class="form-control" placeholder="Enter Date" name="created_date" id="created_date" value="<?php echo $record['created_date'];?>">
                                </div>
                                <div class="col-md-8 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                 <select class="custom-select" name="customer_id" id="customer_id">
                                    <option value="<?php echo $record['customer_id'];?>"><?php echo $cus_rec['vendor_name'];?></option>
                                    <?php 
                                    $select_query1 = "SELECT * FROM `mst_vendor` WHERE vendor_type = '0' OR vendor_type = '2';";
                                    $process1 = mysqli_query($conn,$select_query1);
                                    while ($fetch1 = mysqli_fetch_array($process1)){
                                      $customer_id = $fetch1['id'];
                                      $customer_name = $fetch1['vendor_name']; 
                                      ?>
                                      <option value="<?php echo $customer_id;?>"><?php echo $customer_name;?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-md-8 mb-3">
                                  <label for="validationCustom01">Address</label>
                                  <input  type="text" class="form-control" id="customer_address" name="customer_address" value="<?php echo $record['customer_address']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">City</label>
                                  <input  type="text" class="form-control" id="customer_city" name="customer_city" value="<?php echo $record['customer_city']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Pincode</label>
                                  <input type="text" class="form-control" id="customer_pincode" name="customer_pincode" value="<?php echo $record['customer_pincode']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Contact</label>
                                  <input type="text" class="form-control" id="customer_contact" name="customer_contact" value="<?php echo $record['customer_contact']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Email Id</label>
                                  <input type="text" class="form-control" id="customer_email" name="customer_email" value="<?php echo $record['customer_email']; ?>">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">GST Number</label>
                                  <input type="text" class="form-control" id="customer_gst" name="customer_gst" value="<?php echo $record['customer_gst']; ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Attachement</label>
                                  <input type="file" class="form-control" id="attachement" name="attachement">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                  </div>
                                  <span id="uploaded_image"></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Source</label>
                                  <input type="text" class="form-control" id="source" name="source" value="<?php echo $record['source']; ?>">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Followed up by</label>
                                  <select class="custom-select" name="followup" id="followup" required>
                                    <option value="<?php echo $record['followup'];?>"><?php echo $f_rec['user_name']; ?></option>
                                     <?php 
                                    $select_query = "select * from tbl_users";
                                    $process = mysqli_query($conn,$select_query);
                                    while ($fetch = mysqli_fetch_array($process)){
                                      $user_id = $fetch['id'];
                                      $user_name = $fetch['user_name']; 
                                      ?>
                                      <option value="<?php echo $user_id;?>"><?php echo $user_name;?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">Remarks</label>
                                  <input  type="text" class="form-control" id="customer_remarks" name="customer_remarks" value="<?php echo $record['customer_remarks'];?>">
                                </div>        
                              </div>
                              <div class="row">
                                <div id="product_extras" class="col-md-12 mb-3">
                                  <label for="toggle-section" class="toggle-label">Product Details<span><i class="fa fa-arrow-down" id="icon"></i></span></label>
                                  <input type="checkbox" id="toggle-section" class="toggle-checkbox" checked="">
                                  <div id="content-section" class="content-section">
                                    <div class="row">
                                      <div class="col-12">
                                        <table class="table table-bordered dt-responsive nowrap" id="inquiry_product_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                          <thead>
                                            <tr>
                                              <th width="5%">#</th>
                                              <th width="35%">Product Name</th>
                                              <th width="10%">QTY</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                                <span style="display:none" id="sr_no">1</span></td>

                                                <!-- Hidden inputs -->
                                                <td id="product_td">
                                                  <input type="text" style="display:none" class="form-control product_name" name="product_name[]" data-srno="1" id="product_name1" onblur="validate_num_Input(this)" placeholder="Product Name"> 
                                                </td>
                                                <td id="Qty_td">
                                                  <input type="text" style="display:none" class="form-control Qty" name="qty[]" data-srno="1" id="qty1" onblur="validate_num_Input(this)" placeholder="Quantity"> 
                                                </td>
                                                <!-- Hidden input ends -->
                                              </tr>
                                              <?php 
                                              $pro_count = 1;
                                              while($pro_rec = mysqli_fetch_array($pro_extra_select,MYSQLI_BOTH)){
                                                $pro_count++;
                                                ?>
                                                <tr id="row_id_<?php echo $pro_count;?>">
                                              <td><button type="button" name="remove_row" id="<?php echo $pro_count;?>" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no"><?php echo $pro_count;?></span></td>

                                                <td id="product_td">
                                                  <input type="text" class="form-control product_name" name="product_name[]" data-srno="<?php echo $pro_count;?>" id="product_name'<?php echo $pro_count;?>'" value="<?php echo $pro_rec['product_name'];?>"> 
                                                </td>
                                                <td id="Qty_td">
                                                  <input type="text" class="form-control Qty" name="qty[]" data-srno="<?php echo $pro_count;?>" id="qty'<?php echo $pro_count;?>'" value="<?php echo $pro_rec['qty'];?>"> 
                                                </td>
                                              </tr>
                                              <?php
                                              
                                              }
                                              ?>
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                  <input type="hidden" name="id" id="id" />
                                  <input type="hidden" name="total_item" id="total_item" value="<?php echo "$pro_num_rows" + 1;?>" />
                                  <input type="hidden" value="<?php echo "$pro_num_rows";?>">
                                  <div>
                                  <label><h6 style="color:red;">Fields marked with * are compulsary</h6></label>
                                </div>
                                  <button class="btn btn-primary" id="add_button" type="submit">Update</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Adding... </button>
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
        var count = $('#total_item').val();
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control product_name" name="product_name[]" data-srno="'+count+'" id="product_name'+count+'" onblur="validate_nun_Input(this)" placeholder="Product Name" required></td>';

          html_code += '<td class=""><input type="text" class="form-control qty" name="qty[]" data-srno="'+count+'" id="qty'+count+'" onblur="validate_nun_Input(this)" placeholder="Quantity" required></td>';
          html_code += '</tr>';
          $('#inquiry_product_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item').val(count);
        });
    });


    </script>
  </body>
</html>