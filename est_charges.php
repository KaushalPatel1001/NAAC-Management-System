          <form class="" id="est_charges">
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Transportation Charges</label>
                                <table class="table table-bordered dt-responsive nowrap" id="transportation_charges_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="20%">Transportation Stage</th>
                                      <th width="20%">From</th>
                                      <th width="15%">TO</th>
                                      <th width="15%">Unit Rate</th>
                                      <th width="15%">No. Of Trips</th>
                                      <th width="20%">Total</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="trans_row_id_1">
                                  <td>
                                    <button type="button" name="add_row_trans" id="add_row_trans" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td id="transportation_stage_select">
                                    <select class="custom-select transportation_stage" name="transportation_stage[]" id="transportation_stage1" data-srno="1">
                                      <option value="">-SELECT-</option>
                                      <option value="stage1">Stage1</option>
                                      <option value="stage2">Stage2</option>
                                      <option value="stage3">Stage3</option>
                                    </select>
                                  </td>
                                  <td id="transportation_from_select">
                                    <select class="custom-select transportation_from" name="transportation_from[]" id="transportation_from1" data-srno="1">
                                      <option value="">-SELECT-</option><?php
                                               $query = "SELECT city_name FROM city";
                                               $results=mysqli_query($conn, $query);
                                       
                                               foreach ($results as $cityname){
                                               ?>
                                      <option value="<?php echo $cityname["city_name"];?>"><?php echo $cityname["city_name"];?></option><?php
                                      }
                                      ?>
                                    </select>
                                  </td>
                                  <td id="transportation_to_select">
                                    <select class="custom-select transportation_to" name="transportation_to[]" id="transportation_to1" data-srno="1">
                                      <option value="">-SELECT-</option><?php
                                               $query = "SELECT city_name FROM city";
                                               $results=mysqli_query($conn, $query);
                                       
                                               foreach ($results as $cityname){
                                               ?>
                                      <option value="<?php echo $cityname["city_name"];?>"><?php echo $cityname["city_name"];?></option><?php
                                      }
                                      ?>
                                    </select>
                                  </td>
                                  <td id="transportation_unit_charge">
                                        <input type="text" class="form-control transportation_unit_charge" name="transportation_unit_charge[]" data-srno="1" id="transportation_unit_charge1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td id="transportation_no_of_trip">
                                    <input type="text" class="form-control transportation_no_of_trip" name="transportation_no_of_trip[]" data-srno="1" id="transportation_no_of_trip1" onblur="validate_num_Input(this)"> 
                                  </td>
                                  <td>
                                    <input type="text" class="form-control transportation_total" name="transportation_total[]" data-srno="1" id="transportation_total1" readonly> 
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>

                              <input type="hidden" name="id" id="id" />
                              <input type="hidden" name="trans_count" id="trans_count" value="1"/>
                              <!-- <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                              <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                Saving...
                              </button> -->
                     </div>
                                
                    </div> 
                   

                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Documentation Charges</label>
                                
                                <table class="table table-bordered dt-responsive nowrap" id="documentation_charges_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="20%">Total No</th>
                                      <th width="20%">Unit Rate</th>
                                      <th width="20%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="doc_row_id_1">
                                  <td>
                                    <button type="button" name="add_row_doc" id="add_row_doc" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control documentation_total_no" id="documentation_total_no1" name="documentation_total_no[]" data-srno="1" oninput="calculateDoc();">
                                  </td>
                                  <td>
                                  <input type="text" class="form-control documentation_unit_rate" id="documentation_unit_rate1" name="documentation_unit_rate[]" data-srno="1" onblur="validate_name_Input(this);" oninput="calculateDoc();">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control documentation_total_cost" id="documentation_total_cost1" name="documentation_total_cost[]" data-srno="1">
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                             </div>
                             </div>
                                <input type="hidden" name="id" id="id" />
                                <input type="hidden" name="doc_count" id="doc_count" value="1"/>
                 
                              <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Engineering charges</label> 
                                

                                <table class="table table-bordered dt-responsive nowrap" id="engineering_charges_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="20%">Total No</th>
                                      <th width="20%">Unit Rate</th>
                                      <th width="20%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr id="eng_row_id_1">
                                  <td>
                                    <button type="button" name="add_row_eng" id="add_row_eng" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                    <span style="display:none" id="sr_no">1</span>
                                  </td>
                                  <td>
                                    <input type="text" class="form-control engineering_total_no" id="engineering_total_no1" name="engineering_total_no[]" data-srno="1" oninput="calculateengii()">
                                  </td>
                                  <td>
                                 <input type="text" class="form-control engineering_unit_rate" id="engineering_unit_rate1" name="engineering_unit_rate[]" data-srno="1" onblur="validate_name_Input(this)" oninput="calculateengii()">
                                  </td>
                                  <td>
                                    <input type="text" class="form-control engineering_total_cost" id="engineering_total_cost1" name="engineering_total_cost[]" data-srno="1" readonly>
                                  </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                              </div>
                <input type="hidden" name="id" id="id" />
                <input type="hidden" name="eng_count" id="eng_count" value="1"/>
                
                <!--sales commision-->
                <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Sales Commission</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control sales_quantity" id="sales_quantity" name="sales_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="sales_uom" id="sales_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control sales_unit_rate" id="sales_unit_rate" name="sales_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control sales_total_cost" id="sales_total_cost" name="sales_total_cost" readonly>
                                </div>
                 
                              </div>
                
                              
                
                <!--sales commision ends-->
                <!--Electricity Charges-->
                
                <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Electricity Charges</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control electricity_quantity" id="electricity_quantity" name="electricity_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="electricity_uom" id="electricity_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control electricity_unit_rate" id="electricity_unit_rate" name="electricity_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control electricity_total_cost" id="electricity_total_cost" name="electricity_total_cost" readonly>
                                </div>
                 
                              </div>

                
                   <!--Electricity Charges Ends-->  
                   
                   <!--Administration Charges--> 
                   
                   <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Administration Charges</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control administration_quantity" id="administration_quantity" name="administration_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="administration_uom" id="administration_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control administration_unit_rate" id="administration_unit_rate" name="administration_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control administration_total_cost" id="administration_total_cost" name="administration_total_cost" readonly>
                                </div>
                 
                              </div>

                <!--Administration Charges Ends-->
                
                <!--Government Charges--> 
                
                <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Goverment Charges</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control goverment_quantity" id="goverment_quantity" name="goverment_quantity" oninput="calculLegal();" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="goverment_uom" id="goverment_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control goverment_unit_rate" id="goverment_unit_rate" name="goverment_unit_rate" oninput="calculLegal();" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control goverment_total_cost" id="goverment_total_cost" name="goverment_total_cost" readonly>
                                </div>
                 
                              </div>

                
                
                <!--Government Charges Ends--> 
                 <!--Packing Forwarding--> 
                 
                 <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Packing Forwording</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control pac_for_quantity" id="pac_for_quantity" name="pac_for_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="pac_for_uom" id="pac_for_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control pac_for_unit_rate" id="pac_for_unit_rate" name="pac_for_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control pac_for_total_cost" id="pac_for_total_cost" name="pac_for_total_cost" readonly>
                                </div>
                 
                              </div>
                
                <!--Packing Forwarding Ends-->  
                 <!--Final transportation--> 
                <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Final Transportation Charges</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control final_tra_quantity" id="final_tra_quantity" name="final_tra_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="final_tra_uom" id="final_tra_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control final_tra_unit_rate" id="final_tra_unit_rate" name="pac_for_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control final_tra_total_cost" id="final_tra_total_cost" name="final_tra_total_cost" readonly>
                                </div>
                 
                              </div>
                
                
                                 <!--Final transportation Ends--> 
                                  <!-- Insurance charges-->
