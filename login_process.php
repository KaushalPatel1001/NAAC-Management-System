<?php
session_start();
include_once("include/db_connect.php");
	$user_name = $_POST['username'];
	$user_password = ($_POST['password']);	
if((isset($user_name) && !empty($user_name)) && (isset($user_password) && !empty($user_password))) {
	$sql = "SELECT * FROM tbl_users WHERE user_email='$user_name' And user_password = '$user_password'";
	$resultset = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($resultset);		
	$count = mysqli_num_rows($resultset);
	if($count != 1 ){	
		echo 'ERROR';
	} else {				
		echo 'SUCCESS';	 
		$_SESSION['id'] = $row['id'];
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['user_email'] = $row['user_email'];
		$_SESSION['emp_id'] = $row['emp_id'];

	}
}
?>