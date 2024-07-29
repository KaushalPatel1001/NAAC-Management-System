 <?php  
 //fetch.php  
 include('../include/db_connect.php');  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM mst_group
	   WHERE id = '".$_POST["id"]."';";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result); 

      // $sql = "SELECT * FROM mst_group_extra
      //   WHERE grp_id = '".$_POST["id"]."';";  
      // $res = mysqli_query($conn, $sql);  
      // $rec = mysqli_fetch_array($res);  
      // $arr = array('row' => $row,'rec' => $rec);
      echo json_encode($row);
 }  
 

?>