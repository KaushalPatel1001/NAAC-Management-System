 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["client_whatsapp"]))  
 {  
      $query = "SELECT * FROM client
	   WHERE client_whatsapp = '".$_POST["client_whatsapp"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>