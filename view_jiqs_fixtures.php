                  <form class="" id="jiqsfixtures">            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="fixtures_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Type</th>
                                      <th width="15%">Description</th>                                      
                                      <th width="15%">UOM</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="10%">Quantity</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select fixtures_description" name="fixtures_description[]" data-srno="1" id="fixtures_description1">
                                      <option value="">-SELECT-</option>
                                     <?php
                                       $query = "SELECT contract_desc FROM contract";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $contractname){
                                     ?>
                                        <option value="<?php echo $contractname["contract_desc"];?>"><?php echo $contractname["contract_desc"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select> 
                                      </td>
                                      <td>
                                       <input type="text" class="form-control description" id="description1" name="description[]" data-srno="1">
                                    </td>
                                    <td>
                                    <select class="custom-select fixtures_uom" name="fixtures_uom[]" data-srno="1" id="fixtures_uom1">
                                      <option value="">-SELECT-</option>
                                     <?php
                                       $query = "SELECT uom_name FROM uom";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $uomname){
                                     ?>
                                        <option value="<?php echo $uomname["uom_name"];?>"><?php echo $uomname["uom_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control fixtures_unit_rate" id="fixtures_unit_rate1" name="fixtures_unit_rate[]" data-srno="1" onblur="validate_num_Input(this)" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control fixtures_quantity" data-srno="1" id="fixtures_quantity1" onblur="validate_num_Input(this)" name="fixtures_quantity[]" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control fixtures_total_cost" data-srno="1" id="fixtures_total_cost1" name="fixtures_total_cost[]" onblur="validate_num_Input(this)" > 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="count_jiqs" id="count_jiqs" value="1" />
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <button class="btn btn-primary" id="add_button_jf" type="submit" style="display:none;">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>


            <div class="row">
              <div class="col-md-3">
                <div class="card-body"  style="background:#fff; box-shadow: 0px 1px 2px #00000040; margin-top: 50px;">
                  <label for="validationCustom01">JIQS Summary</label>
                      <form class="" id="">
                          
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td style="display: none;" class="jf_unit_rate" id="jf_unit_rate"></td>
                                  <td style="display: none;" class="jf_quantity" id="jf_quantity"></td>
                                  <td class="jf_total" id="jf_total"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div> 
                      
                   </form>                 
                  </div>
                </div>
              </div>

<button class="prev-btn">Previous</button>
<button class="next-btn">Next</button>

<!-- JAVASCRIPT -->


<script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#count_jiqs').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><select class="custom-select fixtures_description" name="fixtures_description[]" id="fixtures_description'+count+'" data-srno="'+count+'" ><option value="">-Select-</option><?php
           $select_query = "select * from contract where status = '1'";
           $process = mysqli_query($conn,$select_query);
           while ($fetch = mysqli_fetch_array($process)){
           $category_id = $fetch['id'];
           $category_name = $fetch['contract_desc'];
           ?>
           <option value="<?php echo $category_name;?>"><?php echo $category_name;?></option><?php } ?></select></td>';
           
          html_code += '<td class=""><input type="text" class="form-control description" id="description'+count+'" name="description[]" data-srno="'+count+'" ></td>';
           
           html_code += '<td class=""><select class="custom-select fixtures_uom" name="fixtures_uom[]" id="fixtures_uom'+count+'" data-srno="'+count+'" required><option value="">-Select-</option><?php 
           $select_query = "select * from uom where status = '1'";
           $process = mysqli_query($conn,$select_query);
           while ($fetch = mysqli_fetch_array($process)){
           $category_id = $fetch['id'];
           $category_name = $fetch['uom_name'];
           ?>
           <option value="<?php echo $category_name;?>"><?php echo $category_name;?></option><?php } ?></select></td>';
                                     
          html_code += '<td class=""><input type="text" class="form-control fixtures_unit_rate" id="fixtures_unit_rate'+count+'" name="fixtures_unit_rate[]" data-srno="'+count+'"  onblur="validate_num_Input(this)" ></td>';
          
          html_code += '<td class=""><input type="text" class="form-control fixtures_quantity" id="fixtures_quantity'+count+'" name="fixtures_quantity[]" onblur="validate_num_Input(this)" data-srno="'+count+'" ></td>';

          html_code += '<td class=""><input type="text" class="form-control fixtures_total_cost" id="fixtures_total_cost'+count+'" name="fixtures_total_cost[]"  data-srno="'+count+'" onblur="validate_num_Input(this)" ></td>';

          html_code += '</tr>';
          $('#fixtures_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count_jiqs').val(count);
        });
    

      $(document).on('keyup', '.fixtures_unit_rate', function(){
        cal_final_total(count);
          var sum = 0;
          $(".fixtures_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#jf_unit_rate").html(sum);
        });

        $(document).on('keyup', '.fixtures_quantity', function(){
          cal_final_total(count);
          var sum=0;
          $(".fixtures_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#jf_quantity").html(sum);
          var sum_total=0;
          $(".fixtures_total_cost").each(function(){
            if($(this).val() != ""){
              sum_total += parseInt($(this).val(), 10);   
            }
          });
          $("#jf_total").html(sum_total);
          $("#summary_jigs_fixtures_cost").html(sum_total);
          $('#hidden_jf_cost').val(sum_total);
          
        });

        

         function cal_final_total(count) {
          
          var fixtures_unit_rate = 0;
          var fixtures_quantity = 0;
          var fixtures_total_cost = 0;
          for(j=1; j<=count; j++){
          
          var fixtures_unit_rate = $('#fixtures_unit_rate'+j).val();
          var fixtures_quantity = $('#fixtures_quantity'+j).val();
          var fixtures_total_cost = $('#fixtures_total_cost'+j).val();
          var total_amt = parseFloat(fixtures_unit_rate) * parseFloat(fixtures_quantity);
            if(!isNaN(total_amt)) {
              $('#fixtures_total_cost'+j).val(total_amt);
            } else {
              $('#fixtures_total_cost'+j).val('');
            }

          
        }

      }
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

