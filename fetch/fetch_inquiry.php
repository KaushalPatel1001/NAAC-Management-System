 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["inquiry_auto_code"]))  
 {  
      $query = "SELECT * FROM mst_inquiry
	   WHERE id = '".$_POST["inquiry_auto_code"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>