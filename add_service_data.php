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
                <button type="button" onclick="window.location='View_transportation_charges.php';" class="btn float_top waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">View Charges</button>
                      </li>
                      <form class="" id="add_service_data" novalidate>
                          <div class="card-body">
                              <div id="newinput">
                              
                                <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="service_data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="25%">Service Name</th>
                                      <th width="20%">UOM</th>
                                      <th width="15%">UOM Rate</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td>
                                    <button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td>
                                    <select class="custom-select service_name" name="service_name[]" data-srno="1" id="service_name1" placeholder="Service Name">
                                      <option value="">-Select-</option>
                                      <?php
                                       $query = "SELECT service_name FROM service";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $servicename){
                                     ?>
                                        <option value="<?php echo $servicename["service_name"];?>"><?php echo $servicename["service_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                  </td>
                                  <td id="uom_name">
                                        <input type="text" class="form-control uom_name" name="uom_name[]" data-srno="1" id="uom_name1" onblur="validate_name_Input(this)" placeholder="UOM Name"> 
                                  </td>
                                  <td id="uom_rate">
                                        <input type="text" class="form-control uom_rate" name="uom_rate[]" data-srno="1" id="uom_rate1" onblur="validate_num_Input(this)" placeholder="UOM Rate"> 
                                  </td>
                                  <td id="quantity">
                                    <input type="text" class="form-control quantity" name="quantity[]" data-srno="1" id="quantity1" onblur="validate_num_Input(this)" placeholder="Quantity"> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control total" name="total[]" data-srno="1" id="total1" placeholder="Total" readonly> 
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                    </div>

                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="count" id="count" class="count" value="1"/>
                              <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
                              </button>

                             
                            

                     </div> 
                     </form>                 
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
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td><select class="custom-select service_name" name="service_name[]" data-srno="'+count+'" id="service_name'+count+'" placeholder="Service Name"><option value="">-Select-</option><?php
                                      $query = "SELECT service_name FROM service";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $servicename){
                                     ?>
                                        <option value="<?php echo $servicename["service_name"];?>"><?php echo $servicename["service_name"];?></option><?php 
                                   }
                                     ?>
                                    </select></td>';

          html_code += '<td class=""><input type="text" class="form-control uom_name" name="uom_name[]" data-srno="'+count+'" id="uom_name'+count+'" onblur="validate_name_Input(this)" placeholder="UOM Name"></td>';

          html_code += '<td><input type="text" class="form-control uom_rate" name="uom_rate[]" data-srno="'+count+'" id="uom_rate'+count+'" onblur="validate_num_Input(this)" placeholder="UOM Rate"></td>';

          html_code += '<td><input type="text" class="form-control quantity" name="quantity[]" data-srno="'+count+'" id="quantity'+count+'" onblur="validate_num_Input(this)" placeholder="Quantity"></td>';

          html_code += '<td><input type="text" class="form-control total" name="total[]" data-srno="'+count+'" id="total'+count+'" placeholder="Total" readonly></td>';

          html_code += '</tr>';
          $('#service_data_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count').val(count);
        });

         $(document).on('keyup', '.quantity', function(){
          cal_final_total(count);
        });
         $(document).on('keyup', '.uom_rate', function(){
          cal_final_total(count);
        });


         function cal_final_total(count) {
          
          var uom = 0;
          var quantity = 0;
          var total = 0;
          for(j=1; j<=count; j++){
          
          var uom = $('#uom_rate'+j).val();
          var quantity = $('#quantity'+j).val();
          var total = $('#total'+j).val();
          var total_amt = parseFloat(uom) * parseFloat(quantity);
            if(!isNaN(total_amt)) {
              $('#total'+j).val(total_amt);
            } else {
              $('#total'+j).val('');
            }

          
        }

      }

    });
      
      function validate_num_Input(inputField) {
      
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue == '' && !/^[a-zA-Z0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        
      }
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

    function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue == '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
        showDangerToast_name_req();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }

    </script>
  </body>
</html>