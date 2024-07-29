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
                <button type="button" onclick="window.location='view_new_quotation.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">View Quotation</button>
                      </li>
                          <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                              <form class="" id="new_quotation">  
                              <div class="row" >

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Quotation No</label>
                                  <input type="text" class="form-control" id="quotation_no" name="quotation_no" autocomplete="off">
                                </div>
                                 <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Date</label>
                                 <input type="date" class="form-control" id="quotation_date" name="quotation_date" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                  <input type="text" class="form-control" id="quotation_cust_name" name="quotation_cust_name">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">GSTIN</label>
                                  <input type="text" class="form-control" id="quotation_gst" name="quotation_gst">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Attachment</label>
                                  <input type="file" class="form-control" id="quotation_attachement" name="quotation_attachement">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                  </div>
                                  <span id="uploaded_image"></span>
                                </div>
                                 
                              </div>
                              <hr style="border: 1px solid rgb(0 0 0)">

                              <div class="row">
                                <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="quotation_product_table" style="border-collapse: collapse; border-spacing: 0; width: 100%; box-shadow: 0px 2px 3px #00000040;">
                                  <thead>
                                    <tr>
                                      <th width="3%">#</th>
                                      <th width="3%">SR.NO</th>
                                      <th width="15%">Product Name</th>
                                      <th width="12%">MATERIAL CODE</th>
                                      <th width="20%">PRODUCT DESCRIPTION</th>
                                      <th width="10%">HSN</th>
                                      <th width="10%">PCS</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button></td>

                                      <td id="">
                                        <input type="text" class="form-control quotation_sr_no" name="quotation_sr_no[]" data-srno="1" id="quotation_sr_no1" value="1" readonly> 
                                      </td>
                                      <td id="">
                                        <input type="text" class="form-control quotation_product_name" name="quotation_product_name[]" data-srno="1" id="quotation_product_name1"> 
                                      </td>
                                      <td id="">
                                        <input type="text" class="form-control quotation_material_code" name="quotation_material_code[]" data-srno="1" id="quotation_material_code1"> 
                                      </td>
                                      <td id="">
                                        <input type="text" class="form-control quotation_product_description" name="quotation_product_description[]" data-srno="1" id="quotation_product_description1"> 
                                      </td>
                                      <td id="">
                                        <input type="text" class="form-control quotation_hsn" name="quotation_hsn[]" data-srno="1" id="quotation_hsn1"> 
                                      </td>
                                      <td id="">
                                        <input type="text" class="form-control quotation_pcs" name="quotation_pcs[]" data-srno="1" id="quotation_pcs1"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                          <hr style="border: 1px solid rgb(0 0 0)">
                        <div class="row">
                          <div class="col-md-6">
                                <table class="table table-bordered dt-responsive nowrap" id="quotation_tax_table" style="border-collapse: collapse; border-spacing: 0; width: 100%; box-shadow: 0px 2px 3px #00000040;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">TAX TYPE</th>
                                      <th width="15%">ADDITIONAL TAX</th>
                                      <th width="10%">%</th>
                                      <th width="10%">AMOUNT</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row1" id="add_row1" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>

                                      <td>
                                        <input type="text" class="form-control quotation_tax_type" name="quotation_tax_type[]" data-srno="1" id="quotation_tax_type"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quotation_additional_tax" name="quotation_additional_tax[]" data-srno="1" id="quotation_additional_tax"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quotation_percent" name="quotation_percent[]" data-srno="1" id="quotation_percent1"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quotation_amount" name="quotation_amount[]" data-srno="1" id="quotation_amount1"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                          <div class="col-md-6">
                                <table class="table table-bordered dt-responsive nowrap" id="quotation_deduction_tax_table" style="border-collapse: collapse; border-spacing: 0; width: 100%; box-shadow: 0px 2px 3px #00000040;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">TAX TYPE</th>
                                      <th width="15%">DEDUCTION TAX</th>
                                      <th width="10%">%</th>
                                      <th width="10%">AMOUNT</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row2" id="add_row2" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>

                                      <td>
                                        <input type="text" class="form-control quo_tax_type" name="quo_tax_type[]" data-srno="1" id="quo_tax_type1"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quotation_deduction_tax" name="quotation_deduction_tax[]" data-srno="1" id="quotation_deduction_tax1"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quo_percent" name="quo_percent[]" data-srno="1" id="quo_percent1"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control quo_amount" name="quo_amount[]" data-srno="1" id="quo_amount1"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <hr style="border: 1px solid rgb(0 0 0)">
                          <div class="row">
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">TAXABLE AMOUNT</label>
                                  <input type="text" class="form-control" id="quotation_taxable_amount" name="quotation_taxable_amount" autocomplete="off">
                                </div>
                                 <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">DISCOUNT AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_discount_amount" name="quotation_discount_amount" autocomplete="off">
                                </div>
                              <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">GST AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_gst_amount" name="quotation_gst_amount" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">NET AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_net_amount" name="quotation_net_amount" autocomplete="off">
                                </div>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">FINAL AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_final_amount" name="quotation_final_amount" autocomplete="off">
                                </div>
                                 
                              
                        </div>
                      </div>

                             <input type="hidden" name="id" id="id"/>
                             <input type="hidden" name="total_item" id="total_item" value="1" />
                             <input type="hidden" name="tax_item" id="tax_item" value="1" />
                             <input type="hidden" name="deduct_tax_item" id="deduct_tax_item" value="1" />
                             <div class="row">
                                <div class="col-md-12">
                             <button align="center" class="btn btn-primary" id="add_button" type="submit">ADD</button>
                               <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                 <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                           Adding...
                                   </button>
                            <a href="view_new_quotation.php" class="btn btn-danger capital"> Cancel</a>
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
      
      function validate_num_Input(inputField) {
      
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[a-zA-Z0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
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


    </script>

    <script>
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="product_row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_product"><i class="mdi mdi-delete"></i></button></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_sr_no" name="quotation_sr_no[]" data-srno="'+count+'" id="quotation_sr_no'+count+'" value="'+count+'" readonly></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_product_name" name="quotation_product_name[]" data-srno="'+count+'" id="quotation_product_name'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_material_code" name="quotation_material_code[]" data-srno="'+count+'" id="quotation_material_code'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_product_description" name="quotation_product_description[]" data-srno="'+count+'" id="quotation_product_description'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_hsn" name="quotation_hsn[]" data-srno="'+count+'" id="quotation_hsn'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_pcs" name="quotation_pcs[]" data-srno="'+count+'" id="quotation_pcs'+count+'" required></td>';
          html_code += '</tr>';
          $('#quotation_product_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_product', function(){
          var row_id = $(this).attr("id");
          $('#product_row_id_'+row_id).remove();
          $('#total_item').val(count);
        });
    });