<div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Insurance Charges</label>
                                   
                                </div>
                                <div class="col-md-2 mb-1">
                                  <label for="validationCustom01">Quantity</label>
                                  <input type="text" class="form-control insurance_char_quantity" id="insurance_char_quantity" name="insurance_char_quantity" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">UOM</label>
                                  <select class="custom-select" name="insurance_char_uom" id="insurance_char_uom">
                                    <option value=""></option>
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
                                </div>

                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Unit Rate</label>
                                  <input type="text" class="form-control insurance_char_unit_rate" id="insurance_char_unit_rate" name="insurance_char_unit_rate" onblur="validate_num_Input(this)">
                                </div>
                                <div class="col-md-2 mb-3">
                                  <label for="validationCustom01">Total Cost</label>
                                  <input type="text" class="form-control insurance_char_total_cost" id="insurance_char_total_cost" name="insurance_char_total_cost" readonly>
                                </div>
                 
                              </div>

                
                <!--Insurance Ends--> 
                   
                   
                            <div class="row" style="background:#fff; box-shadow: 0px 2px 3px #00000040; padding: 25px; margin-bottom: 10px;">
                               
                                <div class="col-md-12 mb-3">                                
                                  <label for="validationCustom01">Inspection charges</label>
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Pinnacle</label>
                                  <input type="text" class="form-control pinnacle" id="pinnacle_name" name="pinnacle_name">
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Inspecting Type</label>
                                  <select class="custom-select" name="inspecting_type" id="inspecting_type" onchange="toggleInputs()">
                                      <option value="">-Select-</option>
                                      <option value="1">Yes</option>
                                      <option value="0">No</option>
                                  </select>
                                </div>
                                <span id="hidden_div" style="display:none;">
                                <div class="col-md-6 mb-3" >
                                  <label for="validationCustom01">Select Tpi</label>
                                  <select class="custom-select" name="inspection_select_tpi" id="inspection_select_tpi">
                                    <option value=""></option>
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
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Inspection Total Cost</label>
                                  <input type="text" class="form-control number" id="inspection_total_cost" name="inspection_total_cost">
                                </div>
                                </span>
                                </div>
                               
                             
                              <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">
                              <input type="hidden" name="id" id="id" />
                              <button class="btn btn-primary" id="add_button_charges" type="submit" style="display:none;">Add</button>
                                <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                  Adding...
                                </button>
                              </form>

                            <!--summary begins here-->
              <div class="row" style="margin-top:50px; margin-left:80px; width: 28%;">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040; width: 100%;">
                  <label for="validationCustom01">Transportation Summary</label>
                      <form class="" id="">
                          <div class="card-body">
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td class="trans_total_cost" id="trans_total_cost"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div> 
                      </div>
                   </form>                 
                  </div>
                </div>
              </div>

              <div class="row" style="margin-top:50px; margin-left:60px; width: 28%;">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040; width: 100%;">
                  <label for="validationCustom01">Documentation Summary</label>
                      <form class="" id="">
                          <div class="card-body">
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td class="doc_total_cost" id="doc_total_cost"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div> 
                      </div>
                   </form>                 
                  </div>
                </div>
              </div>

              <div class="row" style="margin-top:50px; margin-left:60px; width: 28%;">
              <div class="col-12">
                <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040; width: 100%;">
                    <label for="validationCustom01">Engineering Summary</label>
                      <form class="" id="">
                          <div class="card-body">
                              <div class="row">
                                <table class="table table-bordered dt-responsive nowrap" id="" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                  <td class="eng_total_cost" id="eng_total_cost"> </td>
                                    </tr>
                                  </tbody>
                                </table>
                        </div> 
                      </div>
                   </form>                 
                  </div>
                </div>
              </div>  
              <!--summary Ends here-->


