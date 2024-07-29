<?php 
session_start();
include_once("include/db_connect.php");
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
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
               <div class="card-body" style="background:#fff; box-shadow: 0px 2px 3px #00000040;">
              <div class="col-12">
                
                                <form class="" id="inquiry_followup" novalidate>
                                  <div class="card-body">
                              <div class="row">

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Inquiry Code</label>
                                  <input type="text" class="form-control" id="inquiry_code" name="inquiry_code" autocomplete="off">
                                </div>
                                 <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">Customer</label>
                                  <input type="text" class="form-control" id="followup_name" name="followup_name" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">ACTION</label>
                                  <input type="text" class="form-control" id="foll_action" name="foll_action" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">DATE</label>
                                  <input type="date" class="form-control" id="foll_date" name="foll_date" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="followup_time">TIME</label>
                                    <input type="time" class="form-control" id="followup_time" name="followup_time" autocomplete="off">
                                </div>

                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">ACTION REQUIRED</label>
                                  <input type="text" class="form-control" id="followup_action_required" name="followup_action_required" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">DATE</label>
                                  <input type="date" class="form-control" id="followup_date1" name="followup_date1" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="followup_time">TIME</label>
                                    <input type="time" class="form-control" id="followup_time1" name="followup_time1" autocomplete="off">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">REMARKS</label>
                                  <input type="text" class="form-control" id="followup_remark" name="followup_remark" autocomplete="off">
                                </div>
                                <div class="col-md-3 mb-3">
                                  <label for="validationCustom01">TRANSFER INQUIRY</label>
                                  <input type="text" class="form-control" id="followup_transfer_inquiry" name="followup_transfer_inquiry" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                        <div class="form-group">
                           <label class="capital">STATUS</label><span style="color: red">*</span><br>
                           <label class="radio-inline fontradiobuttion" style="margin-right: 10px;">
                               <input class="type" type="radio" name="followup_status" value="D"> <span class="label-text">PENDING</span>
                           </label>
                           <label class="radio-inline fontradiobuttion">
                               <input class="type" type="radio" name="followup_status" value="O" checked=""> <span class="label-text">CLOSE</span>
                           </label>
                       </div>

                     </div>
                              </div>

                              <div class="row" >
                          <div class="col-md-6">
                                <table class="table table-bordered dt-responsive nowrap" id="inquiry_followup_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="10%">Product Name</th>
                                      <th width="10%">QTY</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>

                                      <td id="product_td">
                                        <input type="text" class="form-control followup_product_name" name="followup_product_name[]" data-srno="1" id="followup_product_name1" placeholder="Product Name"> 
                                      </td>
                                      <td id="Qty_td">
                                        <input type="text" class="form-control followup_qty" name="followup_qty[]" data-srno="1" id="followup_qty1" onblur="validate_num_Input(this)" placeholder="Quantity"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                         
                          <div class="col-md-6">
                                <table class="table table-bordered dt-responsive nowrap" id="inquiry_follo_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="10%">DATE</th>
                                      <th width="10%">ACTION</th>
                                      <th width="10%">REMARK</th>
                                      <th width="10%">USER</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row1" id="add_row1" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>

                                      <td>
                                        <input type="date" class="form-control followup_date" name="followup_date[]" data-srno="1" id="followup_date1" placeholder="Date"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control followup_action" name="followup_action[]" data-srno="1" id="followup_action1" placeholder="Action"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control followup_remarks" name="followup_remarks[]" data-srno="1" id="followup_remarks1" placeholder="Remarks"> 
                                      </td>
                                      <td>
                                        <input type="text" class="form-control followup_user" name="followup_user[]" data-srno="1" id="followup_user1" placeholder="User"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>

                                       <input type="hidden" name="id" id="id"/>
                                       <input type="hidden" name="total_item" id="total_item" value="1" />
                                       <input type="hidden" name="total_item1" id="total_item1" value="1" />
                                        
                                        <div class="row">
                                        <div class="col-md-12">
                                         <div align="left">
                                        <label><h6 style="color:red;">Fields marked with * are compulsary</h6></label>
                                      </div>
                                   <hr>
                                      <button align="center" class="btn btn-primary" id="add_button" type="submit">SAVE & LIST</button>
                                         <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                            <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span>
                                           Adding...
                                       </button>
                                     <a href="" class="btn btn-danger capital"> Cancel</a>
                                </div>
                                 </div>
                               </div>
                                </div>
                            </form>
                             
                        <!-- /.modal-dialog -->
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
          
        <!-- end page title -->
        <!-- <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Inquiry Code</th>
                      <th>Customer Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
 
        </div> -->
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
<script type="text/javascript" language="javascript" >
         $(document).ready(function(){
           var dataTable = $('#datatable1').DataTable({
            "ajax" : "fetch_data/get_inquiry_followup.php",
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
     pagingType: "full"
           });
         });
      </script>