</script>

<script>
      $(document).ready(function(){
        var count1 = 1;
        $(document).on('click', '#add_row1', function(){
          count1++;
          $('#tax_item').val(count1);
          var html_code = '';
          html_code += '<tr id="tax_row_id_'+count1+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count1+'" class="btn btn-danger btn-md remove_row_tax"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count1+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_tax_type" name="quotation_tax_type[]" data-srno="'+count1+'" id="quotation_tax_type'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_additional_tax" name="quotation_additional_tax[]" data-srno="'+count1+'" id="quotation_additional_tax'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_percent" name="quotation_percent[]" data-srno="'+count1+'" id="quotation_percent'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_amount" name="quotation_amount[]" data-srno="'+count1+'" id="quotation_amount'+count1+'" required></td>';
          html_code += '</tr>';
          $('#quotation_tax_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_tax', function(){
          var row_id = $(this).attr("id");
          $('#tax_row_id_'+row_id).remove();
          $('#tax_item').val(count1);
        });
    });

</script>

<script>
      $(document).ready(function(){
        var count2 = 1;
        $(document).on('click', '#add_row2', function(){
          count2++;
          $('#deduct_tax_item').val(count2);
          var html_code = '';
          html_code += '<tr id="deduct_tax_row_id_'+count2+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count2+'" class="btn btn-danger btn-md remove_row_deduct_tax"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count2+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_tax_type" name="quo_tax_type[]" data-srno="'+count2+'" id="quo_tax_type'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_deduction_tax" name="quotation_deduction_tax[]" data-srno="'+count2+'" id="quotation_deduction_tax'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_percent" name="quo_percent[]" data-srno="'+count2+'" id="quo_percent'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_amount" name="quo_amount[]" data-srno="'+count2+'" id="quo_amount'+count2+'" required></td>';
          html_code += '</tr>';
          $('#quotation_deduction_tax_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_deduct_tax', function(){
          var row_id = $(this).attr("id");
          $('#deduct_tax_row_id_'+row_id).remove();
          $('#deduct_tax_item').val(count2);
        });
    });


</script>
</body>
</html>