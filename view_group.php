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
  <body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
    <!-- Begin page -->
    <div id="layout-wrapper"> <?php include("include/header.php");?> <div class="main-content">
        <div class="page-content">
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="mb-0 font-size-18">Manage Groups</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                        <button type="button" class="btn btn-success btn-md waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add Group</button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Group</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form class="" id="group_form" novalidate>
                              <div class="card-body">
                                
                                  <div class="row">
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Group Code</label>
                                      <input type="text" class="form-control" id="grp_code" placeholder="Group Code" name="grp_code" onblur="validate_num_Input(this)">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Group Name</label>
                                      <input type="text" class="form-control" id="grp_name" placeholder="Group name" name="grp_name" onblur="validate_name_Input(this)">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Prefix</label>
                                      <input type="text" class="form-control" id="prefix" placeholder="Prefix" name="prefix">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Select Category</label>
                                      <select name="cat_id" id="cat_id" class="custom-select" required>
                                       <option value="">Select Category</option>
                                       <?php 
                                          $select_query = "select * from mst_category WHERE status = '1'";
                                          $process = mysqli_query($conn,$select_query);
                                          while ($fetch = mysqli_fetch_array($process)){
                                          $cat_id = $fetch['id'];
                                          $cat_name = $fetch['cat_name'];
                                          ?>
                                      <option value="<?php echo $cat_id;?>"><?php echo $cat_name;?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                    <div class="col-md-4 mb-3">
                                      <label for="validationCustom01">Status</label>
                                      <select class="custom-select" name="status" id="status" required>
                                        <!-- <option value="">-Select-</option> -->
                                        <option value="1">ACTIVE</option>
                                        <option value="0">INACTIVE</option>
                                      </select>
                                    </div>
                                </div>
                                </div>

                                <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="invoice-item-table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th  width="5%">#</th>
                                      <th width="25%">Field Name</th>
                                      <th width="20%">Is Numeric</th>
                                      <th width="15%">Is Compulsory</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td id="material_div">
                                        <input type="text" class="form-control extra_field" name="extra_field[]" data-srno="1" id="extra_field1" onblur="validate_name_Input(this)"> 
                                      </td>
                                    <td>
                                    <select class="custom-select is_num" name="is_num[]" data-srno="1" id="is_num1">
                                      <option value="">-Select-</option>
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                    </td>
                                    <td>
                                    <select class="custom-select is_compulsory" name="is_compulsory[]" data-srno="1" id="is_compulsory1">
                                      <option value="">-Select-</option>
                                      <option value="1">YES</option>
                                      <option value="0">NO</option>
                                    </select>
                                    </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                                <input type="hidden" name="id" id="id" />
                                <input type="hidden" name="total_item" id="total_item" value="1" />
                                  <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                    <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Saving... 
                                  </button>
                                
                              </div>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
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
                          <th>Group Name</th>
                          <th>Group Code</th>
                          <th>Category name</th>
                          <th>Prefix</th>
                          <th>Status</th>
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
          "ajax": "fetch_data/get_group.php",
          "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          pagingType: "full"
        });
      });
    </script>
    <script>
      $(document).ready(function() {
       $(document).on('click', '.edit_data', function() {
          var id = $(this).attr("id");
          $.ajax({
            url: "fetch/fetch_group.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "json",
            success: function(data) {
              $('#grp_name').val(data.grp_name);
              $('#grp_code').val(data.grp_code);
              $('#prefix').val(data.prefix);
              $('#cat_id' ).val(data.cat_id);
              $('#status').val(data.status);
              $('#id').val(data.id);
              $('#add_button').text("Update");
              $('#menu_manage').modal('show');
              $('#myLargeModalLabel').text("Update Group");
            }
          });
          $.ajax({
            url: "fetch/fetch_group_extra.php",
            method: "POST",
            data: {
              grp_id: id
            },
            success: function(data) {
              $('#invoice-item-table').append(data);
              $('#add_button').text("Update");
              $('#menu_manage').modal('show');
              $('#myLargeModalLabel').text("Update Group");
            }
          });
        });
        $(document).on('click', '.delete_data', function() {
          var checkstr = confirm('are you sure you want to delete this?');
          if (checkstr == true){
            var id = $(this).attr("id");
            $.ajax({
              url: "delete_details.php?page=group",
              type: "post",
              data: {
                id: id
              },
              success: function(data) {
                if (data == 'DELETED') {
                  alertify.success("Group Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                } else {
                  alertify.error("Group Not Deleted");
                  var table = $('#datatable1').DataTable();
                  table.ajax.reload(null, false);
                }
              }
            });
          } else {
            return false;
          }
        });
        $(document).on('click', '.change_status', function() {
          var id = $(this).attr("id");
          var value = $(this).attr("value");
          $.ajax({
            url: "change_status.php?page=group",
            type: "post",
            data: {
              id: id,
              value: value
            },
            success: function(data) {
              if (data == 'ACTIVE') {
                alertify.success("Group Enabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              } else {
                $('#change_status').text("inactive");
                alertify.error("Group Disabled");
                var table = $('#datatable1').DataTable();
                table.ajax.reload(null, false);
              }
            }
          });
        });
      });

      
      $('#menu_manage').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#add_button').text("Save");
        $('#id').val("");
      })

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
      if (inputValue !== '' && !/^[\s0-9A-Za-z-]+$/.test(inputValue)) {
        showDangerToast_name_validation();
        inputField.value = ''; // Clear the input field
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
          html_code += '<td class=""><input type="text" class="form-control extra_field" id="extra_field'+count+'" name="extra_field[]" data-srno="'+count+'"></td>';
          html_code += '<td class=""><select class="custom-select is_num" name="is_num[]" id="is_num'+count+'" data-srno="'+count+'""><option value="">-Select-</option><option value="1">YES</option><option value="0">NO</option></select></td>';
          html_code += '<td><select class="custom-select is_compulsory" name="is_compulsory[]" id="is_compulsory'+count+'" data-srno="'+count+'""><option value="">-Select-</option><option value="1">YES</option><option value="0">NO</option></select></td>';
          html_code += '</tr>';
          $('#invoice-item-table').append(html_code);
          });
        
        $(document).on('click', '.remove_row', function(){
          var row_id = $(this).attr("id");
          $('#row_id_'+row_id).remove();
          $('#total_item').val(count);
        });
    });

</script>

  </body>
</html>