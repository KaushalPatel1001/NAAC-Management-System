<?php
include('include/db_connect.php');

if(isset($_GET['call_type']))
{
	$call_type = $_GET['call_type'];

	if($call_type == "jquery")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'jQuery Page',
			'description' => 'jQuery description',
			'url' => 'jquery/'.$call_type.'.php',
			'data'=>'This is <strong>jQuery</strong> data coming from ajax url'
		));
	}
	else if($call_type == "php")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'PHP Page',
			'description' => 'PHP description',
			'url' => 'php/'.$call_type.'..php',
			'data'=>'This is <strong>PHP</strong> data coming from ajax url'
		));
	}
	else if($call_type == "home")
	{
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Home Page',
			'description' => 'Home description',
			'url' => '',
			'data'=>'This is <strong>Home</strong> data coming from ajax url'
		));
	}
	else if($call_type == "invoice")
	{
	
	  $querysa = "SELECT * FROM page_test";  
      $resultsa = mysqli_query($conn, $querysa);
      $all_var = array();
	  while($row_sa = mysqli_fetch_array($resultsa)){
	  $all_var[] = $row_sa['page_value']; 
	  }
	
	
		echo json_encode(array(
			'status'=>'success',
			'title'=> 'Invoice receipt Page',
			'description' => 'Invoice receipt description',
			'url' => 'invoice/'.$call_type.'..php',
			'data'=>$all_var,
		));
	}
}