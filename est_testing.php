          
           <form class="" id="est_testing" novalidate>
                        <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                            <div class="col-12">
                                <label>Chemical Testing</label>
                                <table class="table table-bordered dt-responsive nowrap" id="chemical_testing_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">No. of Samples</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_chemical" id="add_row_chemical" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <input type="text" class="form-control chemical_no_of_sample" id="chemical_no_of_sample1" name="chemical_no_of_sample[]" data-srno="1"> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control chemical_unit_rate" id="chemical_unit_rate1" name="chemical_unit_rate[]"  data-srno="1">
                                    </td>
                                    <td>
                                      <input type="text" class="form-control chemical_total_cost" id="chemical_total_cost1" name="chemical_total_cost[]" data-srno="1" required readonly>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                        

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="chemical_count" id="chemical_count" value="1" />
                              
                            

                            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                                  <div class="col-12">
                                <label>Mechanical Testing</label>

                              <table class="table table-bordered dt-responsive nowrap" id="mechanical_testing_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">No. of Samples</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_mechanical" id="add_row_mechanical" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <input type="text" class="form-control mechanical_no_of_sample" id="mechanical_no_of_sample1" name="mechanical_no_of_sample[]" data-srno="1"> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control mechanical_unit_rate" id="mechanical_unit_rate1" name="mechanical_unit_rate[]"  data-srno="1">
                                    </td>
                                    <td>
                                      <input type="text" class="form-control mechanical_total_cost" id="mechanical_total_cost1" name="mechanical_total_cost[]" data-srno="1" required readonly>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              </div>
                                
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="mechanical_count" id="mechanical_count" value="1" />
                              <!-- <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button> -->
                            

                            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                                  <div class="col-12">
                                      <label>TPI Testing</label>

                                <table class="table table-bordered dt-responsive nowrap" id="testing_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Select TPI</th>
                                      <th width="15%">No oF Days</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_testing" id="add_row_testing" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select" name="testing_select_tpi[]" id="testing_select_tpi1" data-srno="1">
                                          <option value="">-SELECT-</option>
                                          <?php
                                          $query = "SELECT tpi_name FROM tpi";
                                          $results=mysqli_query($conn, $query);
                                       //loop
                                          foreach ($results as $tpiname){
                                           ?>
                                           <option value="<?php echo $tpiname["tpi_name"];?>"><?php echo $tpiname["tpi_name"];?></option>
                                           <?php 
                                         }
                                         ?>
                                       </select>
                                      </td>
                                    <td>
                                       <input type="text" class="form-control testing_no_of_days" id="testing_no_of_days1" name="testing_no_of_days[]" data-srno="1">
                                    </td>
                                    <td>
                                     <input type="text" class="form-control testing_unit_rate" id="testing_unit_rate1" name="testing_unit_rate[]" data-srno="1">
                                    </td>
                                    <td>
                                      <input type="text" class="form-control testing_total_cost" id="testing_total_cost1" name="testing_total_cost[]" data-srno="1" readonly>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                                </div>
                                </div>
                              <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button_testing" type="submit" style="display:none;">Add</button>
                              <input type="hidden" name="testing_count" id="testing_count" value="1" />
                                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                  Adding...
                                </button>
                              </form>
                              <form class="" id="site_visit">            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>Site Visit Charges</label>
                                <table class="table table-bordered dt-responsive nowrap" id="site_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Site Location</th>
                                      <th width="15%">No. Of Person</th>
                                      <th width="15%">No. Of Days</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_site_visit" id="add_row_site_visit" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                    <td>
                                       <input type="text" class="form-control site_location" id="site_location1" name="site_location[]" data-srno="1" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control site_no_of_person" id="site_no_of_person1" name="site_no_of_person[]" data-srno="1" onblur="validate_num_Input(this)" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control site_no_of_days" id="site_no_of_days1" name="site_no_of_days[]" data-srno="1" onblur="validate_num_Input(this)" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control site_unit_rate" data-srno="1" id="site_unit_rate1" onblur="validate_num_Input(this)" name="site_unit_rate[]" >
                                    </td>
                                    <td>
                                       <input type="text" class="form-control site_total_cost" data-srno="1" id="site_total_cost1" name="site_total_cost[]" readonly> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <input type="hidden" name="site_visit_count" id="site_visit_count" value="1" />
                              <button class="btn btn-primary" id="add_button_site_visit" type="submit" style="display:none">Add</button>
                          <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                          </button>
                            </form>

