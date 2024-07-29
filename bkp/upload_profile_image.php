<?php  
 if($_FILES['file']['name'] != '')  
 {  
      $extension = explode(".", $_FILES['file']['name']);  
      $new_exte = end($extension);
	  $allowed_type = array("jpg", "jpeg", "png");  
      if(in_array($new_exte, $allowed_type))  
      {  
           $new_name = date('d-m-Y') . "-" . rand() . "." . $new_exte;  
           $path = "document/" . $new_name;
           if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
           {  
                echo $new_name;  
           }  
      }  
      else  
      {  
           echo '<script>alert("Invalid File Formate")</script>';  
      }  
 }  
 else  
 {  
      echo '<script>alert("Please Select File")</script>';  
 }  
 ?>