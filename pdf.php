<?php
// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$abc="This is the php text";
$html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Print PDF</title>

<style>
        body {
            color: #2B2000;
            font-family: 'Helvetica';
        }
        .invoice-box {
            width: 210mm;
            height: 297mm;
            margin: auto;
            padding: 4mm;
            border: 0;
            font-size: 12pt;
            line-height: 14pt;
            color: #000;
        }

        table {
            width: 100%;
            line-height: 16pt;
            text-align: left;
            border-collapse: collapse;
        }

        .plist tr td {
            line-height: 12pt;
        }

        .subtotal tr td {
            line-height: 10pt;
            padding: 6pt;
        }

        .subtotal tr td {
            border: 1px solid #ddd;
        }

        .sign {
            text-align: right;
            font-size: 10pt;
            margin-right: 110pt;
        }

        .sign1 {
            text-align: right;
            font-size: 10pt;
            margin-right: 90pt;
        }

        .sign2 {
            text-align: right;
            font-size: 10pt;
            margin-right: 115pt;
        }

        .sign3 {
            text-align: right;
            font-size: 10pt;
            margin-right: 115pt;
        }

        .terms {
            font-size: 9pt;
            line-height: 16pt;
            margin-right:20pt;
        }

        .invoice-box table td {
            padding: 6pt 4pt 5pt 4pt;
            vertical-align: center;

        }

        .invoice-box table.top_sum td {
            padding: 0;
            font-size: 12pt;
        }

        .party tr td:nth-child(3) {
            text-align: center;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20pt;

        }

        table tr.top table td.title {
            font-size: 45pt;
            line-height: 45pt;
            color: #555;
        }

        table tr.information table td {
            padding-bottom: 20pt;
        }

        table tr.heading td {
            background: #515151;
            color: #FFF;
            padding: 6pt;

        }

       table tr.details td {
            padding-bottom: 20pt;
        }

           .invoice-box table tr.item td{
            border: 1px solid #ddd;
        }

        table tr.b_class td{
            border-bottom: 1px solid #ddd;
        }

       table tr.b_class.last td{
            border-bottom: none;
        }

        table tr.total td:nth-child(4) {
            border-top: 2px solid #fff;
            font-weight: bold;
        }

        .myco {
            width: 400pt;
        }

        .myco2 {
            width: 300pt;
        }

        .myw {
            width: 240pt;
            font-size: 14pt;
            line-height: 14pt;

        }

        .mfill {
            background-color: #eee;
        }

         .descr {
            font-size: 10pt;
            color: #515151;
        }

        .tax {
            font-size: 10px;
            color: #515151;
        }

        .t_center {
            text-align: right;

        }
        .party {
        border: #ccc 1px solid;
        }


    </style>

</head>
<body>   
    <div class='row'>
        <div class='col-md-12'>   
            <h1>E-Commerce Business Trader</h1> 
            <table  class='plist' border='1' cellpadding='0' cellspacing='0'>
                <tr class='heading'>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Passport</th>
                    <th>Contact No</th>
                    <th>Tracking Id</th>
                    <th>Email</th>
                    <th>Amount</th>
                    <th>Advance Pay</th>
                    <th>Due Pay</th>
                </tr>";
    include('database.php');
    $count = 1;
    $select = "SELECT * FROM traders WHERE date BETWEEN '" . $_GET['from'] . "' AND  '" . $_GET['to'] . "'";
    $result = mysqli_query($link, $select);
    if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
$html.="<tr>
            <th>$count</th>
            <td>".$row['name']."</td>
            <td>".$row['passport_no']."</td>
            <td>".$row['contact_no']."</td>
            <td>".$row['tracking_id']."</td>
            <td>".$row['email']."</td>
            <td>".$row['total_payment']."</td>
            <td>".$row['advance_payment']."</td>
            <td>".$row['due_payment']."</td>
        </tr>";
    $count++;
}}
$html .="</table>           
        </div>
    </div>
</body>
</html>";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
ob_end_clean();

$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
exit(0);
?>