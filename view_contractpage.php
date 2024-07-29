                  <form class="" id="est_contractpage">            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="contract_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Select Contract</th>
                                      <th width="25%">Description</th>
                                      <th width="15%">UOM</th>
                                      <th width="10%">Unit Rate</th>
                                      <th width="10%">Quantity</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_contract" id="add_row_contract" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select select_contract" name="select_contract[]" data-srno="1" id="select_contract1" required>
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
                                        <input type="text" class="form-control description" id="description1" name="description[]" data-srno="1" >
                                    </td>      
                                    <td>
                                    <select class="custom-select contract_uom" name="contract_uom[]" data-srno="1" id="contract_uom1" required>
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
                                       <input type="text" class="form-control contract_unit_rate" id="contract_unit_rate1" name="contract_unit_rate[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control contract_quantity" data-srno="1" id="contract_quantity1" onblur="validate_num_Input(this)" name="contract_quantity[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control contract_total_cost" data-srno="1" id="contract_total_cost1" name="contract_total_cost[]" readonly>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <input type="hidden" name="count_contract" id="count_contract" value="1" />
                              <button class="btn btn-primary" id="add_button_contract" type="submit" style="display:none;">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                            <div class="row">
              <div class="col-md-3">
                <div class="card-body" style="background:#fff; box-shadow: 0px 1px 2px #00000040; margin-top: 50px;">
                  <label for="validationCustom01">Sub-Contract Summary</label>
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
                                  <td style="display: none;" class="sc_unit_rate" id="sc_unit_rate"></td>
                                  <td style="display: none;" class="sc_quantity" id="sc_quantity"></td>
                                  <td class="sc_total" id="sc_total"> </td>
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
        $(document).on('click', '#add_row_contract', function(){
          count++;
          $('#count_contract').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_contract"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><select class="custom-select select_contract" name="select_contract[]" id="select_contract'+count+'" data-srno="'+count+'" required><option value="">-Select-</option><?php
           $select_query = "select * from contract where status = '1'";
           $process = mysqli_query($conn,$select_query);
           while ($fetch = mysqli_fetch_array($process)){
           $category_id = $fetch['id'];
           $category_name = $fetch['contract_desc'];
           ?>
           <option value="<?php echo $category_name;?>"><?php echo $category_name;?></option><?php } ?></select></td>';
           html_code += '<td class=""><input type="text" class="form-control description" id="description'+count+'" name="description[]" data-srno="'+count+'" ></td>';
           
           html_code += '<td class=""><select class="custom-select contract_uom" name="contract_uom[]" id="contract_uom'+count+'" data-srno="'+count+'" required><option value="">-Select-</option><?php 
           $select_query = "select * from uom where status = '1'";
           $process = mysqli_query($conn,$select_query);
           while ($fetch = mysqli_fetch_array($process)){
           $category_id = $fetch['id'];
           $category_name = $fetch['uom_name'];
           ?>
           <option value="<?php echo $category_name;?>"><?php echo $category_name;?></option><?php } ?></select></td>';
                                     
          html_code += '<td class=""><input type="text" class="form-control contract_unit_rate" id="contract_unit_rate'+count+'" name="contract_unit_rate[]" onblur="validate_num_Input(this)" data-srno="'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control contract_quantity" id="contract_quantity'+count+'" name="contract_quantity[]" onblur="validate_num_Input(this)" data-srno="'+count+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control contract_total_cost" id="contract_total_cost'+count+'" name="contract_total_cost[]" data-srno="'+count+'" readonly></td>';

          html_code += '</tr>';
          $('#contract_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_contract', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count_contract').val(count);
        });
    


         $(document).on('keyup', '.contract_quantity', function(){
          cal_final_total(count);
          var sum = 0;
          $(".contract_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#sc_quantity").html(sum);
        });
        $(document).on('keyup', '.contract_unit_rate', function(){
          cal_final_total(count);
          var sum=0;
          $(".contract_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#sc_unit_rate").html(sum);
        });
        $(document).on('keyup', '.contract_total_cost', function(){
          var sum=0;
          $(".contract_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#sc_total").html(sum);
          $("#summary_subcontract_cost").html(sum);
          $('#hidden_subcontract_cost').val(sum);
        });

         function cal_final_total(count) {
          
          var contract_unit_rate = 0;
          var contract_quantity = 0;
          var contract_total_cost = 0;
          var total_amt = 0;
          for(j=1; j<=count; j++){
          
          var contract_unit_rate = $('#contract_unit_rate'+j).val();
          var contract_quantity = $('#contract_quantity'+j).val();
          var contract_total_cost = $('#contract_total_cost'+j).val();
          var total_amt = parseFloat(contract_unit_rate) * parseFloat(contract_quantity);
          //console.log(total_amt);
            if(!isNaN(total_amt)) {
              $('#contract_total_cost'+j).val(total_amt);
            } else {
              $('#contract_total_cost'+j).val('');
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

