<?php

require_once('../assets/tcpdf/tcpdf.php'); 
include("../include/db_connect.php");

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // $sql = "SELECT * FROM ndt_pt";
    //     $result = mysqli_query($conn,$sql);
        

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
         <td style="width:100%; text-align:center;font-size:14px;color: #FFFFFF;background-color: #243F7D;">Inspection Charge</td>
       </tr>
        <tr>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>SR NO</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Pinnacle Name</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Inspecting Type</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Select TPI</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Total Cost</b></td>
        </tr>';
         $sql = "SELECT * FROM inspection_charge";
         $result = mysqli_query($conn,$sql);
         while($row = mysqli_fetch_array($result)){

         $output .='
        <tr>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['id'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['pinnacle_name'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['inspecting_type'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['inspection_select_tpi'].'</b></td>
            <td style="width:20%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$row['inspection_total_cost'].'</b></td>
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