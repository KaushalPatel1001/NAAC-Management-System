<?php   
 $connect = mysqli_connect("localhost", "root", "", "buildcon");  
 $query = "SELECT * FROM tbl_users";  
 $result = mysqli_query($connect, $query);  
 ?>
<html>  
      <head>  
           <title>Webslesson Tutorial | Export HTML table to Excel File using Jquery with PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:700px;">  
                <h3 class="text-center">Export HTML table to Excel File using Jquery with PHP</h3><br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="10%">Id</th>  
                               <th width="30%">Name</th>  
                               <th width="10%">Gender</th>  
                               <th width="50%">Designation</th>  
                          </tr>  
                          <?php   
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row['id']; ?></td>  
                               <td><?php echo $row['user_name']; ?></td>  
                               <td><?php echo $row['gender']; ?></td>  
                               <td><?php echo $row['designation']; ?></td>  
                          </tr>  
                          <?php                           
                          }  
                          ?>  
                     </table>  
                </div>  
                <div align="center">  
                     <button name="create_excel" id="create_excel" class="btn btn-success">Create Excel File</button>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#create_excel').click(function(){  
           var excel_data = $('#employee_table').html();  
           var page = encodeURI("excel.php?data=" + excel_data);  
           window.location = page;  
      });  
 });  
 </script> 