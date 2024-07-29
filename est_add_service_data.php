                      <form class="" id="add_est_service_data" novalidate>
                                <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="service_data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Service Name</th>
                                      <th width="25%">Description</th>
                                      <th width="15%">UOM</th>
                                      <th width="10%">Unit Rate</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td>
                                    <button type="button" name="add_row_service" id="add_row_service" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td>
                                    <select class="custom-select service_name" name="service_name[]" data-srno="1" id="service_name1">
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
                                <td>
                                        <input type="text" class="form-control description" id="description1" name="description[]" data-srno="1" >
                                </td>
                                
                                
                                <td>
                                    <select class="custom-select service_uom_name" name="service_uom_name[]" data-srno="1" id="service_uom_name1" required>
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
                                
                                  
                                  <td id="uom_rate">
                                        <input type="text" class="form-control service_uom_rate" name="service_uom_rate[]" data-srno="1" id="service_uom_rate1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td id="quantity">
                                    <input type="text" class="form-control service_quantity" name="service_quantity[]" data-srno="1" id="service_quantity1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control service_total" name="service_total[]" data-srno="1" id="service_total1" readonly> 
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                    

                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="service_count" id="service_count" class="count" value="1"/>
                              <button class="btn btn-primary" id="add_button_service" type="submit" style="display:none">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
                              </button>
                     
                     </form>  
                     
                     <div class="row">
              <div class="col-md-3">
                <div class="card-body"  style="background:#fff; box-shadow: 0px 1px 2px #00000040; margin-top: 50px;">
                  <label for="validationCustom01">Service Summary</label>
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
                                  <td style="display: none;" class="s_unit_rate" id="s_unit_rate"></td>
                                  <td style="display: none;" class="s_quantity" id="s_quantity"></td>
                                  <td class="s_total" id="s_total"> </td>
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
    <script>
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_service', function(){
          count++;
          $('#service_count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_service"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td><select class="custom-select service_name" name="service_name[]" data-srno="'+count+'" id="service_name'+count+'"><option value="">-Select-</option><?php
                                      $query = "SELECT service_name FROM service";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $servicename){
                                     ?>
                                        <option value="<?php echo $servicename["service_name"];?>"><?php echo $servicename["service_name"];?></option><?php 
                                   }
                                     ?>
                                    </select></td>';
                                    html_code += '<td class=""><input type="text" class="form-control description" id="description'+count+'" name="description[]" data-srno="'+count+'" ></td>';

          

          html_code += '<td class=""><select class="custom-select service_uom_name" name="service_uom_name[]" id="service_uom_name'+count+'" data-srno="'+count+'" required><option value="">-Select-</option><?php 
           $select_query = "select * from uom where status = '1'";
           $process = mysqli_query($conn,$select_query);
           while ($fetch = mysqli_fetch_array($process)){
           $category_id = $fetch['id'];
           $category_name = $fetch['uom_name'];
           ?>
           <option value="<?php echo $category_name;?>"><?php echo $category_name;?></option><?php } ?></select></td>';
          html_code += '<td><input type="text" class="form-control service_uom_rate" name="service_uom_rate[]" data-srno="'+count+'" id="service_uom_rate'+count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td><input type="text" class="form-control service_quantity" name="service_quantity[]" data-srno="'+count+'" id="service_quantity'+count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td><input type="text" class="form-control service_total" name="service_total[]" data-srno="'+count+'" id="service_total'+count+'" readonly></td>';

          html_code += '</tr>';
          $('#service_data_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_service', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#service_count').val(count);
        });

         $(document).on('keyup', '.service_uom_rate', function(){
          var sum = 0;
          $(".service_uom_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#s_unit_rate").html(sum);
        });
        $(document).on('keyup', '.service_quantity', function(){
          cal_final_total(count);
          var sum=0;
          $(".service_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#s_quantity").html(sum);
        });
        $(document).on('keyup', '.service_total', function(){
          cal_final_total(count);
          var sum=0;
          $(".service_total").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#s_total").html(sum);
          $("#summary_services_cost").html(sum);
          $('#hidden_services_cost').val(sum);
        });


         function cal_final_total(count) {
          
          var uom = 0;
          var quantity = 0;
          var total = 0;
          for(j=1; j<=count; j++){
          
          var uom = $('#service_uom_rate'+j).val();
          var quantity = $('#service_quantity'+j).val();
          var total = $('#service_total'+j).val();
          var total_amt = parseFloat(uom) * parseFloat(quantity);
          console.log(total_amt);
            if(!isNaN(total_amt)) {
              $('#service_total'+j).val(total_amt);
            } else {
              $('#service_total'+j).val('');
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

    

    </script>
