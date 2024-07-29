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
                <div class="card-body">
                  <form class="" id="w_consumable">            
                              <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="consumable_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Process</th>
                                      <th width="15%">Thickness</th>
                                      <th width="15%">Meter</th>
                                      <th width="15%">Weld Deposition</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select consumable_process" name="consumable_process[]" id="consumable_process1" required>
                                    <option value="">-Select-</option>
                                    <option value="saw">Saw</option>
                                    <option value="smaw">SMAW</option>
                                    <option value="tig">TIG</option>
                                    <option value="mig">MIG</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control consumable_thickness" id="consumable_thickness1"  name="consumable_thickness[]" data-srno="1" onblur="validate_name_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control consumable_meter" data-srno="1" id="consumable_meter1" onblur="validate_num_Input(this)" name="consumable_meter[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control consumable_weld_deposition" data-srno="1" id="consumable_weld_deposition1" name="consumable_weld_deposition[]" required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="count" id="count" value="1" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                              </div>
              </div>
            </div>
          
        <!-- end page title -->
        
        <!-- end row -->
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include("include/footer.php"); ?>
  </div>
  <!-- end main content--><?php include('include/javascript_library.php');?>
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php include("include/rightsidebar.php"); ?>
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->


<script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><select class="custom-select consumable_process" name="consumable_process[]" id="consumable_process'+count+'" data-srno="'+count+'" required><option value="">-Select-</option> <option value="saw">Saw</option> <option value="smaw">SMAW</option><option value="tig">TIG</option><option value="mig">MIG</option></select></td>';

          html_code += '<td class=""><input type="text" class="form-control consumable_thickness" id="consumable_thickness'+count+'" name="consumable_thickness[]" data-srno="'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control consumable_meter" id="consumable_meter'+count+'" name="consumable_meter[]" data-srno="'+count+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control consumable_weld_deposition" id="consumable_weld_deposition'+count+'" name="consumable_weld_deposition[]" data-srno="'+count+'" required></td>';

          html_code += '</tr>';
          $('#consumable_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count').val(count);
        });
    


        //  $(document).on('keyup', '.transportation_unit_charge', function(){
        //   cal_final_total(count);
        // });
        //  $(document).on('keyup', '.transportation_no_of_trip', function(){
        //   cal_final_total(count);
        // });


      //    function cal_final_total(count) {
          
      //     var transportation_unit_charge = 0;
      //     var transportation_no_of_trip = 0;
      //     var transportation_total = 0;
      //     for(j=1; j<=count; j++){
          
      //     var transportation_unit_charge = $('#transportation_unit_charge'+j).val();
      //     var transportation_no_of_trip = $('#transportation_no_of_trip'+j).val();
      //     var transportation_total = $('#transportation_total'+j).val();
      //     var total_amt = parseFloat(transportation_unit_charge) * parseFloat(transportation_no_of_trip);
      //       if(!isNaN(total_amt)) {
      //         $('#transportation_total'+j).val(total_amt);
      //       } else {
      //         $('#transportation_total'+j).val('');
      //       }

          
      //   }

      // }
});


function validate_num_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[0-9]+$/.test(inputValue)) {
           showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
      }
    }

function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      // if (inputValue !== '' && !/^[A-Za-z]+$/.test(inputValue)) {
      //   showDangerToast_name_validation();
      //   inputField.value = ''; // Clear the input field
      //   inputField.focus(); // Set focus back to the input field
      // }
        if (inputValue == '' && (!/^[a-zA-Z0-9]+$/.test(inputValue) || inputValue.startsWith('-'))) {
        showDangerToast_name_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
       }
    }

    

</script>

</body>
</html>
