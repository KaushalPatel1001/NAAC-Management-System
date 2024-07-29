<?php
session_start();
include('../include/db_connect.php');

	$cat_code = $_POST['cat_code'];

	$query = "SELECT cat_name FROM mst_category WHERE id = '".$cat_code."'";
	$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));
	$result = mysqli_query($conn, $query);
	echo "$result['cat_name']";
 ?>