<div class="row">
              <div class="col-md-3">
                <div class="card-body" style="background:#fff; box-shadow: 0px 1px 2px #00000040;">
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
                                  <td style="display: none;" class="chemical_test_cost" id="chemical_test_cost"> </td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="mechanical_test_cost" id="mechanical_test_cost"></td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="t_test_cost" id="t_test_cost"></td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="site_visit_cost" id="site_visit_cost"></td>
                                    </tr>
                                    <tr>
                                  <td class="test_total_cost" id="test_total_cost"></td>
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


                            
 <script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_chemical', function(){
          count++;
          $('#chemical_count').val(count);
          var html_code = '';
          html_code += '<tr id="chemical_row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_chemical"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td><input type="text" class="form-control chemical_no_of_sample" id="chemical_no_of_sample'+count+'" name="chemical_no_of_sample[]" data-srno="'+count+'" oninput="calculateChemical()"></td>';
                                     
          html_code += '<td><input type="text" class="form-control chemical_unit_rate" id="chemical_unit_rate'+count+'" name="chemical_unit_rate[]"  data-srno="'+count+'" oninput="calculateChemical()"></td>';

          html_code += '<td><input type="text" class="form-control chemical_total_cost" id="chemical_total_cost'+count+'" name="chemical_total_cost[]" data-srno="'+count+'" required readonly></td>';

          html_code += '</tr>';
          $('#chemical_testing_table').append(html_code);
          });


        
        $(document).on('click', '.remove_row_chemical', function(){
          var row_id = $(this).attr("id");
          $('#chemical_row_id_'+row_id).remove();
          $('#chemical_count').val(count);
        });
    


         		    
        $(document).on('keyup', '.chemical_unit_rate', function(){
          cal_final_total(count);
          var sum=0;
          $(".chemical_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#c_unit_rate").html(sum);
        });
         $(document).on('keyup', '.chemical_no_of_sample', function(){
          cal_final_total(count);
          var sum=0;
          $(".chemical_no_of_sample").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#c_no_of_sample").html(sum);
        });
     
        $(document).on('keyup', '.chemical_total_cost', function(){
          var sum = 0;
          $(".chemical_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#chemical_test_cost").html(sum);
          cal_test_total();
        });

          function cal_final_total(count) {
          
          var chemical_no_of_sample = 0;
          var chemical_unit_rate = 0;
          var chemical_total_cost = 0;
          for(j=1; j<=count; j++){
          
          var chemical_no_of_sample = $('#chemical_no_of_sample'+j).val();
          var chemical_unit_rate = $('#chemical_unit_rate'+j).val();
          var chemical_total_cost = $('#chemical_total_cost'+j).val();
          var total_amt = parseFloat(chemical_no_of_sample) * parseFloat(chemical_unit_rate);
            if(!isNaN(total_amt)) {
              $('#chemical_total_cost'+j).val(total_amt);
            } else {
              $('#chemical_total_cost'+j).val('');
            }

          
        }

      }

       

});

      $(document).ready(function(){
        var counted = 1;
        $(document).on('click', '#add_row_mechanical', function(){
          counted++;
          $('#mechanical_count').val(counted);
          var html_code = '';
          html_code += '<tr id="mechanical_row_id_'+counted+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+counted+'" class="btn btn-danger btn-md remove_row_mechanical"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+counted+'</span></td>';

          html_code += '<td><input type="text" class="form-control mechanical_no_of_sample" id="mechanical_no_of_sample'+counted+'" name="mechanical_no_of_sample[]" data-srno="'+counted+'" oninput="calculateMechanical()"></td>';
                                     
          html_code += '<td><input type="text" class="form-control mechanical_unit_rate" id="mechanical_unit_rate'+counted+'" name="mechanical_unit_rate[]"  data-srno="'+counted+'" oninput="calculateChemical()"></td>';

          html_code += '<td><input type="text" class="form-control mechanical_total_cost" id="mechanical_total_cost'+counted+'" name="mechanical_total_cost[]" data-srno="'+counted+'" required readonly></td>';

          html_code += '</tr>';
          $('#mechanical_testing_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_mechanical', function(){
          var row_id = $(this).attr("id");
          $('#mechanical_row_id_'+row_id).remove();
          $('#mechanical_count').val(counted);
        });
    


         $(document).on('keyup', '.mechanical_unit_rate', function(){
          cal_final_to(counted);
          var sum=0;
          $(".mechanical_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#m_unit_rate").html(sum);
        });
         $(document).on('keyup', '.mechanical_no_of_sample', function(){
          cal_final_to(counted);
          var sum=0;
          $(".mechanical_no_of_sample").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#m_no_of_sample").html(sum);
        });
     
        $(document).on('keyup', '.mechanical_total_cost', function(){
          var sum = 0;
          $(".mechanical_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#mechanical_test_cost").html(sum);
          cal_test_total();
        });


         function cal_final_to(counted) {
          
          var mechanical_no_of_sample = 0;
          var mechanical_unit_rate = 0;
          var mechanical_total_cost = 0;
          for(j=1; j<=counted; j++){
          
          var mechanical_no_of_sample = $('#mechanical_no_of_sample'+j).val();
          var mechanical_unit_rate = $('#mechanical_unit_rate'+j).val();
          var mechanical_total_cost = $('#mechanical_total_cost'+j).val();
          var total_amt = parseFloat(mechanical_no_of_sample) * parseFloat(mechanical_unit_rate);
            if(!isNaN(total_amt)) {
              $('#mechanical_total_cost'+j).val(total_amt);
            } else {
              $('#mechanical_total_cost'+j).val('');
            }

          
        }

      }
});


$(document).ready(function(){
        var count2 = 1;
        $(document).on('click', '#add_row_testing', function(){
          count2++;
          $('#testing_count').val(count2);
          var html_code = '';
          html_code += '<tr id="testing_row_id_'+count2+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count2+'" class="btn btn-danger btn-md remove_row_testing"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count2+'</span></td>';

          html_code+='<td><select class="custom-select testing_select_tpi" name="testing_select_tpi[]" id="testing_select_tpi'+count2+'" data-srno="1"><option value="">-SELECT-</option><?php
                                          $query = "SELECT tpi_name FROM tpi";
                                          $results=mysqli_query($conn, $query);
                                       //loop
                                          foreach ($results as $tpiname){
                                           ?>
                                           <option value="<?php echo $tpiname["tpi_name"];?>"><?php echo $tpiname["tpi_name"];?></option><?php 
                                         }
                                         ?></select></td>';

          html_code += '<td><input type="text" class="form-control testing_no_of_days" id="testing_no_of_days'+count2+'" name="testing_no_of_days[]" oninput="calculateWithness()" data-srno="'+count2+'"></td>';

          html_code += '<td><input type="text" class="form-control testing_unit_rate" id="testing_unit_rate'+count2+'" name="testing_unit_rate[]" oninput="calculateWithness()" data-srno="'+count2+'"></td>';

          html_code += '<td><input type="text" class="form-control testing_total_cost" id="testing_total_cost'+count2+'" name="testing_total_cost[]" oninput="calculateWithness()" data-srno="'+count2+'"></td>';

         

          html_code += '</tr>';
          $('#testing_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_testing', function(){
          var row_id = $(this).attr("id");
          $('#testing_row_id_'+row_id).remove();
          $('#testing_count').val(count2);
        });
    


          $(document).on('keyup', '.testing_no_of_days', function(){
          cal_final_total(count2);
          var sum=0;
          $(".testing_no_of_days").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#t_no_of_days").html(sum);
        });
         $(document).on('keyup', '.testing_unit_rate', function(){
          cal_final_total(count2);
          var sum=0;
          $(".testing_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#t_no_of_sample").html(sum);
        });
     
        $(document).on('keyup', '.testing_total_cost', function(){
          var sum = 0;
          $(".testing_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#t_test_cost").html(sum);
          cal_test_total();
        });





         function cal_final_total(count2) {
          
          var testing_no_of_days = 0;
          var testing_unit_rate = 0;
          var testing_total_cost = 0;
          for(j=1; j<=count2; j++){
          
          var testing_no_of_days = $('#testing_no_of_days'+j).val();
          var testing_unit_rate = $('#testing_unit_rate'+j).val();
          var testing_total_cost = $('#testing_total_cost'+j).val();
          var total_amt = parseFloat(testing_no_of_days) * parseFloat(testing_unit_rate);
            if(!isNaN(total_amt)) {
              $('#testing_total_cost'+j).val(total_amt);
            } else {
              $('#testing_total_cost'+j).val('');
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

      
      


</script>
<script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_site_visit', function(){
          count++;
          $('#site_visit_count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control site_location" id="site_location'+count+'" name="site_location[]" data-srno="'+count+'"></td>';

          html_code += '<td class=""><input type="text" class="form-control site_no_of_person" id="site_no_of_person'+count+'" name="site_no_of_person[]" data-srno="'+count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td class=""><input type="text" class="form-control site_no_of_days" id="site_no_of_days'+count+'" name="site_no_of_days[]" data-srno="'+count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td class=""><input type="text" class="form-control site_unit_rate" id="site_unit_rate'+count+'" name="site_unit_rate[]" data-srno="'+count+'" onblur="validate_num_Input(this)"></td>';

          html_code += '<td class=""><input type="text" class="form-control site_total_cost" id="site_total_cost'+count+'" name="site_total_cost[]" data-srno="'+count+'" readonly></td>';

          html_code += '</tr>';
          $('#site_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#site_visit_count').val(count);
        });
    


         $(document).on('keyup', '.site_no_of_person', function(){
          cal_final_total(count);
        });
         $(document).on('keyup', '.site_no_of_days', function(){
          cal_final_total(count);
        });

        $(document).on('keyup', '.site_total_cost', function(){
          cal_final_total(count);
          var sum = 0;
          $(".site_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $('#site_visit_cost').html(sum);
          $('#summary_site_visit_cost').html(sum);
          $('#hidden_site_visit_cost').val(sum);
        });


         function cal_final_total(count) {
          
          var site_no_of_person = 0;
          var site_no_of_days = 0;
          var site_unit_rate = 0;
          var site_total_cost = 0;
          for(j=1; j<=count; j++){
          
          var site_no_of_person = $('#site_no_of_person'+j).val();
          var site_no_of_days = $('#site_no_of_days'+j).val();
          var site_unit_rate = $('#site_unit_rate'+j).val();
          var site_total_cost = $('#site_total_cost'+j).val();
          var total_amt = parseFloat(site_no_of_person) * parseFloat(site_no_of_days) * parseFloat(site_unit_rate);
            if(!isNaN(total_amt)) {
              $('#site_total_cost'+j).val(total_amt);
            } else {
              $('#site_total_cost'+j).val('');
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
function cal_test_total(){
        if(!parseInt($('#chemical_test_cost').html())) {
          var chemical_total = 0;
        }else{
          var chemical_total = parseInt($('#chemical_test_cost').html());
        }
        if(!parseInt($('#mechanical_test_cost').html())) {
          var mechanical_total = 0;
        }else{
          var mechanical_total = parseInt($('#mechanical_test_cost').html());
        }
        if(!parseInt($('#t_test_cost').html())) {
          var testing_total = 0;
        }else{
          var testing_total = parseInt($('#t_test_cost').html());
        }
        var total_testing_cost = (chemical_total + mechanical_total + testing_total);
        $('#test_total_cost').html(total_testing_cost);
        $('#summary_testing_cost').html(total_testing_cost);
        $('#hidden_testing_cost').val(total_testing_cost);
        
        
        
      }


    

</script>
