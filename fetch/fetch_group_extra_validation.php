 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["product_extra_label"]))  
 {  
      $query = "SELECT * FROM mst_group_extra
	   WHERE ex_fld = '".$_POST["product_extra_label"]."';";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);
      $checkrows = mysqli_num_rows($row);

      echo $query;
 }  
 

?>