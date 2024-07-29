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
</style>
<style>
    
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
        <?php if($_SESSION['id'] == '1'){ ?>
        <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Total Orders</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="dripicons-box"></i> </span> </div>
                </div>
                <h4 class="m-0 align-self-center">
                  <?php 
										$query_sel_q = "select * from service_order_details";
										$fet_query_q = mysqli_query($conn,$query_sel_q);
										$pro_query_q = mysqli_fetch_array($fet_query_q);
										$pro_query_num = mysqli_num_rows($fet_query_q); 
										if($pro_query_num == "0"){
										echo "0";
										}else{
										echo $pro_query_num;
										}
										?>
                </h4>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Completed Orders</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="dripicons-box"></i> </span> </div>
                </div>
                <h4 class="m-0 align-self-center">
                  <?php 
										$query_sel_com = "select * from service_order_details where status = 'COMPLETED'";
										$fet_query_com = mysqli_query($conn,$query_sel_com);
										$pro_query_com = mysqli_fetch_array($fet_query_com);
										$pro_query_num_com = mysqli_num_rows($fet_query_com); 
										if($pro_query_num_com == "0"){
										echo "0";
										}else{
										echo $pro_query_num_com;
										}
										?>
                </h4>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Pending Orders</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="dripicons-box"></i> </span> </div>
                </div>
                <h4 class="m-0 align-self-center">
                  <?php 
										$query_sel_pen = "select * from service_order_details where status = 'PENDING'";
										$fet_query_pen = mysqli_query($conn,$query_sel_pen);
										$pro_query_pen = mysqli_fetch_array($fet_query_pen);
										$pro_query_num_pen = mysqli_num_rows($fet_query_pen); 
										if($pro_query_num_pen == "0"){
										echo "0";
										}else{
										echo $pro_query_num_pen;
										}
										?>
                </h4>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Rejected Orders</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="dripicons-box"></i> </span> </div>
                </div>
                <h4 class="m-0 align-self-center">
                  <?php 
										$query_sel_rej = "select * from service_order_details where status = 'REJECTED'";
										$fet_query_rej = mysqli_query($conn,$query_sel_rej);
										$pro_query_rej = mysqli_fetch_array($fet_query_rej);
										$pro_query_num_rej = mysqli_num_rows($fet_query_rej); 
										if($pro_query_num_rej == "0"){
										echo "0";
										}else{
										echo $pro_query_num_rej;
										}
										?>
                </h4>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <!--<div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Total Invoices</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="fas fa-file-invoice"></i> </span> </div>
                </div>
                <h5 class="m-0 align-self-center">
                  <?php 
										$query_inv = "select * from service_invoice where status = 'ACTIVE'";
										$fet_inv = mysqli_query($conn,$query_inv);
										$pro_serv_id = array();
										while($pro_inv = mysqli_fetch_array($fet_inv)){ 
										
										$query_serv = "select * from service_order_details where service_request_id = '".$pro_inv['service_order_no']."'";
										$fet_serv = mysqli_query($conn,$query_serv);
										$pro_serv = mysqli_fetch_array($fet_serv);
										$pro_serv_num = mysqli_num_rows($fet_serv);
										$pro_serv_id[] = $pro_serv['id'];
										}
										
										$pro_serv_id_c = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $pro_serv_id));
										$query_sel = "select * from service_order_items where service_order_id IN($pro_serv_id_c)";
										$fet_query = mysqli_query($conn,$query_sel);
										while($pro_query = mysqli_fetch_array($fet_query)){
										$abc[] = $pro_query['price'];
										}
										echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.array_sum($abc);
										?>
                </h5>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Total Receipts</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="fas fa-rupee-sign"></i> </span> </div>
                </div>
                <h5 class="m-0 align-self-center">
                  <?php 
										$query_rece = "select * from service_receipt where status = 'ACTIVE'";
										$fet_rece = mysqli_query($conn,$query_rece);
										$pro_rec_id = array();
										while($pro_rece = mysqli_fetch_array($fet_rece)){ 
										$pro_rec_id[] = $pro_rece['receipt_number'];
										}
										
										$pro_rec_id_c = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $pro_rec_id));
										$query_sel_rec = "select * from customer_payment where receipt_number IN($pro_rec_id_c)";
										$fet_query_rec = mysqli_query($conn,$query_sel_rec);
										while($pro_query_rec = mysqli_fetch_array($fet_query_rec)){
										$abc_rec[] = $pro_query_rec['cheque_amount'];
										}
										echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.array_sum($abc_rec);
										?>
                </h5>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Total Outstanding</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="fas fa-balance-scale"></i> </span> </div>
                </div>
                <h5 class="m-0 align-self-center"><?php echo array_sum($abc) -  array_sum($abc_rec);?></h5>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="card">
              <div class="card-body">
                <div class="media">
                  <div class="media-body">
                    <h5 class="font-size-14">Total Expenses</h5>
                  </div>
                  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-dark"> <i class="fab fa-buffer"></i> </span> </div>
                </div>
                <h5 class="m-0 align-self-center">
                  <?php
												$po_summ1e = "SELECT sum(amount) as e_final FROM `daily_expense`";
												$po_summ1_rese = mysqli_query($conn,$po_summ1e);
												$pur_row1 = mysqli_fetch_array($po_summ1_rese);
												echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.$grand_total = $pur_row1['e_final'];
											?>
                </h5>
                <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
              </div>
            </div>
          </div>-->
        </div>
        <div class="row">
          <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14" style="line-height:0">Sticky Notes</h5>
                                            </div>
                                            <div class="avatar-xs" style="margin-top: -19px; height:2.5rem !important; width:2.5rem !important;">
                                                <span class="avatar-title rounded-circle bg-danger">
                                                    <i class="dripicons-pin"></i>                                                </span>                                            </div>
                                        </div>
										<?php
