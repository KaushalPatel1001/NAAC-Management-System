 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM mst_product
	   WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>