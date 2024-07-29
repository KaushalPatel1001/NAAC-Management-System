<?php 
include_once("../include/db_connect.php");
 if(isset($_POST["inquiry_auto_code"]))  
 {  
      $output = '';  
       $inquiry_id = $_POST["inquiry_auto_code"];
               
       $querys = "SELECT * FROM inquiry_product_extra WHERE inquiry_id = '".$inquiry_id."'";  
       
      $results = mysqli_query($conn, $querys);
      $checkrows = mysqli_num_rows($results);
       
      $output .= '<div class="table-responsive">  
           <table class="table table-bordered" id="extra_datatable2" width="100%">
             <thead>
             <th width="5%">#</th>
             <th width="35%">Product Name</th>
             <th width="10%">QTY</th>
             </thead>
             ';
             $cou = 0;  
      while($row_s = mysqli_fetch_array($results))

      {  
            $cou++; 
            $output .= '<tr id="row_id_'.$cou.'">
            
            <td><button type="button" name="remove_row" id="'.$cou.'" class="btn btn-danger btn-md remove_row"><i class="mdi mdi-delete"></i></button><span style="display:none" id="sr_no">'.$cou.'</span></td>

            <td style="padding:10px;"><input type="text" class="form-control product_name" name="product_name[]" data-srno="'.$cou.'" id="product_name'.$cou.'" onblur="validate_nun_Input(this)" placeholder="Product Name" value="'.$row_s['product_name'].'"><input type="hidden" class="form-control" id="grp_fld_count" placeholder="grp_fld_count" name="grp_fld_count" value="'.$checkrows.'"></td>

            <td style="padding:10px;"><input type="text" class="form-control qty" name="qty[]" data-srno="'.$cou.'" id="qty'.$cou.'" onblur="validate_nun_Input(this)" placeholder="Quantity" value="'.$row_s['qty'].'"></td>
            </tr>';
            

      } 

      $output .= '</table>  
      </div>  
      ';
      echo $output;  
 }  
 ?>