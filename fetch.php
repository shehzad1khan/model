<?php 
include('database.php');

    if(isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM traders  WHERE id = '$id'";
       $result = mysqli_query($link, $query);
       $row = mysqli_fetch_array($result);
       echo json_encode($row);
    }
    
    if(isset($_GET['view-id'])){
        $id = $_GET['view-id'];
        $query = "SELECT * FROM traders WHERE id = '$id'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        
        $html ='<tr><th>Name:</th><td>'.$row['name'].'</td></tr><tr><th>Passport No:</th> <td>'.$row['passport_no'].'</td></tr><tr><th>Contact No:</th><td>'.$row['contact_no'].'</td></tr><tr><th>Email:</th><td>'.$row['email'].'</td></tr><tr> <th>Total Payment:</th><td>'.$row['total_payment'].'</td></tr><tr><th>Advance Payment:</th><td>'.$row['advance_payment'].'</td></tr><tr><th>Due Payment:</th> <td>'.$row['due_payment'].'</td><tr><th>Tracking Id:</th><td>'.$row['tracking_id'].'</td></tr></tr>';
        echo $html;
    }

    if(isset($_GET['attachment']))
    {
        $html = '';
        $id = $_GET['attachment'];
        $query = "SELECT * from files where trader_id = '$id'";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
            $html .='<tr><td colspan="2"><a href="db_images/'.$row['file'].'" target="_blank">'.$row['file'].'</a></td></tr>       
                     ';
        }
        echo $html;
    }


    if(isset($_GET['search'])){
      $fromdate = $_GET['from'];
      $todate = $_GET['to'];
      $query = "SELECT * FROM traders WHERE date BETWEEN '" . $fromdate . "' AND  '" . $todate . "'
      ORDER by id DESC";
      $result = mysqli_query($link, $query);
      $row = mysqli_fetch_assoc($result);
      echo '<tr><th>Name:</th><td>'.$row['name'].'</td></tr><tr><th>Passport No:</th> <td>s</td></tr><tr><th>Contact No:</th><td>a</td></tr><tr><th>Email:</th><td>b</td></tr><tr> <th>Total Payment:</th><td>c</td></tr><tr><th>Advance Payment:</th><td>d</td></tr><tr><th>Due Payment:</th> <td>f</td><tr><th>Tracking Id:</th><td>g</td></tr></tr>';
  }

    if(isset($_GET['view-list'])){
        // fetch records
         $sql = "SELECT * FROM `traders` ORDER BY `id` DESC";
         $result = mysqli_query($link, $sql);

         while($row = mysqli_fetch_assoc($result)) {
            
            
             // Update Button
            $updateButton = '<a href="#" data-id="'.$row['id'].'" class="edit-data"><i class="bi bi-pencil-square text-info"></i></a>';
            
            // Delete Button
            $deleteButton = '<a href="delete.php? id='.$row['id'].'" data-id="'.$row['id'].'"><i class="bi bi-trash3-fill text-danger"></i></a>';

            // View Button
            $viewButton = '<a href="#" class="view-data" data-id="'.$row['id'].'"><i class="bi bi-eye-fill text-success"></i></a>';
            // attachment Button
            $imageButton = '<a href="#" class="attachment-data" data-id="'.$row['id'].'"><i class="bi bi-images text-info"></i></a>';

            $action = $updateButton." ".$deleteButton." ".$viewButton." ".$imageButton;
            $array[] = array(
               "id" => $row['id'],
               "name" => $row['name'],
               "passport_no" => $row['passport_no'],
               "contact_no" => $row['contact_no'],
               "total_payment" => $row['total_payment'],
               "advance_payment" => $row['advance_payment'],
               "due_payment" => $row['due_payment'],
               "tracking_id" => $row['tracking_id'],
               "action" => $action
             );
         }

         $dataset = array(
            "echo" => 1,
            "totalrecords" => count($array),
            "totaldisplayrecords" => count($array),
            "data" => $array
         );
            ## Response
 

         echo json_encode($dataset);
    }

   //  if(isset($_POST['report'])){
   //       $fromdate = $_POST['from'];
   //       $todate = $_POST['to'];
   //       $fromdate=date_create($fromdate);
   //       $fromdate=date_format($fromdate,"d-m-Y");
        
   //       $todate=date_create($todate);
   //       $todate = date_format($todate,"d-m-Y");
   //       $query = "SELECT * FROM traders WHERE date BETWEEN '" . $fromdate . "' AND  '" . $todate . "'
   //       ORDER by id DESC";
   //       $result = mysqli_query($link, $query);
   //       while ($row = mysqli_fetch_array($result)){
   //          echo "<tr><td>".$row['id']."</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";

   //       }
   //  }

    if(isset($_POST['from'], $_POST['to']))
    {
      $output = '';
       $select = "SELECT * FROM traders WHERE date BETWEEN '" . $_POST['from'] . "' AND  '" . $_POST['to'] . "'";
         $result = mysqli_query($link, $select);
         $output .= '<table class="table table-info table-striped table-hover">
         <thead>
           <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Passport</th>
            <th scope="col">Contact</th>
            <th scope="col">Total Pay</th>
            <th scope="col">Advance Pay</th>
            <th scope="col">Due Pay</th>
            <th scope="col">Track Id</th>
            <th scope="col">Date</th>
           </tr>
         </thead>
         <tbody class="table-info">
         ';
         if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                  $output .= '
                  <tr>
                  <td>'.$row['id'].'</td>
                  <td>'.$row['name'].'</td>
                  <td>'.$row['passport_no'].'</td>
                  <td>'.$row['contact_no'].'</td>
                  <td>'.$row['total_payment'].'</td>
                  <td>'.$row['advance_payment'].'</td>
                  <td>'.$row['due_payment'].'</td>
                  <td>'.$row['tracking_id'].'</td>
                  <td>'.$row['date'].'</td>
                  </tr>
                  ';           
            }            
         }
         else{
            $output .= '<tr>
                          <td colspan="12" class="text-center">No Data Found</td>                         
                        </tr>
                        ';
            }
         $output .= '</tbody> </table>';
         echo $output;         
    }
?>