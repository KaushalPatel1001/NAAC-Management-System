 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM criteria_3_5_2
	   WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>