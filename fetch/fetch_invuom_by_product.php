<?php
 include('../include/db_connect.php');

$pro_id = $_POST["pro_id"];
$qry = "SELECT * FROM mst_product WHERE id = '".$pro_id."'";
$result = mysqli_query($conn,$qry);

while($row = mysqli_fetch_array($result)){
$inv = $row["inventory_uom"];
	}

$invqry = "SELECT uom_name FROM uom WHERE id = '".$inv."'";
$resinv = mysqli_query($conn,$invqry);
while ($res = mysqli_fetch_array($resinv)) {
		echo json_encode($res["uom_name"]);	
}
 


?>