<button class="prev-btn">Previous</button>
<button class="next-btn">Next</button>
        
 <script>

  function calculateDoc() {
  var d1 = parseFloat(document.getElementById("documentation_total_no").value);
  var d2 = parseFloat(document.getElementById("documentation_unit_rate").value);
  var doc1 = d1 * d2;
  
  if (!isNaN(doc1)) {
    // var roundedProduct = product.toFixed(2);
    document.getElementById("documentation_total_cost").value = doc1;
  } else {
    document.getElementById("documentation_total_cost").value = "";
  }
}

function calculateengii() {
  var e1 = parseFloat(document.getElementById("engineering_total_no").value);
  var e2 = parseFloat(document.getElementById("engineering_unit_rate").value);
  var engii = e1 * e2;
  
  if (!isNaN(engii)) {
    document.getElementById("engineering_total_cost").value = engii;
  } else {
    document.getElementById("engineering_total_cost").value = "";
  }
}


function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      // if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
      //   showDangerToast_name_validation();
      //   inputField.value = inputValue; // Clear the input field
      //   inputField.focus(); // Set focus back to the input field
      // }

      if (inputValue !== '' && (!/^[a-zA-Z0-9]+$/.test(inputValue) || inputValue.startsWith('-'))) {
        showDangerToast_name_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
       }

    }

