<?php 

include('database.php');

 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM traders WHERE id = '$id'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
        // header("location:list.php?record=deleted");
         echo "<script>window.open('list.php?record=deleted','_self')</script>";
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
      }
    }
    else
    {
      echo "Some Error!";
    }

    
    
 }
?>