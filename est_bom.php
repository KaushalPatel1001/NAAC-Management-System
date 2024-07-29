    <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Shape Extra's</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="shape_extra_form" novalidate>
                            <div class="row" id="ex_input">
                              
                            </div>                         
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="total_item" id="total_item" value="0" />
                              <button class="btn btn-primary" id="add_button" type="submit">Add</button>
                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                              <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                              Adding...
                </button>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                    
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040; width: 1228px;">
                      <form class="" id="bill_of_material">
                          <div class="card-body">
                              <div id="newinput">
                              
                                <div class="row" style="margin-right: 20px;
    margin-left: -30px;">
                          <div class="col-12">
                                <table class="table table-bordered" id="bill_of_material_tabel" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="11%">#</th>
                                      <th width="8%">Part No</th>
                                      <th width="8%">Name</th>
                                      <th width="8%">Shape</th>
                                      <th width="8%">Moc</th>
                                      <th width="8%">Uom</th>
                                      <th width="8%">Unit Qty</th>
                                      <th width="8%">Total Qty</th>
                                      <th width="8%">Unit Weight</th>
                                      <th width="8%">Total Weight</th>
                                      <th width="8%">Unit Cost</th>
                                      <th width="8%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="row_id_1">
                                  <td>
                                    <button type="button" name="add_row_bom" id="add_row_bom" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                    &nbsp;|&nbsp;
                                    <button type="button" class="btn btn-outline-success btn-sm shape_edit_btn" name="shape_edit_btn[]" id="shape_edit_btn1" data-srno="1">Edit</button>

                                  </td>
                                  <td id="part_no_input">
                                    <input type="text" class="form-control part_no" name="part_no[]" data-srno="1" id="part_no1">

                                  </td>
                                  <td id="pro_name_input">
                                     <input type="text" class="form-control pro_name" name="pro_name[]" data-srno="1" id="pro_name1">
                                  </td>
                                  <td id="shape_select">
                                       <select class="custom-select shape" name="shape[]" data-srno="1" id="shape1">
                                      <option value="">-Select-</option>
                                      <?php
                                       $query = "SELECT id,shape_name FROM shape";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $shape_name){
                                     ?>
                                        <option value="<?php echo $shape_name["id"];?>"><?php echo $shape_name["shape_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                  </td>
                                  <td id="grp_select">
                                    <select class="custom-select group" name="group[]" data-srno="1" id="group1">
                                      <option value="">-Select-</option>
                                      <?php
                                       $query = "SELECT id,grp_name FROM mst_group";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $group_name){
                                     ?>
                                        <option value="<?php echo $group_name["id"];?>"><?php echo $group_name["grp_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                  </td>
                                 <!--  <td>
                                    <input type="text" class="form-control length" name="length[]" data-srno="1" id="length1" placeholder="Length" required> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control breadth" name="breadth[]" data-srno="1" id="breadth1" placeholder="Breadth" required> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control thickness" name="thickness[]" data-srno="1" id="thickness1" placeholder="Thickness" required> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control height" name="height[]" data-srno="1" id="height1" placeholder="Height" required> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control density" name="density[]" data-srno="1" id="density1" placeholder="Density" required> 
                                  </td> -->
                                  <td>
                                   <input type="text" class="form-control inv_uom" name="inv_uom[]" data-srno="1" id="inv_uom1">
                                  </td>
                                  <td>
                                   <input type="text" class="form-control unit_qty" name="unit_qty[]" data-srno="1" id="unit_qty1">
                                  </td>
                                  <td>
                                   <input type="text" class="form-control total_qty" name="total_qty[]" data-srno="1" id="total_qty1">
                                  </td>
                                  <td>
                                   <input type="text" class="form-control unit_weight" name="unit_weight[]" data-srno="1" id="unit_weight1" readonly>
                                  </td>
                                  <td>
                                   <input type="text" class="form-control total_weight" name="total_weight[]" data-srno="1" id="total_weight1">
                                  </td>
                                  <td>
                                   <input type="text" class="form-control unit_cost" name="unit_cost[]" data-srno="1" id="unit_cost1">
                                  </td>
                                  <td>
                                   <input type="text" class="form-control material_total_cost" name="material_total_cost[]" data-srno="1" id="material_total_cost1" readonly>
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                                
                          </div>
                        </div>
                    </div>
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="hidden_row_id" id="hidden_row_id" />
                               <input type="hidden" name="user_id" id="user_id" value = "<?php echo $_SESSION['id']; ?>"/>
                              <input type="hidden" name="count" id="count" class="count" value="1"/>
                              <button class="btn btn-primary" id="add_button_new" type="submit" style="display:none;">Save</button>
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
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 1px 2px #00000040; width: 1228px;">

                      <form class="" id="">
                          <div class="card-body">
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Quantity</th>
                                      <th width="10%">Total Weight</th>
                                      <th width="10%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td class="bom_quantity" id="bom_quantity"></td>
                                  <td class="bom_total_weight" id="bom_total_weight"></td>
                                  <td class="bom_total_cost" id="bom_total_cost"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div> 
                      </div>
                   </form>                 
                  </div>
                </div>
              </div>   


              
                              
                  
    <script>
     
   $(document).ready(function(){
  $(document).on('click', '.shape_edit_btn', function(){
          var row_id = $(this).attr("data-srno");
          var shape_id = $('#shape'+row_id).val();
          var shape_name = $('#shape'+row_id).find(":selected").text();
          $.ajax({  
                url:"fetch/fetch_shape_extra.php",  
                method:"POST",  
                data:{shape_id:shape_id},   
                success:function(data){
                if(data == "NULL"){
                  alertify.error("Please Select Shape");
                }else{

                  $('#ex_input').html("");
                  $('#menu_manage').modal("show");
                  $('#ex_input').append(data);
                  $('#myLargeModalLabel').text("");
                  $('#myLargeModalLabel').text(shape_name);
                
                }
         }
    }); 

  });
});


     
  $(document).ready(function(){
  $(document).on('change', '.shape', function(){
           var row_id = $(this).attr("data-srno");
           var shape_name = $('#shape'+row_id).find(":selected").text();
           var shape_id = $(this).val();
           var row_count_id = $(this).data('srno');
           $('#hidden_row_id').val(row_count_id); 
           $.ajax({  
                url:"fetch/fetch_shape_extra.php",  
                method:"POST",  
                data:{shape_id:shape_id},   
                success:function(data){
                $('#ex_input').html("");
                $('#myLargeModalLabel').text("");
                $('#myLargeModalLabel').text(shape_name);
                $('#menu_manage').modal("show");
                $('#ex_input').append(data);                
                }
           });  
       
      });


  $(document).on('submit', '#shape_extra_form', function(){
    var cnt = $('#hidden_row_id').val();
    $.ajax({
      url:"calculate.php",
      method:"POST",
      data:$('#shape_extra_form').serialize(),
      success:function(response){
        alert(parseFloat(response));
        $('#unit_weight'+cnt).val(response);

      }
    });
 });

        var count = 1;
        $(document).on('click', '#add_row_bom', function(){
          count++;
          $('#count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_bom"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span>&nbsp; | &nbsp;<button type="button" class="btn btn-outline-success btn-sm shape_edit_btn" name="shape_edit_btn[]" id="shape_edit_btn'+count+'" data-srno="'+count+'">Edit</button></td>';

          html_code += '<td><input type="text" class="form-control part_no" name="part_no[]" data-srno="'+count+'" id="part_no'+count+'"></td>';

           html_code += '<td><input type="text" class="form-control pro_name" name="pro_name[]" data-srno="'+count+'" id="pro_name'+count+'"></td>';

          html_code += '<td><select class="custom-select shape" name="shape[]" data-srno="'+count+'" id="shape'+count+'"><option value="">-Select-</option><?php
                                       $query = "SELECT id,shape_name FROM shape";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $shape_name){
                                     ?>
                                        <option value="<?php echo $shape_name["id"];?>"><?php echo $shape_name["shape_name"];?></option><?php 
                                   }
                                     ?>
                                    </select></td>';

          html_code += '<td class=""><select class="custom-select group" name="group[]" data-srno="'+count+'" id="group'+count+'"><option value="">-Select-</option><?php
                                       $query = "SELECT id,grp_name FROM mst_group";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $group_name){
                                     ?>
                                        <option value="<?php echo $group_name["id"];?>"><?php echo $group_name["grp_name"];?></option><?php 
                                   }
                                     ?>
                                    </select></td>';

          html_code += '<td><input type="text" class="form-control inv_uom" name="inv_uom[]" data-srno="'+count+'" id="inv_uom'+count+'"></td>';

          html_code += '<td><input type="text" class="form-control unit_qty" name="unit_qty[]" data-srno="'+count+'" id="unit_qty'+count+'"></td>';

          html_code += '<td><input type="text" class="form-control total_qty" name="total_qty[]" data-srno="'+count+'" id="total_qty'+count+'"></td>';

          html_code += '<td><input type="text" class="form-control unit_weight" name="unit_weight[]" data-srno="'+count+'" id="unit_weight'+count+'" readonly></td>';

          html_code += '<td><input type="text" class="form-control total_weight" name="total_weight[]" data-srno="'+count+'" id="total_weight'+count+'"></td>';

          html_code += '<td><input type="text" class="form-control unit_cost" name="unit_cost[]" data-srno="'+count+'" id="unit_cost'+count+'"></td>';


          html_code += '<td><input type="text" class="form-control material_total_cost" name="material_total_cost[]" data-srno="'+count+'" id="material_total_cost'+count+'" readonly></td>';
           

          html_code += '</tr>';
          $('#bill_of_material_tabel').append(html_code);
          });
        
        $(document).on('click', '.remove_row_bom', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#count').val(count);
        });

        $(document).on('keyup', '.total_qty', function(){
          
          var sum=0;
          $(".total_qty").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#bom_quantity").html(sum);
        });

         $(document).on('blur', '.total_qty', function(){
          cal_total_weight(count);
        });


        $(document).on('keyup', '.total_weight', function(){
        
          var sum=0;
          $(".total_weight").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#bom_total_weight").html(sum);
        });


        $(document).on('keyup', '.material_total_cost', function(){
          
          var sum = 0;
          $(".material_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#bom_total_cost").html(sum);
          $('#summary_bom_cost').html(sum);
          $('#hidden_bom_cost').val(sum);
        });

        $(document).on('blur','.unit_cost',function(){
          cal_total_cost(count);
        });



        $('#menu_manage').on('hidden.bs.modal', function(){
        $(this).find('form').trigger('reset');
        $('#add_button').text("add");
        $('#id').val("");
        });



    });


        

       function cal_total_weight(count) {
          
          var total_qty = 0;
          var unit_weight = 0;
          var total_weight = 0;
          for(j=1; j<=count; j++){
          
          var total_qty = $('#total_qty'+j).val();
          var unit_weight = $('#unit_weight'+j).val();
          var total_weight = parseFloat(total_qty) * parseFloat(unit_weight);
            if(!isNaN(total_weight)) {
              $('#total_weight'+j).val(total_weight);
            } else {
              $('#total_weight'+j).val('');
            }

          
        }

      }


          function cal_total_cost(count) {
          var unit_cost = 0;
          var total_weight = 0;
          for(j=1; j<=count; j++){
          
          var unit_cost = $('#unit_cost'+j).val();
          var total_weight = $('#total_weight'+j).val();
          var total_cost = parseFloat(unit_cost) * parseFloat(total_weight);
          console.log(total_cost);
            if(!isNaN(total_cost)) {
              $('#material_total_cost'+j).val(total_cost);
            } else {
              $('#material_total_cost'+j).val('');
            }

          
        }

      }


    </script>
  