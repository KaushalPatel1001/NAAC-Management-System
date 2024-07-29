<div class="right-bar">
  <div data-simplebar class="h-100">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
      <li class="nav-item"> <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab"> Search Anything</a> </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="chat-tab" role="tabpanel">
		<div class="p-2">
          <label for="" class="mb-2">Company Name</label>
		   
          <select class="form-control" name="company_name" id="company_name">
           <option value="">-SELECT SERVICE-</option>
			<?php 
					$select_query = "select * from company WHERE status = '1'";
					$process = mysqli_query($conn,$select_query);
					while ($fetch = mysqli_fetch_array($process)){
					$parent_id = $fetch['id'];
					$company_code = $fetch['company_code'];
					$company_name = $fetch['company_name'];
				?>
            <option value="<?php echo $company_name;?>"><?php echo $company_code;?></option>
            <?php } ?>
          </select>
        </div>
        <div class="p-2">
          <label for="" class="mb-2">Client Name</label>
          <select class="form-control" name="client_name" id="client_name">
            <option value="">-SELECT SERVICE-</option>
			<?php 
					$select_query = "select * from enquiry order by id ASC";
					$process = mysqli_query($conn,$select_query);
					while ($fetch = mysqli_fetch_array($process)){
					$parent_id = $fetch['id'];
					$company_name = $fetch['client_name'];
				?>
            <option value="<?php echo $company_name;?>"><?php echo $company_name;?></option>
            <?php } ?>
          </select>
        </div>
		<div class="p-2">
          <label for="" class="mb-2">Service Name</label>
          <select class="form-control " name="service_type" id="service_type">
            <option value="">-SELECT SERVICE-</option>
			<?php 
					$select_query = "select * from sub_category order by id ASC";
					$process = mysqli_query($conn,$select_query);
					while ($fetch = mysqli_fetch_array($process)){
					$parent_id = $fetch['id'];
					$company_name = $fetch['sub_category'];
				?>
            <option value="<?php echo $company_name;?>"><?php echo $company_name;?></option>
            <?php } ?>
          </select>
        </div>

		<div class="p-2">
          <label for="" class="mb-2">From Date</label>
			<input type="text" class="form-control" id="from_date" name="from_date" autocomplete="off">
        </div>
		<div class="p-2">
          <label for="" class="mb-2">To Date</label>
			<input type="text" class="form-control" id="to_date" name="to_date" autocomplete="off">
        </div>
		<div class="p-2">
		  <label for="" class="mb-2">Status</label>
		<select class="custom-select" name="status" id="status" required>
		<option value="">-SELECT SERVICE-</option>
		<option value="PENDING">PENDING</option>
		<option value="CONVERTED">CONVERTED</option>
		<option value="CANCEL">CANCEL</option>
		</select>		  

        </div>

		<div class="p-2" align="center">
		<button class="btn btn-success btn-md waves-effect waves-light" id="filter_button" type="submit">Submit</button>
		</div>							
      </div>
    </div>
  </div>
  <!-- end slimscroll-menu-->
</div>
