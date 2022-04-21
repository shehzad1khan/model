<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

    if(isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM traders WHERE id = '$id'";
       $result = mysqli_query($link, $query);
       $row = mysqli_fetch_array($result);
       echo json_encode($row);

    //    $name = $_GET['name'];
    //    $passport_no = $_GET['passport_no'];
    //    $contact_no = $_GET['contact_no'];
    //    $total_payment = $_GET['total_payment'];
    //    $advance_payment = $_GET['advance_payment'];
    //    $due_payment = $_GET['due_payment'];
    //    $tracking_id = $_GET['tracking_id'];
    //    $email = $_GET['email'];

    // $update = "UPDATE traders SET name = '$name', passport_no = '$passport_no', contact_no = '$contact_no', total_payment = '$total_payment', advance_payment = '$advance_payment', due_payment = '$due_payment', tracking_id = '$tracking_id', email = '$email' WHERE id = '$id'";
    // $result = mysqli_query($link, $update);

    // if($result){
    //     header("location: table.php?record=updated");
    // }

    }
    if(isset($_GET['view-id'])){
        $id = $_GET['view-id'];
        $query = "SELECT * FROM traders WHERE id = '$id'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        echo '<tr> <th>Name:</th><td>'.$row['name'].'</td> </tr> <tr> <th>Passport No:</th> <td>'.$row['passport_no'].'</td> </tr> <tr> <th>Contact No:</th> <td>'.$row['contact_no'].'</td> </tr> <tr> <th>Email:</th> <td>'.$row['email'].'</td> </tr> <tr> <th>Total Payment:</th> <td>'.$row['total_payment'].'</td> </tr> <tr> <th>Advance Payment:</th> <td>'.$row['advance_payment'].'</td> </tr> <tr> <th>Due Payment:</th> <td>'.$row['due_payment'].'</td> </tr> <tr> <th>Tracking Id:</th> <td>'.$row['tracking_id'].'</td> </tr>';
    }
?>