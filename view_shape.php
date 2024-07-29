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
<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
<button type="button" class="btn float_top waves-effect waves-light add_data" data-toggle="modal" data-target=".bs-example-modal-lg" style="width:120px;">Add Shape</button>
        
		<div class="modal fade bs-example-modal-lg" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Shape</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body">
                          <div class="card-body">
                            <form class="" id="shape" novalidate>
                              <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Shape</label>
                                  <input type="text" class="form-control" id="shape_name" placeholder="SHAPE" name="shape_name">
                                </div>
								                  <div class="col-md-6 mb-3">
                                  <label for="validationCustom01">Status</label>
                                  <select class="custom-select" name="status" id="status">
                                    <option value="">-Select-</option>
                                    <option value="1">ACTIVE</option>
                                    <option value="0">INACTIVE</option>
                                  </select>
                                </div>
                              </div>
                          <div class="row">
                          <div class="col-12">
                                <table class="table table-bordered dt-responsive nowrap" id="shape_extra_table" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                  <thead>
                                    <tr>
                                      <th width="5%">#</th>
                                      <th width="25%">Field Name</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td><button type="button" name="add_row" id="add_row" alt="1" class="btn btn-success btn-xs"><i class="mdi mdi-plus-box-multiple-outline"></i></button>
                                        <span style="display:none" id="sr_no">1</span></td>
                                      <td id="material_div">
                                        <input type="text" class="form-control shape_extra_field" name="shape_extra_field[]" data-srno="1" id="shape_extra_field1" onblur="validate_name_Input(this)"> 
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
							  <input type="hidden" name="id" id="id" />
                <input type="hidden" name="total_item" id="total_item" value="1" />
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
				  
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="datatable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th>Sr.No</th>
                      <th>Shape</th>
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
            "ajax" : "fetch_data/get_shape.php",
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

      $(document).ready(function(){
        var count = 1;
        $(document).on('click', '#add_row', function(){
          count++;
          $('#total_item').val(count);
          var html_code = '';
          html_code += '<tr id="row_id_'+count+'">';
          html_code += '<td><button type="button" name="remove_row" id="'+count+'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'+count+'</span></td>';
          html_code += '<td class=""><input type="text" class="form-control shape_extra_field" id="shape_extra_field'+count+'" name="shape_extra_field[]" data-srno="'+count+'"></td>';
          html_code += '</tr>';
          $('#shape_extra_table').append(html_code);
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
