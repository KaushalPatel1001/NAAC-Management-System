<?php 
session_start();
if(!isset($_SESSION['id']))
{
  header("Location: login.php");
}
?>
<!doctype html>
<style type="text/css">

.toggle-label {
    cursor: pointer;
}

.toggle-label:hover {
    color: blue;
    text-decoration: underline;
}
.toggle-checkbox {
    display: none;
}

.content-section {
    display: none;
    padding: 10px;
    border: 1px solid #ccc;
}
.toggle-checkbox:checked + .content-section {
    display: block;
}

</style>
<html lang="en"> <?php include("include/head.php");?><script type="text/javascript" src="assets/script/crud.js"></script>
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 font-size-18">Manage Inquiry</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                         <button type="button" onclick="window.location='add_inquiry.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:150px;">Add Inquiry</button>
                       </li>
                       <li class="breadcrumb-item active">
                         <button type="button" onclick="window.location='create_cost_estimation.php';" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:200px; margin-right:200px;">Create Estimation</button>
                      
                      </li>
                     
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- end page title -->
            <div class="row">
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
              <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
        <!-- End Page-content --> <?php include("include/footer.php"); ?>
      </div>
      <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar --> <?php include("include/rightsidebar.php"); ?>
    <!-- Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT --> <?php include('include/javascript_library.php');?> <script type="text/javascript" language="javascript">
      $(document).ready(function() {
        var dataTable = $('#datatable1').DataTable({
          "ajax": "fetch_data/get_inquiry.php",
          "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          pagingType: "full"
        });
      });
   
      

        $(document).on('click', '.delete_data', function() {
          var checkstr = confirm('are you sure you want to delete this?');
          if (checkstr == true) {
            var id = $(this).attr("id");
            $.ajax({
              url: "delete_details.php?page=add_inquiry_form",
              type: "post",
              data: {
                id: id
              },
              success: function(data) {
                if (data == 'DELETED') {
                  alertify.success("Inquiry Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                } else {
                  alertify.error("Inquiry Not Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                }
              }
            });
          } else {
            return false;
          }
        });
    

      $('#menu_manage').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#add_button').text("add");
        $('#id').val("");
      })
    document.querySelector('.toggle-label').addEventListener('click', function () {
    const checkbox = document.querySelector('#toggle-section');
    var icon = document.getElementById('icon');
    if (checkbox.checked) {
      icon.className = 'fa fa-arrow-down'; 
    }else{
      icon.className = 'fa fa-arrow-up'; 
    }
});
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

          html_code += '<td class=""><input type="text" class="form-control product_name" name="product_name[]" data-srno="'+count+'" id="product_name'+count+'" onblur="validate_nun_Input(this)" placeholder="Product Name" required></td>';

          html_code += '<td class=""><input type="text" class="form-control qty" name="qty[]" data-srno="'+count+'" id="qty'+count+'" onblur="validate_nun_Input(this)" placeholder="Quantity" required></td>';
          html_code += '</tr>';
          $('#inquiry_product_table').append(html_code);
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

  </body>
</html>