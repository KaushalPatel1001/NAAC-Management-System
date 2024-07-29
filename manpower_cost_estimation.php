<style>
  /* Add these styles to your CSS */
.table-excel {
    border: 0px solid #ccc;
    border-collapse: collapse;
}
.table-excel2 {
    border: 0px solid #ccc;
    border-collapse: collapse;
    padding: 0px;
    margin: 0px;
}
.table-excel td {
    border: 0px solid #ccc;
    padding: 5px;
    text-align: center;
}

.table-excel th, .table-excel td {
    border: 1px solid #ccc;
    padding: 2px;
    text-align: center;
}
.table-excel2 td {
    border-collapse: collapse;
    padding: 0px;
    margin: 10px;
    width: 40px;
}

</style>
            <div class="row">
              <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">

                  
                      <form class="" id="manpower_cost_estimation_form" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">
                          <div class="card-body">
                              <div id="newinput">
                              
                                <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap table-excel" id="broughtout_data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <th width="15%"></th> 
                                    <th>#</th>

                                    <?php 

                                         
        $select_man_power = "select * from manpower order by id ASC";
        $query = mysqli_query($conn, $select_man_power);
        $man_count_rows = mysqli_num_rows($query);

        $select_activity = "select * from activity order by id ASC";
        $act_query = mysqli_query($conn, $select_activity);
        $count_rows = mysqli_num_rows($act_query);
        $head_count = 0;
        while($fetch_row = mysqli_fetch_array($query)){
        ?>
        <th style="font-size: 0.6rem" width="15%" id="<?php echo $head_count; ?>"><?php echo $fetch_row['short_name']?> <input name="emp_type[]" type="hidden" value="<?php echo $fetch_row['id']?>"><table><tr><hr style="margin-bottom: 0rem; margin-top: 5px;"><td style="border: none; padding-right: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;p</td><td style="border: none; padding-left: 15px;">h&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table></th>
        <?php 
        
        $head_count++; 
        }
        ?>
                                  </thead>
                                  
