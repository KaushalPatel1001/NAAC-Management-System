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
        <div class="modal fade bs-example-modal-xl" id="menu_manage" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">View Service Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
              <div class="modal-body" id="print_detail">
                <div class="card-body" > </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
		<div class="modal fade bs-example-modal-xl" id="menu_manage_view" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header header-bg">
                          <h5 class="modal-title mt-0" id="myLargeModalLabel">Print Receipt</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                        </div>
                        <div class="modal-body" id="feedback_detail">
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
                <table id="datatable1" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
                    <tr>
                      <th width="5%">Sr.No</th>
                      <th width="15%">Service Order No.</th>
                      <th width="17%">Company Name</th>
                      <th width="18%">Client Name</th>
                      <th width="30%">Services</th>
                      <th width="15%">Created On</th>
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
            "ajax" : "fetch_data/get_orders.php",
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
                url:"fetch/fetch_service_order.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
				 	 $('#sales_order').val(data.sales_order);
				 	 $('#client_name').val(data.client_name);
				 	 $('#project_name').val(data.project_name);
				 	 $('#creation_date').val(data.creation_date);
				 	 $('#deadline_date').val(data.deadline_date);
					 $('#status').val(data.status);
					 $('#id').val(data.id); 
					 $('#add_button').text("update"); 
					 $('#menu_manage').modal('show');
                }
           });  
		   
      });
	  $(document).on('click', '.print', function(){  
                   var id = $(this).attr("id");  
                   if(id != '')  
                   {  
                        $.ajax({  
                             url:"view/fetch_invoice_print.php",  
                             method:"POST",  
                             data:{id:id},  
                             success:function(data){  
                                  $('#print_detail').html(data);  
                                  $('#menu_manage').modal('show');  
                             }  
                        });  
                   }  
         	   
         	   
         	             
              });
			  
			 $(document).on('click', '.delete_data', function(){
	  	 var checkstr =  confirm('are you sure you want to delete this?');
		 if(checkstr == true){
           var id = $(this).attr("id");
		    var value = $(this).attr("rel");
		   				$.ajax({  
							url: "delete_details.php?page=service_order",
							type: "post",
							data: {id:id, value:value},
							success:function(data){ 
							if(data == 'DELETED'){
							alertify.success("Service Order Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
								alertify.error("Service Order Not Deleted");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}
                		}
           }); 
		   }else{
		   return false;
		   } 
		   
      }); 
	  $(document).on('click', '.print_all', function(){  
				   var id = $(this).attr("id");
                   if(id != '')  
                   {  
                        $.ajax({  
                             url:"view/fetch_all_receipt.php",  
                             method:"POST",  
                             data:{id:id},  
                             success:function(data){  
                                  $('#feedback_detail').html(data);
                                  $('#menu_manage_view').modal('show');  
                             }  
                        });  
                   }  
              });
	  $(document).on('click', '.change_status', function(){ 
           var id = $(this).attr("id");
		   var value = $(this).attr("value"); 
           				$.ajax({  
							url: "change_status.php?page=bank",
							type: "post",
							data: {id:id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							alertify.success("Bank Enabled");
								var table = $('#datatable1').DataTable();
								table.ajax.reload(null, false);
							}else{
							$('#change_status').text("inactive"); 
								alertify.error("Bank Disabled");
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
</script>
</body>
</html>
