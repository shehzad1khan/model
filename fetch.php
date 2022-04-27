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
?>