<?php
session_start();
include('../include/db_connect.php');
  
  $query = "SELECT * FROM criteria_5_2_1_appeared ORDER BY id DESC";
  $result = mysqli_query($conn, $query);
  $data = array();
  $cou = 1;
  while ($rows = mysqli_fetch_array($result,MYSQLI_BOTH)) {
/*  if($rows['status'] == '1'){
  $active = '<button id='.$rows["id"].' value="0" type= "button" class="btn btn-outline-success btn-sm change_status">ACTIVE</button>';
  }else{
  $active = '<button id='.$rows["id"].' value="1" type= "button" class="btn btn-outline-danger btn-sm change_status">INACTIVE</button>';
  } */
  $sub_array   = array();
    $sub_array[] = $cou++;
    $sub_array[] = $rows['academic_year'];
    $sub_array[] = $rows['name_of_the_capability_enhancement_scheme'];
  $sub_array[] = $rows['name_of_department'];
  $sub_array[] = $rows['date_of_implementation'];
  $sub_array[] = $rows['name_of_college'];
  $sub_array[] = $rows['number_of_students_enrolled'];
  $sub_array[] = $rows['name_of_agencies_involved_with_their_contact_details'];
  $sub_array[] = $rows['proof_no'];
  $sub_array[] = $rows['remark'];
   $sub_array[] = '<td><a href="#" id='.$rows["id"].' class="btn btn-outline-success btn-sm edit_data" data-toggle="modal" data-target="">Edit</a> | <a href="#" id='.$rows["id"].' class="btn btn-outline-danger btn-sm delete_data" data-toggle="modal" data-target="">Delete</a></td>';
  $data[]      = $sub_array;
}
$output = array(
 "data"       =>  $data
);
echo json_encode($output);

 ?>