$select_query_c = "select * from sticky WHERE emp_id = '".$_SESSION['id']."'";
$process_c = mysqli_query($conn,$select_query_c);
$fetch_c = mysqli_fetch_array($process_c);										
										 ?>
										
										<textarea name="sticky" id="sticky" cols="75" rows="12" style="margin-left:-10px;"><?php echo $fetch_c['details']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            
          
          
          
          <div class="col-xl-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mb-4">Financial Analysis</h4>
                <div dir="ltr">
                  <div class="row">
                    <div class="col-sm-6 col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="font-size-14"><i class="fas fa-calendar-alt"></i> Total Invoices</h5>
                            </div>
                          </div>
                          <h4 class="m-0 align-self-center"><?php 
										$query_inv = "select * from service_invoice where status = 'ACTIVE'";
										$fet_inv = mysqli_query($conn,$query_inv);
										$pro_serv_id = array();
										while($pro_inv = mysqli_fetch_array($fet_inv)){ 
										
										$query_serv = "select * from service_order_details where service_request_id = '".$pro_inv['service_order_no']."'";
										$fet_serv = mysqli_query($conn,$query_serv);
										$pro_serv = mysqli_fetch_array($fet_serv);
										$pro_serv_num = mysqli_num_rows($fet_serv);
										$pro_serv_id[] = $pro_serv['id'];
										}
										
										$pro_serv_id_c = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $pro_serv_id));
										$query_sel = "select * from service_order_items where service_order_id IN($pro_serv_id_c)";
										$fet_query = mysqli_query($conn,$query_sel);
										while($pro_query = mysqli_fetch_array($fet_query)){
										$abc[] = $pro_query['price'];
										}
										echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.array_sum($abc);
										?></h4>
										<p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="font-size-14"><i class="fas fa-calendar-alt"></i>Total Receipts</h5>
                            </div>
                          </div>
                          <h4 class="m-0 align-self-center"><?php 
										$query_rece = "select * from service_receipt where status = 'ACTIVE'";
										$fet_rece = mysqli_query($conn,$query_rece);
										$pro_rec_id = array();
										while($pro_rece = mysqli_fetch_array($fet_rece)){ 
										$pro_rec_id[] = $pro_rece['receipt_number'];
										}
										
										$pro_rec_id_c = implode(', ', array_map(function(&$item){ return "'" .$item. "'"; }, $pro_rec_id));
										$query_sel_rec = "select * from customer_payment where receipt_number IN($pro_rec_id_c)";
										$fet_query_rec = mysqli_query($conn,$query_sel_rec);
										while($pro_query_rec = mysqli_fetch_array($fet_query_rec)){
										$abc_rec[] = $pro_query_rec['cheque_amount'];
										}
										echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.array_sum($abc_rec);
										?></h4>
									<p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>	
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="font-size-14"><i class="fas fa-calendar-alt"></i>Total Outstanding</h5>
                            </div>
                          </div>
                          <h4 class="m-0 align-self-center"><?php echo array_sum($abc) -  array_sum($abc_rec);?>
                          </h4>
						  <p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                      <div class="card">
                        <div class="card-body">
                          <div class="media">
                            <div class="media-body">
                              <h5 class="font-size-14"><i class="fas fa-calendar-alt"></i>Total Expenses</h5>
                            </div>
                          </div>
                          <h4 class="m-0 align-self-center"><?php
												$po_summ1e = "SELECT sum(amount) as e_final FROM `daily_expense`";
												$po_summ1_rese = mysqli_query($conn,$po_summ1e);
												$pur_row1 = mysqli_fetch_array($po_summ1_rese);
												echo '<span style="font-size:15px;"><i class="fas fa-rupee-sign"></i></span> '.$grand_total = $pur_row1['e_final'];
											?></h4>
						<p class="mb-0 mt-3 text-muted"><a href="#" target="_blank" class="btn btn-sm btn-dark">View More</a></p>					
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mb-4">Order Status</h4>
                <div class="table-responsive">
                  <?php
						$check_user = "SELECT * FROM `tbl_users` WHERE status='1'";
						$check_res_user = mysqli_query($conn,$check_user);
					?>
                  <table class="table table-centered table-nowrap mb-0">
                    <thead>
                      <tr align="left">
                        <th scope="col">User Name</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Completed</th>
                        <th scope="col">Pending</th>
                        <th scope="col">Rejected</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						while($check_row_user = mysqli_fetch_array($check_res_user)){
						$query_assign = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."'";
						$result_assign = mysqli_query($conn, $query_assign);						
						$number_filter_row_assign = mysqli_num_rows(mysqli_query($conn, $query_assign));

						$query_com = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='COMPLETED'";
						$result_com = mysqli_query($conn, $query_com);						
						$number_filter_row_com = mysqli_num_rows(mysqli_query($conn, $query_com));

						$query_pen = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='PENDING'";
						$result_pen = mysqli_query($conn, $query_pen);						
						$number_filter_row_pen = mysqli_num_rows(mysqli_query($conn, $query_pen));

						$query_rej = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='REJECTED'";
						$result_rej = mysqli_query($conn, $query_rej);						
						$number_filter_row_rej = mysqli_num_rows(mysqli_query($conn, $query_rej));
											
					  ?>
                      <tr align="left">
                        <td><h5 class="font-size-12 mb-0"><?php echo strtoupper($check_row_user['user_name']);?></h5></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-primary"> <?php echo $number_filter_row_assign;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-success"> <?php echo $number_filter_row_com;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-warning"> <?php echo $number_filter_row_pen;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-danger"> <?php echo $number_filter_row_rej;?> </span> </div></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mb-4">Task Status</h4>
                <div class="table-responsive">
                  <?php
						$check_user = "SELECT * FROM `tbl_users` WHERE status='1'";
						$check_res_user = mysqli_query($conn,$check_user);
					?>
                  <table class="table table-centered table-nowrap mb-0">
                    <thead>
                      <tr align="left">
                        <th scope="col">User Name</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Completed</th>
                        <th scope="col">Pending</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						while($check_row_user = mysqli_fetch_array($check_res_user)){
						$query_assign = "SELECT * FROM task where assigned = '".$check_row_user['id']."'";
						$result_assign = mysqli_query($conn, $query_assign);						
						$number_filter_row_assign = mysqli_num_rows(mysqli_query($conn, $query_assign));

						$query_com = "SELECT * FROM task where assigned = '".$check_row_user['id']."' and status ='COMPLETED'";
						$result_com = mysqli_query($conn, $query_com);						
						$number_filter_row_com = mysqli_num_rows(mysqli_query($conn, $query_com));

						$query_pen = "SELECT * FROM task where assigned = '".$check_row_user['id']."' and status ='PENDING'";
						$result_pen = mysqli_query($conn, $query_pen);						
						$number_filter_row_pen = mysqli_num_rows(mysqli_query($conn, $query_pen));

					  ?>
                      <tr align="left">
                        <td><h5 class="font-size-12 mb-0"><?php echo strtoupper($check_row_user['user_name']);?></h5></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-primary"> <?php echo $number_filter_row_assign;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-success"> <?php echo $number_filter_row_com;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-warning"> <?php echo $number_filter_row_pen;?> </span> </div></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            
        </div>
        <?php } else { ?>
        
        <div class="row">		
		<div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5 class="font-size-14" style="line-height:0.2">Sticky Notes</h5>
                                            </div>
                                            <div class="avatar-xs" style="margin-top: -18px; height:2.5rem !important; width:2.5rem !important;">
                                                <span class="avatar-title rounded-circle bg-danger">
                                                    <i class="dripicons-pin"></i>                                                </span>                                            </div>
                                        </div>
										<?php
$select_query_c = "select * from sticky WHERE emp_id = '".$_SESSION['id']."'";
$process_c = mysqli_query($conn,$select_query_c);
$fetch_c = mysqli_fetch_array($process_c);										
										 ?>
										
										<textarea name="sticky" id="sticky" cols="75" rows="16" style="margin-left:-10px;"><?php echo $fetch_c['details']; ?></textarea>
                                    </div>
                                </div>
                            </div>
        <div class="col-lg-6">
		<div class="card">
<div class="card-body">
<div class="table-responsive">
<?php
	$check_user = "SELECT * FROM `tbl_users` WHERE status='1' and id ='".$_SESSION['id']."'";
	$check_res_user = mysqli_query($conn,$check_user);
?>
<table class="table table-centered table-nowrap mb-0">
<thead>
  <tr align="left">
	<th scope="col">Order Status</th>
	<th scope="col">Assigned</th>
	<th scope="col">Completed</th>
	<th scope="col">Pending</th>
	<th scope="col">Rejected</th>
  </tr>
</thead>
<tbody>
  <?php 
	while($check_row_user = mysqli_fetch_array($check_res_user)){
	$query_assign = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."'";
	$result_assign = mysqli_query($conn, $query_assign);						
	$number_filter_row_assign = mysqli_num_rows(mysqli_query($conn, $query_assign));

	$query_com = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='COMPLETED'";
	$result_com = mysqli_query($conn, $query_com);						
	$number_filter_row_com = mysqli_num_rows(mysqli_query($conn, $query_com));

	$query_pen = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='PENDING'";
	$result_pen = mysqli_query($conn, $query_pen);						
	$number_filter_row_pen = mysqli_num_rows(mysqli_query($conn, $query_pen));

	$query_rej = "SELECT * FROM service_order_details where created_by = '".$check_row_user['id']."' and status ='REJECTED'";
	$result_rej = mysqli_query($conn, $query_rej);						
	$number_filter_row_rej = mysqli_num_rows(mysqli_query($conn, $query_rej));
						
  ?>
  <tr align="left">
	<td><h5 class="font-size-12 mb-0"><?php echo strtoupper($check_row_user['user_name']);?></h5></td>
	<td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-primary"> <?php echo $number_filter_row_assign;?> </span> </div></td>
	<td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-success"> <?php echo $number_filter_row_com;?> </span> </div></td>
	<td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-warning"> <?php echo $number_filter_row_pen;?> </span> </div></td>
	<td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-danger"> <?php echo $number_filter_row_rej;?> </span> </div></td>
  </tr>
  <?php } ?>
</tbody>
</table>
</div>
</div>
</div>
        <div class="card">
              <div class="card-body">
                <h4 class="header-title mb-4">Task Status</h4>
                <div class="table-responsive">
                  <?php
						$check_user = "SELECT * FROM `tbl_users` WHERE status='1' and id ='".$_SESSION['id']."'";
						$check_res_user = mysqli_query($conn,$check_user);
					?>
                  <table class="table table-centered table-nowrap mb-0">
                    <thead>
                      <tr align="left">
                        <th scope="col">User Name</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Completed</th>
                        <th scope="col">Pending</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
						while($check_row_user = mysqli_fetch_array($check_res_user)){
						$query_assign = "SELECT * FROM task where assigned = '".$check_row_user['id']."'";
						$result_assign = mysqli_query($conn, $query_assign);						
						$number_filter_row_assign = mysqli_num_rows(mysqli_query($conn, $query_assign));

						$query_com = "SELECT * FROM task where assigned = '".$check_row_user['id']."' and status ='COMPLETED'";
						$result_com = mysqli_query($conn, $query_com);						
						$number_filter_row_com = mysqli_num_rows(mysqli_query($conn, $query_com));

						$query_pen = "SELECT * FROM task where assigned = '".$check_row_user['id']."' and status ='PENDING'";
						$result_pen = mysqli_query($conn, $query_pen);						
						$number_filter_row_pen = mysqli_num_rows(mysqli_query($conn, $query_pen));

					  ?>
                      <tr align="left">
                        <td><h5 class="font-size-12 mb-0"><?php echo strtoupper($check_row_user['user_name']);?></h5></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-primary"> <?php echo $number_filter_row_assign;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-success"> <?php echo $number_filter_row_com;?> </span> </div></td>
                        <td><div class="avatar-xs"> <span class="avatar-title rounded-circle bg-warning"> <?php echo $number_filter_row_pen;?> </span> </div></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>                    
        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Assigned Task</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered" id="datatable1">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">Sr.No.</th>
                                                        <th width="15%">Date</th>
                                                        <th width="25%">Description</th>
                                                        <th width="25%">Remark</th>
														<th width="20%">Attachments</th>
														<th width="5%">Status</th>
                                                        <th width="5%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>                    
		</div>					
		<?php } ?>
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
<script type="text/javascript" language="javascript" >
         $(document).ready(function(){
           var dataTable = $('#datatable1').DataTable({
            "ajax" : "fetch_data/get_task_dash.php",
         "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		 pagingType: "full"
           });
           		   $(document).on('keyup', '#sticky', function(){ 
		   var value = $('#sticky').val();
		   var emp_id = <?php echo $_SESSION['id']; ?>
           
           				$.ajax({  
							url: "change_status.php?page=sticky",
							type: "post",
							data: {emp_id:emp_id,value:value},
							success:function(data){ 
							if(data == 'ACTIVE'){
							}else{
							}
                		}
           });  
		   
      });
         });
      </script>
</body>
</html>
