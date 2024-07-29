<?php 
include_once("../include/db_connect.php");
 if(isset($_POST["shape_id"]))  
 {        
      $output = '';  
       $shape_id = $_POST["shape_id"];
      
       $querys = "SELECT * FROM mst_shape_extra WHERE shape_id = '".$shape_id."'  order by id desc";  
       
      $results = mysqli_query($conn, $querys);
      $checkrows = mysqli_num_rows($results);
      $output .='<div class="table-responsive">  
                                <table class="table table-bordered" id="extra_field_table" width="100%">
                                <thead>
                                <th width="5%">Extra Field Label</th>
                                <th width="5%">Extra Field Name</th>
                                </thead>';
             $cou = 0;  
      while($row_s = mysqli_fetch_array($results))

      {  
            $cou++; 
            $output .= '<span id="'.$row_s['id'].'"></span><tr id="row_id_'.$row_s['id'].'">
            
            

            <td style="padding:10px;"><label for="validationCustom01">'.$row_s['shape_extra_field'].'</label><input type="hidden" class="form-control shape_extra_label" id="shape_extra_label'.$cou.'" placeholder="Extra Field label" name="shape_extra_label[]" value="'.$row_s['shape_extra_field'].'" style="display:none;"><input type="hidden" class="form-control" id="grp_fld_count" placeholder="grp_fld_count" name="grp_fld_count" value="'.$checkrows.'"></td>

            <td style="padding:10px;"><input type="text" class="form-control shape_extra_field" id="shape_extra_field'.$cou.'" placeholder="Extra Shape Field" name="shape_extra_field[]" onblur="validate_input('.$row_s['id'].',this)">

            </td>
            </tr>';
            

      } 
      $output .= '<input type="hidden" class ="form-control shape_id" id="shape_id" name="shape_id" value="'.$shape_id.'">
                   <input type="hidden" class ="form-control weight" id="weight" name="weight" placeholder="Weight">';

      $output .= '</table>
                  </div>';
      echo $output;  
 }  
 ?>