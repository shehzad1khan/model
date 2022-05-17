<?php 
session_start();
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

    foreach($_FILES['image']['name'] as $key => $val) {
       $target = "db_images/".basename($_FILES['image']['name'][$key]);
        $img = $_FILES['image']['name'][$key];
        $img_tmp = $_FILES['image']['tmp_name'][$key];
        move_uploaded_file($_FILES['image']['tmp_name'][$key], $target.$val);
     
    }
    if($_POST['action'] == 'insert'){ 
        
        $user_id = $_SESSION['userid'];      
        $date = date('Y-m-d');
        $insert = "INSERT INTO traders (name, passport_no, contact_no, total_payment, advance_payment, due_payment, tracking_id, email, image,date,user_id) VALUES ('$name', '$passport', '$contact', '$total', '$advance', '$due', '$tracking', '$email', '$img', '$date','$user_id')";
        $result2 = mysqli_query($link, $insert);
        

             
        $trader_id = mysqli_insert_id($link);    
        $insert = "INSERT INTO `files`(`file`, `trader_id`) VALUES ('$img','$trader_id')";
        
        $result = mysqli_query($link, $insert);
        move_uploaded_file($_FILES['image']['tmp_name'][$key], $target.$val);
        if($result2){
            header("location:list.php?record=inserted");
        }
    }
    elseif($_POST['action'] == 'update'){
        $id = $_POST['id'];
        $update = "UPDATE traders SET name = '$name', passport_no = '$passport', contact_no = '$contact', total_payment = '$total', advance_payment = '$advance', due_payment = '$due', tracking_id = '$tracking', email = '$email', image = '$img' WHERE id = '$id'";
        $result = mysqli_query($link, $update);
        if($result){
            header("location:list.php?record=updated");
        }
    }

}

?>