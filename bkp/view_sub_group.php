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
                  <h4 class="mb-0 font-size-18">Manage Sub-Groups</h4>
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item active">
                        <button type="button" class="btn btn-success btn-md waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg">Add Sub-Group</button>
                      </li>
                      <div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Sub-Group</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="card-body">
                                <form class="" id="sub_group_form" novalidate>
                                  <div class="row">
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Sub-Group Code</label>
                                      <input type="text" class="form-control" id="sub_grp_code" placeholder="Sub-Group Code" name="sub_grp_code">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Sub-Group Name</label>
                                      <input type="text" class="form-control" id="sub_grp_name" placeholder="Sub-Group name" name="sub_grp_name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Prefix</label>
                                      <input type="text" class="form-control" id="prefix" placeholder="Prefix" name="prefix">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Status</label>
                                      <select class="custom-select" name="status" id="status" required>
                                        <!-- <option value="">-Select-</option> -->
                                        <option value="1">ACTIVE</option>
                                        <option value="0">INACTIVE</option>
                                      </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <label for="validationCustom01">Select Category</label>
                                      <select name="cat_code" id="cat_code" class="custom-select">
                                       <option value="">Select Category</option>
                                       <?php
                                       $query = "SELECT cat_code,cat_name FROM mst_category";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $catcode){
                                     ?>
                                        <option value="<?php echo $catcode["cat_code"];?>"><?php echo $catcode["cat_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                    </div>
                                     <div class="col-md-6 mb-3">
                                       <label for="validationCustom01">Select Group</label>
                                    <select name="grp_code" id="grp_code" class="custom-select">
                                       <option value="">Select Group</option>
                                       <?php
                                       $query = "SELECT grp_code,grp_name FROM mst_group";
                                       $results=mysqli_query($conn, $query);
                                       //loop
                                       foreach ($results as $grpcode){
                                     ?>
                                        <option value="<?php echo $grpcode["grp_code"];?>"><?php echo $grpcode["grp_name"];?></option>
                                        <?php 
                                   }
                                     ?>
                                    </select>
                                  </div>
                                </div>
                                  <input type="hidden" name="id" id="id" />
                                  <button class="btn btn-primary" id="add_button" type="submit">Save</button>
                                  <button class="btn btn-primary" id="loader" type="button" style="display:none">
                                <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Saving... </button>

                                </form>
                              </div>
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
                          <th>Sub-Group Name</th>
                          <th>Sub-Group Code</th>
                          <th>Category name</th>
                          <th>Group Name</th>
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
          "ajax": "fetch_data/get_sub_group.php",
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
            url: "fetch/fetch_sub_group.php",
            method: "POST",
            data: {
              id: id
            },
            dataType: "json",
            success: function(data) {
              $('#sub_grp_name').val(data.sub_grp_name);
              $('#sub_grp_code').val(data.sub_grp_code);
              $('#prefix').val(data.prefix);
              $('#cat_code').val(data.cat_code);
              $('#grp_code').val(data.grp_code);
              $('#status').val(data.status);
              $('#id').val(data.id);
              $('#add_button').text("Update");
              $('#menu_manage').modal('show');
            }
          });
        });
        $(document).on('click', '.delete_data', function() {
          var checkstr = confirm('are you sure you want to delete this?');
          if (checkstr == true) {
            var id = $(this).attr("id");
            $.ajax({
              url: "delete_details.php?page=sub_group",
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
            url: "change_status.php?page=sub_group",
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

      function toggleDisplay() {
        var x = document.getElementById("togdiv");
        if (x.style.display === "block") {
          x.style.display = "none";
        } else {
          x.style.display = "block";
        }
      }
      $('#menu_manage').on('hidden.bs.modal', function() {
        $(this).find('form').trigger('reset');
        $('#add_button').text("Save");
        $('#id').val("");
      })



    </script>
  </body>
</html>