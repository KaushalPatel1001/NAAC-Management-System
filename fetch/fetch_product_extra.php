<?php 
include_once("../include/db_connect.php");
 if(isset($_POST["pro_id"]))  
 {  
      $output = '';  
       $pro_id = $_POST["pro_id"];
      
       $querys = "SELECT * FROM mst_product_extra WHERE pro_id = '".$pro_id."'"; 


       
      $results = mysqli_query($conn, $querys);
      $checkrows = mysqli_num_rows($results);
       
      $output .= '<div class="table-responsive">  
           <table class="table table-bordered" id="datatable2" width="100%">
             <thead>
             <th width="10%">Extra Field</th>
             <th width="10%">Is Numeric?</th>
             <th width="10%">Is compulsary?</th>
             </thead>
             ';
             $cou = 1;  
      while($row_s = mysqli_fetch_array($results))  
      {  
            $output .= '<tr id="'.$row_s['id'].'">
            <td style="padding:10px;"><input type="text" class="form-control" id="product_extra_field" placeholder="Extra Field" name="product_extra_field" value="'.$row_s['product_extra_field'].'"></td>
            <td style="padding:10px;"><select name="product_is_numeric" id="product_is_numeric" class="custom-select"> 
            <option value="1">YES</option>
            <option value="0">NO</option>
            </select></td>

            <td style="padding:10px;"><select name="product_is_compulsary" id="product_is_compulsary" class="custom-select"> 
            <option value="1">YES</option>
            <option value="0">NO</option>
            </select></td>
            </tr>';
      } 

      $output .= '</table>  
      </div>  
      ';
      echo $output;  
 }  
 ?>
