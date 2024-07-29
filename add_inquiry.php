<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<!doctype html>
<style type="text/css">

.toggle-label {
    cursor: pointer;
    background-color: #11c46e;
    color: white;
    border-radius: 4px;
    padding: 5px;
}

.toggle-label:hover {
    color: #505d69;
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
                        <li class="breadcrumb-item active">
                <button type="button" onclick="window.location='view_inquiry.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">View Inquiry</button>
                      </li>
                              
                              <div class="card-body">
                              <form class="" id="add_inquiry_form" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px;">
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Inquiry Code</label>
                                  <input type="text" class="form-control" id="inquiry_auto_code" name="inquiry_auto_code" autocomplete="off" readonly>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Date</label>
                                    <input type="date" class="form-control" placeholder="Enter Date" name="date1" id="date1">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                 <select class="custom-select" name="customer" id="customer">
                                    <option value="">-Select-</option>
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
                              </div>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Address</label>
                                  <input  type="text" class="form-control" id="customer_address" name="customer_address">
                                </div>
                                <div class="col-md-4 mb-3">
                                 <label for="validationCustom01">City</label>
                                 <input  type="text" class="form-control" id="customer_city" name="customer_city">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Pincode</label>
                                  <input type="text" class="form-control" id="customer_pincode" name="customer_pincode" autocomplete="off">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Contact Number</label>
                                  <input type="text" class="form-control" id="customer_contact" name="customer_contact" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Email Id</label>
                                  <input type="text" class="form-control" id="customer_email" name="customer_email" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">GST Number</label>
                                  <input type="text" class="form-control" id="customer_gst" name="customer_gst" autocomplete="off">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Attachment</label>
                                  <input type="file" class="form-control" id="attachement" name="attachement">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                  </div>
                                  <span id="uploaded_image"></span>
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Source</label>
                                   <input type="text" class="form-control" id="source" name="source">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Follow up By</label>
                                  <select class="custom-select" name="followup" id="followup" required>
                                    <option value="">-Select-</option>
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
                                  <input  type="text" class="form-control" id="customer_remarks" name="customer_remarks">
                                </div>        
                        </div>
                        <div class="row">
                          <div id="product_extras" class="col-md-12 mb-3">
                                  <label for="toggle-section" class="toggle-label">Add Products&nbsp;<span><i class="fa fa-arrow-down" id="icon"></i></span></label>
                                  <input type="checkbox" id="toggle-section" class="toggle-checkbox">
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

                                      <td id="product_td">
                                        <input type="text" class="form-control product_name" name="product_name[]" data-srno="1" id="product_name1" onblur="validate_num_Input(this)" placeholder="Product Name"> 
                                      </td>
                                      <td id="Qty_td">
                                        <input type="text" class="form-control Qty" name="qty[]" data-srno="1" id="qty1" onblur="validate_num_Input(this)" placeholder="Quantity"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                                  <input type="hidden" name="id" id="id" />
                                  <input type="hidden" name="total_item" id="total_item" value="1" />
                                  
                                  <button class="btn btn-primary" id="add_button" type="submit">Add</button>
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
    $(document).ready(function() {  
      $.ajax({
        url: "fetch_data/get_inquiry_code.php",
        type: "POST",
        data: {
        },
        cache: false,
        success: function(result){
          $("#inquiry_auto_code").val(result);
        }
      });
    });
   
  $(document).ready(function(){
          $('#customer').on('change',function(){
            var date = $('#date1').value;
            console.log(date);
            var customer_id = this.value;
            $.ajax({
              url: "fetch/fetch_customer_details_inquiry.php",
              type: "POST",
              data: {
                customer_id: customer_id
              },
              dataType: "json",
              cache: false,
              success: function(data){
              $('#customer_address').val(data.vendor_address);
              $('#customer_city').val(data.city);
              $('#customer_pincode').val(data.pincode);
              $('#customer_contact').val(data.vendor_contact);
              $('#customer_email').val(data.vendor_email);
              $('#customer_gst').val(data.vendor_gst);

              }
            });
          });
        });

    $(document).ready(function(){
        var count = 1;
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