<?php
session_start();
include('database.php');

 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql1 = "DELETE FROM traders WHERE id = '$id'";
    $query1 = mysqli_query($link, $sql1) or die(mysqli_error($link));
    if($query1){
      $_SESSION['flash_message'] = "File Deleted...";
      $_SESSION['flash_message_type'] = "error";
      echo "<script>window.open('list.php','_self')</script>";
    }
 }

 if(isset($_GET['file_id'])){
    $id = $_GET['file_id'];
    
    $sql = "SELECT * FROM files WHERE id = '$id'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
      $row = mysqli_fetch_array($query);
      $file_to_delete = 'db_images/'.$row['file'];
  
      unlink($file_to_delete);
      $sql = "DELETE FROM files WHERE id = '$id'";
      $query = mysqli_query($link, $sql) or die(mysqli_error($link));
      if($query){
          $_SESSION['flash_message'] = "File deleted successfuly...";
          $_SESSION['flash_message_type'] = "error";   
      }
    }
    else
    {
      echo "Some Error!";
    }

    
    
 }
?>