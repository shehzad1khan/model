

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
    require 'dompdf/vendor/autoload.php';
    require_once 'dompdf/autoload.inc.php';

    use Dompdf\Dompdf; 
 
$dompdf = new Dompdf();

//$page = file_get_contents("./print.php");

$dompdf->loadHtml($html);
 
$dompdf->setPaper('A4', 'portrait'); 
 
$dompdf->render(); 
 
$dompdf->stream("codexworld", array("Attachment" => 0));

?>  


<!-- https://www.youtube.com/watch?v=cIhGXoHHsF8 -->