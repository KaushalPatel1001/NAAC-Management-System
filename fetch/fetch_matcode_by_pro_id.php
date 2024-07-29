<?php
 include('../include/db_connect.php');

$pro_id = $_POST["pro_id"];
$qry = "SELECT * FROM mst_product WHERE id = '".$pro_id."'";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result)){

echo json_encode($row["mat_code"]); 

}
?>
