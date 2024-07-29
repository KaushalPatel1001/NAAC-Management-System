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
                <button type="button" onclick="window.location='add_quotation.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">Add Quotation</button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Quotation</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form class="" id="new_quotation" novalidate>
                                  <div class="card-body">
                                  <!-- <div class="col-xs-12 bottom20" >
                                  <h5>QUOTATION DETAILS</h5>
                                 </div> -->
                              <div class="row">

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Quotation No</label>
                                  <input type="text" class="form-control" id="quotation_no" name="quotation_no" value ="<?php echo $records["quotation_no"];?>">
                                </div>
                                 <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Date</label>
                                 <input type="date" class="form-control" id="quotation_date" name="quotation_date" value ="<?php echo $records["quotation_date"];?>">
                                </div>
                                 
                              </div>
                              <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                  <input type="text" class="form-control" id="quotation_cust_name" name="quotation_cust_name" value ="<?php echo $records["quotation_cust_name"];?>">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">GSTIN</label>
                                  <input type="text" class="form-control" id="quotation_gst" name="quotation_gst" value ="<?php echo $records["quotation_gst"];?>">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Attachement</label>
                                  <input type="file" class="form-control" id="quotation_attachement" name="quotation_attachement">
                                <div class="progress mb-1" style="display:none; height:1rem;">
                                  <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                  </div>
                                  <span id="uploaded_image"></span>
                                </div>
                                 
                              </div>

                              <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="inquiry_quotation_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="10%">SR.NO</th>
                                      <th width="15%">Product Name</th>
                                      <th width="12%">MATERIAL CODE</th>
                                      <th width="20%">PRODUCT DESCRIPTION</th>
                                      <th width="10%">HSN</th>
                                      <th width="10%">PCS</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>

                                      <td id="">
                                        <input type="text" class="form-control quotation_sr_no" name="quotation_sr_no[]" data-srno="1" id="quotation_sr_no1" onblur="validate_num_Input(this)"> 
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

                          
                        <div class="row">
                          <div class="col-md-5">
                                <table class="table table-bordered dt-responsive nowrap" id="inquiry_addition_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                          <div class="col-md-5">
                                <table class="table table-bordered dt-responsive nowrap" id="quotation_deduction_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                          <div class="col-md-2">

                                <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">TAXABLE AMOUNT</label>
                                  <input type="text" class="form-control" id="quotation_taxable_amount" name="quotation_taxable_amount">
                                </div>
                                 <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">DISCOUNT AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_discount_amount" name="quotation_discount_amount">
                                </div>
                              <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">GST AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_gst_amount" name="quotation_gst_amount">
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">NET AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_net_amount" name="quotation_net_amount">
                                </div>
                                <div class="col-md-12 mb-3">
                                  <label for="validationCustom01">FINAL AMOUNT</label>
                                 <input type="text" class="form-control" id="quotation_final_amount" name="quotation_final_amount">
                                </div>
                                 
                              </div>
                        </div>

                             <input type="hidden" name="id" id="id"/>
                             <input type="hidden" name="total_item" id="total_item" value="1" />
                             <input type="hidden" name="total_item1" id="total_item1" value="1" />
                             <input type="hidden" name="total_item2" id="total_item2" value="1" />
                             <div class="row">
                                <div class="col-md-12">
                                   <div align="left">
                                      <label><h6 style="color:red;">Fields marked with * are compulsary</h6></label>
                             </div>
                              <hr>
                             <button align="center" class="btn btn-primary" id="add_button" type="submit">SAVE & LIST</button>
                               <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                 <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                           Adding...
                                   </button>
                            <a href="" class="btn btn-danger capital"> Cancel</a>
                             </div>
                           </div>
                        </div>
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
                          <th>Quotation No</th>
                          <th>Date</th>
                          <th>Customer Name</th>
                          <th>Gross Amount</th>
                          <th>VAT Amount</th>
                          <th>Final Amount</th>
                          <!-- <th>Created By</th> -->
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
          "ajax": "fetch_data/get_quotation.php",
          "lengthMenu": [ 
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          pagingType: "full"
        });
      });
    
        // Add an event listener to the edit button
        $(document).on('click', '.edit_data', function() {
            // Get the closest table row
            var row = $(this).closest('tr');
            
            // Extract the values from the row
            var srNo = row.find('.quotation_sr_no').val();
            var productName = row.find('.quotation_product_name').val();
            var materialCode = row.find('.quotation_material_code').val();
            var productDescription = row.find('.quotation_product_description').val();
            var hsn = row.find('.quotation_hsn').val();
            var pcs = row.find('.quotation_pcs').val();
            
            // Populate a form with the extracted values (you can adjust this based on your form structure)
            $('#editForm #edit_sr_no').val(srNo);
            $('#editForm #edit_product_name').val(productName);
            $('#editForm #edit_material_code').val(materialCode);
            $('#editForm #edit_product_description').val(productDescription);
            $('#editForm #edit_hsn').val(hsn);
            $('#editForm #edit_pcs').val(pcs);
            
            // Show a modal or perform any other action to allow editing
            // Example: $('#editModal').modal('show');
        });
        
          $(document).on('click', '.delete_data', function() {
          var checkstr = confirm('are you sure you want to delete this?');
          if (checkstr == true) {
            var id = $(this).attr("id");
            $.ajax({
              url: "delete_details.php?page=new_quotation",
              type: "post",
              data: {
                id: id
              },
              success: function(data) {
                if (data == 'DELETED') {
                  alertify.success("Quotation Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                } else {
                  alertify.error("Quotation Not Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                }
              }
            });
          } else {
            return false;
          }
        });
      
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_sr_no" name="quotation_sr_no[]" data-srno="'+count+'" id="quotation_sr_no'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_product_name" name="quotation_product_name[]" data-srno="'+count+'" id="quotation_product_name'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_material_code" name="quotation_material_code[]" data-srno="'+count+'" id="quotation_material_code'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_product_description" name="quotation_product_description[]" data-srno="'+count+'" id="quotation_product_description'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_hsn" name="quotation_hsn[]" data-srno="'+count+'" id="quotation_hsn'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_pcs" name="quotation_pcs[]" data-srno="'+count+'" id="quotation_pcs'+count+'" required></td>';
          html_code += '</tr>';
          $('#inquiry_quotation_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item').val(count);
        });
    });

      $(document).ready(function(){
        var count1 = 1;
        $(document).on('click', '#add_row1', function(){
          count1++;
          $('#total_item1').val(count1);
          var html_code = '';
          html_code += '<tr id="row_id_'+count1+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count1+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count1+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_tax_type" name="quotation_tax_type[]" data-srno="'+count1+'" id="quotation_tax_type'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_additional_tax" name="quotation_additional_tax[]" data-srno="'+count1+'" id="quotation_additional_tax'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_percent" name="quotation_percent[]" data-srno="'+count1+'" id="quotation_percent'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_amount" name="quotation_amount[]" data-srno="'+count1+'" id="quotation_amount'+count1+'" required></td>';
          html_code += '</tr>';
          $('#inquiry_addition_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item1').val(count1);
        });
    });

      $(document).ready(function(){
        var count2 = 1;
        $(document).on('click', '#add_row2', function(){
          count2++;
          $('#total_item2').val(count2);
          var html_code = '';
          html_code += '<tr id="row_id_'+count2+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count2+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count2+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_tax_type" name="quo_tax_type[]" data-srno="'+count2+'" id="quo_tax_type'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quotation_deduction_tax" name="quotation_deduction_tax[]" data-srno="'+count2+'" id="quotation_deduction_tax'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_percent" name="quo_percent[]" data-srno="'+count2+'" id="quo_percent'+count2+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control quo_amount" name="quo_amount[]" data-srno="'+count2+'" id="quo_amount'+count2+'" required></td>';
          html_code += '</tr>';
          $('#quotation_deduction_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item2').val(count2);
        });
    });


</script>
</body>
</html>