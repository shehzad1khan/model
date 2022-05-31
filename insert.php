<?php 
include('database.php');

session_start();
if(!isset($_SESSION['userid']))
header('location:login.php?session=unset');

 if(isset($_POST['action'])){
  
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $passport = mysqli_real_escape_string($link, $_POST['passport']);
    $contact = mysqli_real_escape_string($link, $_POST['contact']);
    $total = mysqli_real_escape_string($link, $_POST['total']);
    $advance = mysqli_real_escape_string($link, $_POST['advance']);
    $due = mysqli_real_escape_string($link, $_POST['due']);
    $tracking = mysqli_real_escape_string($link, $_POST['tracking']);

    if($_POST['action'] == 'insert'){ 
        
        $user_id = $_SESSION['userid'];      
        $date = date('Y-m-d');
        $insert = "INSERT INTO traders (name, passport_no, contact_no, total_payment, advance_payment, due_payment, tracking_id,date,user_id) VALUES ('$name', '$passport', '$contact', '$total', '$advance', '$due', '$tracking', '$date','$user_id')";
        $result2 = mysqli_query($link, $insert);
             
        $trader_id = mysqli_insert_id($link);

            // File upload configuration 
            $targetDir = "db_images/"; 
            $allowTypes = array('jpg','png','jpeg','gif'); 
             
            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
            $fileNames = array_filter($_FILES['image']['name']); 
            if(!empty($fileNames)){ 
                foreach($_FILES['image']['name'] as $key=>$val){ 
                    // File upload path 
                    $fileName = basename($_FILES['image']['name'][$key]); 
                    $targetFilePath = $targetDir . $fileName; 
                     
                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        // Upload file to server 
                        if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                            // Image db insert sql 
                            $insertValuesSQL .= "('".$fileName."', '".$trader_id."'),"; 
                        }else{ 
                            $errorUpload .= $_FILES['image']['name'][$key].' | '; 
                        } 
                }  
            }
            if(!empty($insertValuesSQL)){ 
                $insertValuesSQL = trim($insertValuesSQL, ','); 
                // Insert image file name into database 
                $insert = "INSERT INTO `files`(`file`, `trader_id`)  VALUES $insertValuesSQL";
                $result = mysqli_query($link, $insert); 
            }else{ 
                $statusMsg = "Upload failed! ".$errorMsg; 
            }

        if($result2){
            // header("location:list.php?record=inserted");
            $_SESSION['flash_message'] = "File inserted successfuly...";
            $_SESSION['flash_message_type'] = "success";
            echo "<script>window.open('list.php','_self')</script>";
        }
    }
    elseif($_POST['action'] == 'update'){
        $id = $_POST['id'];
        $update = "UPDATE traders SET name = '$name', passport_no = '$passport', contact_no = '$contact', total_payment = '$total', advance_payment = '$advance', due_payment = '$due', tracking_id = '$tracking' WHERE id = '$id'";
        $result = mysqli_query($link, $update);
        if($result){
            $_SESSION['flash_message'] = "File Updated successfuly...";
            $_SESSION['flash_message_type'] = "info";
            echo "<script>window.open('list.php','_self')</script>";
        }
    }

}

if(isset($_POST['file']))
{
    $trader_id = $_POST['trader_id'];
    // File upload configuration 
    $targetDir = "db_images/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
        
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['image']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['image']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['image']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
                
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                // Upload file to server 
                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "('".$fileName."', '".$trader_id."'),"; 
                }else{ 
                    $errorUpload .= $_FILES['image']['name'][$key].' | '; 
                } 
        }  
    }
    if(!empty($insertValuesSQL)){ 
        $insertValuesSQL = trim($insertValuesSQL, ','); 
        // Insert image file name into database 
        $insert = "INSERT INTO `files`(`file`, `trader_id`)  VALUES $insertValuesSQL";
        $result = mysqli_query($link, $insert); 
    }else{ 
        $statusMsg = "Upload failed! ".$errorMsg; 
    }
    if($result){
            $_SESSION['flash_message'] = "New file added successfuly...";
            $_SESSION['flash_message_type'] = "success";
            echo "<script>window.open('list.php','_self')</script>";
    }
}

?>