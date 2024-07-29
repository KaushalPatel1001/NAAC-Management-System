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
          <label for="" class="mb-2">Task Name</label>
			<input type="text" class="form-control" id="task_name" name="task_name" autocomplete="off">
        </div>
        <div class="p-2">
          <label for="" class="mb-2">Employee Name</label>
		  <select class="custom-select choices-multiple-remove-button" name="assigned[]" id="assigned" multiple="multiple">            
			<?php 
					$select_query = "select * from tbl_users order by id ASC";
					$process = mysqli_query($conn,$select_query);
					while ($fetch = mysqli_fetch_array($process)){
					$parent_id = $fetch['id'];
					$company_name = $fetch['user_name'];
				?>
            <option value="<?php echo $parent_id;?>"><?php echo $company_name;?></option>
            <?php } ?>
          </select>
        </div>
		
		<?php
							$select_query_date = "select * from task order by id ASC";
							$process_date = mysqli_query($conn,$select_query_date);
							$fetch_date = mysqli_fetch_array($process_date);
							?>

		<div class="p-2">
          <label for="" class="mb-2">From Date</label>
			<input type="text" class="form-control" id="from_date" name="from_date" value="<?php echo $fetch_date['task_date'];?>" autocomplete="off">
        </div>
		<?php
							$select_query_datet = "select * from task order by id DESC";
							$process_datet = mysqli_query($conn,$select_query_datet);
							$fetch_datet = mysqli_fetch_array($process_datet);
							?>
		<div class="p-2">
          <label for="" class="mb-2">To Date</label>
			<input type="text" class="form-control" id="to_date" name="to_date" value="<?php echo $fetch_datet['task_date'];?>" autocomplete="off">
        </div>
		<div class="p-2">
		  <label for="" class="mb-2">Status</label>
		<select class="custom-select" name="status" id="status" required>
		<option value="">-SELECT STATUS-</option>
		<option value="PENDING">PENDING</option>
		<option value="COMPLETED">COMPLETED</option>
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
