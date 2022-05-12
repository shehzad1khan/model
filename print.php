<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print PDF</title>

    <style>
        table{                     
            border: 1px solid black; 
            margin-left: 40%;          
        }
        h1{
            text-align: center;
        }
        th {
          background-color: gray;
          color: white;
        }
        th, td {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }
         tr:hover {background-color: coral;
        }

    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-12">
            <table>
            <h1>Print Invoice</h1>
                <thead>
                   <?php
                     $link = mysqli_connect("localhost", "root", "", "e-commerce");
                     $query = "SELECT * FROM traders where id = '12'";
                     $result = mysqli_query($link, $query);
                     $row = mysqli_fetch_array($result);
                     $rowcount = mysqli_num_rows($result);
                     if($rowcount > 0){?>
                    
                    <tr><th scope='col'>S.No</th>  <td><?php echo $row['id']?></td></tr> <tr><th scope='col'>Name</th>  <td><?php echo $row['name']?></td></tr>
                     <tr><th scope='col'>Passport</th>  <td><?php echo $row['passport_no']?></td></tr> <tr><th scope='col'>Contact</th>  <td><?php echo $row['contact_no']?></td></tr> 
                     <tr><th scope='col'>Total Pay</th>  <td><?php echo $row['total_payment']?></td></tr> 
                     <tr><th scope='col'>Advance Pay</th>  <td><?php echo $row['advance_payment']?></td></tr> 
                     <tr><th scope='col'>Due Pay</th>  <td><?php echo $row['due_payment']?></td></tr> 
                 <tr><th scope='col'>Tracking Id</th>  <td><?php echo $row['tracking_id']?></td></tr>
                     <tr><th scope='col'>Date</th><td><?php echo $row['date']?></td> </tr>  
                     
                        <?php 
                        }
                        else
                        {
                            echo "No Data Found";
                        }?>               
                </thead>
            </table>
        </div>
    </div>
    
</body>
</html>











<!-- <!doctype html>
<html>
<head>
<meta charset='utf-8'>
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

<div class='invoice-box'>


    <br>

    <br/>
    <table class='plist' border='1' cellpadding='0' cellspacing='0'>


        <tr class='heading'>
        <thead>
        <!-- <?php 
        // $link = mysqli_connect("localhost", "root", "", "e-commerce");
        // $query = "SELECT * FROM traders";
        //     $result = mysqli_query($link, $query);
        //     $row = mysqli_fetch_array($result);
        //         echo "<tr><th scope='col'>S.No</th>  <td>".$row['id']."</td></tr>
        //         <tr><th scope='col'>Name</th>  <td>".$row['name']."</td></tr>
        //          <tr><th scope='col'>Passport</th> <td>".$row['passport_no']."</td></tr>
        //          <tr><th scope='col'>Contact</th> <td>". $row['contact_no']."</td></tr>
        //          <tr><th scope='col'>Total Pay</th> <td>".$row['total_payment']."</td></tr>
        //          <tr><th scope='col'>Advance Pay</th><td></td>".$row['advance_payment']."</td></tr>
        //          <tr><th scope='col'>Due Pay</th> <td>".$row['due_payment']."</td></tr>
        //         <tr><th scope='col'>Track Id</th> <td>".$row['tracking_id']."</td></tr>
        //          <tr><th scope='col'>Date</th> <td>".$row['date']."</td> </tr>";
                 ?> -->
              </thead>
        </tr>

        

    </table>
    <br>
 
</div>
</body>
</html> 