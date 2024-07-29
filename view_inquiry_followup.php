<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}

$id = $_REQUEST['id'];

$sql = "SELECT * FROM mst_inquiry WHERE id = '".$id."'";
$result = mysqli_query($conn,$sql);
$record = mysqli_fetch_array($result,MYSQLI_BOTH);

$cus_sel = "SELECT vendor_name FROM mst_vendor WHERE vendor_code = '".$record['customer_id']."'";
$cus_res = mysqli_query($conn,$cus_sel);
$cus_rec = mysqli_fetch_array($cus_res,MYSQLI_BOTH);

$source_sel = mysqli_query($conn, "SELECT user_name from tbl_users WHERE id = '".$record['source']."'");
$s_rec = mysqli_fetch_array($source_sel,MYSQLI_BOTH);

$follow_sel = mysqli_query($conn, "SELECT user_name from tbl_users WHERE id = '".$record['followup']."'");
$f_rec = mysqli_fetch_array($follow_sel,MYSQLI_BOTH);

$pro_extra_select = mysqli_query($conn, "SELECT * FROM inquiry_product_extra WHERE inquiry_id = '".$record['inquiry_code']."'");
$pro_num_rows = mysqli_num_rows($pro_extra_select);

?>

<!doctype html>
<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed" style="background-color: white;">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
               <div class="card-body">
              <div class="col-12">

                            <form class="" id="inquiry_followup" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">
                             <div class="card-body">
                              <div class="row">
                                <input type="hidden" class="form-control" id="inquiry_id" name="inquiry_id" value="<?php echo $record['id'];?>" readonly>
                                <div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Inquiry Code</label>
                                  <input type="text" class="form-control" id="inquiry_code" name="inquiry_code" value="<?php echo $record['inquiry_code'];?>" readonly>
                                </div>
                                 <div class="col-md-5 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                  <input type="text" class="form-control" id="customer_name" name="customer_name" value="<?php echo $cus_rec['vendor_name'];?>">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Customer Feedback</label>
                                  <input type="text" class="form-control" id="customer_feedback" name="customer_feedback">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Date</label>
                                  <input type="date" class="form-control" id="feedback_date" name="feedback_date">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="feedback_time">Time</label>
                                    <input type="time" class="form-control" id="feedback_time" name="feedback_time">
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Followup Required</label>
                                  <input type="text" class="form-control" id="followup_required" name="followup_required">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Followup Date</label>
                                  <input type="date" class="form-control" id="followup_date" name="followup_date">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="followup_time">Followup Time</label>
                                    <input type="time" class="form-control" id="followup_time" name="followup_time">
                                </div>
                              </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                  <label for="validationCustom01">Transfer Inquiry</label>
                                  <select class="custom-select" name="transfer_inquiry" id="transfer_inquiry" required>
                                    <option value="">-Select-</option>
                                     <?php 
                                    $select_query = "select * from tbl_users";
                                    $process = mysqli_query($conn,$select_query);
                                    while ($fetch = mysqli_fetch_array($process)){
                                      $user_id = $fetch['id'];
                                      $user_name = $fetch['user_name']; 
                                      ?>
                                      <option value="<?php echo $user_id;?>"><?php echo $user_name;?></option>
                                    <?php } ?>
                                  </select>
                                </div>

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status" required>
                                  <option value="0">PENDING</option>
                                  <option value="1">CLOSED</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9 mb-3">
                                  <label for="validationCustom01">Remarks</label>
                                  <input type="text" class="form-control" id="followup_remark" name="followup_remark">
                                </div>
                              </div>

                          <div class="row" >
                          <div class="col-md-6">
                            <label for="validationCustom01">Product Details</label>
                                <table class="table table-bordered dt-responsive nowrap" id="inquiry_product_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="10%">Product Name</th>
                                      <th width="10%">QTY</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                    $pro_count = 1;
                                    while($pro_rec = mysqli_fetch_array($pro_extra_select,MYSQLI_BOTH)){
                                      $pro_count++;
                                      ?>
                                      <tr id="row_id_<?php echo $pro_count;?>">
                                        <span style="display:none" id="sr_no"><?php echo $pro_count;?></span>

                                        <td id="product_td">
                                          <input type="text" class="form-control product_name" name="product_name[]" data-srno="<?php echo $pro_count;?>" id="product_name'<?php echo $pro_count;?>'" value="<?php echo $pro_rec['product_name'];?>"> 
                                        </td>
                                        <td id="Qty_td">
                                          <input type="text" class="form-control Qty" name="qty[]" data-srno="<?php echo $pro_count;?>" id="qty'<?php echo $pro_count;?>'" value="<?php echo $pro_rec['qty'];?>"> 
                                        </td>
                                      </tr>
                                      <?php

                                    }
                                    ?>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                                    <input type="hidden" name="id" id="id"/>
                                    <input type="hidden" name="total_item" id="total_item" value="1"/>
                                    <input type="hidden" name="total_item1" id="total_item1" value="1"/>
                                    <button class="btn btn-primary" id="add_button" type="submit">Update</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Updating... </button>
                                      
                                      
                                 </div>
                            </form>
                  </div>
                </div>
              </div>
            </div>
        <!-- end row -->
        <!-- end row -->
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
<script type="text/javascript" language="javascript">

  $(document).ready(function() {
    GetData();
  });

function GetData(e){
  $.ajax({  
    url: "fetch/view.php",
    method:"post",  
    data:{
    }, 
    success:function(data){  
      console.log(data);
      $('#modal_body').append(data);  
      $('#menu_manage').modal("show");
    }  
  });
}

function getInqiryDetails(id){
  var id = id;
  $.ajax({
    'type': 'POST',
    'url': 'fetch/inquiry_data.php',
    'data': "id="+id,
    dataType: 'JSON',
    success: function (result) {
      if (result != '') {
        console.log(result);
        $('#menu_manage').modal("hide");
        $('#inquiry_id').val(result.id);
        $('#inquiry_code').val(result.inquiry_code);
        $('#customer_name').val(result.customer_name);
        /*GetLastHistory(result.code);
        GetProductHistory(result.id);*/
      }
    }
  });
}


$('#menu_manage').on('hidden.bs.modal', function () {
  $(this).find('form').trigger('reset');
  $('#add_button').text("add");
  $('#id').val("");
})


</script>

<script>
      $(document).ready(function(){
        var count1 = 1;
        $(document).on('click', '#add_row1', function(){
          count1++;
          $('#total_item1').val(count1);
          var html_code = '';
          html_code += '<tr id="row_id_'+count1+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count1+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count1+'</span></td>';

          html_code += '<td class=""><input type="date" class="form-control followup_date" name="followup_date[]" data-srno="'+count1+'" id="followup_date'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_action" name="followup_action[]" data-srno="'+count1+'" id="followup_action'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_remarks" name="followup_remarks[]" data-srno="'+count1+'" id="followup_remarks'+count1+'" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_user" name="followup_user[]" data-srno="'+count1+'" id="followup_user'+count1+'" required></td>';
          html_code += '</tr>';
          $('#inquiry_follo_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item1').val(count1);
        });
    });

</script>

</body>
</html>
