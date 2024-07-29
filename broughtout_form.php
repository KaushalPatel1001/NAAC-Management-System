
            <div class="row">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">
                    <form class="" id="est_broughtout_form">
                      
                          <div class="row">
                              <div id="newinput">
                              
                                <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="broughtout_data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="25%">Product Name</th>
                                      <th width="20%">Material Code</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="row_id_1">
                                  <td>
                                    <button type="button" name="add_row_br" id="add_row_br" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td id="pro_name_select">
                                    <select class="custom-select br_pro_name" name="pro_name[]" data-srno="1" id="pro_name1" onchange="getMatCode(this)">
                                      <option value="">-Select-</option>
                                      <?php
                                       $query = "SELECT id,pro_name FROM mst_product";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $pro_name){
                                     ?>
                                        <option value="<?php echo $pro_name["id"];?>"><?php echo $pro_name["pro_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                  </td>
                                  <td id="mat_code_select">
                                     <input type="text" class="form-control mat_code" name="mat_code[]" data-srno="1" id="mat_code1" readonly>
                                    </select>
                                  </td>
                                  <td id="unit_rate">
                                        <input type="text" class="form-control unit_rate" name="unit_rate[]" data-srno="1" id="unit_rate1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td id="quantity">
                                    <input type="text" class="form-control quantity" name="quantity[]" data-srno="1" id="quantity1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control total" name="total[]" data-srno="1" id="total1" readonly> 
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                    </div>
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="br_count" id="br_count" class="br_count" value="1"/>
                              <button class="btn btn-primary" id="add_button_br" type="submit" style="display:none;">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
                              </button>


                     </div> 
                     </form>                 
                  </div>
                </div>
              </div> 
              
            <div class="row" style="margin-top:50px;">
              <div class="col-md-3">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">

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
                                  <td class="br_total_cost" id="br_total_cost"> </td>
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

          <!-- container-fluid -->
        
    <script>
     

         


      $(document).ready(function(){
        var br_count = 1;
        $(document).on('click', '#add_row_br', function(){
          br_count++;
          $('#br_count').val(br_count);
          var html_code = '';
          html_code += '<tr id="row_id_'+br_count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+br_count+'" class="btn btn-danger btn-md remove_row_br"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+br_count+'</span></td>';

          html_code += '<td><select class="custom-select pro_name" name="pro_name[]" data-srno="'+br_count+'" id="pro_name'+br_count+'" onchange="getMatCode(this)"><option value="">-Select-</option><?php
                                      $query = "SELECT id,pro_name FROM mst_product";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $pro_name){
                                     ?>
                                        <option value="<?php echo $pro_name["id"];?>"><?php echo $pro_name["pro_name"];?></option><?php 
                                   }
                                     ?>
                                    </select></td>';

          html_code += '<td> <input type="text" class="form-control mat_code" name="mat_code[]" data-srno="'+br_count+'" id="mat_code'+br_count+'" readonly></td>';

          html_code += '<td class=""><input type="text" class="form-control unit_rate" name="unit_rate[]" data-srno="'+br_count+'" id="unit_rate'+br_count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td><input type="text" class="form-control quantity" name="quantity[]" data-srno="'+br_count+'" id="quantity'+br_count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td><input type="text" class="form-control total" name="total[]" data-srno="'+br_count+'" id="total'+br_count+'" readonly></td>';

          html_code += '</tr>';
          $('#broughtout_data_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_br', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#br_count').val(br_count);
        });

         $(document).on('change', '.quantity', function(){
          cal_final_total(br_count);
        });
         $(document).on('change', '.unit_rate', function(){
          cal_final_total(br_count);
        });

         $(document).on('keyup', '.total', function(){
          //cal_final_total(count);
          var sum = 0;
          $(".total").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#br_total_cost").html(sum);
          $("#summary_broughtout_cost").html(sum);
          $('#hidden_broughtout_cost').val(sum);
        });


         function cal_final_total(br_count) {
          
          var unit_rate = 0;
          var quantity = 0;
          var total = 0;
          for(j=1; j<=br_count; j++){
          
          var unit_rate = $('#unit_rate'+j).val();
          var quantity = $('#quantity'+j).val();
          var total = $('#total'+j).val();
          var total_amt = parseFloat(unit_rate
            ) * parseFloat(quantity);
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

    function getMatCode(ele){

            var pro_id =  $(ele).val();
            //var currentRow = $(this).closest('tr');
             var coung = $(ele).data('srno');
            $.ajax({
              url: "fetch/fetch_matcode_by_pro_id.php",
              type: "POST",
              data: {
                pro_id: pro_id
              },
              dataType:'JSON',
              cache: false,
              success: function(result){
                console.log(result);
                //$('#mat_code1').val(result);
                //currentRow.find('.mat_code').val(result);
                $('#mat_code'+coung).val(result);
              }
            });
          }


   

    </script>
  
