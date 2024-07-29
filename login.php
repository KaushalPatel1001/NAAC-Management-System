<!doctype html>
<html lang="en">
<?php include("include/head.php");?>
<script type="text/javascript" src="assets/script/login.js"></script>
<body class="bg-primary bg-pattern">
<div class="account-pages my-5 pt-5">
  <div class="container">
    <!-- end row -->
    <div class="row justify-content-center">
	  <div class="col-lg-5">
        <div class="card" style="border-radius:5px; display: flex; background-color:#0000007a; border:1px solid #000">
          <div class="card-body p-4">
            <div class="p-2">
              <h2 class="mb-5 text-left text-white">Welcome Back</h2>
              <form class="form-horizontal" id="login_form">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-4">
					<label for="validationCustom01" style="color:#FFFFFF">Username</label>
                      <input type="text" class="form-control" id="username" name="username" autocomplete="off" style="background-color: transparent; border-bottom: 1px solid #fff;border-top:none;border-left:none;border-right:none; color:#FFFFFF">
                    </div>
                    <div class="form-group mb-4">
					<label for="validationCustom01" style="color:#FFFFFF">Password</label>
                      <input type="password" class="form-control" id="password" name="password" style="background-color: transparent; border-bottom: 1px solid #fff;border-top:none;border-left:none;border-right:none;color:#FFFFFF">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="mt-4">
                      <button class="btn waves-effect waves-light" style="font-size: 16px;
		padding: 10px 20px !important;
		line-height: 1.2;
		background: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		min-width: 120px;
		height: 50px;
		border-radius: 25px;
		position: relative;
		z-index: 1; color:#000; font-weight:500;
		transition: all 0.4s;" type="submit">Login</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row -->
</div>
<!-- end Account pages -->
<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/jquery-toast-plugin/jquery.toast.min.js"></script>
<script src="assets/script/toastDemo.js"></script>
</body>
</html>
