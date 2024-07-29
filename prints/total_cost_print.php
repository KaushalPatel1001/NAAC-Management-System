<?php

require_once('../assets/tcpdf/tcpdf.php'); 
include("../include/db_connect.php");
$cost_est_id = $_GET['id'];
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
         <td style="width:100%; text-align:center;font-size:14px;color: #FFFFFF;background-color: #243F7D;">Total Cost </td>
       </tr>
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Head</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Cost</b></td>
        </tr>';

        $sql = "SELECT * FROM tbl_total_cost WHERE cost_est_id = '".$cost_est_id."'";
        $result = mysqli_query($conn,$sql);
        $record = mysqli_fetch_array($result,MYSQLI_BOTH);

         $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Material Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['bom_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Broughout Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['broughtout_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Manpower Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>pending</b></td>
            
        </tr>';

         $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Sub-Contract Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['subcontract_cost'].'</b></td>
            
        </tr>';

         $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Service Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['services_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Testing Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['testing_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>NDT Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['ndt_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Transportation Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['transportation_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Inspection Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['inspection_cost'].'</b></td>
            
        </tr>';

         $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Engineering Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['engineering_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Documentation Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['documentation_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Site Visit Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['site_visit_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>New Welder Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>pending</b></td>
            
        </tr>';


        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Electricity Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['electricity_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Administration Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['administration_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Govt. Legal Compliance Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['legal_compliances_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Packing & Forwarding Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['pf_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Final Transportation Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['final_trans_cost'].'</b></td>
            
        </tr>';


        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Insurance Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['insurance_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b style="font-size:10px;">Pre Commission Total</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b style="font-size:10px;">'.$record['pre_commission_cost'].'</b></td>
            
        </tr>';
        

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b style="font-size:10px;">Pre Commission Total</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b style="font-size:10px;">'.$record['pre_commission_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Sales Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['sales_commission_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Refrence Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['refrence_commission_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Post Commission Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['post_commission_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Contigency Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['contigency_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Post Contigency Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['post_contigency_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Profit Overhead Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['profit_overhead_cost'].'</b></td>
            
        </tr>';

        $output .='
        <tr>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>Final Total Cost</b></td>
            <td style="width:50%;border-top:1px solid black;border-right:1px solid black;text-align:center;border-bottom:1px solid black;"><b>'.$record['final_total_cost'].'</b></td>
            
        </tr>';

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