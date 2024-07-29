<?php 
include_once("../include/db_connect.php");
 if(isset($_POST["grp_id"]))  
 {  
      $output = '';  
       $grp_id = $_POST["grp_id"];
      
       $querys = "SELECT * FROM mst_group_extra WHERE grp_id = '".$grp_id."'";  
       
      $results = mysqli_query($conn, $querys);
      $checkrows = mysqli_num_rows($results);
       
      $output .= '<div class="table-responsive">  
           <table class="table table-bordered" id="datatable2" width="100%">
             <thead>
             <th width="5%">Extra Field Label</th>
             <th width="5%">Extra Field Name</th>
             </thead>
             ';
             $cou = 0;  
      while($row_s = mysqli_fetch_array($results))

      {  
            $cou++; 
            $output .= '<tr id="'.$row_s['id'].'">
            
            

            <td style="padding:10px;"><label for="validationCustom01">'.$row_s['extra_field'].'</label><input type="hidden" class="form-control" id="product_extra_label'.$cou.'" placeholder="Extra Field label" name="product_extra_label'.$cou.'" value="'.$row_s['extra_field'].'" style="display:none;"><input type="hidden" class="form-control" id="grp_fld_count" placeholder="grp_fld_count" name="grp_fld_count" value="'.$checkrows.'"></td>

            <td style="padding:10px;"><input type="text" class="form-control" id="product_extra_field'.$cou.'" placeholder="Extra Product Field" name="product_extra_field'.$cou.'" onblur="validate_input('.$row_s['id'].',this)"></td>
            </tr>';
            

      } 

      $output .= '</table>  
      </div>  
      ';
      echo $output;  
 }  
 ?>