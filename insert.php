<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

 if(isset($_POST['action'])){   
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $passport = mysqli_real_escape_string($link, $_POST['passport']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    $total = mysqli_real_escape_string($link, $_POST['total']);
    $advance = mysqli_real_escape_string($link, $_POST['advance']);
    $due = mysqli_real_escape_string($link, $_POST['due']);
    $tracking = mysqli_real_escape_string($link, $_POST['tracking']);
    $email = mysqli_real_escape_string($link, $_POST['email']);

    if($_POST['action'] == 'insert'){ 
        $user_id = $_SESSION['userid'];      
        $date = date('d-m-Y');
        $insert = "INSERT INTO traders (name, passport_no, contact_no, total_payment, advance_payment, due_payment, tracking_id, email,date,user_id) VALUES ('$name', '$passport', '$contact', '$total', '$advance', '$due', '$tracking', '$email', '$date','$user_id')";
        $result = mysqli_query($link, $insert);
        echo $insert;
        die();
        if($result){
            header("location: table.php?record=inserted");
        }
    }
    elseif($_POST['action'] == 'update'){
        $id = $_POST['id'];
        $update = "UPDATE traders SET name = '$name', passport_no = '$passport', contact_no = '$contact', total_payment = '$total', advance_payment = '$advance', due_payment = '$due', tracking_id = '$tracking', email = '$email' WHERE id = '$id'";
        $result = mysqli_query($link, $update);
        if($result){
            header("location: table.php?record=updated");
        }
    }

}
?>