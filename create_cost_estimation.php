<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<?php include("include/head.php");?>
<script type="text/javascript" src="assets/script/crud.js"></script>




<style>
  .form-container {
    width: 80%;
    margin: auto;
    padding: 20px;
  }
  .form-step {
    display: none;
  }
  .form-step.active {
    display: block;
  }
  .tabs {
    margin-top: 20px;
    display: flex;
    justify-content: left;
  }
  .tab {
    padding: 10px 10px;
    background-color: #c1c1c1;
    cursor: pointer;
    border: 0px;
    margin: 5px;
    font-weight: 500;
    font-size:14px;
  }
  .tab.active {
    background-color: #243F7D;
    color:#fff;
    font-weight:bold;
  }
  .next-btn{
    position: fixed;
    bottom: 65px;
    right: 65px;
    padding-left: 10px;
    padding-right: 10px;
    background-color: #11c46e;
    color: #FFF;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0px 2px 3px #00000040;
    border: none;
    height: 30px;
    }
  .prev-btn{
    position: fixed;
    bottom: 65px;
    right: 125px;
    padding-left: 10px;
    padding-right: 10px;
    background-color: #ff3f77;
    color: #FFF;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0px 2px 3px #00000040;
    border: none;
    height: 30px;
    }    
</style>


<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content" style="margin-top:30px">
      <div class="container-fluid" style="margin-left:5px;">
        <!-- start page title -->
        <div class="tab-container" >

    



<div class="tabs">
    <?php 
    $query = "SELECT * FROM estimate_tab ORDER BY sequence";
    $result = mysqli_query($conn, $query);
    $count = 1;
    while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
    ?>
    <button class="tab <?php if($count == 1){echo "active";}?> tab<?php echo $count++;?>"><?php echo $rows['short_name'];?></button>
  <?php } ?>  
</div>

<div class="form-container" style="margin: 10px;">
      <div class="form-step step1 active">
       <?php include("est_bom.php")?>
        <button class="next-btn">Next</button>
      </div>
      <div class="form-step step2">
        <?php include("broughtout_form.php")?>
      </div>
      <div class="form-step step3">
        <?php include("manpower_cost_estimation.php")?>
      </div>
      <div class="form-step step4">
        <?php include("view_contractpage.php");?>
      </div>
      <div class="form-step step5">
        <?php include("view_jiqs_fixtures.php");?>
      </div>
      <div class="form-step step6">
        <?php include("est_add_service_data.php");?>
      </div>
      <div class="form-step step7">
        <?php include("est_ndt.php");?>
      </div>
      <div class="form-step step8">
        <?php include("est_new_welder_qualification.php");?>
      </div>
      <div class="form-step step9">
        <?php include("est_testing.php");?>
        
      </div>
      <div class="form-step step10">
        <?php include("est_charges.php");?>
      </div>

      <div class="form-step step11">
        <?php include("view_total.php");?>
     </div>
     
</div>


        <div class="card-body">
          </div>
          
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include("include/footer.php"); ?>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<?php include("include/rightsidebar.php"); ?>
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<?php include('include/javascript_library.php');?>

<script>
  $(document).ready(function() {  
      $.ajax({
        url: "fetch_data/get_estimation_id.php",
        type: "POST",
        data: {
        },
        cache: false,
        success: function(result){
          $(".cost_est_id").val(result);
        }
      });
    });

  $(document).ready(function() {

    $("#summary_bom_cost").html("0");
    $("#summary_broughtout_cost").html("0");
    $("#summary_manpower_cost").html("0");
    $("#summary_subcontract_cost").html("0");
    $("#summary_jigs_fixtures_cost").html("0");
    $("#summary_services_cost").html("0");
    $("#summary_testing_cost").html("0");
    $("#summary_ndt_cost").html("0");
    $("#summary_welding_cost").html("0");
    $("#summary_transportation_cost").html("0");
    $("#summary_inspection_cost").html("0");
    $("#summary_engineering_cost").html("0");
    $("#summary_site_visit_cost").html("0");
    $("#summary_electricity_cost").html("0");
    $("#summary_administration_cost").html("0");
    $("#summary_documentation_cost").html("0");
    $("#summary_legal_compliances_cost").html("0");
    $("#summary_pf_cost").html("0");
    $("#summary_final_trans_cost").html("0");
    $("#summary_insurance_cost").html("0");


    let currentStep = 1;
    const totalSteps = $(".form-step").length;

     

    function showStep(step) {
      $(".form-step").removeClass("active");
      $(".form-step.step" + step).addClass("active");
    }

    function updateTabs() {
      $(".tab").removeClass("active");
      $(".tab.tab" + currentStep).addClass("active");
    }

    $(".next-btn").click(function() {
      if (currentStep < totalSteps) {
        currentStep++;
        showStep(currentStep);
        updateTabs();
        handleValueAssigned();
      }
    });

    $(".prev-btn").click(function() {
      if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
        updateTabs();
      }
    });




    $("#submit-btn").click(function() {
      formSubmit();
    });

    $(".tabs").on("click", ".tab", function() {
      const tabIndex = $(this).index() + 1;
      if (tabIndex !== currentStep) {
        currentStep = tabIndex;
        showStep(currentStep);
        updateTabs();
        handleValueAssigned();
      }
    });

    showStep(currentStep);
  });
function formSubmit(){
$('#add_button_br').trigger('click');
$('#add_button_new').trigger('click');
$('#add_button_contract').trigger('click');
$('#add_button_service').trigger('click');
$('#add_button_ndt').trigger('click');
$('#add_button_testing').trigger('click');
$('#add_button_charges').trigger('click');
$('#add_button_manpower').trigger('click');
$('#add_button_jf').trigger('click');
$('#add_new_weld_button').trigger('click');
$('#add_button_site_visit').trigger('click');
$('#add_button_total').trigger('click');


  }

</script>
  

</body>
</html>