<tbody id="hello1">
        
        

        <tr id="row_id_1">
          <td><button type="button" name="add_row_mnp" id="add_row_mnp" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
          <span style="display:none" id="sr_no">1</span></td>

          <td><input type="text" id="activity_name1" name="activity_name[]" data-srno="1" style="width:120px; font-size: 11px;"></td>

          
          <?php for ($i=0; $i<$man_count_rows; $i++) { ?>
            <td><table class="table table-bordered dt-responsive nowrap table-excel2" id="extra_data_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;"><tr><td><input name="activity_id[]" id="task1" type="hidden" value="<?php //echo $fetch_row_act['id']?>" ><input class="form-control no_of_person" name="no_of_person[]" style="width:25px; border:0; font-size:10px; padding: 0rem;" type="text" id="no_of_person1" data-srno="1" data-col-id="<?php echo $i; ?>"></td><td><input class="form-control no_of_hours" style="width:25px; border:0; font-size:10px;padding: 0rem;" name="no_of_hours[]" id="no_of_hours1" type="text" data-srno="1" data-col-id="<?php echo $i; ?>"></td></tr>
            </table></td>  
       <?php   } ?>

        </tr>
    </tbody>
                                </table>
                          </div>
                        </div>
                    </div>




                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="total_count" value="<?php echo $count_rows;?>">
                              <input type="hidden" name="man_total_item" id="man_total_item" value="1">
                              <input type="hidden" name="emp_total_count" id="emp_total_count" value="<?php echo $man_count_rows;?>">      

                              <button class="btn btn-primary" id="add_button_manpower" type="submit" style="display:none;">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
                              </button>


                     </div> 
                     </form>                 
                  
                </div>
              </div>


             <div class="row">
              <div class="col-md-10">
                <div class="card-body" style="background:#fff; box-shadow: 0px 1px 2px #00000040; margin-top: 50px;">
                      <form class="" id="summary_form">     
                              <div class="row">
                                <table class="summary_table" id="" style="border-collapse: collapse; border-spacing: 0; border:1px solid #000;" >
                                  <thead>
                                    <tr>
                                      <th style="border:1px solid #000;">#</th>
                                    <?php 
                                    $select_man_power = "select * from manpower order by id ASC";
                                    $query = mysqli_query($conn, $select_man_power);
                                    $man_count_rows = mysqli_num_rows($query);
                                    $i = 0;
                                    while($fetch_row = mysqli_fetch_array($query)){  
                                      ?>
                                  <th id="col_<?php echo $i;?>" style="font-size:0.5rem; padding: 10px; border:1px solid #000;"><?php echo $fetch_row['short_name']; ?></th>
                                  <?php
                                  $i++;
                                  }
                                    ?>
                                    </tr>
                                  </thead>
                                 <tbody>
                                <tr>
                                  <td style="border:1px solid #000; padding:5px; font-size:12px; font-weight:500;">Hours</td>
                                  <?php 
                                  for ($y=0; $y < $man_count_rows; $y++) { ?>
                                    <td style="border:1px solid #000;"><input style="width:30px; font-size:10px; border: 0px; padding-left: 0.4rem; width: 100%;" type="text" name="sum_hours[]" class="form-control1 sum_hours" id="sum_hours_<?php echo $y; ?>" tabindex="-1" readonly></td>
                                  <?php
                                  }
                                  ?>
                                </tr>
                                <tr style="display:none;">
                                  <td style="border:1px solid #000;">Person</td>
                                  <?php 
                                  for ($y=0; $y < $man_count_rows; $y++) { ?>
                                    <td style="border:1px solid #000;"><input style="width:20px;" name="sum_person[]" class="form-control1 sum_person" type="text" id="sum_person_<?php echo $y; ?>" tabindex="-1" readonly></td>
                                  <?php
                                  }
                                  ?>
                                </tr>
                                <tr>
                                  <td style="border:1px solid #000; padding:5px; font-size:12px; font-weight:500;">Rate</td>
                                  <?php 
                                  for ($y=0; $y < $man_count_rows; $y++) { ?>
                                    <td style="border:1px solid #000;"><input style="font-size:10px; border: 0px; padding-left: 0.4rem; width: 100%;" name="sum_rate[]" class="form-control sum_rate" type="text" id="sum_rate_inp_<?php echo $y; ?>" required></td>
                                  <?php
                                  }
                                  ?>
                                </tr>
                                <tr>
                                  <td style="border:1px solid #000; padding:5px; font-size:12px; font-weight:500;">Total</td>
                                  <?php 
                                  for ($y=0; $y < $man_count_rows; $y++) { ?>
                                    <td style="border:1px solid #000;"><input style="width:30px; font-size:10px; border: 0px;" name="sum_total[]" class="form-control1 sum_total" type="text" id="sum_total_<?php echo $y; ?>" tabindex="-1" readonly></td>
                                  <?php
                                  }
                                  ?>
                                </tr>
                                 </tbody>
                                </table>
                        </div>  
                          <input type="hidden" name="col_count" id="col_count" value="<?php echo $man_count_rows;?>">

                      
                   </form>                 
                  </div>
                </div>
                  <div class="col-md-2">
                   <div class="card-body" style="background:#fff; box-shadow: 0px 1px 2px #00000040; margin-top: 50px;">
                      <form class="" id="total_cost_form">     
                              <div class="row">
                                <table class="" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                  </thead>
                                 <tbody>
                                <tr>
                                  <td style=" padding:5px; font-size:10px; font-weight:500;">Total Hours</td>
                                    <td><input type="text" class="form-control total_hours" id="total_hours"></td>
                                </tr>                                
                                <tr>
                                  <td style=" padding:5px; font-size:10px; font-weight:500;">Rate</td>
                                    <td><input type="text" class="form-control total_manpower_cost" id="total_manpower_cost" readonly></td>
                                </tr>
                                <tr>
                                  <td style="padding:5px; font-size:10px; font-weight:500;">Average</td>
                                    <td><input type="text" class="form-control average_manpower_cost" id="average_manpower_cost" readonly></td>
                                </tr>
                                 </tbody>
                                </table>
                          
                          </div>  
                          <input type="hidden" name="col_count" id="col_count" value="<?php echo $man_count_rows;?>">
                   </form>                 
                  </div>
              </div>
            </div>

            
                <button class="prev-btn">Previous</button>
                <button class="next-btn">Next</button>
            </div>
