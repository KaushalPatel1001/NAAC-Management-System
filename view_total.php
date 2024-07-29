<?php 
$filename = basename(__FILE__);
?>
            <form class="" id="est_total_cost">
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                <button type="button" onclick="window.location='create_cost_estimation.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">Create Estimation</button>
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- END PAGE -->

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                   <table class="table table-bordered" id="bill_of_material_tabel" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="8%">Head</th>
                                      <th width="8%">Total Cost</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                  	<td>
                                  		Raw Material Cost
                                  	</td>
                                  	<td id="summary_bom_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Broughtout Cost
                                  	</td>
                                  	<td id="summary_broughtout_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Manpower Cost
                                    </td>
                                    <td id="summary_manpower_cost">PENDING
                                    </td>
                                  </tr>
								                  <tr>
                                  	<td>
                                  		Subcontracting Cost
                                  	</td>
                                  	<td id="summary_subcontract_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Jigs & Fixtures Cost
                                    </td>
                                    <td id="summary_jigs_fixtures_cost" class="estimate_sub_total">
                                    </td>
                                  </tr>
								                  <tr>
                                  	<td>
                                  		Services Cost
                                  	</td>
                                  	<td id="summary_services_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Testing Cost
                                  	</td>
                                  	<td id="summary_testing_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		NDT Cost
                                  	</td>
                                  	<td id="summary_ndt_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      WELDING Cost
                                    </td>
                                    <td id="summary_welding_cost">main summary PENDING
                                    </td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Transportation Cost
                                  	</td>
                                  	<td id="summary_transportation_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Inspection Cost
                                  	</td>
                                  	<td id="summary_inspection_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Design / Engineering Cost
                                  	</td>
                                  	<td id="summary_engineering_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Documentation Cost
                                  	</td>
                                  	<td id="summary_documentation_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Site Visit Charges
                                  	</td>
                                  	<td id="summary_site_visit_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		New Welder Qualification Charges
                                  	</td>
                                  	<td id="summary_welder_cost">pending
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Electricity Charges 
                                  	</td>
                                  	<td id="summary_electricity_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Administration Charges 
                                  	</td>
                                  	<td id="summary_administration_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Govt. Legal Compliances Charges 
                                  	</td>
                                  	<td id="summary_legal_compliances_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Packing & Forwarding Charges
                                  	</td>
                                  	<td id="summary_pf_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Final Transportation Charges 
                                  	</td>
                                  	<td id="summary_final_trans_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Insurance Charges 
                                  	</td>
                                  	<td id="summary_insurance_cost" class="estimate_sub_total">
                                  	</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <b>Pre Commission Total</b>
                                    </td>
                                    <td id="summary_pre_com_total">
                                    </td>
                                  </tr>
                                  <tr>
                                  	<td>
                                  		Sales Commission 
                                  	</td>
                                  	<td id="sales_commission_td"><input type="text" class="" name="sales_commission" id="sales_commission">
                                  	</td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Refrence Commission
                                    </td>
                                    <td id="refrence_commission_td"><input type="text" class="" name="refrence_commission" id="refrence_commission" onblur="calculateCommission()">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Post Commission Total
                                    </td>
                                    <td id="post_commission_td">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Contigency Cost
                                    </td>
                                    <td id="contigency_cost_td"><input type="text" class="" name="contigency_cost" id="contigency_cost" onblur="calculateContigencyCost()">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Post Contigency Total
                                    </td>
                                    <td id="post_contigency_td">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Profit Overhead
                                    </td>
                                    <td id="profit_overhead_td"><input type="text" class="" name="profit_overhead_cost" id="profit_overhead_cost" onblur="calculateProfitOverheadCost()">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Post Overhead Total
                                    </td>
                                    <td id="post_overhead_td">
                                    </td>
                                  </tr>
                                  </tbody>
                                </table>

                                <input style="display:none;" type="text" name="hidden_bom_cost" id="hidden_bom_cost">

                                <input style="display:none;" type="text" name="hidden_broughtout_cost" id="hidden_broughtout_cost">

                                <input style="display:none;" type="text" name="hidden_subcontract_cost" id="hidden_subcontract_cost">

                                <input style="display:none;" type="text" name="hidden_jf_cost" id="hidden_jf_cost">

                                <input style="display:none;" type="text" name="hidden_services_cost" id="hidden_services_cost">

                                <input style="display:none;" type="text" name="hidden_testing_cost" id="hidden_testing_cost">

                                <input style="display:none;" type="text" name="hidden_ndt_cost" id="hidden_ndt_cost">

                                <input style="display:none;" type="text" name="hidden_transportation_cost" id="hidden_transportation_cost">

                                <input style="display:none;" type="text" name="hidden_documentation_cost" id="hidden_documentation_cost">

                                <input style="display:none;" type="text" name="hidden_inspection_cost" id="hidden_inspection_cost">

                                <input style="display:none;" type="text" name="hidden_engineering_cost" id="hidden_engineering_cost">

                                <input style="display:none;" type="text" name="hidden_site_visit_cost" id="hidden_site_visit_cost">

                                <input style="display:none;" type="text" name="hidden_electricity_cost" id="hidden_electricity_cost">

                                <input style="display:none;" type="text" name="hidden_administration_cost" id="hidden_administration_cost">

                                <input style="display:none;" type="text" name="hidden_legal_compliances_cost" id="hidden_legal_compliances_cost">

                                <input style="display:none;" type="text" name="hidden_pf_cost" id="hidden_pf_cost">

                                <input style="display:none;" type="text" name="hidden_final_trans_cost" id="hidden_final_trans_cost">

                                <input style="display:none;" type="text" name="hidden_insurance_cost" id="hidden_insurance_cost">

                                <input style="display:none;" type="text" name="hidden_pre_commission_cost" id="hidden_pre_commission_cost">

                                <input style="display:none;" type="text" name="hidden_sales_commission_cost" id="hidden_sales_commission_cost">

                                <input style="display:none;" type="text" name="hidden_refrence_commission_cost" id="hidden_refrence_commission_cost">

                                <input style="display:none;" type="text" name="hidden_post_commission_cost" id="hidden_post_commission_cost">

                                <input style="display:none;" type="text" name="hidden_contigency_cost" id="hidden_contigency_cost">

                                <input style="display:none;" type="text" name="hidden_post_contigency_cost" id="hidden_post_contigency_cost">

                                <input style="display:none;" type="text" name="hidden_profit_overhead_cost" id="hidden_profit_overhead_cost">

                                <input style="display:none;" type="text" name="hidden_final_total_cost" id="hidden_final_total_cost">

                                <input type="hidden" name="cost_est_id" id="cost_est_id" class="cost_est_id">

                                <button class="btn btn-primary" id="add_button_total" type="submit" style="display:none;">Save</button>
                                
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end row -->
          </form>
          <button class="prev-btn">Previous</button>
          <button class="next-btn" id="submit-btn">Submit</button>
          <!-- container-fluid -->
        
        <!-- End Page-content --> <?php include("include/footer.php"); ?>
      
      <!-- end main content-->
    
    <!-- END layout-wrapper -->
    <!-- Right Sidebar --> <?php include("include/rightsidebar.php"); ?>
    <!-- Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT --> <?php include('include/javascript_library.php');?>
     <script type="text/javascript" language="javascript">
      /*$(document).ready(function() {
    
        var total = 0;

        function calculateTotal() {
        total = 0;
        $('.tab:visible .estimate_sub_total').each(function() {
        total += parseFloat($(this).html());
        });
        $('#summary_sub_total').html(total);
    }

    // Bind the tab activation event (e.g., click on tab link)
    $('.tab').click(function() {
        var targetTabId = $(this).attr('href');
        $('.tab-content').hide();
        $(targetTabId).show();

        
        calculateTotal();
    });

    calculateTotal();
});*/


  function handleValueAssigned() {

    total = 0;
        $('.estimate_sub_total').each(function() {
        total += parseFloat($(this).html());
        });

        if(!isNaN(total)){
        $('#summary_pre_com_total').html(total);
        $('#hidden_pre_commission_cost').val(total);
        }else{
        $('#summary_pre_com_total').html("NaN err");
        }
        

  }

  function calculateCommission(){
    var salesCommissionPercent = parseFloat($('#sales_commission').val());
    var referenceCommissionPercent = parseFloat($('#refrence_commission').val());
    var total = parseFloat($('#summary_pre_com_total').html());
    var salesCommissionAmount = (salesCommissionPercent / 100) * total;
    var referenceCommissionAmount = (referenceCommissionPercent / 100) * total;

     var finalTotal = total + salesCommissionAmount + referenceCommissionAmount;
     $('#sales_commission_td').append(salesCommissionAmount);
     $('#refrence_commission_td').append(referenceCommissionAmount);
     $('#hidden_sales_commission_cost').val(salesCommissionAmount);
     $('#hidden_refrence_commission_cost').val(referenceCommissionAmount);

    if (!isNaN(finalTotal)) {
      $('#post_commission_td').html(finalTotal.toFixed(2));
      $('#hidden_post_commission_cost').val(finalTotal);
    } else {
      $('#post_commission_td.').html("NaN err");
    }
  
  }

  function calculateContigencyCost(){

    var contigencypercent = parseFloat($('#contigency_cost').val());
    var pc_total = parseFloat($('#post_commission_td').html());

    var contigencyAmount = (contigencypercent / 100) * pc_total;
    var ct_total = contigencyAmount + pc_total;
    $('#contigency_cost_td').append(contigencyAmount);
    $('#hidden_contigency_cost').val(contigencyAmount);

    if (!isNaN(ct_total)) {
      $('#post_contigency_td').html(ct_total.toFixed(2));
      $('#hidden_post_contigency_cost').val(ct_total);
    } else {
      $('#post_contigency_td.').html("NaN err");
    }

  }
      
  function calculateProfitOverheadCost(){
    var po_percent = parseFloat($('#profit_overhead_cost').val());
    var ct_total = parseFloat($('#post_contigency_td').html());

    var po_amount = (po_percent / 100) * ct_total;
    var po_total = po_amount + ct_total;
    $('#profit_overhead_td').append(po_amount);
    $('#hidden_profit_overhead_cost').val(po_amount);

     if (!isNaN(po_total)) {
      $('#post_overhead_td').html(po_total.toFixed(2));
      $('#hidden_final_total_cost').val(po_total);
    } else {
      $('#post_overhead_td.').html("NaN err");
    }

  }

 
  



</script>
</body>
</html>