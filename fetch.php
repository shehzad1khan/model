<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

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
        $row = mysqli_fetch_assoc($result);
        echo '<tr><th>Name:</th><td>'.$row['name'].'</td></tr><tr><th>Passport No:</th> <td>s</td></tr><tr><th>Contact No:</th><td>a</td></tr><tr><th>Email:</th><td>b</td></tr><tr> <th>Total Payment:</th><td>c</td></tr><tr><th>Advance Payment:</th><td>d</td></tr><tr><th>Due Payment:</th> <td>f</td><tr><th>Tracking Id:</th><td>g</td></tr></tr>';
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
         $sql = "select * from traders";
         $result = mysqli_query($link, $sql);

         while($row = mysqli_fetch_assoc($result)) {
            
            
             // Update Button
            $updateButton = '<a href="#" data-id="'.$row['id'].'" class="edit-data"><i class="bi bi-pencil-square text-info"></i></a>';
            
            // Delete Button
            $deleteButton = '<a href="../delete.php? id='.$row['id'].'" data-id="'.$row['id'].'"><i class="bi bi-trash3-fill text-danger"></i></a>';

            // View Button
            $viewButton = '<a href="#" class="view-data" data-id="'.$row['id'].'"><i class="bi bi-eye-fill text-success"></i></a>';

            $action = $updateButton." ".$deleteButton." ".$viewButton;
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
                  <tr>'.$row['id'].'</tr>
                  <tr>'.$row['name'].'</tr>
                  <tr>'.$row['passport_no'].'</tr>
                  <tr>'.$row['contact_no'].'</tr>
                  <tr>'.$row['total_payment'].'</tr>
                  <tr>'.$row['advance_payment'].'</tr>
                  <tr>'.$row['due_payment'].'</tr>
                  <tr>'.$row['tracking_id'].'</tr>
                  <tr>'.$row['date'].'</tr>
                  ';           
            }            
         }
         else{
            $output .= '<tr>
                          <td colspan="5">No Data Found</td>
                        </tr>
                        ';
            }
         $output .= '</tbody> </table>';
         echo $output;         
    }
?>