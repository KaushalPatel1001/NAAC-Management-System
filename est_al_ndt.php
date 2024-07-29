           <form class="" id="est_ndt" novalidate>
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>External Theory</label>
                                <table class="table table-bordered dt-responsive nowrap" id="ut_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Subject</th>
                                      <th width="15%">Threshold Level (%)</th>
                                      <th width="15%">Total Student</th>
                                       <th width="15%">Supposed Student</th>
                                      <th width="25%">Student Achevie > TL (%)</th>
                                       <th width="20%">Rubrics 1</th>
                                       <th width="20%">Rubrics 2</th>
                                       <th width="20%">Rubrics 3</th>
                                      <th width="15%">Attaintment Level</th>
                                      <th width="15%">SUBMIT</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  
                                    <tr>
                                      <td><button type="button" name="add_row_ut" id="add_row_ut" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select ut_type" name="ut_type[]" id="ut_type1" required >
                                    <option value="">-Select-</option>
                                    <option value="Running Meter">BDA</option>
                                    <option value="Day">COA</option>
                                    <option value="KG">AML</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control ut_quantity" id="ut_quantity1" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_total_student" data-srno="1" id="ut_total_student" onblur="validate_num_Input(this)" name="ut_unit_rate[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_suppose_student" id="ut_suppose_student" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_TL" id="ut_TL" name="ut_quantity[]" data-srno="1" readonly required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_rubrics1" id="ut_rubrics1" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_rubrics2" id="ut_rubrics2" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_rubrics3" id="ut_rubrics3" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_Attaintment_Level" data-srno="1" id="ut_Attaintment_Level" name="ut_total_cost[]" readonly required> 
                                    </td>
                                    <td>
                                        <form action="https://example.com/destination-page.html">
                                           <input type="submit" value="Click here">
                                            </form>
                                     </td>       
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>


                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="ut_count" id="ut_count" value="1" />                                      
                              
                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="rt_count" id="rt_count" value="1" />
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <button class="btn btn-primary" id="add_button_ndt" type="submit" style="display:none">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
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
                                      <th width="10%">For VIEW</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td style="display: none;" class="u_total_cost" id="u_total_cost"> </td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="p_total_cost" id="p_total_cost"></td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="v_total_cost" id="v_total_cost"></td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="r_total_cost" id="r_total_cost"> </td>
                                    </tr>
                                    <tr>
                                  <td style="display: none;" class="pa_total_cost" id="pa_total_cost"></td>
                                  <td class="ndt_total_cost" id="ndt_total_cost"></td>
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
                            



        <!-- end page title -->
        
        <!-- end row -->
        <!-- end row -->
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<!-- /Right-bar -->
<!-- Right bar overlay-->
<!-- JAVASCRIPT -->

 <script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_ut', function(){
          count++;
          $('#ut_count').val(count);
          var html_code = '';
          html_code += '<tr id="ut_row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_ut"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><select class="custom-select ut_type" name="ut_type[]" id="ut_type'+count+'" data-srno="'+count+'" required><option value="">-Select-</option><option value="Running Meter">Running Meter</option><option value="Day">Day</option><option value="KG">KG</option></select></td>';
                                     
          html_code += '<td class=""><input type="text" class="form-control ut_quantity" id="ut_quantity'+count+'" name="ut_quantity[]" data-srno="'+count+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control ut_unit_rate" id="ut_unit_rate'+count+'" name="ut_unit_rate[]" data-srno="'+count+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control ut_total_cost" id="ut_total_cost'+count+'" name="ut_total_cost[]" data-srno="'+count+'" readonly required></td>';

          html_code += '</tr>';
          $('#ut_page_table').append(html_code);
          });


        
        $(document).on('click', '.remove_row_ut', function(){
          var row_id = $(this).attr("id");
          $('#ut_row_id_'+row_id).remove();
          $('#ut_count').val(count);
        });
    


  /*       $(document).on('keyup', '.ut_quantity', function(){
          cal_final_total(count);
          var sum=0;
          $(".ut_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#u_quantity").html(sum);
        });
         $(document).on('keyup', '.ut_unit_rate', function(){
          cal_final_total(count);
          var sum=0;
          $(".ut_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#u_unit_rate").html(sum);
        });
     
        $(document).on('keyup', '.ut_total_cost', function(){
          var sum = 0;
          $(".ut_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#u_total_cost").html(sum);
          cal_ndt_total();
        });


         function cal_final_total(count) {

          var ut_quantity = 0;
          var unit_rate = 0;
          var total_cost = 0;
          for(j=1; j<=count; j++){
          
          var ut_quantity = $('#ut_quantity'+j).val();
          var unit_rate = $('#ut_unit_rate'+j).val();
          var total_cost = $('#ut_total_cost'+j).val();
          var total_amt = parseFloat(ut_quantity) * parseFloat(unit_rate);
            if(!isNaN(total_amt)) {
              $('#ut_total_cost'+j).val(total_amt);
            } else {
              $('#ut_total_cost'+j).val('');
            }

          
        }

      }

*/

      $(document).on('keyup', '.ut_total_student', function(){
          cal_final_total1(count);
          var sum=0;
          $(".ut_total_student").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#ut_total_student").html(sum);
        });
         $(document).on('keyup', '.ut_suppose_student', function(){
          cal_final_total1(count);
          var sum=0;
          $(".ut_suppose_student").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#ut_suppose_student").html(sum);
        });
     
        $(document).on('keyup', '.ut_TL', function(){
          var sum = 0;
          $(".ut_TL").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#ut_TL").html(sum);
          //cal_ndt_total();
        });



         $(document).on('keyup', '.ut_rubrics1', function(){
          cal_final_total2(count);
          var sum=0;
          $(".ut_rubrics1").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#ut_rubrics1").html(sum);
        });
         $(document).on('keyup', '.ut_rubrics2', function(){
          cal_final_total2(count);
          var sum=0;
          $(".ut_rubrics2").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#ut_rubrics2").html(sum);
        });
     
        $(document).on('keyup', '.ut_rubrics3', function(){
          cal_final_total2(count);
          var sum = 0;
          $(".ut_rubrics3").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#ut_rubrics3").html(sum);
          //cal_ndt_total();
        });
         $(document).on('keyup', '.ut_Attaintment_Level', function(){
          
          var sum=0;
          $(".ut_Attaintment_Level").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#ut_Attaintment_Level").html(sum);
        });
   /*    function cal_final_total1(count) {

          var ut_total_student = 0;
          var ut_suppose_student = 0;
          var total_TL = 0;
          for(j=1; j<=count; j++){
          
         var ut_total_student = $('#ut_total_student'+j).val();
          var ut_suppose_student = $('#ut_suppose_student'+j).val();
          var total_TL = $('#ut_TL'+j).val();
          var total_amt = (parseFloat(ut_suppose_student) / parseFloat(ut_total_student))*100;
            if(!isNaN(total_amt)) {
              $('#ut_TL'+j).val(total_amt);
            } else {
              $('#ut_TL'+j).val('');
            }

          
        }

      } */
        function cal_final_total1() {
    // Get the values entered in the "ut_total_student" and "ut_suppose_student" fields
    const totalStudentInput = document.getElementById("ut_total_student");
    const supposeStudentInput = document.getElementById("ut_suppose_student");
    const tlInput = document.getElementById("ut_TL");

    const totalStudentValue = parseFloat(totalStudentInput.value);
    const supposeStudentValue = parseFloat(supposeStudentInput.value);

    // Calculate the percentage
    if (!isNaN(totalStudentValue) && !isNaN(supposeStudentValue) && totalStudentValue !== 0) {
        const percentage = (supposeStudentValue / totalStudentValue) * 100;

        // Set the calculated percentage in the "ut_TL" field
        tlInput.value = percentage.toFixed(2) + "%";
    } else {
        // If values are not valid, clear the "ut_TL" field
        tlInput.value = "";
    }
}

  function cal_final_total2() {
    // Get the percentage value from the "ut_TL" field
    const tlInput = document.getElementById("ut_TL");
    const tlValue = parseFloat(tlInput.value);

    // Define your rubrics thresholds
    const rubrics1ThresholdInput = document.getElementById("ut_rubrics1");
    const rubrics2ThresholdInput = document.getElementById("ut_rubrics2");
    const rubrics3ThresholdInput = document.getElementById("ut_rubrics3");

    // Parse the values of rubrics thresholds
    const rubrics1Value = parseFloat(rubrics1ThresholdInput.value);
    const rubrics2Value = parseFloat(rubrics2ThresholdInput.value);
    const rubrics3Value = parseFloat(rubrics3ThresholdInput.value);

    // Get the "ut_Attaintment_Level" field
    const attainmentLevelInput = document.getElementById("ut_Attaintment_Level");

    // Compare the percentage and set the appropriate attainment level
    if (!isNaN(tlValue)) {
        if (tlValue >= rubrics1Value) {
            attainmentLevelInput.value = "Rubrics 1";
        } else if (tlValue >= rubrics2Value) {
            attainmentLevelInput.value = "Rubrics 2";
        } else if (tlValue >= rubrics3Value) {
            attainmentLevelInput.value = "Rubrics 3";
        } else {
            attainmentLevelInput.value = "Rubrics 4";
        }
    } else {
        // If "ut_TL" field is not a valid number, clear the "ut_Attaintment_Level" field
        attainmentLevelInput.value = "";
    }
}




});

      $(document).ready(function(){
        var counted = 1;
        $(document).on('click', '#add_row_pt', function(){
          counted++;
          $('#pt_count').val(counted);
          var html_code = '';
          html_code += '<tr id="pt_row_id_'+counted+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+counted+'" class="btn btn-danger btn-md remove_row_pt"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+counted+'</span></td>';

          html_code += '<td class=""><select class="custom-select pt_type" name="pt_type[]" id="pt_type'+counted+'" data-srno="'+counted+'" required><option value="">-Select-</option><option value="Running Meter">Running Meter</option><option value="Day">Day</option><option value="KG">KG</option></select></td>';

          html_code += '<td class=""><input type="text" class="form-control pt_quantity" id="pt_quantity'+counted+'" name="pt_quantity[]" data-srno="'+counted+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control pt_unit_rate" id="pt_unit_rate'+counted+'" name="pt_unit_rate[]" data-srno="'+counted+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control pt_total_cost" id="pt_total_cost'+counted+'"name="pt_total_cost[]" data-srno="'+counted+'" readonly required></td>';

          html_code += '</tr>';
          $('#pt_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_pt', function(){
          var row_id = $(this).attr("id");
          $('#pt_row_id_'+row_id).remove();
          $('#pt_count').val(counted);
        });
    


         $(document).on('keyup', '.pt_quantity', function(){
          cal_final_to(counted);
          var sum=0;
          $(".pt_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#p_quantity").html(sum);
        });
        $(document).on('keyup', '.pt_unit_rate', function(){
          cal_final_to(counted);
          var sum=0;
          $(".pt_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#p_unit_rate").html(sum);
        });
     
        $(document).on('keyup', '.pt_total_cost', function(){
          var sum = 0;
          $(".pt_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#p_total_cost").html(sum);
          cal_ndt_total();
        });


         function cal_final_to(counted) {
          
          var pt_quantity = 0;
          var pt_unit_rate = 0;
          var pt_total_cost = 0;
          for(j=1; j<=counted; j++){
          
          var pt_quantity = $('#pt_quantity'+j).val();
          var pt_unit_rate = $('#pt_unit_rate'+j).val();
          var pt_total_cost = $('#pt_total_cost'+j).val();
          var total_amt = parseFloat(pt_quantity) * parseFloat(pt_unit_rate);
            if(!isNaN(total_amt)) {
              $('#pt_total_cost'+j).val(total_amt);
            } else {
              $('#pt_total_cost'+j).val('');
            }

          
        }

      }
});

 $(document).ready(function(){
        var count1 = 1;
        $(document).on('click', '#add_row_vt', function(){
          count1++;
          $('#vt_count').val(count1);
          var html_code = '';
          html_code += '<tr id="vt_row_id_'+count1+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count1+'" class="btn btn-danger btn-md remove_row_vt"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count1+'</span></td>';

          html_code += '<td class=""><select class="custom-select vt_type" name="vt_type[]" id="vt_type'+count1+'" data-srno="'+count1+'" required><option value="">-Select-</option><option value="Running Meter">Running Meter</option><option value="Day">Day</option><option value="KG">KG</option></select></td>';
                                     
          html_code += '<td class=""><input type="text" class="form-control vt_quantity" id="vt_quantity'+count1+'" name="vt_quantity[]" data-srno="'+count1+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control vt_unit_rate" id="vt_unit_rate'+count1+'" name="vt_unit_rate[]" data-srno="'+count1+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control vt_total_cost" id="vt_total_cost'+count1+'" name="vt_total_cost[]" data-srno="'+count1+'" readonly required></td>';

          html_code += '</tr>';
          $('#vt_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_vt', function(){
          var row_id = $(this).attr("id");
          $('#vt_row_id_'+row_id).remove();
          $('#vt_count').val(count1);
        });
    


        $(document).on('keyup', '.vt_quantity', function(){
          cal_final_total(count1);
          var sum=0;
          $(".vt_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#v_quantity").html(sum);
        });
        $(document).on('keyup', '.vt_unit_rate', function(){
          cal_final_total(count1);
          var sum=0;
          $(".vt_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#v_unit_rate").html(sum);
        });
     
        $(document).on('keyup', '.vt_total_cost', function(){
          var sum = 0;
          $(".vt_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#v_total_cost").html(sum);
          cal_ndt_total();
        });


         function cal_final_total(count1) {
          
          var vt_quantity = 0;
          var vt_unit_rate = 0;
          var vt_total_cost = 0;
          for(j=1; j<=count1; j++){
          
          var vt_quantity = $('#vt_quantity'+j).val();
          var vt_unit_rate = $('#vt_unit_rate'+j).val();
          var vt_total_cost = $('#vt_total_cost'+j).val();
          var total_amt = parseFloat(vt_quantity) * parseFloat(vt_unit_rate);
            if(!isNaN(total_amt)) {
              $('#vt_total_cost'+j).val(total_amt);
            } else {
              $('#vt_total_cost'+j).val('');
            }

          
        }

      }
}); 

$(document).ready(function(){
        var count2 = 1;
        $(document).on('click', '#add_row_rt', function(){
          count2++;
          $('#rt_count').val(count2);
          var html_code = '';
          html_code += '<tr id="rt_row_id_'+count2+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count2+'" class="btn btn-danger btn-md remove_row_rt"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count2+'</span></td>';

          html_code += '<td class=""><select class="custom-select rt_spot_size" name="rt_spot_size[]" id="rt_spot_size'+count2+'" data-srno="'+count2+'" required><option value="">-Select-</option><option value="3">3</option><option value="6">6</option><option value="12">12</option><option value="18">18</option></td>';

          html_code += '<td class=""><input type="text" class="form-control rt_no_of_spot" id="rt_no_of_spot'+count2+'" name="rt_no_of_spot[]" data-srno="'+count2+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control rt_unit_value" id="rt_unit_value'+count2+'" name="rt_unit_value[]" data-srno="'+count2+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control rt_total_cost" id="rt_total_cost'+count2+'" name="rt_total_cost[]" data-srno="'+count2+'" readonly required></td>';

          html_code += '</tr>';
          $('#rt_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_rt', function(){
          var row_id = $(this).attr("id");
          $('#rt_row_id_'+row_id).remove();
          $('#rt_count').val(count2);
        });
    


         $(document).on('keyup', '.rt_no_of_spot', function(){
          cal_final_total(count2);
          var sum=0;
          $(".rt_no_of_spot").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#r_quantity").html(sum);
        });
        $(document).on('keyup', '.rt_unit_value', function(){
          cal_final_total(count2);
          var sum=0;
          $(".rt_unit_value").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#r_unit_rate").html(sum);
        });
     
        $(document).on('keyup', '.rt_total_cost', function(){
          var sum = 0;
          $(".rt_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#r_total_cost").html(sum);
          cal_ndt_total();
        });


         function cal_final_total(count2) {
          
          var rt_no_of_spot = 0;
          var rt_unit_value = 0;
          var rt_total_cost = 0;
          for(j=1; j<=count2; j++){
          
          var rt_no_of_spot = $('#rt_no_of_spot'+j).val();
          var rt_unit_value = $('#rt_unit_value'+j).val();
          var rt_total_cost = $('#rt_total_cost'+j).val();
          var total_amt = parseFloat(rt_no_of_spot) * parseFloat(rt_unit_value);
            if(!isNaN(total_amt)) {
              $('#rt_total_cost'+j).val(total_amt);
            } else {
              $('#rt_total_cost'+j).val('');
            }

          
        }

      }
}); 

$(document).ready(function(){
        var count3 = 1;
        $(document).on('click', '#add_row_paut', function(){
          count3++;
          $('#paut_count').val(count3);
          var html_code = '';
          html_code += '<tr id="paut_row_id_'+count3+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count3+'" class="btn btn-danger btn-md remove_row_paut"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count3+'</span></td>';

          html_code += '<td class=""><select class="custom-select paut_ut_type" name="paut_ut_type[]" id="paut_ut_type'+count3+'" data-srno="'+count3+'" required><option value="">-Select-</option><option value="Running Meter">Running Meter</option><option value="Day">Day</option><option value="KG">KG</option></select></td>';

          html_code += '<td class=""><input type="text" class="form-control paut_quantity" id="paut_quantity'+count3+'" name="paut_quantity[]" data-srno="'+count3+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control paut_unit_rate" id="paut_unit_rate'+count3+'" name="paut_unit_rate[]" data-srno="'+count3+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td class=""><input type="text" class="form-control paut_total_cost" id="paut_total_cost'+count3+'" name="paut_total_cost[]" data-srno="'+count3+'" readonly required></td>';

          html_code += '</tr>';
          $('#paut_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_paut', function(){
          var row_id = $(this).attr("id");
          $('#paut_row_id_'+row_id).remove();
          $('#paut_count').val(count3);
        });
    


         $(document).on('keyup', '.paut_quantity', function(){
          cal_final_total(count3);
          var sum=0;
          $(".paut_quantity").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#pa_quantity").html(sum);
        });
        $(document).on('keyup', '.paut_unit_rate', function(){
          cal_final_total(count3);
          var sum=0;
          $(".paut_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#pa_unit_rate").html(sum);
        });
     
        $(document).on('keyup', '.paut_total_cost', function(){
          var sum = 0;
          $(".paut_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });
          $("#pa_total_cost").html(sum);
          cal_ndt_total();
        });



         function cal_final_total(count3) {
          
          var paut_quantity = 0;
          var paut_unit_rate = 0;
          var paut_total_cost = 0;
          for(j=1; j<=count3; j++){
          
          var paut_quantity = $('#paut_quantity'+j).val();
          var paut_unit_rate = $('#paut_unit_rate'+j).val();
          var paut_total_cost = $('#paut_total_cost'+j).val();
          var total_amt = parseFloat(paut_quantity) * parseFloat(paut_unit_rate);
            if(!isNaN(total_amt)) {
              $('#paut_total_cost'+j).val(total_amt);
            } else {
              $('#paut_total_cost'+j).val('');
            }

        }

      }
});   

function cal_ndt_total(){
        if(!parseInt($('#u_total_cost').html())) {
          var u_total = 0;
        }else{
          var u_total = parseInt($('#u_total_cost').html());
        }
        
        if(!parseInt($('#p_total_cost').html())) {
          var p_total = 0;
        }else{
          var p_total = parseInt($('#p_total_cost').html());
        }
        if(!parseInt($('#v_total_cost').html())) {
          var v_total = 0;
        }else{
          var v_total = parseInt($('#v_total_cost').html());
        }
        if(!parseInt($('#r_total_cost').html())) {
          var r_total = 0;
        }else{
          var r_total = parseInt($('#r_total_cost').html());
        }
        if(!parseInt($('#pa_total_cost').html())) {
          var pa_total = 0;
        }else{
          var pa_total = parseInt($('#pa_total_cost').html());
        }
        var total_ndt_cost = (u_total + p_total + v_total + r_total + pa_total);
        
        if(total_ndt_cost){
        $('#ndt_total_cost').html(total_ndt_cost);
        $('#summary_ndt_cost').html(total_ndt_cost);
        $('#hidden_ndt_cost').val(total_ndt_cost);
        }else{
        $('#ndt_total_cost').html(total_ndt_cost);
        $('#summary_ndt_cost').html(total_ndt_cost);
        $('#hidden_ndt_cost').val(total_ndt_cost);
        }
}    

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

