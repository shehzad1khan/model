<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <div class="row">
        <div class="col-md-12">   
            <h1>Print Invoice</h1> 
            <table>
                <tr>
                    <th>S.No</th>
                    <th>S.No</th>
                    <th>S.No</th>
                    <th>S.No</th>
                </tr>
                <?php
                    include('database.php');
                    <!-- // WHERE date BETWEEN '" . $_GET['from'] . "' AND  '" . $_GET['to'] . "' -->
                    $test = 'soem wordk';
                    $select = "SELECT * FROM traders";
                    $result = mysqli_query($link, $select);
                    if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$test.'</td>
                    <td>1</td>
                    <td>1</td>
                </tr>';
                 } }
                  ?>                  
            </table>           
        </div>
    </div>
</body>
</html>  
