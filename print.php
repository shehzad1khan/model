

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
        <table>      
                <?php                  
                     $link = mysqli_connect("localhost", "root", "", "e-commerce");
                     $query = "SELECT * FROM traders where id = '10'";
                     $result = mysqli_query($link, $query);
                     $row = mysqli_fetch_array($result);
                     $rowcount = mysqli_num_rows($result);
                     if($rowcount > 0){ ?>               
                    <tr>
                   <tr><th>S.No</th><td><?php echo $row["id"]?></td></tr><tr><th>Name</th><td><?php echo $row["name"]?></td></tr>
                   <tr><th>Passport</th><td><?php echo $row["passport_no"]?></td></tr><tr><th>Contact</th><td><?php echo $row["contact_no"]?></td></tr> <tr><th>Total Pay</th><td><?php echo $row["total_payment"]?></td></tr> 
                   <tr><th>Advance Pay</th><td><?php echo $row["advance_payment"]?></td></tr> 
                   <tr><th>Due Pay</th><td><?php echo $row["due_payment"]?></td></tr> 
                   <tr><th>Tracking Id</th><td><?php echo $row["tracking_id"]?></td></tr>
                   <tr><th>Date</th><td><?php echo $row["date"]?></td></tr></tr>             
                        
                 <?php }   ?>              
                 
            </table>           
        </div>
    </div>
    
</body>
</html>  