<script>
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_mnp', function(){
          count++;

          $('#man_total_item').val(count);
          var html_code = '';

          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_mnp"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';
          html_code += '<td><input type="text" id="activity_name'+count+'" data-srno="'+count+'" name="activity_name[]"  style="width:120px"></td>';
          
          <?php for ($i=0; $i<$man_count_rows ; $i++) { ?>
          html_code += '<td><table class="table table-bordered dt-responsive nowrap table-excel2" id="extra_data_table'+count+' style="border-collapse: collapse; border-spacing: 0; width: 100%;"><tr><td><input name="activity_id[]" id="task'+count+'" type="hidden"><input class="form-control no_of_person" name="no_of_person[]" id="no_of_person'+count+'" style="width:25px; border:0; font-size:10px;" type="text" data-srno="'+count+'" data-col-id="<?php echo $i; ?>"></td><td><input class="form-control no_of_hours" id="no_of_hours'+count+'" style="width:25px; border:0; font-size:10px;" name="no_of_hours[]" type="text" data-srno="'+count+'" data-col-id="<?php echo $i; ?>"></td></tr></table></td>';
        <?php } ?>

          html_code += '</tr>';
          $('#hello1').append(html_code);
          console.log(html_code);
          });
        
        $(document).on('click', '.remove_row_mnp', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          count--;
          $('#man_total_item').val(count);
        });


      $(document).on('blur', '.no_of_person', function(){
          var sum = 0;
          var head_id = $(this).attr("id");
          var colId = $(this).data('col-id');

          $('.no_of_person').each(function () {
          var currentColumnIndex = $(this).data('col-id');
      

        // Check if the input field is in the same column as the clicked input field
        if (currentColumnIndex === colId) {
        var value = parseInt($(this).val()) || 0; // Convert the value to an integer or use 0 if it's not a valid number
        sum += value;
        }
        });

          $('#sum_person_' + colId).val(sum);
        
        });

    



      $(document).on('blur', '.no_of_hours', function(){
          var sum = 0;
          var head_id = $(this).attr("id");
          var colId = $(this).data('col-id');

          $('.no_of_hours').each(function () {
          var currentColumnIndex = $(this).data('col-id');

        // Check if the input field is in the same column as the clicked input field
        if (currentColumnIndex === colId) {
        var value = parseInt($(this).val()) || 0; // Convert the value to an integer or use 0 if it's not a valid number
        sum += value;
        
        }

        });

          $('#sum_hours_' + colId).val(sum);
        });

      

      $(document).on('blur','.sum_rate',function(){
        var rate = $(this).val();
        var count_head = $('#emp_total_count').val();
        cal_final_total(rate,count_head);
        
      });

      



});


          function cal_final_total(rate,count_head) {
          
          var sum_hours = 0;
          var sum_person = 0;
          var unit_rate = rate;
          for(j=0; j<count_head; j++){
          
          var sum_hours = $('#sum_hours_'+j).val();
          var sum_person = $('#sum_person_'+j).val();
          var unit_rate = $('#sum_rate_inp_'+j).val();
          var total_amt = parseFloat(sum_hours) * parseFloat(sum_person) * parseFloat(unit_rate);
          //console.log(total_amt);
            if(!isNaN(total_amt)) {
              $('#sum_total_'+j).val(total_amt);
              


            } else {
              $('#sum_total_'+j).val('');
            }

        }

      }

   
</script>
<script>
        //No_of_hours calculate Function 
        const inputElements = document.querySelectorAll('.no_of_hours');
        const totalSumElement = document.getElementById('total_hours');

        // Function to calculate and update the total sum
        function calculateTotalSum() {

            let total = 0;
            inputElements.forEach(function (input) {
                // Parse the input value to a number and add it to the total
                total += parseFloat(input.value) || 0;
            });
            
            totalSumElement.value = total;
        }

        // Listen for "keyup" event on each input field
        inputElements.forEach(function (input) {
            input.addEventListener('keyup', calculateTotalSum);
        });



        ////Rate calculate Function
        const sum_rate_elements = document.querySelectorAll('.sum_rate');
        const total_cost_element = document.getElementById('total_manpower_cost');

        // Function to calculate and update the total sum
        function calculateTotalRate() {

            let total_rate = 0;
            sum_rate_elements.forEach(function (input) {
                // Parse the input value to a number and add it to the total
                total_rate += parseFloat(input.value) || 0;
            });
            
            total_cost_element.value = total_rate;
            calculate_average();
        }

        // Listen for "keyup" event on each input field
        sum_rate_elements.forEach(function (input) {
            input.addEventListener('keyup', calculateTotalRate);
        });

        function calculate_average(){
          var cost = $('.total_manpower_cost').val();
          var hrs = $('.total_hours').val();
          const average = document.getElementById('average_manpower_cost');

          let tot_average = 0;
          tot_average += parseInt(hrs)/parseInt(cost);

          average.value = tot_average.toFixed(2);
          

        }

    </script>
