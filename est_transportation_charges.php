
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">

                      <form class="" id="transportation_charges">
                          <div class="card-body">
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="add_transportation_charges" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="20%">Transportation Stage</th>
                                      <th width="20%">From</th>
                                      <th width="15%">TO</th>
                                      <th width="15%">Unit Charge</th>
                                      <th width="15%">No. Of Trips</th>
                                      <th width="20%">Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="row_id_1">
                                  <td>
                                    <button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td id="transportation_stage_select">
                                    <select class="custom-select transportation_stage" name="transportation_stage[]" id="transportation_stage1" data-srno="1" required>
                                      <option value="">-SELECT-</option>
                                      <option value="stage1">Stage1</option>
                                      <option value="stage2">Stage2</option>
                                      <option value="stage3">Stage3</option>
                                    </select>
                                  </td>
                                  <td id="transportation_from_select">
                                    <select class="custom-select transportation_from" name="transportation_from[]" id="transportation_from1" data-srno="1" required>
                                      <option value="">-SELECT-</option><?php
                                               $query = "SELECT city_name FROM city";
                                               $results=mysqli_query($conn, $query);
                                       
                                               foreach ($results as $cityname){
                                               ?>
                                      <option value="<?php echo $cityname["city_name"];?>"><?php echo $cityname["city_name"];?></option><?php
                                      }
                                      ?>
                                    </select>
                                  </td>
                                  <td id="transportation_to_select">
                                    <select class="custom-select transportation_to" name="transportation_to[]" id="transportation_to1" data-srno="1" required>
                                      <option value="">-SELECT-</option><?php
                                               $query = "SELECT city_name FROM city";
                                               $results=mysqli_query($conn, $query);
                                       
                                               foreach ($results as $cityname){
                                               ?>
                                      <option value="<?php echo $cityname["city_name"];?>"><?php echo $cityname["city_name"];?></option><?php
                                      }
                                      ?>
                                    </select>
                                  </td>
                                  <td id="transportation_unit_charge">
                                        <input type="text" class="form-control transportation_unit_charge" name="transportation_unit_charge[]" data-srno="1" id="transportation_unit_charge1" onblur="validate_num_Input(this)" placeholder="Unit Rate" required> 
                                  </td>
                                  <td id="transportation_no_of_trip">
                                    <input type="text" class="form-control transportation_no_of_trip" name="transportation_no_of_trip[]" data-srno="1" id="transportation_no_of_trip1" onblur="validate_num_Input(this)" placeholder="No of Trips" required> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control transportation_total" name="transportation_total[]" data-srno="1" id="transportation_total1" placeholder="Total" readonly> 
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>

                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="count" id="count" value="1"/>
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
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
              <button class="prev-btn">Previous</button>
                <button class="next-btn">Next</button>

            
    <script>
      
$(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td><select class="custom-select" name="transportation_stage[]" id="transportation_stage'+count+'" data-srno="'+count+'" required><option value="">-SELECT-</option><option value="stage1">Stage1</option><option value="stage2">Stage2</option><option value="stage3">Stage3</option></select></td>';

          html_code += '<td><select class="custom-select transportation_from" name="transportation_from[]" id="transportation_from'+count+'" data-srno="'+count+'"><option value="">-SELECT-</option><?php
            $query = "SELECT city_name FROM city";
            $res=mysqli_query($conn, $query);
                                       
            foreach ($res as $cityfrom){
             ?>
             <option value="<?php echo $cityfrom["city_name"];?>"><?php echo $cityfrom["city_name"];?></option><?php
           }
           ?>
           </select></td>';

          html_code += '<td><select class="custom-select" name="transportation_to[]" id="transportation_to'+count+'" data-srno="'+count+'"><option value="">-SELECT-</option><?php
           $query = "SELECT city_name FROM city";
           $results=mysqli_query($conn, $query);
                                       //loop
           foreach ($results as $cityto){
             ?>
             <option value="<?php echo $cityto["city_name"];?>"><?php echo $cityto["city_name"];?></option><?php 
           }
           ?>
           </select></td>';

          html_code += '<td><input type="text" class="form-control transportation_unit_charge" name="transportation_unit_charge[]" data-srno="'+count+'" id="transportation_unit_charge'+count+'" onblur="validate_num_Input(this)" placeholder="Unit Charge" required></td>';

          html_code += '<td><input type="text" class="form-control transportation_no_of_trip" name="transportation_no_of_trip[]" data-srno="'+count+'" id="transportation_no_of_trip'+count+'" onblur="validate_num_Input(this)" placeholder="No. Of Trips" required></td>';

          html_code += '<td><input type="text" class="form-control transportation_total" name="transportation_total[]" data-srno="'+count+'" id="transportation_total'+count+'" placeholder="Total" readonly></td>';

          html_code += '</tr>';
          $('#add_transportation_charges').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count').val(count);
        });

         $(document).on('change', '.transportation_no_of_trip', function(){
          cal_final_total(count);
        });
         $(document).on('change', '.transportation_unit_charge', function(){
          cal_final_total(count);
        });


         function cal_final_total(count) {
          
          var transportation_unit_charge = 0;
          var transportation_no_of_trip = 0;
          var transportation_total = 0;
          for(j=1; j<=count; j++){
          
          var transportation_unit_charge = $('#transportation_unit_charge'+j).val();
          var transportation_no_of_trip = $('#transportation_no_of_trip'+j).val();
          var transportation_total = $('#transportation_total'+j).val();
          var total_amt = parseFloat(transportation_unit_charge
            ) * parseFloat(transportation_no_of_trip);
            if(!isNaN(total_amt)) {
              $('#transportation_total'+j).val(total_amt);
            } else {
              $('#transportation_total'+j).val('');
            }

          
        }

      }

    });

      function validate_num_Input(inputField) {
      console.log(inputField.value);
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        
      }
    }

    </script>
 