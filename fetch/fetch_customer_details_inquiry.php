 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["customer_id"]))  
 {  
      $query = "SELECT * FROM mst_vendor
	   WHERE id = '".$_POST["customer_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>