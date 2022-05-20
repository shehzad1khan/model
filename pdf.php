

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>

    <style>
        table, th, td {
            border: 1px solid black;
          
        }
        th, td {
            padding: 5px;
            text-align: left;
        }

        .table-info {
            width: 100%;
        }
    </style>

</head>
<body>   
       
         <div class="row">
         <div class="col-md-12">   
        <h1>Print Invoice</h1>
        <?php
        $html = ''; 
        $html .= '<table> ';     
                                  
                     include('database.php');
                     $query = "SELECT * FROM traders where id = '10'";
                     $result = mysqli_query($link, $query);
                     $row = mysqli_fetch_array($result);
                     $rowcount = mysqli_num_rows($result);
                     if($rowcount > 0){ ?>
                  <?php                   
                    $html .= '<tr>
                   <tr><th>S.No</th><td>'.$row["id"].'</td></tr><tr><th>Name</th><td>'.$row["name"].'</td></tr>
                   <tr><th>Passport</th><td>'.$row["passport_no"].'</td></tr><tr><th>Contact</th><td>'.$row["contact_no"].'</td></tr> <tr><th>Total Pay</th><td>'.$row["total_payment"].'</td></tr> 
                   <tr><th>Advance Pay</th><td>'.$row["advance_payment"].'</td></tr> 
                   <tr><th>Due Pay</th><td>'.$row["due_payment"].'</td></tr> 
                   <tr><th>Tracking Id</th><td>'.$row["tracking_id"].'</td></tr>
                   <tr><th>Date</th><td>'.$row["date"].'</td></tr></tr>  ';?>           
                        
                 <?php }               
                 
            $html .= '</table>';
            echo $html; ?>           
        </div>
    </div>
    
</body>
</html>  



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
        #certificatrediv > div{margin:0 auto !important;}
        table, th, td {
            border: 1px solid black;
          
        }
        th, td {
            padding: 5px;
            text-align: left;
        }

        .table-info {
            width: 100%;
        }
    </style>

</head>
<body>   
    <div class='row'>
        <div class='col-md-12'>   
            <h1>Print Invoice</h1> 
            <table>
                <tr>
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
$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
exit(0);
?>