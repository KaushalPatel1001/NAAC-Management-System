<?php
include_once("include/db_connect.php");
$grp_id = $_POST["grp_id"];
$result = mysqli_query($conn,"SELECT * FROM mst_sub_group WHERE grp_id = $grp_id");
?>
<option value="">Select Sub-Group</option>
<?php
while($row = mysqli_fetch_array($result)){
?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["sub_grp_name"] ?></option>
<?php
}
?>