</script>	
<script>


function toggleInputs() {
    var testingType = document.getElementById("inspecting_type").value;
    var inputFields = document.getElementById("hidden_div");
    
    if (testingType === "1") {        
            inputFields.style.display = "flex";
    } else {
            inputFields.style.display = "none";
    }
}

function validate_name_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      // if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
      //   showDangerToast_name_validation();
      //   inputField.value = inputValue; // Clear the input field
      //   inputField.focus(); // Set focus back to the input field
      // }

     if (inputValue !== '' && (!/^[a-zA-Z0-9]+$/.test(inputValue) || inputValue.startsWith('-'))) {
        showDangerToast_name_validation();
        inputField.value = ''; // Clear the input field
        inputField.focus(); // Set focus back to the input field
       }
    }

</script>
<script>
      
$(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row_trans', function(){
          count++;
          $('#trans_count').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';

          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row_trans"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td><select class="custom-select" name="transportation_stage[]" id="transportation_stage'+count+'" data-srno="'+count+'" required><option value="">-SELECT-</option><option value="stage1">Stage1</option><option value="stage2">Stage2</option><option value="stage3">Stage3</option></select></td>';

          html_code += '<td><select class="custom-select transportation_from" name="transportation_from[]" id="transportation_from'+count+'" data-srno="'+count+'"><option value="">-SELECT-</option><?php
            $query = "SELECT city_name FROM city";
            $res=mysqli_query($conn, $query);
                                       
            foreach ($res as $cityfrom){
             ?>
             <option value="<?php echo $cityfrom["city_name"];?>"><?php echo $cityfrom["city_name"];?></option><?php
           }
           ?>
           </select></td>';

          html_code += '<td><select class="custom-select" name="transportation_to[]" id="transportation_to'+count+'" data-srno="'+count+'"><option value="">-SELECT-</option><?php
           $query = "SELECT city_name FROM city";
           $results=mysqli_query($conn, $query);
                                       //loop
           foreach ($results as $cityto){
             ?>
             <option value="<?php echo $cityto["city_name"];?>"><?php echo $cityto["city_name"];?></option><?php 
           }
           ?>
           </select></td>';

          html_code += '<td><input type="text" class="form-control transportation_unit_charge" name="transportation_unit_charge[]" data-srno="'+count+'" id="transportation_unit_charge'+count+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td><input type="text" class="form-control transportation_no_of_trip" name="transportation_no_of_trip[]" data-srno="'+count+'" id="transportation_no_of_trip'+count+'" onblur="validate_num_Input(this)" required></td>';

          html_code += '<td><input type="text" class="form-control transportation_total" name="transportation_total[]" data-srno="'+count+'" id="transportation_total'+count+'" readonly></td>';

          html_code += '</tr>';
          $('#transportation_charges_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_trans', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#trans_count').val(count);
        });

        $(document).on('keyup', '.transportation_no_of_trip', function(){
          cal_final_total(count);
          var sum=0;
          $(".transportation_no_of_trip").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#trans_no_of_trip").html(sum);
        });


        $(document).on('keyup', '.transportation_unit_charge', function(){
          cal_final_total(count);
          var sum=0;
          $(".transportation_unit_charge").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#trans_unit_charge").html(sum);
        });


        $(document).on('keyup', '.transportation_total', function(){
          var sum = 0;
          $(".transportation_total").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#trans_total_cost").html(sum);
          $("#summary_transportation_cost").html(sum);
          $('#hidden_transportation_cost').val(sum);
        });


         function cal_final_total(count) {
          
          var transportation_unit_charge = 0;
          var transportation_no_of_trip = 0;
          var transportation_total = 0;
          for(j=1; j<=count; j++){
          
          var transportation_unit_charge = $('#transportation_unit_charge'+j).val();
          var transportation_no_of_trip = $('#transportation_no_of_trip'+j).val();
          var transportation_total = $('#transportation_total'+j).val();
          var total_amt = parseFloat(transportation_unit_charge
            ) * parseFloat(transportation_no_of_trip);
            if(!isNaN(total_amt)) {
              $('#transportation_total'+j).val(total_amt);
            } else {
              $('#transportation_total'+j).val('');
            }

          
        }

      }

    });



