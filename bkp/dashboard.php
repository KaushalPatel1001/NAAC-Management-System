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
<style>
body{background-color:#fff !important;}
.card{border:1px solid #000;}
textarea[name=sticky] {
  resize: none;
}
</style>

<link rel="stylesheet" href="assets/jquery-toast-plugin/jquery.toast.min.css">
<body data-topbar="dark" data-layout="horizontal" data-layout-size="boxed">
<!-- Begin page -->
<div id="layout-wrapper">
  <?php include("include/header.php");?>
  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
              <h4 class="mb-0 font-size-18">Welcome Back, <?php echo $_SESSION['user_name'];?></h4>
              <div class="page-title-right"> </div>
            </div>
          </div>
        </div>
        	
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <?php include("include/footer.php"); ?>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right Sidebar -->
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<?php include('include/javascript_library.php');?>
<script>
document.title = 'Dashboard';
</script>
<script>
<?php 
$msg = $_REQUEST['msg'];
if($msg == 'success'){?>
$(window).on("load", function () {
    showDangerToast_login_success();
});
<?php 
}
?>

</script>



</body>
</html>
