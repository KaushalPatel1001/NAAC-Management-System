<?php 
session_start();
if(!isset($_SESSION['id']))
{
	header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
<?php include("include/head.php");
$id = $_REQUEST['id'];
$check_user = "SELECT * FROM `tbl_users` WHERE id='".$id."'";
$check_res_user = mysqli_query($conn,$check_user);
$check_row_user = mysqli_fetch_array($check_res_user);

?>


<script type="text/javascript" src="assets/script/crud.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <!-- end page title -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body boxshadow">
                <form class="" id="change_password_form" novalidate>
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <label for="validationCustom01">New Password</label>
                      <div class="input-group">
                        <input type="password" class="form-control" placeholder="Enter New Password" autocomplete= "off" name="user_password" id="user_password" value="<?php echo $check_row_user['user_password'];?>">
                        <input type="hidden" class="form-control" placeholder="Enter New Password" autocomplete= "off" name="user_password_old" id="user_password_old" value="<?php echo $check_row_user['user_password'];?>">
                        <input type="hidden" class="form-control" autocomplete= "off" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
                      </div>
                    </div>
					<div class="col-md-4 mb-3">
                                  <label for="validationCustom01">Upload Profile Image</label>
								  <input type="file" class="form-control" id="file" name="pdf_document">
								  <div class="progress mb-1" style="display:none; height:1rem;">
                                                    <div class="progress-bar progress-bar-success myprogress" role="progressbar" style="width:0%; display:none; background-color:#1bb99a">0%</div>
                                                     
                                                </div>
                                                <span id="uploaded_image"></span>
                                </div>
					
                  </div>
                  <button class="btn btn-outline-primary mb-2" id="add_button" type="submit">Submit</button>
				  <input type="hidden" name="upload_material_file" id="upload_material_file"/>
				  <input type="hidden" name="upload_material_file_old" id="upload_material_file_old" value="<?php echo $check_row_user['profile_image'];?>"/>
                  <button class="btn btn-primary" id="loader" type="button" style="display:none"> <span class="spinner-border spinner-border-sm mr-1" role="status" aria-hidden="true"></span> Adding... </button>
                </form>
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

<script>
$(document).ready(function(){  
  $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
   $("#file").val(null);
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  
  var fsize = f.size||f.fileSize;
  if(fsize > 5000000)
  {
   alert("Image File Size is very big");
   $("#file").val(null);
  }
		  else
		  {
		   form_data.append("file", document.getElementById('file').files[0]);
		   $.ajax({
			url:"upload_profile_image.php",
			method:"POST",
			xhr: function () {
                            var xhr = new window.XMLHttpRequest();
                            xhr.upload.addEventListener("progress", function (evt) {
                                if (evt.lengthComputable) {
                                    var percentComplete = evt.loaded / evt.total;
                                    percentComplete = parseInt(percentComplete * 100);
                                    $('.myprogress').text(percentComplete + '%');
                                    $('.myprogress').css('width', percentComplete + '%');
                                }
                            }, false);
                            return xhr;
                        },
			data: form_data,
			contentType: false,
			cache: false,
			processData: false,
			beforeSend:function(){
			 $('#uploaded_image').html("<label class='text-success'>Uploading...</label>");
			 $('.progress').show();
			 $('.myprogress').show();
			 $('.myprogress').css('width', '0');
			},   
				success:function(data)
				{
				 $('#uploaded_image').html('<button type="button" data-path="document/' + data + '" id="remove_button" class="btn btn-danger btn-sm"><i class="mdi mdi-delete-circle-outline"></i></button> <a href="document/' + data + '" target="_blank" data-path="document/' + data + '" class="btn btn-success btn-sm"><i class="mdi mdi-eye-outline"></i></a>');
				 $('#upload_material_file').val(data);
				}
   });
  }
 }); 
	  
	  
	    
      $(document).on('click', '#remove_button', function(){  
           if(confirm("Are you sure you want to remove this image?"))  
           {  
                var path = $('#remove_button').data("path");  
                $.ajax({  
                     url:"image_delete.php",  
                     type:"POST",  
                     data:{path:path},  
                     success:function(data){  
                          if(data != '')  
                          {  
						  $('.myprogress').css('width', '0');
						  $('.myprogress').removeClass('progress-bar-success');
						  $('.myprogress').addClass('progress-bar-danger');
						  setTimeout(function(){
									  $('.progress').hide('slow');
									 }, 1500);
						  
						  $('#uploaded_image').html(''); 
						  $("#file").val(null); 
						  $('#upload_material_file').val(null);
						  $('#file').prop('disabled', false);
                          }  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
 });
</script>
</body>
</html>
