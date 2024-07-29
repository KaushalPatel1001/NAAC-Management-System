                  <form class="" id="new_welder_qualifications">            
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                          <div class="col-12">
                              <label for="validationCustom01">New Welder Qualification</label>
                                <table class="table table-bordered dt-responsive nowrap" id="new_welder_page_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="15%">Process</th>
                                      <th width="15%">Thickness</th>
                                      <th width="15%">MOC</th>
                                      <th width="15%">Lab Test</th>
                                      <th width="15%">Tpi Charge</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row_weld_quali" id="add_row_weld_quali" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                        <td>
                                       <input type="text" class="form-control new_welder_process" id="new_welder_process1"  name="new_welder_process[]" data-srno="1" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control new_welder_thickness" id="new_welder_thickness1"  name="new_welder_thickness[]" data-srno="1" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control new_welder_moc" id="new_welder_moc1"  name="new_welder_moc[]" data-srno="1" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control new_welder_labtest" data-srno="1" id="new_welder_labtest1" name="new_welder_labtest[]" required>
                                    </td>
                                    <td>
                                       <input type="text" class="form-control new_welder_tpicharge" data-srno="1" id="new_welder_tpicharge1" name="new_welder_tpicharge[]"  required> 
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                              <input type="hidden" name="id" id="id"/>
                              <input type="hidden" name="count_new_weld" id="count_new_weld" value="1" />
                              <button class="btn btn-primary" id="add_new_weld_button" type="submit" >Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                            
                           


<script type="text/javascript" language="javascript">
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_weld_quali', function(){
          count++;
          $('#count_new_weld').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control new_welder_process" id="new_welder_process'+count+'" name="new_welder_process[]" data-srno="'+count+'"></td>';

          html_code += '<td class=""><input type="text" class="form-control new_welder_thickness" id="new_welder_thickness'+count+'" name="new_welder_thickness[]" data-srno="'+count+'"></td>';

          html_code += '<td class=""><input type="text" class="form-control new_welder_moc" id="new_welder_moc'+count+'" name="new_welder_moc[]" data-srno="'+count+'"></td>';

          html_code += '<td class=""><input type="text" class="form-control new_welder_labtest" id="new_welder_labtest'+count+'" name="new_welder_labtest[]" data-srno="'+count+'"></td>';

          html_code += '<td class=""><input type="text" class="form-control new_welder_tpicharge" id="new_welder_tpicharge'+count+'" name="new_welder_tpicharge[]" data-srno="'+count+'"></td>';

          html_code += '</tr>';
          $('#new_welder_page_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count_new_weld').val(count);
        });
       
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
