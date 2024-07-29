           <form class="" id="est_ndt" novalidate>
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>NDT TYPE - UT</label>
                                <table class="table table-bordered dt-responsive nowrap" id="ut_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">UOM</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_ut" id="add_row_ut" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select ut_type" name="ut_type[]" id="ut_type1" required>
                                    <option value="">-Select-</option>
                                    <option value="Running Meter">Running Meter</option>
                                    <option value="Day">Day</option>
                                    <option value="KG">KG</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control ut_quantity" id="ut_quantity1" name="ut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_unit_rate" data-srno="1" id="ut_unit_rate1" onblur="validate_num_Input(this)" name="ut_unit_rate[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control ut_total_cost" data-srno="1" id="ut_total_cost1" name="ut_total_cost[]" readonly required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>


                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="ut_count" id="ut_count" value="1" />                                      
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>NDT TYPE - PT</label>
                                <table class="table table-bordered dt-responsive nowrap" id="pt_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">UOM</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_pt" id="add_row_pt" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select pt_type" name="pt_type[]" id="pt_type1" required>
                                    <option value="">-Select-</option>
                                    <option value="Running Meter">Running Meter</option>
                                    <option value="Day">Day</option>
                                    <option value="KG">KG</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control pt_quantity" id="pt_quantity1" name="pt_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control pt_unit_rate" data-srno="1" id="pt_unit_rate1" onblur="validate_num_Input(this)" name="pt_unit_rate[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control pt_total_cost" data-srno="1" id="pt_total_cost1" name="pt_total_cost[]" readonly required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="pt_count" id="pt_count" value="1" />
                              

                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>NDT TYPE - VT</label>
                                <table class="table table-bordered dt-responsive nowrap" id="vt_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">UOM</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_vt" id="add_row_vt" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select vt_type" name="vt_type[]" id="vt_type1" required>
                                    <option value="">-Select-</option>
                                    <option value="Running Meter">Running Meter</option>
                                    <option value="Day">Day</option>
                                    <option value="KG">KG</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control vt_quantity" id="vt_quantity1" name="vt_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control vt_unit_rate" data-srno="1" id="vt_unit_rate1" onblur="validate_num_Input(this)" name="vt_unit_rate[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control vt_total_cost" data-srno="1" id="vt_total_cost1" name="vt_total_cost[]" readonly required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="vt_count" id="vt_count" value="1" />
                              
                              
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label>NDT TYPE - PAUT</label>
                                <table class="table table-bordered dt-responsive nowrap" id="paut_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">UOM</th>
                                      <th width="15%">Quantity</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_paut" id="add_row_paut" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td>
                                        <select class="custom-select paut_ut_type" name="paut_ut_type[]" id="paut_ut_type1" required>
                                    <option value="">-Select-</option>
                                    <option value="Running Meter">Running Meter</option>
                                    <option value="Day">Day</option>
                                    <option value="KG">KG</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control paut_quantity" id="paut_quantity1" name="paut_quantity[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control paut_unit_rate" data-srno="1" id="paut_unit_rate1" onblur="validate_num_Input(this)" name="paut_unit_rate[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control paut_total_cost" data-srno="1" id="paut_total_cost1" name="paut_total_cost[]" readonly required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="paut_count" id="paut_count" value="1" />
                             
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Fix Visit Charges</label>
                                  <input type="text" class="form-control rt_fix_visit_charge" id="rt_fix_visit_charge" name="rt_fix_visit_charge">
                                </div>
                                
                                
                                <table class="table table-bordered dt-responsive nowrap" id="rt_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Spot Size</th>
                                      <th width="15%">No. of Spot</th>
                                      <th width="15%">Unit Value</th>
                                      <th width="15%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                    <tr>
                                      <td><button type="button" name="add_row_rt" id="add_row_rt" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                        
                                      <td>
                                        <select class="custom-select rt_spot_size" name="rt_spot_size[]" id="rt_spot_size1" required>
                                    <option value="">-Select-</option>
                                    <option value="3">3</option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                    <option value="18">18</option>
                                  </select> 
                                      </td>
                                    <td>
                                       <input type="text" class="form-control rt_no_of_spot" id="rt_no_of_spot1" name="rt_no_of_spot[]" data-srno="1" onblur="validate_num_Input(this)" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control rt_unit_value" data-srno="1" id="rt_unit_value1" onblur="validate_num_Input(this)" name="rt_unit_value[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control rt_total_cost" data-srno="1" id="rt_total_cost1" name="rt_total_cost[]" readonly required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

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
                                      <th width="10%">Total Cost</th>
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
    


         $(document).on('keyup', '.ut_quantity', function(){
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