$(document).ready(function(){
        var dcount = 1;
        $(document).on('click', '#add_row_doc', function(){
          dcount++;
          $('#doc_count').val(dcount);
          var html_code = '';
          html_code += '<tr id="doc_row_id_'+dcount+'">';

          html_code += '<td><button type="button" name="remove_row_doc" id="'+dcount+'" class="btn btn-danger btn-md remove_row_doc"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+dcount+'</span></td>';

          html_code += '<td><input type="text" class="form-control documentation_total_no" id="documentation_total_no'+dcount+'" data-srno="'+dcount+'" name="documentation_total_no[]" oninput="calculateDoc();"></td>';

          html_code += '<td><input type="text" class="form-control documentation_unit_rate" id="documentation_unit_rate'+dcount+'" name="documentation_unit_rate[]" data-srno="'+dcount+'" onblur="validate_name_Input(this);" oninput="calculateDoc();"></td>';

          html_code += '<td><input type="text" class="form-control documentation_total_cost" id="documentation_total_cost'+dcount+'" name="documentation_total_cost[]" data-srno="'+dcount+'"></td>';

          html_code += '</tr>';
          $('#documentation_charges_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_doc', function(){
          var row_id = $(this).attr("id");
          $('#doc_row_id_'+row_id).remove();
          $('#doc_count').val(dcount);
        });

          $(document).on('keyup', '.documentation_total_no', function(){
          cal_final_total_doc(dcount);
          var sum=0;
          $(".documentation_total_no").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#doc_total_no").html(sum);
        });


        $(document).on('keyup', '.documentation_unit_rate', function(){
          cal_final_total_doc(dcount);
          var sum=0;
          $(".documentation_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#doc_unit_rate").html(sum);
        });


        $(document).on('keyup', '.documentation_total_cost', function(){
          var sum = 0;
          $(".documentation_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#doc_total_cost").html(sum);
          $("#summary_documentation_cost").html(sum);
          $('#hidden_documentation_cost').val(sum);
        });


         function cal_final_total_doc(dcount) {
          
          var documentation_total_no = 0;
          var documentation_unit_rate = 0;
          var documentation_total_cost = 0;
          for(j=1; j<=dcount; j++){
          
          var documentation_total_no = $('#documentation_total_no'+j).val();
          var documentation_unit_rate = $('#documentation_unit_rate'+j).val();
          var documentation_total_cost = $('#documentation_total_cost'+j).val();
          var total_amt = parseFloat(documentation_total_no
            ) * parseFloat(documentation_unit_rate);
            if(!isNaN(total_amt)) {
              $('#documentation_total_cost'+j).val(total_amt);
            } else {
              $('#documentation_total_cost'+j).val('');
            }

          
        }

      }

    });



$(document).ready(function(){
        var ecount = 1;
        $(document).on('click', '#add_row_eng', function(){
          ecount++;
          $('#eng_count').val(ecount);
          var html_code = '';
          html_code += '<tr id="eng_row_id_'+ecount+'">';

          html_code += '<td><button type="button" name="remove_row_eng" id="'+ecount+'" class="btn btn-danger btn-md remove_row_eng"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+ecount+'</span></td>';

          html_code += '<td><input type="text" class="form-control engineering_total_no" id="engineering_total_no'+ecount+'" name="engineering_total_no[]" data-srno="'+ecount+'" oninput="calculateengii()"></td>';

          html_code += '<td><input type="text" class="form-control engineering_unit_rate" id="engineering_unit_rate'+ecount+'" name="engineering_unit_rate[]" data-srno="'+ecount+'" onblur="validate_name_Input(this)" oninput="calculateengii()"></td>';

          html_code += '<td><input type="text" class="form-control engineering_total_cost" id="engineering_total_cost'+ecount+'" name="engineering_total_cost[]" data-srno="'+ecount+'" readonly></td>';

          html_code += '</tr>';
          $('#engineering_charges_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row_eng', function(){
          var row_id = $(this).attr("id");
          $('#eng_row_id_'+row_id).remove();
          $('#eng_count').val(ecount);
        });

        $(document).on('keyup', '.engineering_total_no', function(){
          cal_final_total_doc(ecount);
          var sum=0;
          $(".engineering_total_no").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#eng_total_no").html(sum);
        });


         $(document).on('keyup', '.engineering_unit_rate', function(){
          cal_final_total_doc(ecount);
          var sum=0;
          $(".engineering_unit_rate").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val(), 10);   
            }
          });
          $("#eng_unit_rate").html(sum);
        });


         $(document).on('keyup', '.engineering_total_cost', function(){
          var sum = 0;
          $(".engineering_total_cost").each(function(){
            if($(this).val() != ""){
              sum += parseInt($(this).val());
            }
          });

          $("#eng_total_cost").html(sum);
          $("#summary_engineering_cost").html(sum);
          $('#hidden_engineering_cost').val(sum);
        });

         function cal_final_total_doc(ecount) {
          
          var engineering_total_no = 0;
          var engineering_unit_rate = 0;
          var engineering_total_cost = 0;
          for(j=1; j<=ecount; j++){
          
          var engineering_total_no = $('#engineering_total_no'+j).val();
          var engineering_unit_rate = $('#engineering_unit_rate'+j).val();
          var engineering_total_cost = $('#engineering_total_cost'+j).val();
          var total_amt = parseFloat(engineering_total_no
            ) * parseFloat(engineering_unit_rate);
            if(!isNaN(total_amt)) {
              $('#engineering_total_cost'+j).val(total_amt);
            } else {
              $('#engineering_total_cost'+j).val('');
            }

          
        }

      }

       $(document).on('keyup', '#electricity_quantity', function(){
          cal_final_total(count);
        });
       $(document).on('keyup', '#electricity_unit_rate', function(){
          cal_final_total(count);
        });

       $(document).on('keyup', '#administration_quantity', function(){
          cal_admin_total(count);
        });
       $(document).on('keyup', '#administration_unit_rate', function(){
          cal_admin_total(count);
        });

        $(document).on('keyup', '#goverment_quantity', function(){
          cal_legal_total(count);
        });
       $(document).on('keyup', '#goverment_unit_rate', function(){
          cal_legal_total(count);
        });

        $(document).on('keyup', '#pac_for_quantity', function(){
          cal_packing_total(count);
        });
       $(document).on('keyup', '#pac_for_unit_rate', function(){
          cal_packing_total(count);
        });

        $(document).on('keyup', '#final_tra_unit_rate', function(){
          cal_final_trans_total(count);
        });
       $(document).on('keyup', '#final_tra_quantity', function(){
          cal_final_trans_total(count);
        });

        $(document).on('keyup', '#insurance_char_unit_rate', function(){
          cal_insurance_total(count);
        });
       $(document).on('keyup', '#insurance_char_quantity', function(){
          cal_insurance_total(count);
        });

        $(document).on('keyup', '#inspection_total_cost', function(){
          var total = $('#inspection_total_cost').val();
          $('#summary_inspection_cost').html(total);
          $('#hidden_inspection_cost').val(total);
        });

    });

       function cal_final_total(count) {

          var electricity_unit_rate = 0;
          var electricity_quantity = 0;
          var electricity_total_cost = 0;
        
          
          var electricity_unit_rate = $('#electricity_unit_rate').val();
          var electricity_quantity = $('#electricity_quantity').val();
          var total_amt = parseFloat(electricity_unit_rate) * parseFloat(electricity_quantity);
            if(!isNaN(total_amt)) {
              $('#electricity_total_cost').val(total_amt);
              $('#summary_electricity_cost').html(total_amt);
              $('#hidden_electricity_cost').val(total_amt);
            } else {
              $('#electricity_total_cost').val('');
            }
      }

      function cal_admin_total(count) {

          var administration_quantity = 0;
          var administration_unit_rate = 0;
          var administration_total_cost = 0;
        
          
          var administration_unit_rate = $('#administration_unit_rate').val();
          var administration_quantity = $('#administration_quantity').val();
          var total_amt = parseFloat(administration_unit_rate) * parseFloat(administration_quantity);
            if(!isNaN(total_amt)) {
              $('#administration_total_cost').val(total_amt);
              $('#summary_administration_cost').html(total_amt);
              $('#hidden_administration_cost').val(total_amt);
            } else {
              $('#administration_total_cost').val('');
            }
      }

      function cal_legal_total(count) {

          var goverment_quantity = 0;
          var goverment_unit_rate = 0;
          var goverment_total_cost = 0;
        
          
          var goverment_unit_rate = $('#goverment_unit_rate').val();
          var goverment_quantity = $('#goverment_quantity').val();
          var total_amt = parseFloat(goverment_unit_rate) * parseFloat(goverment_quantity);
            if(!isNaN(total_amt)) {
              $('#goverment_total_cost').val(total_amt);
              $('#summary_legal_compliances_cost').html(total_amt);
              $('#hidden_legal_compliances_cost').val(total_amt);
            } else {
              $('#goverment_total_cost').val('');
            }
      }

      function cal_packing_total(count) {

          var pac_for_quantity = 0;
          var pac_for_unit_rate = 0;
          var pac_for_total_cost = 0;
        
          
          var pac_for_unit_rate = $('#pac_for_unit_rate').val();
          var pac_for_quantity = $('#pac_for_quantity').val();
          var total_amt = parseFloat(pac_for_unit_rate) * parseFloat(pac_for_quantity);
            if(!isNaN(total_amt)) {
              $('#pac_for_total_cost').val(total_amt);
              $('#summary_pf_cost').html(total_amt);
              $('#hidden_pf_cost').val(total_amt);
            } else {
              $('#pac_for_total_cost').val('');
            }
      }

      function cal_final_trans_total(count) {

          var final_tra_quantity = 0;
          var final_tra_unit_rate = 0;
          var final_tra_total_cost = 0;
        
          
          var final_tra_unit_rate = $('#final_tra_unit_rate').val();
          var final_tra_quantity = $('#final_tra_quantity').val();
          var total_amt = parseFloat(final_tra_unit_rate) * parseFloat(final_tra_quantity);
            if(!isNaN(total_amt)) {
              $('#final_tra_total_cost').val(total_amt);
              $('#summary_final_trans_cost').html(total_amt);
              $('#hidden_final_trans_cost').val(total_amt);
            } else {
              $('#final_tra_total_cost').val('');
            }
      }

      function cal_insurance_total(count) {

          var insurance_char_quantity = 0;
          var insurance_char_unit_rate = 0;
          var insurance_char_total_cost = 0;
        
          
          var insurance_char_unit_rate = $('#insurance_char_unit_rate').val();
          var insurance_char_quantity = $('#insurance_char_quantity').val();
          var total_amt = parseFloat(insurance_char_unit_rate) * parseFloat(insurance_char_quantity);
            if(!isNaN(total_amt)) {
              $('#insurance_char_total_cost').val(total_amt);
              $('#summary_insurance_cost').html(total_amt);
              $('#hidden_insurance_cost').val(total_amt);
            } else {
              $('#insurance_char_total_cost').val('');
            }
      }



      function validate_num_Input(inputField) {
      console.log(inputField.value);
      var inputValue = inputField.value.trim();
      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[0-9]+$/.test(inputValue)) {
        showDangerToast_code_validation();
        inputField.value = ''; // Clear the input field
        
      }
    }


    </script>
    
    <script>

  function calculateDoc() {
  var d1 = parseFloat(document.getElementById("sales_quantity").value);
  var d2 = parseFloat(document.getElementById("sales_unit_rate").value);
  var doc1 = d1 * d2;
  
  if (!isNaN(doc1)) {
    // var roundedProduct = product.toFixed(2);
    document.getElementById("sales_total_cost").value = doc1;
    

  } else {
    document.getElementById("sales_total_cost").value = "";
  }
}

