<?php
function hasPermission($id, $show_menu){
	global $conn;
    $select = "SELECT * FROM `tbl_users` WHERE FIND_IN_SET('$show_menu' ,`show_menu`) AND `id` ='$id'"; die();
    $res  = mysqli_query($conn,$select);
    $rows   = mysqli_num_rows($res); 

    if($rows == 1){
    	return true;
    }else{
      return false;
    }
    
}

?>