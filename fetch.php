<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

    if(isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM traders WHERE id = '$id'";
       $result = mysqli_query($link, $query);
       $row = mysqli_fetch_array($result);
       echo json_encode($row);
    }
    
    if(isset($_GET['view-id'])){
        $id = $_GET['view-id'];
        $query = "SELECT * FROM traders WHERE id = '$id'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        echo '<tr> <th>Name:</th><td>'.$row['name'].'</td> </tr> <tr> <th>Passport No:</th> <td>'.$row['passport_no'].'</td> </tr> <tr> <th>Contact No:</th> <td>'.$row['contact_no'].'</td> </tr> <tr> <th>Email:</th> <td>'.$row['email'].'</td> </tr> <tr> <th>Total Payment:</th> <td>'.$row['total_payment'].'</td> </tr> <tr> <th>Advance Payment:</th> <td>'.$row['advance_payment'].'</td> </tr> <tr> <th>Due Payment:</th> <td>'.$row['due_payment'].'</td> </tr> <tr> <th>Tracking Id:</th> <td>'.$row['tracking_id'].'</td> </tr>';
    }

    if(isset($_GET['view-list'])){
        // fetch records
         $sql = "select * from traders";
         $result = mysqli_query($link, $sql);

         while($row = mysqli_fetch_assoc($result)) {
            
            
             // Update Button
            $updateButton = '<a href="#" data-id="'.$row['id'].'" class="edit-data"><i class="bi bi-pencil-square text-info"></i></a>';
            
            // Delete Button
            $deleteButton = '<a href="delete.php?id='.$row['id'].'" data-id="'.$row['id'].'"><i class="bi bi-trash3-fill text-danger"></i></a>';

            $action = $updateButton." ".$deleteButton;
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