function calculElect() {
  var e1 = parseFloat(document.getElementById("electricity_quantity").value);
  var e2 = parseFloat(document.getElementById("electricity_unit_rate").value);
  var elctricity = e1 * e2;
  
  if (!isNaN(elctricity)) {
    document.getElementById("electricity_total_cost").value = elctricity;
  } else {
    document.getElementById("electricity_total_cost").value = "";
  }
}

function calculAdmin() {
  var t1 = parseFloat(document.getElementById("administration_quantity").value);
  var t2 = parseFloat(document.getElementById("administration_unit_rate").value);
  var adminis = t1 * t2;
  
  if (!isNaN(adminis)) {
    document.getElementById("administration_total_cost").value = adminis;
  } else {
    document.getElementById("administration_total_cost").value = "";
  }
}

function calculLegal() {
  var t1 = parseFloat(document.getElementById("goverment_quantity").value);
  var t2 = parseFloat(document.getElementById("goverment_unit_rate").value);
  var goverment = t1 * t2;
  
  if (!isNaN(goverment)) {
    document.getElementById("goverment_total_cost").value = goverment;
  } else {
    document.getElementById("goverment_total_cost").value = "";
  }
}

function calculPack() {
  var t1 = parseFloat(document.getElementById("pac_for_quantity").value);
  var t2 = parseFloat(document.getElementById("pac_for_unit_rate").value);
  var packing = t1 * t2;
  
  if (!isNaN(packing)) {
    document.getElementById("pac_for_total_cost").value = packing;
  } else {
    document.getElementById("pac_for_total_cost").value = "";
  }
}

function calculFinal() {
  var t1 = parseFloat(document.getElementById("final_tra_quantity").value);
  var t2 = parseFloat(document.getElementById("final_tra_unit_rate").value);
  var final = t1 * t2;
  
  if (!isNaN(final)) {
    document.getElementById("final_tra_total_cost").value = final;
  } else {
    document.getElementById("final_tra_total_cost").value = "";
  }
}

function calculIn() {
  var t1 = parseFloat(document.getElementById("insurance_char_quantity").value);
  var t2 = parseFloat(document.getElementById("insurance_char_unit_rate").value);
  var fin = t1 * t2;
  
  if (!isNaN(fin)) {
    document.getElementById("insurance_char_total_cost").value = fin;
  } else {
    document.getElementById("insurance_char_total_cost").value = "";
  }
}




</script>

