<?php
include('../include/db_connect.php');
$current_date = date('Y-m-d');
/*$current_date = date('2022-10-16');*/

$data = array();

    $query = "SELECT * FROM `mst_inquiry` WHERE created_date <= '".$current_date."' AND status = '0'";
    $result = mysqli_query($conn,$query);

  while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
    $data[] = $row;    
  }


$current_date   = date('Y-m-d');
?>
<div class="row">
      <div class="card-body table-responsive">
        <table class="table table-bordered dt-responsive nowrap" id="list_data" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
            <tr>
              <th class="text-center" width="10">INQ.NO</th>
              <th class="text-center" width="10">DATE</th>
              <th class="text-left" width="40">CUSTOMER</th>
              <th class="text-center" width="10">FOLLOWUP BY</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          if(count($data) > 0){
          	foreach ($data as $key => $datas) { 
                $qry = "SELECT vendor_name FROM mst_vendor WHERE vendor_code = '".$datas['customer_id']."'";
                $res = mysqli_query($conn,$qry);
                $rec = mysqli_fetch_array($res,MYSQLI_BOTH);
                $vendor_name = $rec['vendor_name']; 

                $sql = "SELECT user_name FROM tbl_users WHERE emp_id = '".$datas['followup']."'";
                $user_res = mysqli_query($conn,$sql);
                $user_rec = mysqli_fetch_array($user_res,MYSQLI_BOTH);
                $user_name = $user_rec['user_name'];
             ?>
                <tr onclick="getInqiryDetails(<?php echo $datas['id']?>)">
                <td class="text-center"><?php echo $datas['inquiry_code']?></td>
                <td class="text-center"><?php echo $datas['created_date']?></td>
                <td class="text-left"><?php echo $vendor_name; ?></td>
                <td class="text-center"><?php echo $user_name; ?></td>
              </tr>
            <?php } 
          }else{ ?>
          	<tr>
          		<td class="text-center" colspan="5">NO FOLLOWUP FOUND...!!!</td>
          	</tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>