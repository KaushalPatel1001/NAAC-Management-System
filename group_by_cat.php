<?php
include_once("include/db_connect.php");
$cat_id = $_POST["cat_id"];

$result = mysqli_query($conn,"SELECT * FROM mst_group WHERE cat_id = '".$cat_id."'");
?>
<option value="">Select Group</option>
<?php
while($row = mysqli_fetch_array($result)){
?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["grp_name"] ?></option>
<?php
}
?>