<script>
$(document).ready(function(){ 
  $(document).on('click', '.edit_data', function(){ 
           var id = $(this).attr("id"); 
           $.ajax({  
                url:"fetch/fetch_shape.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
           $('#shape_name').val(data.shape_name);
           $('#status').val(data.status);
           $('#id').val(data.id); 
           $('#add_button').text("Update"); 
           $('#menu_manage').modal('show');
           $('#myLargeModalLabel').text("update shape");
                }
           });  
       
      });
    
    $(document).on('click', '.delete_data', function(){
       var checkstr =  confirm('are you sure you want to delete this?');
     if(checkstr == true){
           var id = $(this).attr("id");
              $.ajax({  
              url: "delete_details.php?page=shape",
              type: "post",
              data: {id:id},
              success:function(data){ 
              if(data == 'DELETED'){
              alertify.success("Shape Deleted");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }else{
                alertify.error("Shape Not Deleted");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }
                    }
           }); 
       }else{
       return false;
       } 
       
      });
    
    $(document).on('click', '.change_status', function(){ 
           var id = $(this).attr("id");
       var value = $(this).attr("value"); 
                  $.ajax({  
              url: "change_status.php?page=shape",
              type: "post",
              data: {id:id,value:value},
              success:function(data){ 
              if(data == 'ACTIVE'){
              alertify.success("Fetch Enabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }else{
              $('#change_status').text("inactive"); 
                alertify.error("Shape Disabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }
                    }
           });  
       
      }); 
     
});

$('#menu_manage').on('hidden.bs.modal', function () {
    $(this).find('form').trigger('reset');
  $('#add_button').text("add");
  $('#id').val("");
})

function validate_num_Input(inputField) {
      var inputValue = inputField.value.trim();

      // Check if the input value is empty or contains non-alphabetic characters
      if (inputValue !== '' && !/^[0-9]+$/.test(inputValue)) {
        
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
        if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
        showDangerToast_name_validation();
        inputField.value = ''; //inputValue Clear the input field
        inputField.focus(); // Set focus back to the input field
      }

    }

</script>

<script>
      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';

          html_code += '<td class=""><input type="text" class="form-control product_name" name="product_name[]" data-srno="'+count+'" id="product_name'+count+'" placeholder="Product Name" required></td>';

          html_code += '<td class=""><input type="text" class="form-control qty" name="qty[]" data-srno="'+count+'" id="qty'+count+'" onblur="validate_nun_Input(this)" placeholder="Quantity" required></td>';
          html_code += '</tr>';
          $('#inquiry_followup_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item').val(count);
        });
    });

/*
// Function to get the current date and time
function getCurrentDateAndTime() {
  const dateTime = new Date();
  return dateTime.toLocaleString();
}

// Target an HTML element to display the current date and time
const dateDisplay = document.getElementById("date");

// Set the innerHTML of the element to the current date and time returned by the function
dateDisplay.innerHTML = getCurrentDateAndTime();
*/
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

          html_code += '<td class=""><input type="date" class="form-control foll_date" name="foll_date[]" data-srno="'+count1+'" id="foll_date'+count1+'" placeholder="Date" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_action" name="followup_action[]" data-srno="'+count1+'" id="followup_action'+count1+'" placeholder="Action" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_remarks" name="followup_remarks[]" data-srno="'+count1+'" id="followup_remarks'+count1+'" placeholder="Remarks" required></td>';

          html_code += '<td class=""><input type="text" class="form-control followup_user" name="followup_user[]" data-srno="'+count1+'" id="followup_user'+count1+'" placeholder="Quantity" required></td>';
          html_code += '</tr>';
          $('#inquiry_follo_table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item1').val(count1);
        });
    });

/*
// Function to get the current date and time
function getCurrentDateAndTime() {
  const dateTime = new Date();
  return dateTime.toLocaleString();
}

// Target an HTML element to display the current date and time
const dateDisplay = document.getElementById("date");

// Set the innerHTML of the element to the current date and time returned by the function
dateDisplay.innerHTML = getCurrentDateAndTime();
*/
</script>

</body>
</html>
