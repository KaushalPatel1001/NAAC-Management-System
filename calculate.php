<?php 
include_once("include/db_connect.php");

 	$shape_id = $_POST['shape_id'];
 	//echo $shape_id;


 	$getformula = "SELECT * FROM `shape` where id = '".$shape_id."'";
 	//echo $getformula;
 	$res = mysqli_query($conn, $getformula);
 	$rec = mysqli_fetch_array($res);
 	$formula = $rec['shape_formula'];
 	
 	$new_array = array();

 	if($rec['shape_name'] == "RING"){
 	for($i = 0; $i < $_POST["grp_fld_count"]; $i++){

 		$field1 = $_POST['shape_extra_field'][$i];
    	$label1 = $_POST['shape_extra_label'][$i];
    	$new_array[] = $field1;
 	}
 		$A = $new_array[0];
 		$B = $new_array[1];
 		$C = $new_array[2];
 		$D = $new_array[3];
 		$formula = (((0.785*($A*$A)) - (0.785*($B*$B))) * $C * $D)/1000000;
 		echo $formula;
 	}else if($rec['shape_name'] == "RECTANGLE" || $rec['shape_name'] == "SQUARE" ){

 		for($i = 0; $i < $_POST["grp_fld_count"]; $i++){

 		$field1 = $_POST['shape_extra_field'][$i];
    	$label1 = $_POST['shape_extra_label'][$i];
    	$new_array[] = $field1;
 	}
 		$L = $new_array[0];
 		$B = $new_array[1];
 		$H = $new_array[2];
 		$formula = ($L * $B * $H * 8)/1000000;
 		echo $formula;

 	}else if($rec['shape_name'] == "CIRCLE"){
 	for($i = 0; $i < $_POST["grp_fld_count"]; $i++){

 		$field1 = $_POST['shape_extra_field'][$i];
    	$label1 = $_POST['shape_extra_label'][$i];
    	$new_array[] = $field1;
 	}
 		$A = $new_array[0];
 		$B = $new_array[1];
 		$C = $new_array[2];
 		$D = $new_array[3];
 		$formula = ((0.785*($A*$A)) * $C * $D)/1000000;
 		echo $formula;

 	}else if($rec['shape_name'] == "TRIANGLE"){
 	for($i = 0; $i < $_POST["grp_fld_count"]; $i++){

 		$field1 = $_POST['shape_extra_field'][$i];
    	$label1 = $_POST['shape_extra_label'][$i];
    	$new_array[] = $field1;
 	}
 		$A = $new_array[0];
 		$B = $new_array[1];
 		$C = $new_array[2];
 		$D = $new_array[3];
 		$formula = (0.5 * $A * $B * $C * $D)/1000000;
 		echo $formula;

 	}else if($rec['shape_name'] == "SHELL"){

 		for($i = 0; $i < $_POST["grp_fld_count"]; $i++){

 		$field1 = $_POST['shape_extra_field'][$i];
    	$label1 = $_POST['shape_extra_label'][$i];
    	$new_array[] = $field1;
 	}
 		$H = $new_array[0];
 		$T = $new_array[1];
 		$D = $new_array[2];
 		$formula = 3.14 * ($D + $T) * $H * $T * 8 /1000000;
 		echo $formula;
 	}

?>