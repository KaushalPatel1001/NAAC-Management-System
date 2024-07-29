<?php
include_once("../include/db_connect.php");
$material_name = $_POST['material_id'];
$sql1 = "SELECT * FROM sub_category WHERE material_category = '".$material_name."'";
$res1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($res1) > 0) {
    echo '<option value="">------- Select -------</option>';
    while($row = mysqli_fetch_object($res1)) {
      echo '<option value="'.$row->id.'">'.$row->sub_category.'</option>';
    }
  } else {
    echo '<option value="">No Record</option>';
  }
?>