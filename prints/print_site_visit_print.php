<?php

require_once('../assets/tcpdf/tcpdf.php'); 
include("../include/db_connect.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

   

$output   = ''; 
$output .= '<!DOCTYPE html>
<html>
   <style>
      table {
         border: 1px solid black;
         border-collapse: collapse;
      }
   </style>
   <body>
      <table cellpadding="3">
      <tr>
         <td style="width:100%; text-align:center;font-size:14px;color: #FFFFFF;background-color: #243F7D;">Site Visit</td>
       </tr>
        <tr>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>SR NO</b></td>
            <td style="width:10%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Location</b></td>
            <td style="width:10%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>No. Of Person</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>No.Of Days</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Unit Rate</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Total Cost</b></td>
        </tr>';
         $sql = "SELECT * FROM site_visit";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_array($result)){

         $output .='
        <tr>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['id'].'</b></td>
            <td style="width:10%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['site_location'].'</b></td>
            <td style="width:10%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['site_no_of_person'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['site_no_of_days'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['site_unit_rate'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['site_total_cost'].'</b></td>
        </tr>';
      }


    $output .='</table>';

      $output .='
   </body>
</html>';

$pdf->SetPrintHeader(true);
$pdf->SetPrintFooter(true);

$pdf->SetFont('helvetica', '', 9, '', true);

$pdf->AddPage('L', 'A4');
$pdf->writeHTML($output, true, false, false, false, '');

$pdf->SetTitle("cost estimation");
$pdf->IncludeJS("print();");
$pdf->Output("costestimation.pdf");
?>